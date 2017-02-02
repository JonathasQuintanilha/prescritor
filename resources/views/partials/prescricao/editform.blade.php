
<div class="form-group col-md-2">
	{!! Form::label( 'sexo','Sexo',  ['class' => 'control-label']) !!}
	<select class="form-control " name="sexo">
		<option value="m">Sr.</option>
		<option value="f">Sra.</option>
	</select>
</div>

<div class="form-group col-md-10">
	{!! Form::label( 'nome','Nome do paciente',  ['class' => 'control-label']) !!}
	{!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>


<div class="form-group col-md-2"> 
	{!! Form::label( 'idade','Idade', ['class' => 'control-label']) !!}
	{!! Form::number('idade', null, ['class' => 'form-control', 'min' =>'0', 'max'=>'150']) !!} 
</div>


<div class="form-group col-md-8"> 
	{!! Form::label( 'rg','RG', ['class' => 'control-label']) !!} 
	{!! Form::text( 'rg', null, ['class' => 'form-control', 'placeholder'=> 'Ex.: 00.000.000-0', 'id' => 'rg', 'onkeypress'=> 'mascara(this, "## ####-####")', 'maxlength'=> '12' ] ) !!} 
</div>


<div class="form-group col-md-9"> 
	{!! Form::label( 'logradouro','Logradouro', ['class' => 'control-label']) !!} 
	{!! Form::text( 'logradouro', null, ['class' => 'form-control', 'placeholder'=> 'Endereço completo'] ) !!} 
</div>



<div class="form-group col-md-8"> 
	{!! Form::label( 'cidade','Cidade', ['class' => 'control-label']) !!} 
	{!! Form::text( 'cidade', null, ['class' => 'form-control', 'placeholder'=> 'Cidade'] ) !!} 
</div>




<div class="form-group col-md-2"> {!! Form::label( 'numero','Nº', ['class' => 'control-label']) !!} {!! Form::text( 'numero', null, ['class' => 'form-control', 'placeholder'=> 'Número da casa'] ) !!} </div>



<div class="form-group col-md-2"> {!! Form::label('Estado', 'estado', ['class' => 'control-label']) !!} {!! Form::select('estado', $estadosSelect, null, ['class' => 'form-control']); !!} </div>



<input name="atestado" type="hidden" value="1"> </div> 
<div class="form-group ">
	<h4><span class="label label-primary"> Atestado </span></h4>
	<input id="atestado" type="checkbox" data-toggle="toggle" data-size="small"  data-style="switch" data-onstyle="info" data-on="Gerar" data-off="Não Gerar" >
</div>





<div class="form-group col-md-5"> 
	{!! Form::label( 'documento','Documento', ['class' => 'control-label']) !!} 
	{!! Form::number('documento', null, ['class' => 'form-control']) !!} 
</div>



<div class="form-group col-md-3"> 
	{!! Form::label( 'entrada','Entrou às:', ['class' => 'control-label ']) !!} 
	{!! Form::text( 'entrada', null, ['class' => 'form-control', 'placeholder'=> '14:00', 'id' => 'entrada', 'onmousehover'=> 'mascara(this, "##:##")', 'maxlength'=> '5' ] ) !!} 
</div>



<div class="form-group col-md-3"> 
	{!! Form::label('saida','Saiu às', ['class' => 'control-label']) !!} 
	{!! Form::text('saida', null, ['class' => 'form-control', 'placeholder'=> '14:00', 'id' => 'saida', 'onmousehover'=> 'mascara(this, "##:##")', 'maxlength'=> '5'] ) !!} 
</div>


<div class="form-group col-md-2"> 
	{!! Form::label( 'dias','Dias', ['class' => 'control-label']) !!} 
	{!! Form::number( 'dias', null, ['class' => 'form-control', 'maxlength'=> '4' ] ) !!} 
</div>




<div class="form-group col-md-9"> 
	{!! Form::label( 'finalidade','Finalidade', ['class' => 'control-label']) !!} 
	{!! Form::text( 'finalidade', null, ['class' => 'form-control', 'placeholder'=> 'Finalidade'] ) !!}
</div>



<input name="declaracao" type="hidden" value="1">
<div class="form-group ">
	<h4><span class="label label-primary">Declaração de comparecimento</span></h4>
	<input id="declaracao" type="checkbox" data-toggle="toggle" data-size="small"  data-style="switch" data-onstyle="info" data-on="Gerar" data-off="Não Gerar"  class="">
</div>




<div class="form-group ">
	{!! Form::label( 'clinica','Em qual clínica?',  ['class' => 'control-label']) !!}
	<select id="clinica" name="clinicas_id" class="form-control">
		@foreach($clinicas as $c)
		<option value="{{$c->id}}"><b>{{$c->nome}}</b></option>
		@endforeach
	</select>
</div>



<div class="form-group col-md-12">
	{!! Form::submit('Enviar', ['class' => 'btn btn-primary col-md-12']) !!}
</div>
