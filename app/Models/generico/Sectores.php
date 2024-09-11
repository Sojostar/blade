<?php

namespace App\Models\generico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sectores extends Model
{
    use HasFactory;
    protected $table = 'generico.sectores';
    protected $primaryKey = 'sectores_id';

    protected $fillable = [
        'nombre_sectores',
        'parroquia_id_id',
    ];

    public function parroquias(): BelongsTo
    {
        return $this->belongsTo('App\Models\generico\Parroquias','municipio_id_id');
    }
}
