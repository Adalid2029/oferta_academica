<?php defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends PSG_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function verificar_usuario($id_persona = NULL, $controlador = NULL, $funcion = NULL)
    {
        $resultado = NULL;
        if (is_numeric($id_persona)) {
            $this->db->select("*");
            $this->db->from('vista_accesos AS u');
            $this->db->where('id_persona', $id_persona);
            if (!is_null($controlador)) {
                $this->db->where('controlador', $controlador);
            }
            if (!is_null($funcion)) {
                $this->db->where('funcion', $funcion);
            }
            $query = $this->db->get();
            $resultado = (($query->num_rows() >= 1) ? $query->row_array() : NULL);
        }
        return $resultado;
    }

    public function verificar_grupos($id_persona = NULL, $grupos = array())
    {
        $resultado = FALSE;
        if (is_numeric($id_persona)) {
            $this->db->select("*");
            $this->db->from('usuario AS u');
            $this->db->join('grupo_usuario AS gu', 'u.id_usuario = gu.id_persona');
            $this->db->join('grupo AS g', 'g.id_grupo = gu.id_grupo');
            $this->db->where('id_persona', $id_persona);
            $this->db->where_in('nombre_grupo', $grupos);
            $query = $this->db->get();
            $resultado = $query->num_rows() >= 1;
        }
        return $resultado;
    }

    public function enlaces_menu($id_persona = NULL)
    {
        $resultado = NULL;
        if (is_numeric($id_persona)) {
            $this->db->select("id_persona, controlador, funcion, titulo_menu, icono_menu, descripcion, estado_menu, orden");
            $this->db->from('vista_accesos AS u');
            $this->db->where('id_persona', $id_persona);
            $this->db->where("titulo_menu IS NOT NULL");
            $this->db->where("titulo_menu != ''");
            $this->db->where("estado_menu", 'ACTIVO');
            $this->db->order_by('orden');
            $query = $this->db->get();
            $resultado = (($query->num_rows() >= 1) ? $query->result_array() : NULL);
        }
        return $resultado;
    }

    public function autentificar_usuario($usuario = '', $clave = '')
    {
        $this->db->select('id_usuario, nombre_usuario');
        $this->db->from('usuario');
        $this->db->where('nombre_usuario', $usuario);
        $this->db->where('clave_usuario', md5($clave));
        $this->db->where('estado_usuario', 'ACTIVO');
        if ($query = $this->db->get()) {
            if ($query->num_rows() === 1) {
                $usuario = $query->row_array();
                $resultado = $usuario;
            } else {
                $resultado['code'] = 'warning';
                $resultado['message'] = 'Nombre de Usuario o Clave INCORRECTA. Intente nuevamente, por favor.';
            }
        } else {
            $resultado = $this->db->error();
        }
        return $resultado;
    }
}