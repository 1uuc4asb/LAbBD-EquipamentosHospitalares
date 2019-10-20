<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class EquipamentoStatus extends Controller
{
    public function index() {
        return view('equipamentostatus', ['equipamentostatus' => App\EquipamentoStatus::all()]);
    }
}
