<?php

namespace App\Models\generico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoCivil extends Model
{
    use HasFactory;
    protected $table = 'generico.estado_civil';
    protected $primaryKey = 'estado_civil_id';

    protected $fillable = [
        'nombre_estado_civil',
    ];
}
