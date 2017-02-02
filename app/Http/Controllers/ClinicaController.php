<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\ClinicaFormRequest;
use App\Clinica;
use App\Estado;
use Image;




class ClinicaController extends Controller
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
        $clinicas = Clinica::paginate(6);

        return view('clinica.index')->with(compact('clinicas'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   

       $estadosSelect = Estado::groupBy('abbr')->get(['abbr'])->pluck('abbr', 'abbr');
       $filename = 'default.jpg';
       return view('clinica.create')->with(compact('estadosSelect', 'filename'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClinicaFormRequest $request)
    {   
        


            if($request->hasFile('logo')) {
                $logo = $request->file('logo');

                $filename = time() . '.' . $logo->getClientOriginalExtension();

                $path = public_path('/images/clinicas/'.$filename);
                Image::make($logo
                ->getRealPath())
                ->resize(null, 80, function ($constraint) {$constraint->aspectRatio();})
                ->save($path);

            } else {
                $filename = null;
            }

                $clinica = new Clinica();
                $input = $request->all('');
                $clinica->fill($input);
                $clinica->logo = $filename;
                $clinica->save($input);
                return redirect()->route('clinica.index')->with(['success' => 'Clínica adicionada com sucesso!']);
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


        $estadosSelect = Estado::groupBy('abbr')->get(['abbr'])->pluck('abbr', 'abbr');
        $clinicas = Clinica::find($id);
        return view('clinica.edit')->with(compact('clinicas', 'estadosSelect'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClinicaFormRequest $request, $id)
    {
       $clinica = Clinica::find($id);

        if($request->hasFile('logo')) {

            $logo = $request->file('logo');
            $filename = time() . '.' . $logo->getClientOriginalExtension();
            $path = public_path('/images/clinicas/'.$filename);
            Image::make($logo
                ->getRealPath())
                ->resize(null, 80, function ($constraint) {$constraint->aspectRatio();})
                ->save($path);
        } else {
            $filename = $clinica->logo;
        }

            $input = $request->only(

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
                
            );
            
            $clinica->fill($input);
            $clinica->logo = $filename;
            $clinica->save();
            return redirect()->route('clinica.edit', $id)->with(['success' => 'Edição realizada com sucesso!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clinica = Clinica::find($id);
        $clinica->delete();
        return redirect()->route('clinica.index')->with(['success' => 'Excluido com sucesso!']);

    }
}
