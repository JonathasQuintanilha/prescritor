<page size="A4">
	<div class="containercontrolado">
		<div class="topo">
			<h4>RECEITUÁRIO CONTROLE ESPECIAL</h4>
		</div>
		<div class="cabecalhocontrol">
			
			<div class="card border left ">
				<div class="headercard">
					INFORMAÇÕES DO EMITENTE
				</div>
				<ul>
					<li class="separator_normal"><strong>Nome Completo:</strong> {{$medico->name}}</li>
					<li class="separator_normal"><strong>CRM:</strong>{{$medico->crm}} <strong>UF:</strong> {{$clinica->estado}} </li>
					<li class="separator_normal"><strong>Endereço Completo:</strong> {{$clinica->logradouro.' '.$clinica->numero.' - '.$clinica->cidade.' - '.$clinica->estado}}</li>
					<li class="separator_normal"><strong>Telefone:</strong> {{$clinica->telefone1}}</li>
				</ul>
			</div>
			<div class="card right">
				<ul>
					<li>1ª VIA FARMÁCIA</li>
					<li>2ª VIA PACIENTE</li>
				</ul>
			</div>
		</div>
		<div class="pauta" >
		{{-- @foreach ($med_receitados->groupBy('uso_id') as $uso => $meds) {{-- ABRE foreach 1 --}}

		
			<ul>
				<li>Paciente: {{$paciente->nome}}</li>
				
				<li>Endereço: {{$paciente->logradouro}}</li>
			</ul>
			<ul>
				<li>Prescrição:</li>
			{{-- @foreach ($med_receitados as $med) 	
			@if ($med->first()->controlado === 1) --}}
				<li>				
					<div class="linha">					
						<div class="esq">{{$control->nome}}: </div> <span class="separador"></span> <div class="direita"> 10mg</div>
					</div>
					<div class="linha">
						<div class="esq italic">{{$control->administracao}}</div>
					</div>
				</li>
			{{-- @endif	
				@endforeach --}}
			</ul>
			
			
			{{-- @endforeach --}}
			
		</div>
		<div class="footercontrolado ">
			<div class="card border left">
				<div class="headercard">
					INFORMAÇÕES DO COMPRADOR
				</div>
				
				<ul>
					<li class="separator_small">Nome: ____________________________________</li>
					<li class="separator_small">__________________________________________</li>
					<li class="separator_small">Indent.: ___.___.___-____  Órg. Emissor: ________</li>
					<li class="separator_small">End.: _____________________________________ </li>
					<li class="separator_small">Cidade.: __________________________ UF.: ____</li>
					<li class="separator_small">Telefone: __________________________________</li>
				</ul>
			</div>
			<div class="card border right">
				<div class="headercard">
					INFORMAÇÕES DO FORNECEDOR
				</div>
				
				<div class="footercard">
					<strong class="topborder">ASSINATURA DO FARMACÊUTICO</strong><br><br> DATA____/____/___
				</div>
				<br>
			</div>
			
			
		</div>
	</div>
</page>