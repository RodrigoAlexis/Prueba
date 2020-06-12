<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MetodoCobro
 * 
 * @property int $id
 * @property string $nombre
 * 
 * @property Collection|Poliza[] $polizas
 *
 * @package App\Models
 */
class MetodoCobro extends Model
{
	protected $table = 'metodo_cobro';
	public $timestamps = false;

	protected $fillable = [
		'nombre'
	];

	public function polizas()
	{
		return $this->hasMany(Poliza::class, 'metodo_cobro');
	}
}
