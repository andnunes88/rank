<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemporadaController extends Controller
{
    //
    public function index() {
        return view('site.temporada.index');
    }
}
