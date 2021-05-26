<?php

namespace App\Models;

use CodeIgniter\Model;

class Gestion extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'gestion';
	protected $primaryKey           = 'id_gestion';
	protected $returnType           = 'array';
	protected $protectFields        = true;
	protected $allowedFields        = [

		'gestion',
		'descripcion',
		'estado_gestion',

	];





}
