<?php

namespace App\Models\generico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nacionalidad extends Model
{
    use HasFactory;
    protected $table = 'generico.nacionalidad';
    protected $primaryKey = 'nacionalidad_id';

    protected $fillable = [
        'nombre_nacionalidad',
    ];
}
