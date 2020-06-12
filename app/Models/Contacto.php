<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Contacto
 * 
 * @property int $id
 * @property string $nombre
 *
 * @package App\Models
 */
class Contacto extends Model
{
	protected $table = 'contactos';
	public $timestamps = false;

	protected $fillable = [
		'nombre'
	];
}
