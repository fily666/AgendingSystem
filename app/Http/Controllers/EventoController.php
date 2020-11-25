<?php

namespace App\Http\Controllers;

use App\Evento;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;


class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos = evento::latest()->paginate(5);

        return view('eventos.index', compact('eventos'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('eventos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        #evento::create($request->all());

        $Eventos = new Evento();

        $imgeneslogo = $request->file('logo')->store('public/img');
        $logo = Storage::url($imgeneslogo);

        $Eventos->name = $request->name;
        $Eventos->detail = $request->detail;
        $Eventos->logo = $logo;
        $Eventos->save();


        return redirect()->route('eventos.index')
            ->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function show(Evento $evento)
    {
        return view('eventos.show', compact('evento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function edit(Evento $evento)
    {
        return view('eventos.edit', compact('evento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evento $Eventos)
    {

        $Eventos->update();

        $imgeneslogo = $request->file('logo')->store('public/img');
        $logo = Storage::url($imgeneslogo);

        #$evento->update($request->all());

        $Eventos->name = $request->name;
        $Eventos->detail = $request->detail;
        $Eventos->logo = $logo;
        $Eventos->save();


        return redirect()->route('eventos.index')
            ->with('success', 'Product created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evento $evento)
    {
        $evento->delete();

        return redirect()->route('eventos.index')
            ->with('success', 'Product deleted successfully');
    }
}
