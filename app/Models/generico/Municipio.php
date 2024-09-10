<?php

namespace App\Models\generico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    use HasFactory;
    protected $table = 'generico.municipio';
    protected $primaryKey = 'municipio_id';

    protected $fillable = [
        'nombre_municipio',
        'estado_id_id',
    ];

    public function estados()
    {
        return $this->belongsTo('App\Models\generico\Estado');
    }
}
