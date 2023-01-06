@extends('layouts.master')
@section('conteudo')

<div class="container p-2">

    <form name="cadastrar" method="Post" action="{{ route('veiculos.update', $veiculo->id) }}">
        @csrf
        @method('PUT')

        <div class="row">

            <div class="col-12 col-sm-12 p-3">
                <h2>Editar Veículo</h2>
            </div>

            <div class="col-6 col-sm-4 p-3">
                <label for="nome">Proprietário: <sup class="text-danger">*</sup></label>
                <input type="text" name="proprietario" id="proprietario" value="<?= (isset($veiculo['proprietario'])) ? $veiculo['proprietario'] : "" ?>" class="form-control">
            </div>
            <div class="col-6 col-sm-4 p-3">
                <label for="nome">Telefone: <sup class="text-danger">*</sup></label>
                <input type="tel" maxlength="11" name="telefone" id="telefone" value="<?= (isset($veiculo['telefone'])) ? $veiculo['telefone'] : "" ?>" class="form-control">
            </div>
            <div class="col-6 col-sm-4 p-3">
                <label for="nome">Placa: <sup class="text-danger">*</sup></label>
                <input type="text" maxlength="7" name="placa" placeholder="Ex.: AAA9B99" id="placa" value="<?= (isset($veiculo['placa'])) ? $veiculo['placa'] : "" ?>" class="form-control">
            </div>
            <div class="col-6 col-sm-4 p-3">
                <label for="nome">Marca/Modelo <sup class="text-danger"></sup></label>
                <input type="text" name="marca_modelo" id="marca_modelo" value="<?= (isset($veiculo['marca_modelo'])) ? $veiculo['marca_modelo'] : "" ?>" class="form-control">
            </div>
            <div class="col-6 col-sm-4 p-3">
                <label for="nome">Cor: <sup class="text-danger"></sup></label>
                <input type="text" name="cor" id="cor" value="<?= (isset($veiculo['cor'])) ? $veiculo['cor'] : "" ?>" class="form-control">
            </div>
            <div class="col-6 col-sm-3 p-3">
                <label for="nome">Km: <sup class="text-danger"></sup></label>
                <input type="tel" maxlength="6" name="km" id="km" value="<?= (isset($veiculo['km'])) ? $veiculo['km'] : "" ?>" class="form-control">
            </div>

            <div class="col-4 col-sm-3 p-3">
                <label for="nome">Ano/Fabricação: <sup class="text-danger"></sup></label>
                <input type="tel" maxlength="4" name="ano_fabricacao" id="ano_fabricacao" value="<?= (isset($veiculo['ano_fabricacao'])) ? $veiculo['ano_fabricacao'] : "" ?>" class="form-control">
            </div>
            <div class="col-4 col-sm-3 p-3">
                <label for="nome">Ano/Modelo: <sup class="text-danger"></sup></label>
                <input type="tel" maxlength="4" name="ano_modelo" id="ano_modelo" value="<?= (isset($veiculo['ano_modelo'])) ? $veiculo['ano_modelo'] : "" ?>" class="form-control">
            </div>
            <div class="col-4 col-sm-3 p-3">
                <label for="nome">Cilindrada: <sup class="text-danger"></sup></label>
                <input type="tel" maxlength="4" name="cilindrada" id="cilindrada" value="<?= (isset($veiculo['cilindrada'])) ? $veiculo['cilindrada'] : "" ?>" class="form-control">
            </div>
            <div class="col-6 col-sm-3 p-3">
                <label for="nome">Combustível: <sup class="text-danger"></sup></label>
                <select name="combustivel" id="combustivel" value="" class="form-control">
                    <option selected=""><?= (isset($veiculo['combustivel'])) ? $veiculo['combustivel'] : "" ?></option>
                    <option value="">--Selecione--</option>
                    <option value="Álcool">Álcool</option>
                    <option value="Gasolina">Gasolina</option>
                    <option value="Flex">Flex</option>
                    <option value="GNV-Álcool">GNV-Álcool</option>
                    <option value="GNV-Gasolina">GNV-Gasolina</option>
                    <option value="Tetrafuel">Tetrafuel</option>
                    <option value="Diesel">Diesel</option>
                    <option value="Elétrico">Elétrico</option>
                </select>
            </div>
            <div class="col-6 col-sm-12 p-3">
                <label for="nome">Irregularidade ou Serviço solicitado: <sup class="text-danger"></sup></label>
                <textarea name="irreg_serv" id="irreg_serv" class="form-control"><?= (isset($veiculo['irreg_serv'])) ? $veiculo['irreg_serv'] : "" ?></textarea>
            </div>

            <div class="btn-toolbar p-3">

                <div class="col-md-4">
                    <input type="submit" value="Editar" class="btn btn-primary btn-lg">
                </div>

            </div>

        </div>

    </form>

</div>

@endsection
