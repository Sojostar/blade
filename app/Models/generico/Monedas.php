<?php

namespace App\Models\generico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monedas extends Model
{
    use HasFactory;
    protected $table = 'generico.monedas';
    protected $primaryKey = 'monedas_id';

    protected $fillable = [
        'nombre_monedas',
    ];
}
