<?php

namespace App\Models\generico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pais extends Model
{
    use HasFactory;
    protected $table = 'generico.pais';
    protected $primaryKey = 'pais_id';

    protected $fillable = [
        'nombre_pais',
    ];

    public function estados(): HasMany
    {
        return $this->hasMany('App\Models\generico\Estado','pais_id_id','pais_id');
    }
}
