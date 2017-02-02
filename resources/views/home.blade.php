@extends('layouts.app')

@section('content')
@section('routes_action')Área de trabalho  @stop

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
                <div class="panel-body">

                

                   <a href="{{ route('clinica.create') }}">Adicionar uma nova clínica</a>
                


                </div>
         
@endsection
