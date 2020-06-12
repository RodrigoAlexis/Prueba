<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 * 
 * @property int $id
 * @property string $user
 * @property string $password
 * 
 * @property Collection|Cliente[] $clientes
 *
 * @package App\Models
 */
class Usuario extends Model
{
	protected $table = 'usuario';
	public $timestamps = false;

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'user',
		'password'
	];

	public function clientes()
	{
		return $this->hasMany(Cliente::class, 'usuario');
	}
}
