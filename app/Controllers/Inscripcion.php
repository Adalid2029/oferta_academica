<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Consultas;

class Inscripcion extends BaseController

{

	public function formulario($id_publicacion, $carnet = null)
	{
		$this->data['publicacion_detalle'] =  (new Consultas)->seleccionar_tabla('publicacion', ['id_publicacion' => $id_publicacion])->getRowArray();
		$this->data['publicacion_multimedia'] =  (new Consultas)->seleccionar_tabla('respaldo_multimedia', ['id_publicacion' => $id_publicacion])->getRowArray();
		// return var_dump(base_url());
		if ($carnet != null) {
			$this->data['paises'] = (new Consultas)->seleccionar_tabla('pais')->getResultArray();
			$this->data['ciudades'] = (new Consultas)->seleccionar_tabla('ciudad')->getResultArray();
			return $this->templater->view('layout_admin/inscripcion/formulario_inscripcion', $this->data);
		} else {
			return $this->templater->view('layout_admin/inscripcion/formulario_carnet', $this->data);
		}
	}
}
