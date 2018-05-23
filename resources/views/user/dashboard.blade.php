@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">PAINEL DO USUÁRIO</div>

                <div class="panel-body">

                  <div class="user-dashboard">
                    <a href="#" class=""><i class="fa fa-user fa-fw"></i>Responsável</a>
                    <a href="#" class=""><i class="fa fa-building fa-fw"></i>Empresa</a>
                    <a href="#" class=""><i class="fa fa-file fa-fw"></i>Orçamentos</a>
                    <a href="#" class=""><i class="fa fa-upload fa-fw"></i>Anexar</a>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
