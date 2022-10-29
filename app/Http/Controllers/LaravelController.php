<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaravelController extends Controller
{
    public function laravelPage(){
        $result = [
            'result' => ['one', 'two', 'three', 'four']
        ];
        return view('laravel', $result);
    }
}
