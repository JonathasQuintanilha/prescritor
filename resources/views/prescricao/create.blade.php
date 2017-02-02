@extends('layouts.app')

@section('content')
@section('routes_action')Prescrever  @stop

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
                    'route' => ['prescricao.store', null],
                    'method' => 'post'
                ]
            ) 
         !!}
                            
                @include('partials.prescricao.createform')

         {!! Form::close() !!}
           
@endsection
