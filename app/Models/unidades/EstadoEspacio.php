<?php

namespace App\Models\unidades;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class EstadoEspacio extends Model
{
    use HasUuids;
    protected $table = 'unidades.estado_espacio';
    protected $primaryKey = 'estado_espacio_id';

    protected $fillable = [
        'nombre_estado_espacio',
        'tipo_espacio_id',
        'unidad_id',
    ];
}
