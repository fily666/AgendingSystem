<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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
      ->with('success', 'Product created successfully.');
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
      ->with('success', 'Product updated successfully');
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
      ->with('success', 'Product deleted successfully');
  }
}
