<?php

namespace App\Models;

use CodeIgniter\Model;

class Publicacion extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'publicacion';
	protected $primaryKey           = 'id_publicacion';
	protected $returnType           = 'array';
	protected $protectFields        = true;
	protected $allowedFields        = [
		'id_gestion',
		'id_planificacion_programa',
		'nombre_programa',
		'version',
		'modalidad',
		'grado_academico',
		'sede',
		'monto_matricula',
		'primera_cuota',
		'numero_cuotas',
		'precio_programa',
		'descuento_pago_contado',
		'fecha_fin_inscripcion',
		'fecha_inicio_publicacion',
		'fecha_fin_publicacion',  
		'id_usuario_registro',
		'fecha_registro',
		'fecha_modificacion',
		'id_usuario_modificacion',
		'estado_publicacion',
	];

	// Dates
	// protected $useTimestamps        = true;
	// protected $dateFormat           = 'datetime';
	// protected $createdField         = 'fecha_registro';
	// protected $updatedField         = 'fecha_modificacion';
}
