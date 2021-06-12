<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $usuario = User::all();

    return view('usuarios.index', compact('usuario'));
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
    User::create($request->all());

    return redirect()->route('usuarios.index')
      ->with('success', 'Usuario  creado con éxito.');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\User  $usuario
   * @return \Illuminate\Http\Response
   */
  public function show(User $usuario)
  {
    return view('usuarios.show', compact('usuario'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\User  $usuario
   * @return \Illuminate\Http\Response
   */
  public function edit(User $usuario)
  {
    return view('usuarios.edit', compact('usuario'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\User  $usuario
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, User $usuario)
  {

    $usuario->update($request->all());

    return redirect()->route('usuarios.index')
      ->with('success', 'Usuario  Actualizado  con éxito');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\User  $usuario
   * @return \Illuminate\Http\Response
   */
  public function destroy(User  $usuario)
  {
    $usuario->delete();

    return redirect()->route('usuarios.index')
      ->with('success', 'Usuario  Eliminado  con éxito');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function pruebar(Request $request)
  {
    User::create([
      'name' => $request['name'],
      'email' => $request['email'],
      'password' => Hash::make($request['password']),
    ]);

    return redirect()->route('register')
      ->with('success', 'Registro Exitoso!!, Ahora puede iniciar secion.');
  }
}
