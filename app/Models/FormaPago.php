<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FormaPago
 * 
 * @property int $id
 * @property string $nombre
 * @property int $tiempo
 * 
 * @property Collection|Poliza[] $polizas
 *
 * @package App\Models
 */
class FormaPago extends Model
{
	protected $table = 'forma_pago';
	public $timestamps = false;

	protected $casts = [
		'tiempo' => 'int'
	];

	protected $fillable = [
		'nombre',
		'tiempo'
	];

	public function polizas()
	{
		return $this->hasMany(Poliza::class, 'forma_pago');
	}
}
