<?php

namespace App\Models;

use CodeIgniter\Model;

class PublicacionDescripcion extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'publicacion_descripcion';
	protected $primaryKey           = 'id_publicacion_descripcion';

	protected $returnType           = 'array';
	protected $protectFields        = true;
	protected $allowedFields        = [

		'id_publicacion',
		'id_descripcion_programa',
		'observacion',
		'estado_publicacion_descripcion',



	];



}
