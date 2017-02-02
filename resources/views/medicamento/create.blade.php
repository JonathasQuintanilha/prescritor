@extends('layouts.app')

@section('content')
@section('routes_action')Adicionando medicamentos  @stop

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
					
		{!! Form::open(
                [ 
                    'route' => ['medicamento.store', null],
                    'mothod' => 'post',
                    'files'=> true
                ]
            ) 
         !!}
                            
                @include('partials.medicamento.createform')

         {!! Form::close() !!}
           
@endsection
