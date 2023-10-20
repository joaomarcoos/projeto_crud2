<?php

namespace App\Http\Controllers;

use App\Models\Jogo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;

class JogoController extends Controller
{
    public function index(){

        $jogos = Jogo::all();

        //dd($jogos);
            return Inertia::render('Jogos/Index', ['jogos'=>$jogos]);
    }


    public function create(){



        return Inertia::render('Jogos/Create');
    }


    public function store(Request $request){

        $regras=[
            'name'=>'required',
            'categoria'=>'required',
            'ano_criacao'=>'required',
            'vlr_jogo'=>'required'
        ];

        $validador = Validator::make($request->all(), $regras);

        if($validador->fails()){
            return response()->json(['error' => $validador->errors()], 400);
        }

        

        $jogos = new Jogo;

        $jogos->name = $request->name;
        $jogos->categoria = $request->categoria;
        $jogos->ano_criacao = $request->ano_criacao;
        $jogos->vlr_jogo = $request->vlr_jogo;

        $jogos->save();

        return response()->json(['message' => 'Registro salvo com sucesso'], 200);
    }
}