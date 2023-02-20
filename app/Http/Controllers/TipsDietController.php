<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TipsDietController extends Controller
{
    public function index(){
        return view('tipsdiet/index');
    }
}
