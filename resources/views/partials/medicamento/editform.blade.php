<div class="form-group col-md-12">
 	{!! Form::label( 'nome','Nome do medicamento',  ['class' => 'control-label']) !!}	
	{!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>
<hr>
<div class="form-group col-md-2">
 	{!! Form::label('miligramas', 'Miligramas',  ['class' => 'control-label']) !!}	
	{!! Form::text('miligramas', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-md-4">
 	{!! Form::label('uso', 'Tipo de uso', ['class' => 'control-label']) !!}
 	<select id="uso" name="uso_id" class="form-control">
 	<option value="{{$medicamento->uso_id}}">
 			{{$medicamento->uso->nome}}
 	</option>
      @foreach($usosSelect as $usos)
      <option value="{{$usos->id}}">{{$usos->nome}}</option>
      @endforeach
    </select>	
</div>
<div class="form-group col-md-6">
 	{!! Form::label('administracao', 'Administração', ['class' => 'control-label']) !!}	
	{!! Form::text('administracao', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-md-6">
 	{!! Form::label('controlado', 'É comum ou controlado?', ['class' => 'control-label']) !!}

 	<select id="controlado" name="controlado" class="form-control">
		 
		@if($medicamento->controlado > 0)
			<option value="{{$medicamento->controlado}}" selected="selected">Controlado</option>
			<option value="0">Comum</option>
		@elseif($medicamento->controlado < 1)
			<option value="{{$medicamento->controlado}}" selected="selected">Comum</option>
			<option value="1">Controlado</option>
		@endif
	
    </select>


	{{-- expr --}}


	
</div>



<div class="form-group col-md-12">
	{!! Form::submit('Enviar', ['class' => 'btn btn-primary col-md-12']) !!}
</div>
