<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{

    public function index()
    {
        return view('calculator');
    }

    public function calc(Request $request)
    {

        $number1 = $request->number1;
        $number2 = $request->number2;
        $operator = $request->operator;

        if ($request->operator == 'add') {
            $result = $number1 + $number2;
        } elseif ($operator == 'subtract') {
            $result = $number1 - $number2;
        } elseif ($operator == 'multiply') {
            $result = $number1 * $number2;
        } elseif ($operator == 'divide') {
            if ($number2 != 0) {
                $result = $number1 / $number2;
            } else {
                $result = "Can't divide 0";
            }
        }
        return view(
            'calculator',
            [
                'number1' => $number1,
                'number2' => $number2,
                'operator' => $operator,
                'result' => $result,
            ]
        );
    }
}
