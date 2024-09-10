<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('generico.discapacidad', function (Blueprint $table) {
            $table->bigIncrements('discapacidad_id');
            $table->string('nombre_discapacidad');
            $table->timestamps();
        });


        Schema::create('generico.dominancia', function (Blueprint $table) {
            $table->bigIncrements('dominancia_id');
            $table->string('nombre_dominancia');
            $table->timestamps();
        });


        Schema::create('generico.estado_civil', function (Blueprint $table) {
            $table->bigIncrements('estado_civil_id');
            $table->string('nombre_estado_civil');
            $table->timestamps();
        });


        Schema::create('generico.monedas', function (Blueprint $table) {
            $table->bigIncrements('monedas_id');
            $table->string('nombre_monedas');
            $table->timestamps();
        });


        Schema::create('generico.nacionalidad', function (Blueprint $table) {
            $table->bigIncrements('nacionalidad_id');
            $table->string('nombre_nacionalidad');
            $table->timestamps();
        });


        Schema::create('generico.nivel_instruccion', function (Blueprint $table) {
            $table->bigIncrements('nivel_instruccion_id');
            $table->string('nombre_nivel_instruccion');
            $table->timestamps();
        });


        Schema::create('generico.pais', function (Blueprint $table) {
            $table->bigIncrements('pais_id');
            $table->string('nombre_pais');
            $table->timestamps();
        });


        Schema::create('generico.estado', function (Blueprint $table) {
            $table->bigIncrements('estado_id');
            $table->string('nombre_estado');
            $table->string('nombre_bandera');
            $table->integer('pais_id_id');
            $table->timestamps();
            $table->foreign('pais_id_id')->references('pais_id')->on('generico.pais')->onDelete('cascade')->onUpdate('cascade');
        });



        Schema::create('generico.municipio', function (Blueprint $table) {
            $table->bigIncrements('municipio_id');
            $table->string('nombre_municipio');
            $table->integer('estado_id_id');
            $table->timestamps();
            $table->foreign('estado_id_id')->references('estado_id')->on('generico.estado')->onDelete('cascade')->onUpdate('cascade');
        });



        Schema::create('generico.parroquia', function (Blueprint $table) {
            $table->bigIncrements('parroquia_id');
            $table->string('nombre_parroquia');
            $table->integer('municipio_id_id');
            $table->timestamps();
            $table->foreign('municipio_id_id')->references('municipio_id')->on('generico.municipio')->onDelete('cascade')->onUpdate('cascade');
        });



        Schema::create('generico.sectores', function (Blueprint $table) {
            $table->bigIncrements('sectores_id');
            $table->string('nombre_sectores');
            $table->integer('parroquia_id_id');
            $table->timestamps();
            $table->foreign('parroquia_id_id')->references('parroquia_id')->on('generico.parroquia')->onDelete('cascade')->onUpdate('cascade');
        });



        Schema::create('generico.sexo', function (Blueprint $table) {
            $table->bigIncrements('sexo_id');
            $table->string('nombre_sexo');
            $table->timestamps();
        });


        Schema::create('generico.tipo_identificacion', function (Blueprint $table) {
            $table->bigIncrements('tipo_identificacion_id');
            $table->string('nombre_tipo_identificacion');
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('generico.discapacidad');
        Schema::dropIfExists('generico.dominancia');
        Schema::dropIfExists('generico.estado');
        Schema::dropIfExists('generico.estado_civil');
        Schema::dropIfExists('generico.monedas');
        Schema::dropIfExists('generico.municipio');
        Schema::dropIfExists('generico.nacionalidad');
        Schema::dropIfExists('generico.nivel_instruccion');
        Schema::dropIfExists('generico.pais');
        Schema::dropIfExists('generico.parroquia');
        Schema::dropIfExists('generico.sectores');
        Schema::dropIfExists('generico.sexo');
        Schema::dropIfExists('generico.tipo_identificacion');
    }
};
