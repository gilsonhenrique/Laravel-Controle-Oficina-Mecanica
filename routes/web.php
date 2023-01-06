<?php

use App\Http\Controllers\VeiculoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Rota inicial da Aplicação
Route::get('/', [VeiculoController::class, 'index'])->name('veiculos.home');
// Rotas de Cadastro de Veiculo
Route::resource('veiculos', VeiculoController::class);