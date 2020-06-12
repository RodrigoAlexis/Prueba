<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CuentaCliente
 * 
 * @property int $id
 * @property int|null $cliente
 * @property int|null $cuenta_bancaria
 * 
 * @property CuentaBancarium $cuenta_bancarium
 *
 * @package App\Models
 */
class CuentaCliente extends Model
{
	protected $table = 'cuenta_cliente';
	public $timestamps = false;

	protected $casts = [
		'cliente' => 'int',
		'cuenta_bancaria' => 'int'
	];

	protected $fillable = [
		'cliente',
		'cuenta_bancaria'
	];

	public function cliente()
	{
		return $this->belongsTo(Cliente::class, 'cliente');
	}

	public function cuenta_bancarium()
	{
		return $this->belongsTo(CuentaBancarium::class, 'cuenta_bancaria');
	}
}
