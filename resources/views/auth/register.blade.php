@extends('layouts.app')
@section('routes_action') Cadastrar @stop
@section('content')
<form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="name" class="col-md-4 control-label"><i class="fa fa-venus-mars fa-2x" aria-hidden="true"></i></label>
        <div class="col-md-6">
            <div class="btn-group" id="status" data-toggle="buttons">
                <label class="btn btn-info btn-switch  ">
                    <input type="radio" value="F" name="sexo" checked="checked"><i class="pe-7s-user-female pe-2x"> </i> Dra.</label>
                    <label class="btn btn-info  btn-switch ">
                        <input type="radio" value="M" name="sexo"><i class="pe-7s-user pe-2x"></i> Dr.</label>
                    </div>
                </div>
            </div>
            {{--  <div class="form-group{{ $errors->has('sexo') ? ' has-error' : '' }}">
                <label for="sexo" class="col-md-4 control-label">Você é</label>
                <div class="col-md-6">
                    <input id="sexo" type="checkbox" class="form-control" sexo="sexo" value="{{ old('sexo') }}" required >
                    @if ($errors->has('sexo'))
                    <span class="help-block">
                        <strong>{{ $errors->first('sexo') }}</strong>
                    </span>
                    @endif
                </div>
            </div> --}}
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-md-4 control-label"><i class="fa fa-user fa-2x" aria-hidden="true"></i></label>
                <div class="col-md-6">
                    <input placeholder="Nome completo" id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required >
                    @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('crm') ? ' has-error' : '' }}">
                <label for="crm" class="col-md-4 control-label"><i class="fa fa-user-md fa-2x" aria-hidden="true"></i></label>
                <div class="col-md-4">
                    <input placeholder="CRM" id="crm" type="text" class="form-control" name="crm" value="{{ old('crm') }}" required >
                    @if ($errors->has('crm'))
                    <span class="help-block">
                        <strong>{{ $errors->first('crm') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('cpf') ? ' has-error' : '' }}">
                <label   for="cpf" class="col-md-4 control-label"><i class="fa fa-user-o fa-2x" aria-hidden="true"></i></label>
                <div class="col-md-4">
                    <input  placeholder="CPF" id="cpf" type="text" class="form-control" name="cpf" value="{{ old('cpf') }}" required maxlength="14">
                    @if ($errors->has('cpf'))
                    <span class="help-block">
                        <strong>{{ $errors->first('cpf') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label"><i class="pe-7s-mail pe-2x" aria-hidden="true"></i></label>
                <div class="col-md-6">
                    <input placeholder="E-Mail principal" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                    @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="col-md-4 control-label"><i class="pe-7s-key pe-2x" aria-hidden="true"></i></label>
                <div class="col-md-6">
                    <input placeholder="SENHA" id="password" type="password" class="form-control" name="password" required>
                    @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            
            <div class="form-group">
                <label for="password-confirm" class="col-md-4 control-label"></label>
                <div class="col-md-6">
                    <input placeholder="Repita a senha" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>
            </div>



            <div class="form-group" id="console-event">
                
                <div class="col-md-6 col-md-offset-4 checkbox">
                          <label>
                            <input name="aceitetermo" type="checkbox" value="1" checked>
                            <span class="cr"><i class="cr-icon fa fa-check" aria-hidden="true"></i></span>
                           Aceito os <a href="termosdeservico"> termos de serviço</a>
                          </label>
                        </div>



            </div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                    Cadastre-se
                    </button>
                </div>
            </div>


        </form>
        
        @endsection