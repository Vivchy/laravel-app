<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function first(){
        return "first controller";
    }

    public function second(){
        return 'second page';
    }
}
