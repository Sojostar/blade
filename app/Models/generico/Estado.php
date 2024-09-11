<?php

namespace App\Models\generico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Estado extends Model
{
    use HasFactory;
    protected $table = 'generico.estado';
    protected $primaryKey = 'estado_id';

    protected $fillable = [
        'nombre_estado',
        'nombre_bandera',
        'pais_id_id',
    ];

    public function paises(): BelongsTo
    {
        return $this->belongsTo('App\Models\generico\Pais','pais_id_id');
    }

    public function municipios(): HasMany
    {
        return $this->hasMany('App\Models\generico\Municipio','estado_id_id');
    }


}
