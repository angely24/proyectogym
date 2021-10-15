<?php
/*Analísis y Desarrollo de Sistemas de Informción
Ficha: 2252471
Aprendiz: Angely Rojas, Andres Sanchez y Valentina Montenegro*/
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablaclasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tablaclases', function (Blueprint $table) {
            $table->id();
            $table->string('hora');
            $table->string('clase');
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
        Schema::dropIfExists('tablaclases');
    }
}
