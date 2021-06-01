<?php

namespace App\Models;

use CodeIgniter\Database\Database;

class Consultas extends Database
{
    public $db = null;
    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    function seleccionar_tabla($tabla = null, $condicion = null, $orden = '')
    {
        $builder = $this->db->table($tabla);
        $builder->orderBy($orden);
        return  $condicion !== null ? $builder->getWhere($condicion) : $builder->get();
    }
}
