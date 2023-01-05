@extends('layouts.master')

@section('conteudo')

<div class="container p-2">
    @if ($message = Session::get('success'))
    <div class="alert alert-success text-center">
        <p>{{ $message }}</p>
    </div>
    @endif

    <div class="col-12 col-sm-12 p-3">
        <h2>Listando todos Veículos</h2>
    </div>

    @if (count($veiculos) == 0)

    <p class="alert alert-danger text-center" role="alert">Não existe dados!</p>

    @else

    @foreach($veiculos as $veiculo)
    <p>Placa: {{ $veiculo->placa}}</p>
    <p>Marca/Modelo: {{ $veiculo->marca_modelo}}</p>
    <p>Km: {{ $veiculo->km}}</p>
    <div class="d-flex">

        {{-- Icones CRUD --}}
        <form method="POST" action="{{ route('veiculos.destroy', $veiculo->id) }}">
            @csrf
            @method('DELETE')

            <a href="{{ route('veiculos.show', $veiculo->id) }}"><i class="bi bi-eye-fill" style="margin-left: 10px; color: black"></i></a>

            <a href="{{ route('veiculos.edit', $veiculo->id) }}"><i class="bi bi-pencil-fill" style="margin-left: 10px; color: #f7ad03"></i></a>

            <button type="submit" style="border:none"><span class="bi bi-trash" style="color: red"></span></button>

        </form>
    </div>
    <hr>

    @endforeach

    @endif

    @endsection

</div>
