<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class TiposEquipamentos extends Controller
{
    public function index() {
        return view('tiposequipamentos', ['tiposequipamentos' => App\TiposEquipamentos::all()]);
    }
}
