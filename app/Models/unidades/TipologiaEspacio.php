<?php

namespace App\Models\unidades;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class TipologiaEspacio extends Model
{
    use HasUuids;
    protected $table = 'unidades.tipologia_espacio';
    protected $primaryKey = 'tipologia_espacio_id';

    protected $fillable = [
        'tipologia_espacio',
        'unidad_id',
    ];
}
