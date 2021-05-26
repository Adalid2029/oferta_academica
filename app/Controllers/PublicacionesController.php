<?php

namespace App\Controllers;

use App\Models\Publicacion;
use App\Controllers\BaseController;


class PublicacionesController extends BaseController
{


	public $publicacion;
	
	public function __construct()
	{
		parent::__construct();
		$this->publicacion = new Publicacion();
		
	}

	public function index()
	{
		$this->data['titulo'] = 'Lista de publicaciones';
		return $this->templater->view_admin('layout_admin/menus/publicaciones/index', $this->data);
	}

	public function mostrar_detalle()
	{
		$this->data['titulo'] = 'detalle publicacion';
		return $this->templater->view_admin('layout_admin/menus/publicaciones/detalle', $this->data);
	}

	public function crear_publicacion()
	{
		$this->data['titulo'] = 'Crear Publicacion';
		return $this->templater->view_admin('layout_admin/menus/publicaciones/form_crear', $this->data);
	}

	public function guardar_publicacion()
	{
		// $builder = $this->db->table('publicacion');
		// return var_dump($builder->get());
	
		//return var_dump($this->db->query('SELECT * FROM pagina_web.publicacion')->getResultArray());
		//recibir datos
		$data_publicacion = [
			'nombre_programa' => $this->request->getPost('nombre_programa'),
			'modalidad' => $this->request->getPost('modalidad'),
			'grado_academico' => $this->request->getPost('grado_academico'),
			'id_gestion' => $this->request->getPost('id_gestion'),
			'id_gestion' => $this->request->getPost('id_gestion'),
			'id_gestion' => $this->request->getPost('id_gestion'),
			'id_gestion' => $this->request->getPost('id_gestion'),
			'id_gestion' => $this->request->getPost('id_gestion'),
			'id_gestion' => $this->request->getPost('id_gestion'),
			'id_gestion' => $this->request->getPost('id_gestion'),

		];

		if ($this->db->simpleQuery("insert into pagina_web.psg_gestion(id_gestion, gestion, estado_gestion) values(1,'2020', 'PENDIENTE')")) {
			echo "Success!";
		} else {
			echo "Query failed!";
		}
		// echo $this->db->table('pagina_web.gestion')->countAll();
	
	// return var_dump($data_publicacion);
		// $data_descripcion_programa = [
		// 	'contenido_minimo' => $this->request->getPost('contenido_minimo'),
		// ];

		// $builder = $this->db->table('pagina_web.publicacion');
		// $builder->insert($data_publicacion);

	
			
		var_dump($this->publicacion->insert($data_publicacion)) ;
	//$publicacion->insert($data_publicacion) ;
	//$this->publicacion->save($data_publicacion);
		// return $this->response->setJSON(json_encode(array(
		// 	'code' => 200,
		// 	'status' => "success",
		// 	'message' => 'insercion exitosa exitosa',
		// )));
	}

	public function editar_publicacion()
	{

		$this->data['titulo'] = 'Actualizar Publicacion';
		return $this->templater->view_admin('layout_admin/menus/publicaciones/form_editar', $this->data);
	}

	public function actualizar_publicacion()
	{
		//
	}

	public function eliminar_publicacion()
	{
		//
	}
}
