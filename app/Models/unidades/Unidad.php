<?php

namespace App\Models\unidades;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    use HasFactory;
    protected $table = 'unidades.unidad';
    protected $primaryKey = 'unidad_id';

    protected $fillable = [
        'unidad_id',
        'unidad_nombre',
        'unidad_identificacion',
        'unidad_ubicacion_urbanizacion',
        'unidad_ubicacion_calle',
        'unidad_correo',
        'unidad_telefono_principal',
        'unidad_telefono_secundario',
        'unidad_foto_perfil',
        'unidad_fecha_creacion',
        'unidad_tipo_id',
        'unidad_ubicacion_estado_id',
        'unidad_ubicacion_municipio_id',
        'unidad_ubicacion_pais_id',
        'unidad_ubicacion_parroquia_id',
        'unidad_ubicacion_sector_id',
        'unidad_estado_id',
    ];
}
