<?php

namespace App\Http\Controllers;

use App\Models\Veiculo;
use Illuminate\Http\Request;

class VeiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $veiculos = Veiculo::all()->sortByDesc("id");
        return view('veiculo.home_veiculo', compact('veiculos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('veiculo.cadastrar_veiculo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'placa' => 'required',
            'marca_modelo' => 'required',
        ]);

        Veiculo::create($request->all());

        return redirect()->route('veiculos.index')
            ->with('success', 'Veículo cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Veiculo  $veiculo
     * @return \Illuminate\Http\Response
     */
    public function show(Veiculo $veiculo)
    {
        return view('veiculo.ver_veiculo', compact('veiculo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Veiculo  $veiculo
     * @return \Illuminate\Http\Response
     */
    public function edit(Veiculo $veiculo)
    {
        return view('veiculo.editar_veiculo', compact('veiculo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Veiculo  $veiculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Veiculo $veiculo)
    {
        $request->validate([
            'placa' => 'required',
            'marca_modelo' => 'required',
        ]);

        $veiculo->update($request->all());

        //Redirecionamento
        return redirect()->route('veiculos.index')
            ->with('success', 'Veículo editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Veiculo  $veiculo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Veiculo $veiculo)
    {
        $veiculo->delete();

        return redirect()->route('veiculos.index')
            ->with('success', 'Veículo excluido com sucesso!');
    }
}
