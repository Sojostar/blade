<?php

namespace App\Models\unidades;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoUnidad extends Model
{
    use HasFactory;
    protected $table = 'unidades.estado_unidad';
    protected $primaryKey = 'estado_unidad_id';

    protected $fillable = [
        'nombre_estado_unidad',
    ];
}
