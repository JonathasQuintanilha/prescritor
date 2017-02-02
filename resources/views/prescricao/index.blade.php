@extends('layouts.app')
@section('content')
@section('routes_action')Lista de medicamentos  @stop
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

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th>Nome e Mlinigramas</th>
			<th>Uso</th>
			
			<th>Posologia</th>
			<th>Ações</th>
		</tr>
	</thead>
	<tbody>
		@foreach($medicamentos as $m)
		<tr>
			<td>{{$m->nome }} {{ $m->miligramas}} MG</td>
			<td>{{$m->uso->nome}} </td>
			<td>{{$m->administracao}} </td>
			
			<td width="1%" nowrap>
				<a class="btn btn-default" href="{{ route('medicamento.edit', $m->id)}}" role="button">Editar</a>
				
				
				
				
				<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal{{$m->id}}">
				Excluir
				</button>
				
				
			</td>
			
		</tr>


		<!-- Modal -->
		<div class="modal fade" id="myModal{{$m->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Confirmação de exclusão</h4>
					</div>
					<div class="modal-body">
						{!! Form::open(
						[
						'method' => 'DELETE',
						'route' => ['medicamento.destroy', $m->id],
						'onclick' => 'ConfirmDelete()',
						'class' => 'link'
						
						])
						!!}
						<strong>Nome:</strong><span> {{$m->nome}}</span>
						
						
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
						<button type="submit" class="btn btn-danger">Eu realmente quero excluir</button>
						{{ Form::close() }}
					</div>
				</div>
			</div>
		</div>
		@endforeach

		
	</tbody>
</table>
	{!! $medicamentos->links() !!}


@stop