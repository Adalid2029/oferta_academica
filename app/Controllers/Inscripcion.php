<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Consultas;

class Inscripcion extends BaseController

{
	public function formulario_carnet($id_publicacion)
	{
		// throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
		$this->data['publicacion_detalle'] =  (new Consultas)->seleccionar_tabla('publicacion', ['id_publicacion' => $id_publicacion])->getRowArray();
		$this->data['publicacion_multimedia'] =  (new Consultas)->seleccionar_tabla('respaldo_multimedia', ['id_publicacion' => $id_publicacion])->getRowArray();
		return $this->templater->view('layout_admin/inscripcion/formulario_carnet', $this->data);
	}

	public function formulario_inscripcion($id_publicacion, $carnet)
	{
		$this->data['publicacion_detalle'] =  (new Consultas)->seleccionar_tabla('publicacion', ['id_publicacion' => $id_publicacion])->getRowArray();
		$this->data['publicacion_multimedia'] =  (new Consultas)->seleccionar_tabla('respaldo_multimedia', ['id_publicacion' => $id_publicacion])->getRowArray();
		$this->data['paises'] = (new Consultas)->seleccionar_tabla('pais')->getResultArray();
		$this->data['ciudades'] = (new Consultas)->seleccionar_tabla('ciudad')->getResultArray();
		return $this->templater->view('layout_admin/inscripcion/formulario_inscripcion', $this->data);
	}

	public function verificar_identidad()
	{
		if ($this->request->isAJAX()) {
			// return var_dump($_REQUEST);
			$ci = $this->request->getPost('ci');
			$id_publicacion = $this->request->getPost('id_publicacion');
			$cis_posibles = [];
			foreach ($this->db->table('principal.psg_persona')->select('ci')->get()->getResultArray() as $key => $value) {
				similar_text($ci, $value['ci'], $p);
				if ($p > 85) {
					$cis_posibles[] =  ['principal.psg_persona', $value['ci']];
				}
			}
			foreach ($this->db->table('pagina_web.psg_persona')->select('ci')->get()->getResultArray() as $key => $value) {
				similar_text($ci, $value['ci'], $p);
				if ($p > 85) {
					$cis_posibles[] = ['pagina_web.psg_persona', $value['ci']];
				}
			}
			return $this->response->setJSON(['redireccionar' => ['url' => "/inscripcion/$id_publicacion/$ci"]]);
		}
	}

	public function verificar_datos_personales($tabla, $condicion, $columnas, $group_by = '', $ordey_by = '', $limit = 0, $offset = 0)
	{
		$this->db->select($columnas);
		$this->db->from($tabla);
		empty($group_by) ?: $this->db->group_by($group_by);
		empty($ordey_by) ?: $this->db->order_by($ordey_by);
		empty($limit) ?: $this->db->limit($limit);
		empty($offset) ?: $this->db->offset($offset);
		foreach ($condicion as $key => $value) {

			if (isset($value['dividir']) && $value['dividir']) {
				$columnas = [];
				foreach (explode(" ", $value['dato']) as $i => $v) {
					if (!empty($v)) $columnas[] = $v;
				}
				switch ($value['expresion']) {
					case 'group_start':
						$this->db->group_start();
						break;
					case 'or_group_start':
						$this->db->or_group_start();
						break;
					case 'not_group_start':
						$this->db->not_group_start();
						break;
					case 'or_not_group_start':
						$this->db->or_not_group_start();
						break;
					default:
						$this->db->group_start();
						break;
				}
				foreach ($this->AllPermutations(($columnas)) as $j => $jq) {;
					$this->db->or_like("concat(" . implode(",' ',", $value['columnas']) . ")", join(' ', $jq));
				}
				$this->db->group_end();
			} else {
				foreach (isset($value['columnas']) ?  $value['columnas'] : [] as $k => $val) {
					switch ($value['expresion']) {
						case 'like':
							$this->db->like($val . '::text', $value['dato'], 'both', false);
							break;
						case 'or_like':
							$this->db->or_like($val . '::text', $value['dato'], 'both', false);
							break;
						case 'not_like':
							$this->db->not_like($val . '::text', $value['dato'], 'both', false);
							break;
						case 'or_not_like':
							$this->db->or_not_like($val . '::text', $value['dato'], 'both', false);
							break;
						case 'where':
							$this->db->where([$val => $value['dato']]);
							break;
						default:
							$this->db->like($val . '::text', $value['dato'], 'both', false);
							break;
					}
				}
			}
		}
		// $this->db->get();
		// return var_dump($this->db->last_query());
		return $this->db->get()->result_array();
	}
	public function AllPermutations($InArray, $InProcessedArray = array())
	{
		$ReturnArray = array();
		foreach ($InArray as $Key => $value) {
			$CopyArray = $InProcessedArray;
			$CopyArray[$Key] = $value;
			$TempArray = array_diff_key($InArray, $CopyArray);
			if (count($TempArray) == 0) {
				$ReturnArray[] = $CopyArray;
			} else {
				$ReturnArray = array_merge($ReturnArray, $this->AllPermutations($TempArray, $CopyArray));
			}
		}
		return $ReturnArray;
	}
}
