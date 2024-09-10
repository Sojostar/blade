<?php

namespace App\Models\unidades;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoUnidad extends Model
{
    use HasFactory;
    protected $table = 'unidades.tipo_unidad';
    protected $primaryKey = 'tipo_unidad_id';

    protected $fillable = [
        'nombre_tipo_unidad',
    ];
}
