<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class TiposManutencoes extends Controller
{
    public function index() {
        return view('tiposmanutencoes', ['tiposmanutencoes' => App\TiposManutencoes::all()]);
    }
}
