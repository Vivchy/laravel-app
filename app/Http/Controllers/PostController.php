<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(){
        $newPost = [

                'title'=> 'four',
                'content' => 'london is the capital the great london'

        ];

        Post::create($newPost);

        dd('create');
    }

    public function index(){
        $posts = Post::all();

        foreach ($posts as $post){
            dump($post->id);
        }
    }

    public function update(){
        $post = Post::find(1);
        $post->update(
            [
                'title'=> 'update'
            ]
        );
    }

    public function delete(){
        $post = Post::find(1);
        $post->delete();
        dump('delete');
    }
}
