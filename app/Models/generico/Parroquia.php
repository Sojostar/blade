<?php

namespace App\Models\generico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parroquia extends Model
{
    use HasFactory;
    protected $table = 'generico.parroquia';
    protected $primaryKey = 'parroquia_id';

    protected $fillable = [
        'nombre_parroquia',
        'municipio_id_id',
    ];

    public function municipios()
    {
        return $this->belongsTo('App\Models\generico\Municipios');
    }
}
