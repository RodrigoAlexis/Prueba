<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Empresa
 * 
 * @property int $id
 * @property string $nombre
 * @property string $siglas
 * 
 * @property Collection|Poliza[] $polizas
 * @property Collection|TelClieEmp[] $tel_clie_emps
 *
 * @package App\Models
 */
class Empresa extends Model
{
	protected $table = 'empresa';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		'siglas'
	];

	public function polizas()
	{
		return $this->hasMany(Poliza::class, 'empresa');
	}

	public function tel_clie_emps()
	{
		return $this->hasMany(TelClieEmp::class, 'empresa');
	}
}
