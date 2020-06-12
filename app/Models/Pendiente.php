<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Pendiente
 * 
 * @property int $id
 * @property Carbon $fecha
 * @property string|null $comentario
 * @property Carbon|null $fecha_recordatorio
 * @property int|null $cliente
 * @property int|null $poliza
 * 
 *
 * @package App\Models
 */
class Pendiente extends Model
{
	protected $table = 'pendiente';
	public $timestamps = false;

	protected $casts = [
		'cliente' => 'int',
		'poliza' => 'int'
	];

	protected $dates = [
		'fecha',
		'fecha_recordatorio'
	];

	protected $fillable = [
		'fecha',
		'comentario',
		'fecha_recordatorio',
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
