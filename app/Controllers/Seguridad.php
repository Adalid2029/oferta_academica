<?php defined('BASEPATH') or exit('No direct script access allowed');

class Seguridad extends PSG_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('seguridad_model');
    }

    public function index()
    {
        $this->data['total_posgraduantes'] = $this->seguridad_model->total_posgraduantes();
        $this->data['total_docentes'] = $this->seguridad_model->total_docentes();
        $this->data['total_coordinadores'] = $this->seguridad_model->total_coordinadores();
        $this->data['total_personal'] = $this->seguridad_model->total_personal();
        $this->templater->view_horizontal('seguridad/index', $this->data);
    }

    public function usuarios()
    {
        $this->templater->view_horizontal('seguridad/usuarios', $this->data);
    }

    public function ajax_usuarios()
    {
        if ($this->input->is_ajax_request()) {
            $table = "(SELECT p.id_persona, CONCAT_WS(' ', p.ci, p.expedido) AS ci, CONCAT_WS(' ', p.nombre, p.paterno, p.materno) as nombre_completo, p.fecha_nacimiento, u.nombre_usuario FROM principal.psg_usuario u INNER JOIN principal.psg_persona p ON p.id_persona = u.id_usuario) temp";
            $primaryKey = 'id_persona';
            $columns = array(
                array('dt' => 0, 'db' => 'ci'),
                array('dt' => 1, 'db' => 'nombre_completo'),
                array('dt' => 2, 'db' => 'fecha_nacimiento', 'formatter' => function($v) {
                    return fecha_literal($v, 1);
                }),
                array('dt' => 3, 'db' => 'nombre_usuario'),
                array('dt' => 4, 'db' => 'id_persona', 'formatter' => function($id) {
                    $botones = '<div class="btn-group">';
                    $botones .= '<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Opciones</button><div class="dropdown-menu animated flipInY">';
                    $botones .= '<a class="dropdown-item" href="usuario/modificar/' . $id . '"><i class="fa fa-edit"></i><i class="fa fa-user"></i> Modificar</a>';
                    $botones .= '<a class="dropdown-item" href="usuario/eliminar/' . $id . '"><i class="fa fa-remove"></i><i class="fa fa-user"></i> Eliminar</a>';
                    return $botones . '</div></div>';
                })
            );
            //$where = "UNACCENT(u.nombre_usuario::TEXT) ILIKE UNACCENT('ERIK%')";
            $sql_details = array('driver' => $this->db->dbdriver, 'user' => $this->db->username, 'pass' => $this->db->password, 'db' => $this->db->database, 'host' => $this->db->hostname);
            $this->output->set_content_type('application/json')->set_output(json_encode(SSP::complex($_GET, $sql_details, $table, $primaryKey, $columns, NULL, NULL)));
            return;
        }
    }
}