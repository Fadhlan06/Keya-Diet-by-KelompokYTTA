<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BMRController extends Controller
{
    public function index(){
        return view('bmr/index');
    }

    public function hasil(Request $request)
    {
        $bmr = null;
        if ($request->gender == "pria") {
            $bmr = 66.5 + (13.7 * $request->bb) + (5 * $request->tinggi ) - (6.8 * $request->usia);
        }else{
            $bmr = 655 + (9.6 * $request->bb) + (1.8 * $request->tinggi ) - (4.7 * $request->usia);
        }
        

        return view('bmr/hasil', compact('bmr'));
    }
}
