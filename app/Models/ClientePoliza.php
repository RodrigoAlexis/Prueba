<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ClientePoliza
 * 
 * @property int $id
 * @property int|null $cliente
 * @property int|null $poliza
 * 
 *
 * @package App\Models
 */
class ClientePoliza extends Model
{
	protected $table = 'cliente_poliza';
	public $timestamps = false;

	protected $casts = [
		'cliente' => 'int',
		'poliza' => 'int'
	];

	protected $fillable = [
		'cliente',
		'poliza'
	];

	public function cliente()
	{
		return $this->belongsTo(Cliente::class, 'cliente');
	}

	public function poliza()
	{
		return $this->belongsTo(Poliza::class, 'poliza');
	}
}
