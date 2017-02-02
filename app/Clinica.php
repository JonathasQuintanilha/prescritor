<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Clinica extends Model
{
    protected $fillable = [
    'users_id',
    'nome',
    'estado',
    'cep',
    'logradouro',
    'numero',
    'telefone1',
    'telefone2',
    'email',
    'logo',
    'bairro',
    'cidade'

    ];

    public $timestamps = false;

   public function paciente()
   {
   return $this->hasMany('App\Paciente');
   }
}
