<?php

namespace App\Http\Controllers;

use App\Models\Jogo;
use Illuminate\Http\Request;
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

        dd($request);
    }
}
