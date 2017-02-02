<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
   		public $timestamps = false;
   		protected $fillable = ['nome', 'idade', 'sexo', 'rg', 'logradouro','cidade', 'numero', 'estado', 'atestado', 'declaracao', 'clinicas_id', 'documento', 'entrada', 'saida', 'finalidade'];




public function medicamento() {
return $this->belongsToMany('App\Medicamento','medicamentos_para_pacientes', 'pacientes_id', 'medicamentos_id');
}

public function clinica(){
    return $this->belongsTo('App\Clinica');
}

}



  