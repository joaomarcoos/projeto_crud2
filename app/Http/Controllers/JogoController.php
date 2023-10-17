<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class JogoController extends Controller
{
    public function index(){

            $id = 1;
            $name = "GTA";

            return Inertia::render('Jogos/Index', ['id'=> $id, 'name'=> $name]);
    }
}
