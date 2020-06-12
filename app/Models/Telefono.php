<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Telefono
 * 
 * @property int $id
 * @property string $tipo
 * @property string $numero
 * 
 * @property Collection|TelClieEmp[] $tel_clie_emps
 *
 * @package App\Models
 */
class Telefono extends Model
{
	protected $table = 'telefono';
	public $timestamps = false;

	protected $fillable = [
		'tipo',
		'numero'
	];

	public function tel_clie_emps()
	{
		return $this->hasMany(TelClieEmp::class, 'telefono');
	}
}
