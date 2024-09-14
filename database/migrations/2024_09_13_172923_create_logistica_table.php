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

        Schema::create('logistica.tipo_activo', function (Blueprint $table) {
            $table->bigIncrements('tipo_activo_id');
            $table->string('tipo_activo_nombre');
            $table->uuid('unidad_id');
            $table->timestamps();
            $table->foreign('unidad_id')->references('unidad_id')->on('unidades.unidad')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('logistica.estado_activo', function (Blueprint $table) {
            $table->bigIncrements('estado_activo_id');
            $table->string('estado_activo_nombre');
            $table->uuid('unidad_id');
            $table->timestamps();
            $table->foreign('unidad_id')->references('unidad_id')->on('unidades.unidad')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('logistica.activo', function (Blueprint $table) {
            $table->uuid('activo_id')->primary();
            $table->string('activo_nombre');
            $table->decimal('activo_monto_adquisicion',18,3);
            $table->integer('activo_moneda_monto_adquisicion');
            $table->string('activo_descripcion');
            $table->integer('estado_activo_id');
            $table->integer('tipo_activo_id');
            $table->uuid('espacio_id');
            $table->uuid('piso_id');
            $table->uuid('torre_id');
            $table->uuid('unidad_id');
            $table->uuid('persona_responsable_id')->nullable();
            $table->timestamps();
            $table->foreign('unidad_id')->references('unidad_id')->on('unidades.unidad')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('espacio_id')->references('espacio_id')->on('unidades.espacio')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('piso_id')->references('piso_id')->on('unidades.piso')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('torre_id')->references('torre_id')->on('unidades.torre')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('tipo_activo_id')->references('tipo_activo_id')->on('logistica.tipo_activo')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('estado_activo_id')->references('estado_activo_id')->on('logistica.estado_activo')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('logistica.historico_estado_activo', function (Blueprint $table) {
            $table->bigIncrements('historico_estado_activo_id');
            $table->string('historico_estado_activo_comentario');
            $table->uuid('activo_id');
            $table->timestamps();
            $table->foreign('activo_id')->references('activo_id')->on('logistica.activo')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('logistica.atributo_activo', function (Blueprint $table) {
            $table->uuid('atributo_activo_id')->primary();
            $table->string('atributo_activo_nombre');
            $table->string('atributo_activo_valor');
            $table->uuid('activo_id');
            $table->timestamps();
            $table->foreign('activo_id')->references('activo_id')->on('logistica.activo')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('logistica.tipo_incidencia', function (Blueprint $table) {
            $table->bigIncrements('tipo_incidencia_id');
            $table->string('tipo_incidencia_nombre');
            $table->uuid('unidad_id');
            $table->timestamps();
            $table->foreign('unidad_id')->references('unidad_id')->on('unidades.unidad')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('logistica.estado_incidencia', function (Blueprint $table) {
            $table->bigIncrements('estado_incidencia_id');
            $table->string('estado_incidencia_nombre');
            $table->uuid('unidad_id');
            $table->timestamps();
            $table->foreign('unidad_id')->references('unidad_id')->on('unidades.unidad')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('logistica.estado_detalle_incidencia', function (Blueprint $table) {
            $table->bigIncrements('estado_detalle_incidencia_id');
            $table->string('estado_detalle_incidencia_nombre');
            $table->uuid('unidad_id');
            $table->timestamps();
            $table->foreign('unidad_id')->references('unidad_id')->on('unidades.unidad')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('logistica.tipo_elemento', function (Blueprint $table) {
            $table->bigIncrements('tipo_elemento_id');
            $table->string('tipo_elemento_nombre');
            $table->uuid('unidad_id');
            $table->timestamps();
            $table->foreign('unidad_id')->references('unidad_id')->on('unidades.unidad')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('logistica.incidencia', function (Blueprint $table) {
            $table->uuid('incidencia_id')->primary();
            $table->string('incidencia_nombre');
            $table->decimal('incidencia_monto', total: 18, places: 2);
            $table->integer('incidencia_moneda_monto');
            $table->string('incidencia_descripcion');
            $table->string('incidencia_comentario');
            $table->integer('estado_incidencia_id');
            $table->integer('tipo_incidencia_id');
            $table->date('incidencia_fecha_inicio');
            $table->date('incidencia_fecha_fin');
            $table->uuid('responsable_incidencia_id')->nullable();
            $table->uuid('unidad_id');
            $table->timestamps();
            $table->foreign('tipo_incidencia_id')->references('tipo_incidencia_id')->on('logistica.tipo_incidencia')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('estado_incidencia_id')->references('estado_incidencia_id')->on('logistica.estado_incidencia')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('unidad_id')->references('unidad_id')->on('unidades.unidad')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('logistica.detalle_incidencia', function (Blueprint $table) {
            $table->uuid('detalle_incidencia_id')->primary();
            $table->string('detalle_incidencia_nombre');
            $table->string('detalle_incidencia_descripcion');
            $table->string('detalle_incidencia_comentario');
            $table->integer('estado_detalle_incidencia_id');
            $table->date('detalle_incidencia_fecha_inicio');
            $table->time('detalle_incidencia_hora_inicio', precision: 0);
            $table->date('detalle_incidencia_fecha_fin');
            $table->time('detalle_incidencia_hora_fin', precision: 0);
            $table->uuid('persona_responsable_detalle_incidencia_id')->nullable();
            $table->uuid('incidencia_id');
            $table->integer('tipo_elemento_id');
            $table->timestamps();
            $table->foreign('incidencia_id')->references('incidencia_id')->on('logistica.incidencia')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('tipo_elemento_id')->references('tipo_elemento_id')->on('logistica.tipo_elemento')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('estado_detalle_incidencia_id')->references('estado_detalle_incidencia_id')->on('logistica.estado_detalle_incidencia')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('logistica.historico_estado_incidencia', function (Blueprint $table) {
            $table->bigIncrements('historico_estado_incidencia_id');
            $table->string('historico_estado_incidencia_comentario');
            $table->uuid('incidencia_id');
            $table->timestamps();
            $table->foreign('incidencia_id')->references('incidencia_id')->on('logistica.incidencia')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('logistica.tipo_mantenimiento', function (Blueprint $table) {
            $table->bigIncrements('tipo_mantenimiento_id');
            $table->string('tipo_mantenimiento_nombre');
            $table->uuid('unidad_id');
            $table->timestamps();
            $table->foreign('unidad_id')->references('unidad_id')->on('unidades.unidad')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('logistica.estado_mantenimiento', function (Blueprint $table) {
            $table->bigIncrements('estado_mantenimiento_id');
            $table->string('estado_mantenimiento_nombre');
            $table->uuid('unidad_id');
            $table->timestamps();
            $table->foreign('unidad_id')->references('unidad_id')->on('unidades.unidad')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('logistica.mantenimiento', function (Blueprint $table) {
            $table->uuid('mantenimiento_id')->primary();
            $table->string('mantenimiento_descripcion');
            $table->string('mantenimiento_comentario');
            $table->date('mantenimiento_fecha_inicio');
            $table->date('mantenimiento_fecha_fin');
            $table->integer('estado_mantenimiento_id');
            $table->integer('tipo_mantenimiento_id');
            $table->uuid('proveedor_id')->nullable();
            $table->integer('tipo_elemento_id');
            $table->uuid('espacio_id');
            $table->uuid('piso_id');
            $table->uuid('torre_id');
            $table->uuid('unidad_id');
            $table->timestamps();
            $table->foreign('tipo_elemento_id')->references('tipo_elemento_id')->on('logistica.tipo_elemento')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('estado_mantenimiento_id')->references('estado_mantenimiento_id')->on('logistica.estado_mantenimiento')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('tipo_mantenimiento_id')->references('tipo_mantenimiento_id')->on('logistica.tipo_mantenimiento')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('unidad_id')->references('unidad_id')->on('unidades.unidad')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('espacio_id')->references('espacio_id')->on('unidades.espacio')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('piso_id')->references('piso_id')->on('unidades.piso')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('torre_id')->references('torre_id')->on('unidades.torre')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('logistica.estado_detalle_mantenimiento', function (Blueprint $table) {
            $table->bigIncrements('estado_detalle_mantenimiento_id');
            $table->string('estado_detalle_mantenimiento_nombre');
            $table->uuid('unidad_id');
            $table->timestamps();
            $table->foreign('unidad_id')->references('unidad_id')->on('unidades.unidad')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('logistica.tipo_detalle_mantenimiento', function (Blueprint $table) {
            $table->bigIncrements('tipo_detalle_mantenimiento_id');
            $table->string('tipo_detalle_mantenimiento_nombre');
            $table->uuid('unidad_id');
            $table->timestamps();
            $table->foreign('unidad_id')->references('unidad_id')->on('unidades.unidad')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('logistica.detalle_mantenimiento', function (Blueprint $table) {
            $table->uuid('detalle_mantenimiento_id')->primary();
            $table->string('detalle_mantenimiento_nombre');
            $table->string('detalle_mantenimiento_descripcion');
            $table->string('detalle_mantenimiento_comentario');
            $table->decimal('detalle_mantenimiento_monto', total: 18, places: 2);
            $table->integer('detalle_mantenimiento_moneda_monto');
            $table->integer('estado_detalle_mantenimiento_id');
            $table->integer('tipo_detalle_mantenimiento_id');
            $table->uuid('persona_responsable_detalle_mantenimiento_id')->nullable();
            $table->uuid('mantenimiento_id');
            $table->integer('tipo_elemento_id');
            $table->uuid('elemento_id')->nullable();
            $table->timestamps();
            $table->foreign('detalle_mantenimiento_moneda_monto')->references('monedas_id')->on('generico.monedas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('mantenimiento_id')->references('mantenimiento_id')->on('logistica.mantenimiento')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('tipo_elemento_id')->references('tipo_elemento_id')->on('logistica.tipo_elemento')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('tipo_detalle_mantenimiento_id')->references('tipo_detalle_mantenimiento_id')->on('logistica.tipo_detalle_mantenimiento')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('estado_detalle_mantenimiento_id')->references('estado_detalle_mantenimiento_id')->on('logistica.estado_detalle_mantenimiento')->onDelete('cascade')->onUpdate('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logistica');
    }
};
