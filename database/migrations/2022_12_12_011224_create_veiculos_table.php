<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculos', function (Blueprint $table) {
            $table->id();
            $table->string('proprietario');
            $table->string('telefone', 11);            
            $table->string('placa', 7);
            $table->string('marca_modelo');
            $table->string('cor');
            $table->integer('ano_fabricacao');
            $table->integer('ano_modelo');
            $table->integer('cilindrada');
            $table->string('combustivel');
            $table->integer('km');
            $table->longText('irreg_serv');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('veiculos');
    }
};
