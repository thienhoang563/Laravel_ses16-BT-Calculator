<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function calculate(Request $request){
        $firstnumber = $request->firstnumber;
        $secondnumber = $request->secondnumber;
        $operator = $request->operator;
        switch ($operator){
            case '+': {
                $result = $firstnumber + $secondnumber;
                break;
            }
            case '-': {
                $result = $firstnumber - $secondnumber;
                break;
            }
            case 'x': {
                $result = $firstnumber * $secondnumber;
                break;
            }
            case ':': {
                if ($secondnumber != 0){
                    $result = $firstnumber / $secondnumber;
                    break;
                } else {
                    $result = "Can't calculate because second number equal 0";
                }
            }
        } return view('result', compact('result'));

    }
}
