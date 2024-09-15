<?php

namespace App\Models\unidades;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Espacio extends Model
{
    use HasUuids;
    protected $table = 'unidades.espacio';
    protected $primaryKey = 'espacio_id';

    protected $fillable = [
        'espacio_id',
        'espacio_nombre',
        'espacio_ubicacion',
        'tipo_espacio_id',
        'estado_espacio_id',
        'piso_id',
        'torre_id',
        'unidad_id',
        'tipologia_espacio_id',
    ];

    public function tipo_espacio(): BelongsTo
    {
        return $this->belongsTo('App\Models\unidades\TipoEspacio','tipo_espacio_id');
    }

    public function estado_espacio(): BelongsTo
    {
        return $this->belongsTo('App\Models\unidades\EstadoEspacio','estado_espacio_id');
    }

    public function piso_id(): BelongsTo
    {
        return $this->belongsTo('App\Models\unidades\Piso','piso_id');
    }

    public function torre_id(): BelongsTo
    {
        return $this->belongsTo('App\Models\unidades\Torre','torre_id');
    }

    public function unidad(): BelongsTo
    {
        return $this->belongsTo('App\Models\unidades\Unidad','unidad_id');
    }

    public function tipologia_espacio_id(): BelongsTo
    {
        return $this->belongsTo('App\Models\unidades\TipologiaEspacio','tipologia_espacio_id');
    }
}
