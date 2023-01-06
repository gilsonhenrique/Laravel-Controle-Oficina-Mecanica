@extends('layouts.master')

@section('conteudo')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Informações do Veículo</h2>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Placa:</strong>
            {{ $veiculo->placa }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Marca/Modelo:</strong>
            {{ $veiculo->marca_modelo }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Cor:</strong>
            {{ $veiculo->cor }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Ano/Fabricação:</strong>
            {{ $veiculo->ano_fabricacao }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Ano/Modelo:</strong>
            {{ $veiculo->ano_modelo }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Cilindrada:</strong>
            {{ $veiculo->cilindrada }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Combustível:</strong>
            {{ $veiculo->combustivel }}
        </div>
    </div>

    <div class="pull-right mt-3">
        <a class="btn btn-primary" href="{{ route('veiculos.home') }}">Voltar</a>
    </div>

</div>
@endsection