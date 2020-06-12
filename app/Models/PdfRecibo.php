<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PdfRecibo
 * 
 * @property int $id
 * @property string|null $nombre
 * @property string|null $pdf_ruta
 * 
 * @property Collection|Pago[] $pagos
 *
 * @package App\Models
 */
class PdfRecibo extends Model
{
	protected $table = 'pdf_recibo';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		'pdf_ruta'
	];

	public function pagos()
	{
		return $this->hasMany(Pago::class, 'pdf_recibo');
	}
}
