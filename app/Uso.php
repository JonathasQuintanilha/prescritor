<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uso extends Model
{
    function medicamento(){
    	return $this->hasMany('App\Medicamento');
    }
}
