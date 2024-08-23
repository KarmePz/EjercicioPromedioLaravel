<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PromedioController extends Controller
{
    //
    public function showForm()
    {
        return view('calculatePromedio');
    }

    public function calculatePromedio(Request $request)
    {
        $operation = $request->input('operation');
        $number1 = $request->input('number1');
        $number2 = $request->input('number2');
        $number3 = $request->input('number3');
        $number4 = $request->input('number4');
        $number5 = $request->input('number5');
        
        $result = 0;


        if($operation == 'pro'){
            $result = ($number1 + $number2 + $number3 + $number4 + $number5) / 5;
        }
        // switch ($operation) {
        //     case 'pro':
        //         $result = ($number1 + $number2 + $number3 + $number4 + $number5)/5;
        //         break;
        // }

        return view('calculatePromedio', ['result' => $result]);
    }

}
