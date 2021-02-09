<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    //
    public function calculator(Request $request)
    {
        if ($request->calc == null){
            return view('welcome');
        }
        $result = eval('return '.$request->calc.';');
        return view('welcome', compact(['result']));
    }
}
