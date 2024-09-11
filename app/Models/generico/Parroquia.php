<?php

namespace App\Models\generico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Parroquia extends Model
{
    use HasFactory;
    protected $table = 'generico.parroquia';
    protected $primaryKey = 'parroquia_id';

    protected $fillable = [
        'nombre_parroquia',
        'municipio_id_id',
    ];

    public function municipios(): BelongsTo
    {
        return $this->belongsTo('App\Models\generico\Municipios','municipio_id_id');
    }
}
