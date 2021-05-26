<?php

namespace App\Models;

use CodeIgniter\Model;

class TipoRespaldo extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'tipo_respaldos';
	protected $primaryKey           = 'id_tipo_respaldo';
	protected $returnType           = 'array';
	
	protected $protectFields        = true;
	protected $allowedFields        = [
		'tipo_respaldo',
		'extension_admitida',
		'categoria',
		'estado_tipo_respaldo',


	];


}
