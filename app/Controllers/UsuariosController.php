<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UsuariosController extends BaseController
{
	public function index()
	{
		$this->data['titulo'] = 'Usuarios';
		return 	$this->templater->view_admin('layout_admin/menus/usuarios/index',	$this->data);
	}
}
