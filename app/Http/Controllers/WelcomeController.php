<?php

namespace App\Http\Controllers;

use App\Evento;
use Illuminate\Foundation\Console\StorageLinkCommand;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class welcomeController extends Controller
{

    public function index()
    {
        $eventos = Evento::latest()->paginate(10);

        return view('welcome', compact('eventos'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }
}
