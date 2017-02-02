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
			<h4>ATESTADO MÉDICO</h4>
		</div>
	
			
			

		
		<div class="conteudo" >
		<p>
			ATESTO que o segurado <strong>{{$paciente->nome}}</strong> portador da carteira profissional nº______, Série________, necessita de {{$paciente->dias}}

			(

			) de afastamento do trabalho, a partir desta data, por motivo de doença.
		</p>
			
			
		</div>


</page>