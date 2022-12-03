<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function first(){
        $post = Post::where('id', 1)->get();
        $ex = new Post();
        $sd = $ex->varexam;
        dump($post);
    }

    public function second(){
        return 'second page';
    }
}
