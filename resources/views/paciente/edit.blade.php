@extends('layouts.app')

@section('content')
@section('routes_action')Editando paciente  @stop

@if(count($errors->all()) > 0)

    <div class="alert alert-danger" role="alert">

        <ul>
            @foreach($errors->all() as $error)

            <li><strong>Ops! </strong>{{ $error }}</li>

            @endforeach
        </ul>
        
    </div>

@endif

@if(Session::has('success'))

    <div class="alert alert-success">{{ Session::get('success') }}</div>

@endif

                    {!! Form::model(
                        $pacientes, 
                            [ 
                                'route' => ['paciente.update', $pacientes->id],
                                'files'=> true
                            ]
                        ) 
                     !!}

                    <input type="hidden" name="_method" value="PUT">
                            
                            @include('partials.paciente.editform')

                    {!! Form::close() !!}
           
@endsection


