<?php

namespace App\Models\generico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    public function paises()
    {
        return $this->belongsTo('App\Models\generico\Pais');
    }
}
