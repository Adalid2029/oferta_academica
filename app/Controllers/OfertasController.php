<?php

namespace App\Controllers;

use App\Models\Gestion;
use App\Models\Publicacion;
use App\Controllers\BaseController;
use App\Models\DescripcionPrograma;
use App\Models\PublicacionDescripcion;

class OfertasController extends BaseController
{
	public function index()
	{
		$this->data['programas'] = $this->db->table('publicacion')->orderBy('fecha_fin_publicacion', 'ASC')->get()->getResultArray();
		return $this->templater->view_admin('layout_admin/menus/publicaciones/index',	$this->data);
		// var_dump([];)
	}


	public function crear_publicacion()
	{

		$gestiones_model = new Gestion();

		$this->data['titulo'] = 'Crear Publicacion';
		$this->data['hola'] = 'Hola prueba';


		$this->data['lista_gestiones'] = $gestiones_model->findAll();


		return $this->templater->view_admin('layout_admin/menus/publicaciones/form_crear', $this->data);
	}

	public function guardar_publicacion()
	{
		//var_dump($_REQUEST);
		//RECIBIR DATOS 
		//intanciación de publicación_model
		$publicacion_model = new Publicacion();

		//DATOS PARA LA TABLA PUBLICACION
		$datos_publicacion = [
			'nombre_programa' => $this->request->getPost('nombre_programa'),
			'modalidad' => $this->request->getPost('modalidad'),
			'grado_academico' => $this->request->getPost('grado_academico'),
			'id_gestion' => $this->request->getPost('id_gestion'),
		];

		//DATOS PARA LA TABLA DESCRIPCION PROGRAMA

		$datos_descripcion_programa = [
			'objetivo' => 'objetivo',
			'contenido_minimo' => $this->request->getPost('contenido_minimo'),
			'area_programa' => 'posgrado',
		];



		//INSTANCIAR MODELO PARA LA TABLA DESCRIPCION PROGRAMA

		$descripcion_programa_model = new DescripcionPrograma();
		$id_descripcion_programa = $descripcion_programa_model->insert($datos_descripcion_programa);

		// INSTANCIAR MODELO PARA LA TABLA PUBLICACION


		$id_publicacion = $publicacion_model->insert($datos_publicacion);

		// RECOGER DATOS PARA LA TABLA INTERMEDIA PUBLICACION DESCRIPCION
		$datos_publicacion_descripcion = array(
			'id_publicacion' => $id_publicacion,
			'id_descripcion_programa' => $id_descripcion_programa,
			'estado_publicacion_descripcion' => 'activo'
		);

		// INSTANCIAR MODELO PARA LA TABLA PUBLICACION DESCRIPCION
		$publicacion_descripcion_model = new PublicacionDescripcion();
		$publicacion_descripcion_model->insert($datos_publicacion_descripcion);

		return $this->response->setJSON(json_encode(array(
			'code' => 200,
			'status' => "success",
			'message' => 'Publicacion Guardada Exitosamente',
		)));
	}
}
