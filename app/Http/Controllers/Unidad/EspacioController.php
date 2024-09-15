<?php

namespace App\Http\Controllers\Unidad;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\unidades\Espacio;
use App\Models\User;

class EspacioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $espacio = Espacio::with(['unidad'])->get();
        //print($unidad);
        //\Log::info(compact('unidad'));
        //print_r(compact('unidad'));
        //exit(0);
            //return view('unidad.index', compact('unidad'));

        //$user = User::find(1);
        //$unidadesDelUsuario = $user->relacion_unidad_usuario;

        //print($espacio[0]->unidad);
        //print($unidadesDelUsuario);
        //exit(0);

        $action_icons = [
        "icon:chat-bubble-bottom-center-text | tip:send message | color:green | click:sendMessage('hola','bebe')",
        //"icon:pencil | click:redirect('/user/{unidad.unidad_id}')",
        //"icon:trash | color:red | click:deleteUser({unidad.unidad_id}, '{unidad.unidad_id}')",
        ];
            return view('espacios.index', ['espacio' => $espacio, 'action_icons'=>$action_icons ] );


    }

}
