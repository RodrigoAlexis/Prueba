<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Poliza
 * 
 * @property int $id
 * @property int $ramo
 * @property string $folio
 * @property string|null $tipo
 * @property Carbon $inicio_vigencia
 * @property float $prima_neta
 * @property int $estatus
 * @property int $empresa
 * @property int|null $pdf_poliza
 * @property int|null $metodo_cobro
 * @property int|null $forma_pago
 * @property int|null $condicion_cobro
 * 
 * @property Collection|Cliente[] $clientes
 * @property Collection|Pago[] $pagos
 * @property Collection|Pendiente[] $pendientes
 *
 * @package App\Models
 */
class Poliza extends Model
{
	protected $table = 'poliza';
	public $timestamps = false;

	protected $casts = [
		'ramo' => 'int',
		'prima_neta' => 'float',
		'estatus' => 'int',
		'empresa' => 'int',
		'pdf_poliza' => 'int',
		'metodo_cobro' => 'int',
		'forma_pago' => 'int',
		'condicion_cobro' => 'int'
	];

	protected $dates = [
		'inicio_vigencia'
	];

	protected $fillable = [
		'ramo',
		'folio',
		'tipo',
		'inicio_vigencia',
		'prima_neta',
		'estatus',
		'empresa',
		'pdf_poliza',
		'metodo_cobro',
		'forma_pago',
		'condicion_cobro'
	];

	public function metodo_cobro()
	{
		return $this->belongsTo(MetodoCobro::class, 'metodo_cobro');
	}

	public function forma_pago()
	{
		return $this->belongsTo(FormaPago::class, 'forma_pago');
	}

	public function condicion_cobro()
	{
		return $this->belongsTo(CondicionCobro::class, 'condicion_cobro');
	}

	public function estatus()
	{
		return $this->belongsTo(Estatus::class, 'estatus');
	}

	public function empresa()
	{
		return $this->belongsTo(Empresa::class, 'empresa');
	}

	public function ramo()
	{
		return $this->belongsTo(Ramo::class, 'ramo');
	}

	public function pdf_poliza()
	{
		return $this->belongsTo(PdfPoliza::class, 'pdf_poliza');
	}

	public function clientes()
	{
		return $this->belongsToMany(Cliente::class, 'cliente_poliza', 'poliza', 'cliente')
					->withPivot('id');
	}

	public function pagos()
	{
		return $this->belongsToMany(Pago::class, 'pago_poliza', 'poliza', 'pago')
					->withPivot('id');
	}

	public function pendientes()
	{
		return $this->hasMany(Pendiente::class, 'poliza');
	}
}
