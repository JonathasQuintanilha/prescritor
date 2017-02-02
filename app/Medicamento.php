<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Medicamento extends Model
{
	protected $fillable = [
	
		'nome',
		'miligramas',
		'uso_id',
		'administracao',
		'controlado'
	
	];

	public $timestamps = false;

	public function uso(){
        return $this->belongsTo('App\Uso');
    }

    public function paciente()
    {
    return $this->belongsToMany('App\Paciente','medicamentos_para_pacientes', 'medicamentos_id', 'pacientes_id');
    }



    
    
}
