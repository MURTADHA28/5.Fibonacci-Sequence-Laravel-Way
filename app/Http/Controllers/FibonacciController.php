<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FibonacciController extends Controller
{

    public function showInputForm() {
        return view('welcome');
    }


    public function generateFibonacci(Request $request) {
        $lengthOFfibonacci = $request->input('length');

        if ($lengthOFfibonacci <= 0) {
            return redirect()->back()->with('error', 'عدد موجب فقط ');
        }

        $fibonacci = [0, 1];
        for ($i = 2; $i < $lengthOFfibonacci; $i++) {
            $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        }

        return view('fibonacci')->with('fibonacci', array_slice($fibonacci, 0, $lengthOFfibonacci));
    }
}
