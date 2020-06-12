<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CuentaBancarium
 * 
 * @property int $id
 * @property string|null $num_cuenta
 * @property string|null $fecha_vigencia
 * @property string|null $pin
 * 
 * @property Collection|CuentaCliente[] $cuenta_clientes
 *
 * @package App\Models
 */
class CuentaBancarium extends Model
{
	protected $table = 'cuenta_bancaria';
	public $timestamps = false;

	protected $fillable = [
		'num_cuenta',
		'fecha_vigencia',
		'pin'
	];

	public function cuenta_clientes()
	{
		return $this->hasMany(CuentaCliente::class, 'cuenta_bancaria');
	}
}
