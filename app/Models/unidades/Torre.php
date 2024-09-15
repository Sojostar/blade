<?php

namespace App\Models\unidades;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Torre extends Model
{
    use HasUuids;
    protected $table = 'unidades.torre';
    protected $primaryKey = 'torre_id';

    protected $fillable = [
        'torre_nombre',
        'unidad_id',
    ];
}
