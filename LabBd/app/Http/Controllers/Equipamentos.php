<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class Equipamentos extends Controller
{
    public function index() {
        return view('equipamentos', [
            'equipamentos' => App\Equipamentos::all(),
            'hospitais' => App\Hospitais::all(),
            'setores' => App\Setores::all(),
            'equipamentostatus' => App\EquipamentoStatus::all(),
            'tiposequipamento' => App\TiposEquipamentos::all(),
        ]);
    }
}
