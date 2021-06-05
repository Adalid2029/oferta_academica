<?php

namespace App\Models;

use CodeIgniter\Model;

class DescripcionPrograma extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'descripcion_programa';
	protected $primaryKey           = 'id_descripcion_programa';

	protected $returnType           = 'array';
	protected $protectFields        = true;
	protected $allowedFields        = [
		'objetivo',
		'contenido_minimo',
		'area_programa',
		'requisitos_inscripcion',
	];
}
