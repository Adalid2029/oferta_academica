<?php defined('BASEPATH') or exit('No direct script access allowed');

class Usuario extends PSG_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->templater->view('usuario/index', $this->data);
    }
}