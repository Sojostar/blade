<?php

namespace App\Models\generico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dominancia extends Model
{
    use HasFactory;
    protected $table = 'generico.dominancia';
    protected $primaryKey = 'dominancia_id';

    protected $fillable = [
        'nombre_dominancia',
    ];
}
