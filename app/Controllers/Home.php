<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{

		$this->data["cursos_paralelos"] = "holas";
		return $this->templater->view('layout/index', $this->data);
		// return view('layout/index');
	}

	public function visionMision()
	{

		$this->data["cursos_paralelos"] = "holas";
		return $this->templater->view('layout/institucion/mision_vision', $this->data);
		// return view('layout/index');
	}

	public function organizacion()
	{
		$this->data["cursos_paralelos"] = "holas";
		return $this->templater->view('layout/institucion/organizacion', $this->data);
		// return view('layout/index');
	}

	public function actividades()
	{
		$this->data["cursos_paralelos"] = "holas";
		return $this->templater->view('layout/actividades/actividades', $this->data);
		// return view('layout/index');
	}

	public function campus()
	{
		$this->data["cursos_paralelos"] = "holas";
		return $this->templater->view('layout/campus/campus', $this->data);
		// return view('layout/index');
	}


	public function contacto()
	{
		$this->data["cursos_paralelos"] = "holas";
		return $this->templater->view('layout/contacto/contacto', $this->data);
		// return view('layout/index');
	}

	public function registro()
	{
		$this->data["cursos_paralelos"] = "holas";
		return $this->templater->view('layout/registro/registro', $this->data);
		// return view('layout/index');
	}





	public function programasDiplomados()
	{
		$this->data["cursos_paralelos"] = "holas";
		return $this->templater->view('layout/programas/diplomados', $this->data);
		// return view('layout/index');
	}
	public function programasMaestrias()
	{
		$this->data["cursos_paralelos"] = "holas";
		return $this->templater->view('layout/programas/maestrias', $this->data);
		// return view('layout/index');
	}
	public function programasEspecialidades()
	{
		$this->data["cursos_paralelos"] = "holas";
		return $this->templater->view('layout/programas/especialidades', $this->data);
		// return view('layout/index');
	}
	public function programasDoctorados()
	{
		$this->data["cursos_paralelos"] = "holas";
		return $this->templater->view('layout/programas/doctorados', $this->data);
		// return view('layout/index');
	}
	public function programasDetalle()
	{
		$this->data["cursos_paralelos"] = "holas";
		return $this->templater->view('layout/component/detalle_programa', $this->data);
		// return view('layout/index');
	}

	
}
