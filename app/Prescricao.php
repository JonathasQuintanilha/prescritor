<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prescricao extends Model
{
		protected $table = 'prescricoes';
		protected $fillable = [
		
		'id_clinica',
		'id_medicamento',
		'nome',
		'idade',
		'rg',
		'atestado',
		'declaracao'
		
		];

		
   		public $timestamps = false;
}
