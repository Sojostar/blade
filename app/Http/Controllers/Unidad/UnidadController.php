<?php

namespace App\Http\Controllers\Unidad;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\unidades\Unidad;
use App\Models\User;

class UnidadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $unidad = Unidad::with(['unidad_tipo'])->get();
        //print($unidad);
        //\Log::info(compact('unidad'));
        //print_r(compact('unidad'));
        //exit(0);
            //return view('unidad.index', compact('unidad'));

        $user = User::find(1);
        $unidadesDelUsuario = $user->relacion_unidad_usuario;

        //print($user);
        print($unidadesDelUsuario);
        exit(0);

        $action_icons = [
        "icon:chat-bubble-bottom-center-text | tip:send message | color:green | click:sendMessage('hola','bebe')",
        //"icon:pencil | click:redirect('/user/{unidad.unidad_id}')",
        //"icon:trash | color:red | click:deleteUser({unidad.unidad_id}, '{unidad.unidad_id}')",
        ];
            return view('unidad.index', ['unidad' => $unidad, 'action_icons'=>$action_icons ] );


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('unidad.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'unidad_correo' => 'required|email',
            'unidad_telefono_principal' => 'required|regex:/(01)[0-9]{9}/',
            'unidad_telefono_secundario' => 'required|regex:/(01)[0-9]{9}/',
        ]);

        Unidad::create($request->all());
            return redirect()->route('unidad.index')
            ->with('success','Post created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $unidad = Unidad::find($id);
        return view('unidad.show', compact('unidad'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $unidad = Unidad::find($id);
        return view('unidad.edit', compact('unidad'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'unidad_correo' => 'required|email',
            'unidad_telefono_principal' => 'required|regex:/(01)[0-9]{9}/',
            'unidad_telefono_secundario' => 'required|regex:/(01)[0-9]{9}/',
        ]);

        $unidad = Unidad::find($id);
        $unidad->update($request->all());
        return redirect()->route('unidad.index')
          ->with('success', 'Post updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $unidad = Unidad::find($id);
        $unidad->delete();
        return redirect()->route('unidad.index')
        ->with('success', 'Post deleted successfully');
    }
}
