<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    use HasFactory;

    protected $fillable = [
        'placa',
        'marca_modelo',
        'cor',
        'ano_fabricacao',
        'ano_modelo',
        'cilindrada',
        'combustivel',
        'km'
    ];
}
