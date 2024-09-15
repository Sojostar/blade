<?php

namespace App\Models\unidades;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class TipoEspacio extends Model
{
    use HasUuids;
    protected $table = 'unidades.tipo_espacio_espacio';
    protected $primaryKey = 'tipo_espacio_espacio_id';

    protected $fillable = [
        'nombre_tipo_espacio_espacio',
        'unidad_id',
    ];
}
