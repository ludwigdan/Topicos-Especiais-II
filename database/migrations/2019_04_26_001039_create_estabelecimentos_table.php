<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstabelecimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estabelecimentos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('razao_social',40);
            $table->string('nome_fantasia',40);
            $table->string('cnpj',14);
            $table->string('cidade',30)->nullable();
            $table->string('bairro',20)->nullable();
            $table->string('rua',50)->nullable();
            $table->integer('numero')->nullable();
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
        Schema::dropIfExists('estabelecimentos');
    }
}
