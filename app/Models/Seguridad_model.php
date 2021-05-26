<?php defined('BASEPATH') or exit('No direct script access allowed');

class Seguridad_model extends PSG_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function total_posgraduantes()
    {
        $this->db->from('persona p');
        $this->db->join('posgraduante x', 'x.id_persona = p.id_persona');
        $this->db->where("p.estado_persona <> 'INACTIVO'");
        if (is_integer($query = $this->db->count_all_results())) {
            $resultado = $query;
        } else {
            $resultado = $this->db->error();
        }
        return $resultado;
    }

    public function total_docentes()
    {
        $this->db->from('persona p');
        $this->db->join('docente x', 'x.id_persona = p.id_persona');
        $this->db->where("p.estado_persona <> 'INACTIVO'");
        if (is_integer($query = $this->db->count_all_results())) {
            $resultado = $query;
        } else {
            $resultado = $this->db->error();
        }
        return $resultado;
    }

    public function total_coordinadores()
    {
        $this->db->from('persona p');
        $this->db->join('coordinador x', 'x.id_persona = p.id_persona');
        $this->db->where("p.estado_persona <> 'INACTIVO'");
        if (is_integer($query = $this->db->count_all_results())) {
            $resultado = $query;
        } else {
            $resultado = $this->db->error();
        }
        return $resultado;
    }

    public function total_personal()
    {
        $this->db->from('persona p');
        $this->db->join('personal x', 'x.id_persona = p.id_persona');
        $this->db->where("p.estado_persona <> 'INACTIVO'");
        if (is_integer($query = $this->db->count_all_results())) {
            $resultado = $query;
        } else {
            $resultado = $this->db->error();
        }
        return $resultado;
    }
}