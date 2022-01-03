<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreaprobadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preaprobados', function (Blueprint $table) {
            $table->id();
            $table->string('Donde_vivir');
            $table->string('Presupues_mens');
            $table->string('Decidido_inm');
            $table->string('nombre_completo');
            $table->string('correo');
            $table->string('celular');
            $table->string('rfc');
            $table->date('fecha_nacimiento');
            $table->string('genero');
            $table->string('estado_civil');
            $table->string('escolaridad');
            $table->string('n_personas');
            $table->string('situacion_lab');
            $table->string('nomb_empre');
            $table->string('antiguedad_empre');
            $table->string('cargo_empresa');
            $table->string('fuente_ingreso');
            $table->string('ing_men_principal');
            $table->string('otros_ingresos');
            $table->string('gastos_mensual');
            $table->string('observacion');
            $table->string('Estado');
            $table->string('resultado');
            $table->date('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('preaprobados');
    }
}
