<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class Manutencoes extends Controller
{
    public function index() {
        return view('manutencoes', [
            'manutencoes' => App\Manutencoes::all(),
            'tiposmanutencoes' => App\TiposManutencoes::all(),
            'equipamentos' => App\Equipamentos::all()
            ]);
    }
}
