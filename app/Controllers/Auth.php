<?php defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function login()
    {
        $this->templater->login();
    }

    public function logout()
    {
        $this->session->set_flashdata('success', 'Ha salido correctamente del Sistema.');
        $this->terminar();
    }

    public function terminar($destino = '')
    {
        $this->session->unset_userdata('id');
        redirect(base_url($destino));
    }

    public function autentificar()
    {
        $nombre_usuario = strtoupper(trim($this->input->post('nombre_usuario')));
        $clave_usuario = $this->input->post('clave_usuario');
        $usuario = $this->auth_model->autentificar_usuario($nombre_usuario, $clave_usuario);
        if (isset($usuario['code']) && isset($usuario['message'])) {
            $this->session->set_flashdata($usuario['code'], $usuario['message']);
            $this->terminar('login');
        } else {
            $this->session->set_userdata('id', $this->encryption->encrypt($usuario['id_usuario']));
            $this->session->set_flashdata('success', 'Ha ingresado correctamente al Sistema PSG. ¡Le damos la Bienvenida!');
            redirect(base_url());
        }
    }

    public function expirar()
    {
        $this->templater->expirar();
    }
}