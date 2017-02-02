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
	
		<div class="topo">
			<h2>Declaração de comparecimento</h2>
		</div>
		
		
		
		
		<div class="conteudo" >
			<p>
			Declaro, para os devidos fins que {{$paciente->sexo === 1 ? 'o Senhor' : 'a Senhora '}} <strong>{{$paciente->nome}}</strong>, portador do documento, <strong>{{$paciente->documento}}</strong>, compareceu na clínica no período de <strong>{{$paciente->entrada}}</strong> às <strong>{{$paciente->saida}}</strong> horas do dia <strong>{{\Carbon\Carbon::today()->format('d/m/Y')}}</strong> com a finalidade de: <strong>{{$paciente->finalidade}}</strong>
			</p>


		<div class="localedata">
			<strong>{{$clinica->cidade}}, {{\Carbon\Carbon::today()->format('d/m/Y')}}</strong>
		</div>
		

		<div class="recepcionista topborder">
			<strong class="small center">Recepcionista</strong>
		</div>


		</div>

		<footer>
			
		</footer>
		
		
</page>