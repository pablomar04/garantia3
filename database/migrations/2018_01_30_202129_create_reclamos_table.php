<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReclamosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reclamos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero');
            $table->integer('orden_id')->unsigned();
            $table->foreign('orden_id')->references('id')->on('ordens');
            $table->text('reclamista');
            $table->date('entrada');
            $table->text('tipo');
            $table->decimal('mo',8,2);
            $table->decimal('material',8,2);
            $table->decimal('moe',8,2);
            $table->decimal('materiale',8,2);
            $table->decimal('total',8,2);
            $table->integer('lote');
            $table->date('fecha_lote');
            $table->text('estado');
            $table->text('observaciones');
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
        Schema::dropIfExists('reclamos');
    }
}
