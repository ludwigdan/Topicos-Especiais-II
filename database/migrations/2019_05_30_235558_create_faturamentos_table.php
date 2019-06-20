<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFaturamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faturamentos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('valor');
            $table->integer('estabelecimento_id')->unsigned();
            $table->integer('periodo_id')->unsigned();
            $table->integer('produto_id')->unsigned();
            $table->foreign('estabelecimento_id')->references('id')->on('estabelecimentos');
            $table->foreign('periodo_id')->references('id')->on('periodos');
            $table->foreign('produto_id')->references('id')->on('produtos');
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
        Schema::dropIfExists('faturamentos');
    }
}
