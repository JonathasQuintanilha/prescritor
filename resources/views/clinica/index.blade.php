@extends('layouts.app')
@section('content')
@section('routes_action')Lista de clínicas  @stop
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
@if(count($clinicas) < 1)
<div class="jumbotron">
	<h1>Olá, {{Auth::user()->name}}</h1>
	<p>Você não possui nenhuma CLÍNICA cadastrada</p>
	<p><a class="btn btn-primary btn-lg " href="{{ route('clinica.create') }}" role="button">Clique aqui para Adicionar a primeira</a></p>
</div>
@else
<table id="tabelas" class="table table-bordered table-striped">
	<thead>
		<tr>
			<th>Nome</th>
			<th>email</th>
			
			<th>Ações</th>
		</tr>
	</thead>
	<tbody>
		@foreach( $clinicas as $c)
		<tr>
			<td>{{$c->nome}}</td>
			<td>{{$c->email}} </td>
			
			<td width="1%" nowrap>
				<a class="btn btn-default" href="{{ route('clinica.edit', $c->id)}}" role="button">Editar</a>
				
				
				
				
				<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal{{$c->id}}">
				Excluir
				</button>
				
				
			</td>
			
		</tr>
		<!-- Modal -->
		<div class="modal fade" id="myModal{{$c->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
						'route' => ['clinica.destroy', $c->id],
						'onclick' => 'ConfirmDelete()',
						'class' => 'link'
						
						])
						!!}
						<strong>Nome:</strong><span> {{$c->nome}}</span>
						
						
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
@endif
@stop