<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pago', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cli_sistema')->unsigned();
            $table->foreign('cli_sistema')->references('id')->on('users')->onDelete('restrict')->onUpdate('cascade');
            $table->integer('cantidad')->unsigned();
            $table->integer('folio_id')->unsigned();
            $table->foreign('folio_id')->references('id')->on('folios')->onDelete('restrict')->onUpdate('cascade');
            $table->string('referencia');
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
        Schema::dropIfExists('pago');
    }
}
