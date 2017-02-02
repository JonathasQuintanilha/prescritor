{{-- <script>window.print();</script> --}}
@extends('layouts.prescricao')
@section('content')


@foreach ($med_receitados->where('controlado', 1) as $control)

		@include('prescricao.includes.controlado');
		@include('prescricao.includes.controlado');

@endforeach

		@include('prescricao.includes.comum');
			
@if ($paciente->atestado === 1)
		
	@include('prescricao.includes.atestado');
	
@endif

@if($paciente->declaracao === 1)

	@include('prescricao.includes.declaracao');

@endif


	




@stop