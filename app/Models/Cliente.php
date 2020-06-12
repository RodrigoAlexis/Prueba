<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 * 
 * @property int $id
 * @property string $nombre
 * @property string $ap_paterno
 * @property string $ap_materno
 * @property Carbon $fecha_nacimiento
 * @property string $sexo
 * @property string|null $relacion
 * @property string $acronimo
 * @property int $estatus
 * @property int $contacto
 * @property int|null $usuario
 * 
 * @property Collection|Poliza[] $polizas
 * @property Collection|CuentaCliente[] $cuenta_clientes
 * @property Collection|Pendiente[] $pendientes
 * @property Collection|TelClieEmp[] $tel_clie_emps
 *
 * @package App\Models
 */
class Cliente extends Model
{
	protected $table = 'cliente';
	public $timestamps = false;

	protected $casts = [
		'estatus' => 'int',
		'contacto' => 'int',
		'usuario' => 'int'
	];

	protected $dates = [
		'fecha_nacimiento'
	];

	protected $fillable = [
		'nombre',
		'ap_paterno',
		'ap_materno',
		'fecha_nacimiento',
		'sexo',
		'relacion',
		'acronimo',
		'estatus',
		'contacto',
		'usuario'
	];

	public function estatus()
	{
		return $this->belongsTo(Estatus::class, 'estatus');
	}

	public function contacto()
	{
		return $this->belongsTo(Contacto::class, 'contacto');
	}

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'usuario');
	}

	public function polizas()
	{
		return $this->belongsToMany(Poliza::class, 'cliente_poliza', 'cliente', 'poliza')
					->withPivot('id');
	}

	public function cuenta_clientes()
	{
		return $this->hasMany(CuentaCliente::class, 'cliente');
	}

	public function pendientes()
	{
		return $this->hasMany(Pendiente::class, 'cliente');
	}

	public function tel_clie_emps()
	{
		return $this->hasMany(TelClieEmp::class, 'cliente');
	}
}
