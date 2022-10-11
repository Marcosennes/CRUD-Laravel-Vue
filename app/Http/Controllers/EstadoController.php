<?php

namespace App\Http\Controllers;

use App\Http\Requests\EstadoRequest;
use App\Models\Estado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class EstadoController extends Controller
{
    public function __construct()
    {
        
    }

    public function index(){
        $estados = Estado::all();
        
        return Inertia::render('Estado/listar', [
            'estados' => $estados
        ]);
    }

    public function inserirIndex(){
        return Inertia::render('Estado/inserir');
    }

    public function inserir(EstadoRequest $request){

        Estado::create($request->all());

        return Redirect::route('estado.index')->with('success', 'Estado criado com sucesso.');

    }
}
