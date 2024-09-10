<?php

namespace App\Models\generico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    use HasFactory;
    protected $table = 'generico.pais';
    protected $primaryKey = 'pais_id';

    protected $fillable = [
        'nombre_pais',
    ];
}
