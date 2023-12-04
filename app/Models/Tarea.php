<?php

namespace App\Models;

use App\Models\Profesional;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tarea extends Model
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

	public function profesionals()
	{
		return $this->hasMany(Profesional::class);
	}

	public function admin()
	{
		return $this->belongsTo(User::class, 'user_id');
	}
}
