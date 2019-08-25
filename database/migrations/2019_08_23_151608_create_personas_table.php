<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Seccional');
            $table->string('Fondo');
            $table->string('Genero');
            $table->string('Nombre');
            $table->string('Tipo_ID');
            $table->string('Numero_ID');
            $table->string('PIP/VISA');
            $table->string('Correo');
            $table->bigInteger('Financiacion_Nacional');
            $table->bigInteger('ValorAsumidoHotelesAlimentacion');
            $table->bigInteger('ValorAsumidoInscripciones');
            $table->bigInteger('ValorTiquetes');
            $table->bigInteger('ValorMensualHospedaje');
            $table->bigInteger('ValorTotalAsumido');
            $table->bigInteger('TasaDeCambioFViaje');
            $table->bigInteger('ValorTotalAsumidoUSD');
            $table->bigInteger('Financiacion_Internacional');
            $table->bigInteger('Soporte');
            $table->string('Programa');
            $table->string('Acreditacion');
            $table->string('Institucion');
            $table->string('Vinculacion');
            $table->string('Tipom');
            $table->string('Asist');
            $table->string('Souvenirs');
            $table->string('Categoria');
            $table->string('Modalidad');
            $table->string('O_Movilidad');
            $table->string('Evento');
            $table->string('Pais');
            $table->date('F_Inicio');
            $table->date('F_Fin');
            $table->string('Duracion');
            $table->string('Año');
            $table->text('Observaciones');
            $table->string('Semestre');

            

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
        Schema::dropIfExists('personas');
    }
}
