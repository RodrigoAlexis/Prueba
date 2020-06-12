<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CondicionCobro
 * 
 * @property int $id
 * @property string $nombre
 * @property string $acronimo
 * 
 * @property Collection|Poliza[] $polizas
 *
 * @package App\Models
 */
class CondicionCobro extends Model
{
	protected $table = 'condicion_cobro';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		'acronimo'
	];

	public function polizas()
	{
		return $this->hasMany(Poliza::class, 'condicion_cobro');
	}
}
