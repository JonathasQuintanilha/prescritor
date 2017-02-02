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
@if(count($medicamentos) < 1)
<div class="jumbotron">
	<h1>Olá, {{Auth::user()->name}}</h1>
	<p>Você não possui nenhum MEDICAMENTO cadastradO</p>
	<p><a class="btn btn-primary btn-lg" href="{{ route('medicamento.create') }}" role="button">Clique aqui para Adicionar o primeiro</a></p>
</div>
@else
 
<table id="tabelas" class="table table-bordered table-striped" cellspacing="0" width="100%">
	<thead>
		<tr>
			<th>Nome e Mlinigramas</th>
			<th>Uso</th>
			
			<th>Tipo de receituário</th>
			<th>Ações</th>
		</tr>
	</thead>
	<tbody>
		@foreach( $medicamentos as $m)
		<tr>
			<td>{{$m->nome }} {{ $m->miligramas > 0 ? $m->miligramas.' mg' : '' }}</td>
			<td>{{$m->uso->nome}} </td>
			<td>{{$m->administracao === 1 ? 'controlado' : 'comum'}} </td>
			
			<td width="1%" nowrap>
				<a alt="Editar" class="btn btn-default" href="{{ route('medicamento.edit', $m->id)}}" role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
				
				
				
				
				<button alt="Deletar" type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal{{$m->id}}">
				<i class="fa fa-trash-o" aria-hidden="true"></i>
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

	{{-- {!! $medicamentos->links() !!} --}}

@endif
@stop