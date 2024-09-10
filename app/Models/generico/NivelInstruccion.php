<?php

namespace App\Models\generico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NivelInstruccion extends Model
{
    use HasFactory;
    protected $table = 'generico.nivel_instruccion';
    protected $primaryKey = 'nivel_instruccion_id';

    protected $fillable = [
        'nombre_nivel_instruccion',
    ];
}
