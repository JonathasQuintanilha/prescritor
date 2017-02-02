<div class="form-group col-md-12">
 	{!! Form::label( 'nome','Nome da clínica',  ['class' => 'control-label']) !!}	
	{!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>
<hr>
<div class="form-group col-md-6">
 	{!! Form::label('logradouro', 'Logradouro',  ['class' => 'control-label']) !!}	
	{!! Form::text('logradouro', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-md-2">
 	{!! Form::label('numero', 'Número', ['class' => 'control-label']) !!}	
	{!! Form::text('numero', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-md-4">
 	{!! Form::label('bairro', 'Bairro', ['class' => 'control-label']) !!}	
	{!! Form::text('bairro', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-md-6">
 	{!! Form::label('cidade', 'Cidade', ['class' => 'control-label']) !!}	
	{!! Form::text('cidade', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-md-2">
 	{!! Form::label('Estado', 'estado', ['class' => 'control-label']) !!}
 	{!! Form::select('estado', $estadosSelect, null, ['class' => 'form-control']); !!}	
</div>
<div class="form-group col-md-4">
 	{!! Form::label('cep', 'Cep', ['class' => 'control-label']) !!}	
	{!! Form::text('cep', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-md-3">
 	{!! Form::label('telefone1', 'Tel 1', ['class' => 'control-label']) !!}	
	{!! Form::text('telefone1', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-md-3">
 	{!! Form::label('telefone2', 'Tel 2', ['class' => 'control-label']) !!}	
	{!! Form::text('telefone2', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-md-6">
 	{!! Form::label('email', 'Email da Clínica', ['class' => 'control-label']) !!}	
	{!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-md-6">
 	{!! Form::label('logo', 'URL da logo', ['class' => 'control-label']) !!}	
	{!! Form::file('logo', null, ['class' => 'btn btn-default btn-file']); !!}
</div>

@if($clinicas->logo !== NULL)

<div class="form-group col-md-12">
	{!! Form::label('logo', 'Logo atual', ['class' => 'control-label']) !!}	
	<span>
	<img name="logo" src="/images/clinicas/{{$clinicas->logo}}" class="img-responsive card content" alt="">
	</span>
</div>

@endif

<div class="form-group col-md-12">
	{!! Form::submit('Enviar', ['class' => 'btn btn-primary col-md-12']) !!}
</div>

