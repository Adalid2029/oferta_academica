<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Principal extends BaseController
{
    public function index()
    {

        $this->data['titulo'] = 'Inicio';
        $this->data['aqui_variable'] = 'variable';
        return     $this->templater->view_admin('layout_admin/index',    $this->data);
    }
    public function inscripcion()
    {
        $this->data["cursos_paralelos"] = "holas";
        return $this->templater->view_form('layout_admin/inscripcion/inscripcion', $this->data);
        // return view('layout/index');
    }

    public function login()
    {
        $this->data["cursos_paralelos"] = "holas";
        return $this->templater->login('login', $this->data);
        // return view('layout/index');
    }
}
