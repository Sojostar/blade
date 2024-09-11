<?php

namespace App\Models\unidades;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Unidad extends Model
{
    use HasUuids;
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

    public function unidad_tipo(): BelongsTo
    {
        return $this->belongsTo('App\Models\unidades\TipoUnidad','unidad_tipo_id');
    }

    public function estado(): BelongsTo
    {
        return $this->belongsTo('App\Models\generico\Estado','unidad_ubicacion_estado_id');
    }

    public function municipio(): BelongsTo
    {
        return $this->belongsTo('App\Models\generico\Municipio','unidad_ubicacion_municipio_id');
    }

    public function pais(): BelongsTo
    {
        return $this->belongsTo('App\Models\generico\Pais','unidad_ubicacion_pais_id');
    }

    public function parroquia(): BelongsTo
    {
        return $this->belongsTo('App\Models\generico\Parroquia','unidad_ubicacion_parroquia_id');
    }

    public function sector(): BelongsTo
    {
        return $this->belongsTo('App\Models\generico\Sectores','unidad_ubicacion_sector_id');
    }

    public function estado_unidad(): BelongsTo
    {
        return $this->belongsTo('App\Models\generico\EstadoUnidad','unidad_estado_id');
    }
}
