<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class Hospitais extends Controller
{
    public function index() {
        return view('hospitais', ['hospitais' => App\Hospitais::all()]);
    }
}
