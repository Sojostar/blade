<?php

namespace App\Models\generico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sectores extends Model
{
    use HasFactory;
    protected $table = 'generico.sectores';
    protected $primaryKey = 'sectores_id';

    protected $fillable = [
        'nombre_sectores',
        'parroquia_id_id',
    ];

    public function parroquias()
    {
        return $this->belongsTo('App\Models\generico\Parroquias');
    }
}
