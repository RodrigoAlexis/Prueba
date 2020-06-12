<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PagoPoliza
 * 
 * @property int $id
 * @property int $pago
 * @property int $poliza
 * 
 *
 * @package App\Models
 */
class PagoPoliza extends Model
{
	protected $table = 'pago_poliza';
	public $timestamps = false;

	protected $casts = [
		'pago' => 'int',
		'poliza' => 'int'
	];

	protected $fillable = [
		'pago',
		'poliza'
	];

	public function pago()
	{
		return $this->belongsTo(Pago::class, 'pago');
	}

	public function poliza()
	{
		return $this->belongsTo(Poliza::class, 'poliza');
	}
}
