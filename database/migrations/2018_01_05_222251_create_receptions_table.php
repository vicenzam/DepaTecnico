<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReceptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receptions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('client_id')->unsigned();
            $table->integer('technical_id')->unsigned();

            $table->date('fecharecepcion');
            $table->text('problema');
            $table->text('equipo')->nullable();
            $table->text('observacion')->nullable();

            $table->enum('estado',['INGRESADO', 'REVISION', 'ENTREGADO'])->dafault('INGRESADO');

            $table->timestamps();

            //Relaciones
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
            $table->foreign('technical_id')->references('id')->on('technicals')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('receptions');
    }
}
