<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;
use Session;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::all();
        
        return view('usuarios.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/img/', $name);
        }

        $usuario = new Usuario();
        $usuario-> nombre = $request->input('nombre');
        $usuario-> apellido = $request->input('apellido');
        $usuario-> fecha = $request->input('fecha');
        $usuario-> ocupacion = $request->input('ocupacion');
        $usuario-> direccion = $request->input('direccion');
        $usuario-> telefono = $request->input('telefono');
        $usuario-> biografia = $request->input('biografia');
        $usuario-> img = $name;        
        $usuario-> save();

        Session::flash('message','El usuario fue creado satisfactoriamente...');
        return redirect()->route('usuarios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('usuarios.show', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = Usuario::find($id);
        return view('usuarios.edit', compact('usuarios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/img/', $name);
        }

        $usuario = Usuario::find($id);
        $usuario-> nombre = $request->input('nombre');
        $usuario-> apellido = $request->input('apellido');
        $usuario-> fecha = $request->input('fecha');
        $usuario-> ocupacion = $request->input('ocupacion');
        $usuario-> direccion = $request->input('direccion');
        $usuario-> telefono = $request->input('telefono');
        $usuario-> biografia = $request->input('biografia');
        $usuario-> img = $name;        
        $usuario-> save();

        Session::flash('message','El usuario fue actualizado satisfactoriamente...');
        return redirect()->route('usuarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usuario)
    {
        //
    }
}
