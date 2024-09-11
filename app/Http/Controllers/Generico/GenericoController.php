<?php

namespace App\Http\Controllers\Generico;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

// modelo de generico
use App\Models\generico\Pais;
use App\Models\generico\Estado;
use App\Models\generico\Sexo;

// modelo de unidades
use App\Models\unidades\Unidad;

class GenericoController extends Controller
{

    public function prueba(Request $request)
    {
        //$comment = Pais::with('estados')->find(1);
        return 'Listo';
    }

}
