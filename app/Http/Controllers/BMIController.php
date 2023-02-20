<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BMIController extends Controller
{
    public function index(){
        return view('bmi/index');
    }
    public function hasil(Request $request)
    {
        // return $request;
        $tinggi = $request->tinggi / 100;
        $bmi = round($request->bb / ($tinggi * $tinggi),1);

        return view('bmi/hasil',compact('bmi'));
    }
}
