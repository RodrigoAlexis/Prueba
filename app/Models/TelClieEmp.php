<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TelClieEmp
 * 
 * @property int $id
 * @property int|null $telefono
 * @property int|null $cliente
 * @property int|null $empresa
 * 
 *
 * @package App\Models
 */
class TelClieEmp extends Model
{
	protected $table = 'tel_clie_emp';
	public $timestamps = false;

	protected $casts = [
		'telefono' => 'int',
		'cliente' => 'int',
		'empresa' => 'int'
	];

	protected $fillable = [
		'telefono',
		'cliente',
		'empresa'
	];

	public function telefono()
	{
		return $this->belongsTo(Telefono::class, 'telefono');
	}

	public function cliente()
	{
		return $this->belongsTo(Cliente::class, 'cliente');
	}

	public function empresa()
	{
		return $this->belongsTo(Empresa::class, 'empresa');
	}
}
