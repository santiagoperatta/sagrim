<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Punto extends Model
{
    use HasFactory;

	protected $fillable = [
		'expediente',
		'tarea',
		'comitente',
		'ultimo_envio',
		'ultima_correccion',
		'user_id'	
	];

	public function admin(){
		return $this->belongsTo(User::class, 'user_id');
	}
}
