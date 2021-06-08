<?php

namespace App\Models;

use CodeIgniter\Database\Database;

class InscripcionModel extends Database
{
    public $db = null;
    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    function inscripcion($condicion = null, $orden = '')
    {
        $builder = $this->db->table('publicacion p')
            ->select('*')
            ->join('inscripcion_online io', 'io.id_publicacion = p.id_publicacion')
            ->join('persona pe', 'pe.id_persona = io.id_persona_interesado')
            ->orderBy($orden);
        return  $condicion !== null ? $builder->getWhere($condicion) : $builder->get();
    }
}
