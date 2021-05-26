<?php

namespace App\Models;

use CodeIgniter\Model;

class Respaldomultimedia extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'respaldo_multimedia';
	protected $primaryKey           = 'id_respaldo_multimedia';
	protected $returnType           = 'array';
	protected $protectFields        = true;
	protected $allowedFields        = [
		'id_tipo_respaldo',
		'id_persona_interesado',
		'id_publicacion',
		'id_deposito',
		'id_documento',
		'url',
		'validez',
		'observacion',
		'id_usuario',
		'estado_respaldo'
	];
}
