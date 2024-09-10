<?php

namespace App\Models\generico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoIdentificacion extends Model
{
    use HasFactory;
    protected $table = 'generico.tipo_identificacion';
    protected $primaryKey = 'tipo_identificacion_id';

    protected $fillable = [
        'nombre_tipo_identificacion',
    ];
}
