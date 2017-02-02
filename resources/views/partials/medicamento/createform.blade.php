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
 	<option value="false">
 			Escolha um tipo de uso
 	</option>
      @foreach($usosSelect as $usos)
      <option value="{{$usos->id}}">{{$usos->nome}}</option>
      @endforeach
    </select>	
</div>
<div class="form-group col-md-6">
 	{!! Form::label('administracao', 'Administração', ['class' => 'control-label']) !!}	
	{!! Form::text('administracao', null, ['class' => 'form-control', 'placeholder' => 'Ex: 1 comprimido por dia']) !!}
</div>

<hr>
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">Medicamento controlado?</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="radios-0">
      <input type="radio" name="radios" id="radios-0" value="1" {{-- checked="checked" --}}>
      sim
    </label> 
    <label class="radio-inline" for="radios-1">
      <input type="radio" name="radios" id="radios-1" value="0">
      não
    </label> 
    
  </div>
</div>




<div class="form-group col-md-12">
	{!! Form::submit('Enviar', ['class' => 'btn btn-primary col-md-12']) !!}
</div>
