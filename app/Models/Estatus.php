<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Estatus
 * 
 * @property int $id
 * @property string $nombre
 * @property string|null $comentario
 * 
 * @property Collection|Cliente[] $clientes
 * @property Collection|Poliza[] $polizas
 *
 * @package App\Models
 */
class Estatus extends Model
{
	protected $table = 'estatus';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		'comentario'
	];

	public function clientes()
	{
		return $this->hasMany(Cliente::class, 'estatus');
	}

	public function polizas()
	{
		return $this->hasMany(Poliza::class, 'estatus');
	}
}
