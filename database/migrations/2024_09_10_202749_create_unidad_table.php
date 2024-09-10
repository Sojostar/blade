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
            $table->foreign('unidad_estado')->references('tipo_unidad_id')->on('unidades.tipo_unidad')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('unidad_estado_id')->references('estado_unidad_id')->on('unidades.estado_unidad')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('unidad_ubicacion_estado_id')->references('estado_id')->on('generico.estado')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('unidad_ubicacion_municipio_id')->references('municipio_id')->on('generico.municipio')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('unidad_ubicacion_pais_id')->references('pais_id')->on('generico.pais')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('unidad_ubicacion_parroquia_id')->references('parroquia_id')->on('generico.parroquia')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('unidad_ubicacion_sector_id')->references('sector_id')->on('generico.sectores')->onDelete('cascade')->onUpdate('cascade');
        });
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
