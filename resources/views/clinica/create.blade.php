@extends('layouts.app')

@section('content')
@section('routes_action')Criando clínicas  @stop

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
                    'route' => ['clinica.store', null],
                    'mothod' => 'post',
                    'files'=> true
                ]
            ) 
         !!}
                            
                @include('partials.clinica.createform')

         {!! Form::close() !!}
           
@endsection
