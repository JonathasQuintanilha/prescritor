<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\MedicamentosFormRequest;
use App\Medicamento;
use App\Uso;
use Image;




class MedicamentosController extends Controller
{   

    public function __construct()
    {
        $this->middleware('auth');
    }

   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $medicamentos = Medicamento::all();
        return view('medicamento.index')->with(compact('medicamentos', 'results'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   

       $usosSelect = Uso::all();
       return view('medicamento.create')->with(compact('usosSelect'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MedicamentosFormRequest $request)
    {   
      

            $medicamento =  new Medicamento();
            $medicamento->fill($request->all());
            $medicamento->save();
            return redirect()->route('medicamento.index')->with(['success' => 'Clínica adicionada com sucesso!']);
            }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'Exibir Clínica específica';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


        $usosSelect = Uso::all();
        $medicamento = Medicamento::find($id);
        return view('medicamento.edit')->with(compact('medicamento', 'usosSelect'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MedicamentosFormRequest $request, $id)
    {
    $medicamento = Medicamento::find($id);
    $input = $request->only('nome','miligramas','uso_id','administracao','controlado');
    $medicamento->fill($input);
    $medicamento->save();
    return redirect()->route('medicamento.edit', $id)->with(['success' => 'Edição realizada com sucesso!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medicamento = Medicamento::find($id);
        $medicamento->delete();
        return redirect()->route('medicamento.index')->with(['success' => 'Excluido com sucesso!']);

    }
}
