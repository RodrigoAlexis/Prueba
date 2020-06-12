<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PdfPoliza
 * 
 * @property int $id
 * @property string|null $nombre
 * @property string|null $pdf_ruta
 * 
 * @property Collection|Poliza[] $polizas
 *
 * @package App\Models
 */
class PdfPoliza extends Model
{
	protected $table = 'pdf_poliza';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		'pdf_ruta'
	];

	public function polizas()
	{
		return $this->hasMany(Poliza::class, 'pdf_poliza');
	}
}
