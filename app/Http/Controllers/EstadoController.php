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

        $inserido_confirmacao = Estado::create($request->all());

        if($inserido_confirmacao){
            return Redirect::route('estado.index')->with('insercao', [
                'success'   => true,
                'message'   => 'Estado inserido com sucesso.'
            ]);
        } else{
            return Redirect::route('estado.index')->with('insercao', [
                'success'   => false,
                'message'   => 'Estado não pode ser inserido.'
            ]);
        }
    }

    public function alterar($id, Request $request){

    }
    
    public function excluir($id){
        $estado = Estado::find(intval($id));
        $excluido_confirmacao = $estado->delete();

        if($excluido_confirmacao){
            return redirect()->back()->with('exclusao', [
                'success'   => true,
                'message'   => 'O Estado ' . $estado->nome . ' foi excluído com sucesso.'
            ]);
        } else{
            return redirect()->back()->with('exclusao', [
                'success'   => false,
                'message'   => 'O Estado ' . $estado->nome . ' não pode ser excluído.'
            ]);
        }

    }
}
