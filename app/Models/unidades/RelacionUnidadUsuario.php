<?php

namespace App\Models\unidades;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Model;

class RelacionUnidadUsuario extends Model
{
    use HasUuids;
    protected $table = 'unidades.relacion_unidad_usuario';
    protected $primaryKey = 'relacion_unidad_usuario_id';


}
