<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Pago
 * 
 * @property int $id
 * @property Carbon|null $fecha_pago
 * @property float $cantidad
 * @property string|null $estatus
 * @property int|null $pdf_recibo
 * 
 * @property Collection|Poliza[] $polizas
 *
 * @package App\Models
 */
class Pago extends Model
{
	protected $table = 'pago';
	public $timestamps = false;

	protected $casts = [
		'cantidad' => 'float',
		'pdf_recibo' => 'int'
	];

	protected $dates = [
		'fecha_pago'
	];

	protected $fillable = [
		'fecha_pago',
		'cantidad',
		'estatus',
		'pdf_recibo'
	];

	public function pdf_recibo()
	{
		return $this->belongsTo(PdfRecibo::class, 'pdf_recibo');
	}

	public function polizas()
	{
		return $this->belongsToMany(Poliza::class, 'pago_poliza', 'pago', 'poliza')
					->withPivot('id');
	}
}
