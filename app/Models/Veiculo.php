<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    use HasFactory;

    protected $fillable = [
        'proprietario',
        'telefone',
        'placa',
        'marca_modelo',
        'cor',
        'km',
        'ano_fabricacao',
        'ano_modelo',
        'cilindrada',
        'combustivel',     
        'irreg_serv'
    ];
}
