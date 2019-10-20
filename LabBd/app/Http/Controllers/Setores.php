<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class Setores extends Controller
{
    public function index() {
        return view('setores', [
            'setores' => App\Setores::all(),
            'hospitais' => App\Hospitais::all()
        ]);
    }
}
