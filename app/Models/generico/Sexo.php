<?php

namespace App\Models\generico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sexo extends Model
{
    use HasFactory;
    protected $table = 'generico.sexo';
    protected $primaryKey = 'sexo_id';

    protected $fillable = [
        'nombre_sexo',
    ];
}
