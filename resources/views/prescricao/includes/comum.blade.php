<page size="A4">
	<div class="cabecalho">
		<div class="cabecalholeft">
			<img class="logo" src="/images/clinicas/{{$clinica->logo}}" alt="">
		</div>
		<div class="cabecalhoright">
			<div class="dadosmedico">
				<ul>
					<li><strong>Dr. {{$medico->name}}</strong></li>
					<li>CRM: {{$medico->crm}}</li>
					<li>{{$medico->especialidade}}</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="conteudo">
	
		
<ul>
	@foreach ($med_receitados->groupBy('uso_id') as $key => $meds) {{-- ABRE foreach 1 --}}
	@if (!empty($meds->first()->uso->nome))
		<div class="uso">
	<h1>Uso {{ $meds->first()->uso->nome }}</h1>
	</div>
	@endif
	
	@foreach ($meds as $med) {{-- ABRE  foreach 2 --}}
	@if ($med->controlado === 0)
	
	<p>

		{{-- expr --}}
		<div class="medicamento">
			
			<div class="enumeracao">
				<h2>{{$count_receitados++}}</h2>
			</div>
			<div class="dadosmedicamento">

				<li>{{$med->nome.', '.$med->miligramas.'mg'}}</li>
				<li class="smallitalic">{{$med->administracao}}</li>
				
			</div>
		</div>
		
	</p>
	@endif
	@endforeach {{-- FECHA foreach 2 --}}
	@endforeach {{-- FECHA foreach 1 --}}
	
</ul>
		
		{{-- @include('prescricao.includes.comum') --}}
		<div class="assinatura">
			<ul>
				<li><strong>Dr. {{$medico->name}}</strong></li>
				<li>CRM: {{$medico->crm}}</li>
				<li>{{$medico->especialidade}}</li>
			</ul>
		</div>
	</div>
	<div class="rodape">{{$clinica->logradouro.' '.$clinica->numero.' - '.$clinica->cidade.' - '.$clinica->estado}}</div>
</page>