<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clinica;
use App\Paciente;
use App\Estado;
use App\Prescricao;
use App\Medicamento;
use App\Uso;
use App\User;
use App\Input;
use PDF;


class PrescricaoController extends Controller
{     
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $clinicas = Clinica::all();
        $medicamentos = Medicamento::all();
        return view('prescricao.create')->with(compact('medicamentos', 'clinicas'));
    }


    public function create()
    {   
        $clinicas = Clinica::all();
        $medicamentos = Medicamento::all();
        $countm = count($medicamentos);
        $estadosSelect = Estado::groupBy('abbr')->get(['abbr'])->pluck('abbr', 'abbr');
        return view('prescricao.create')->with(compact('medicamentos', 'clinicas', 'countm', 'estadosSelect'));
    }

public function store(Request $request)
{
        

$m = $request->get('medicamento'); // array de medicamentos
 


$cm = count($m); // conta o array
// $okatestado = $request->get('atest');  // dá o ok para atestado   
// $okdeclaracao = $request->get('dec'); // dá o ok para a declaração
    
$p = Paciente::create($request->only('nome','idade', 'sexo', 'rg', 'logradouro', 'cidade', 'numero', 'estado', 'atestado', 'clinicas_id', 'declaracao', 'documento', 'entrada', 'saida', 'finalidade'));


for ($i=0; $i < $cm ; $i++) {

         $p->medicamento()->attach($m[$i]);
}

$pacienteid = $p->id;
$pacienteclinica = $p->clinicas_id;

// return('Foi executado');


 return redirect()->route('prescricao.show', $pacienteid)->with(compact('pacienteid','pacienteclinica'));
//return redirect()->route('paciente.edit', $pacienteid)->with(compact('pacienteid','pacienteclinica'));

}

    public function show($id)
    {  
        $paciente     = Paciente::find($id);
        $clinica      = Clinica::find($paciente->clinicas_id);
        $medico       = User::find($clinica->users_id);
        $med_receitados = $paciente->medicamento;       
        $count_receitados = 1;

        ///////////////
        // EXTENSO ////
        ///////////////

        $dias = $paciente->dias;
    
$args = array(
'singular' => ["hora", "dia", "mês", "ano", "decada", "século", "milênio"],
'plural' => ["horas", "dias", "meses", "anos", "decadas", "séculos", "milênios"],
'c' => ["", "cem", "duzentos", "trezentos", "quatrocentos", "quinhentos", "seiscentos", "setecentos", "oitocentos", "novecentos"],
'd' => ["", "dez", "vinte", "trinta", "quarenta", "cinquenta", "sessenta", "setenta", "oitenta", "noventa"],
'd10' => ["dez", "onze", "doze", "treze", "quatorze", "quinze", "dezesseis", "dezesete", "dezoito", "dezenove"],
'u' => ["", "um", "dois", "três", "quatro", "cinco", "seis", "sete", "oito", "nove"]
);

        ///////////////
        ///////////////
        ///////////////

        
       return view('prescricao.show')->with(compact('paciente','clinica','medico','count_receitados', 'med_receitados', 'args', 'dias'));
        
    }





 
    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }





}


