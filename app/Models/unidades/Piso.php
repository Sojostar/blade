<?php

namespace App\Models\unidades;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Piso extends Model
{
    use HasUuids;
    protected $table = 'unidades.piso';
    protected $primaryKey = 'piso_id';

    protected $fillable = [
        'piso_nombre',
        'torre_id',
    ];
}
