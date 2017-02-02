@extends('layouts.app')

@section('content')
@section('routes_action')Editando clínicas  @stop

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
                        $clinicas, 
                            [ 
                                'route' => ['clinica.update', $clinicas->id],
                                'files'=> true
                            ]
                        ) 
                     !!}

                    <input type="hidden" name="_method" value="PUT">
                            
                            @include('partials.clinica.editform')

                    {!! Form::close() !!}
           
@endsection
