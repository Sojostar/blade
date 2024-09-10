<?php

namespace App\Models\generico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discapacidad extends Model
{
    use HasFactory;
    protected $table = 'generico.discapacidad';
    protected $primaryKey = 'discapacidad_id';

    protected $fillable = [
        'nombre_discapacidad',
    ];


}
