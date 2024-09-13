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
    {/*
        Schema::create('unidades.tipo_unidad', function (Blueprint $table) {
            $table->bigIncrements('tipo_unidad_id');
            $table->string('nombre_tipo_unidad');
            $table->timestamps();
        });

        Schema::create('unidades.estado_unidad', function (Blueprint $table) {
            $table->bigIncrements('estado_unidad_id');
            $table->string('nombre_estado_unidad');
            $table->timestamps();
        });

        Schema::create('unidades.unidad', function (Blueprint $table) {
            $table->uuid('unidad_id')->primary();
            $table->string('unidad_nombre');
            $table->string('unidad_identificacion');
            $table->string('unidad_ubicacion_urbanizacion')->nullable();
            $table->string('unidad_ubicacion_calle')->nullable();
            $table->string('unidad_correo')->nullable();
            $table->string('unidad_telefono_principal')->nullable();
            $table->string('unidad_telefono_secundario')->nullable();
            $table->string('unidad_foto_perfil')->nullable();
            $table->date('unidad_fecha_creacion')->nullable();
            $table->integer('unidad_tipo_id');
            $table->integer('unidad_ubicacion_estado_id');
            $table->integer('unidad_ubicacion_municipio_id');
            $table->integer('unidad_ubicacion_pais_id');
            $table->integer('unidad_ubicacion_parroquia_id');
            $table->integer('unidad_ubicacion_sector_id')->nullable();
            $table->integer('unidad_estado_id');
            $table->timestamps();
            $table->unique('unidad_identificacion');
            $table->foreign('unidad_tipo_id')->references('tipo_unidad_id')->on('unidades.tipo_unidad')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('unidad_estado_id')->references('estado_unidad_id')->on('unidades.estado_unidad')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('unidad_ubicacion_estado_id')->references('estado_id')->on('generico.estado')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('unidad_ubicacion_municipio_id')->references('municipio_id')->on('generico.municipio')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('unidad_ubicacion_pais_id')->references('pais_id')->on('generico.pais')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('unidad_ubicacion_parroquia_id')->references('parroquia_id')->on('generico.parroquia')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('unidad_ubicacion_sector_id')->references('sector_id')->on('generico.sectores')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('unidades.torre', function (Blueprint $table) {
            $table->uuid('torre_id')->primary();
            $table->string('torre_nombre');
            $table->uuid('unidad_id');
            $table->timestamps();
            $table->foreign('unidad_id')->references('unidad_id')->on('unidades.unidad')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('unidades.piso', function (Blueprint $table) {
            $table->uuid('piso_id')->primary();
            $table->string('piso_nombre');
            $table->uuid('torre_id');
            $table->timestamps();
            $table->foreign('torre_id')->references('torre_id')->on('unidades.torre')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('unidades.tipo_espacio', function (Blueprint $table) {
            $table->uuid('tipo_espacio_id')->primary();
            $table->string('tipo_espacio');
            $table->uuid('unidad_id');
            $table->timestamps();
            $table->foreign('unidad_id')->references('unidad_id')->on('unidades.unidad')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('unidades.tipologia_espacio', function (Blueprint $table) {
            $table->uuid('tipologia_espacio_id')->primary();
            $table->string('tipologia_espacio');
            $table->uuid('unidad_id');
            $table->timestamps();
            $table->foreign('unidad_id')->references('unidad_id')->on('unidades.unidad')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('unidades.atributo_tipo_espacio', function (Blueprint $table) {
            $table->uuid('atributo_tipo_espacio_id')->primary();
            $table->string('nombre_atributo_tipo_espacio');
            $table->string('valor_atributo_tipo_espacio');
            $table->string('unidad_valor_atributo_tipo_espacio')->nullable();
            $table->uuid('tipo_espacio_id');
            $table->timestamps();
            $table->foreign('tipo_espacio_id')->references('tipo_espacio_id')->on('unidades.tipo_espacio')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('unidades.espacio', function (Blueprint $table) {
            $table->comment('tabla que contiene las caracteristicas del espacio a registrar');
            $table->uuid('espacio_id')->primary();
            $table->string('espacio_nombre');
            $table->string('espacio_ubicacion')->nullable();
            $table->uuid('tipo_espacio_id');
            $table->uuid('piso_id');
            $table->uuid('torre_id');
            $table->uuid('unidad_id');
            $table->integer('tipologia_espacio_id')->comment('especifica si el espacio es privado o publico');
            $table->timestamps();
            $table->foreign('piso_id')->references('piso_id')->on('unidades.piso')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('torre_id')->references('torre_id')->on('unidades.torre')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('unidad_id')->references('unidad_id')->on('unidades.unidad')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('tipo_espacio_id')->references('tipo_espacio_id')->on('unidades.tipo_espacio')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('tipologia_espacio_id')->references('tipologia_espacio_id')->on('unidades.tipologia_espacio')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('unidades.relacion_unidad_usuario', function (Blueprint $table) {
            $table->uuid('relacion_unidad_usuario_id')->primary();
            $table->uuid('unidad_id');
            $table->integer('usuario_id');
            $table->timestamps();
            $table->unique(['unidad_id','usuario_id']);
            $table->foreign('unidad_id')->references('unidad_id')->on('unidades.unidad')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('usuario_id')->references('id')->on('public.users')->onDelete('cascade')->onUpdate('cascade');
        });
        */
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unidades.tipo_unidad');
        Schema::dropIfExists('unidades.tipo_unidad');
    }
};
