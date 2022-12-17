<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(){
        $data = request()->validate([
            'title'=>'required|string',
            'content'=>'required|string',
            'author'=>'required|string',
            'category_id'=> '',
            'tags' => ''
        ]);

        $tags = $data['tags'];
        unset($data['tags']);

        $post = Post::create($data);
        $post->tags()->attach($tags);

        return redirect()->route('post.index');
    }
    public function show(Post $post){

        return view('post.show', compact('post'));
    }
    public function edit(Post $post){
        $categories = Category::all();
        $tags = Tag::all();
        return view('post.edit', compact('post', 'categories', 'tags'));
    }
    public function update(Post $post){
        $data = request()->validate([
            'title'=>'string',
            'content'=>'string',
            'author'=>'string',
            'category_id' => '',
            'tags' => ''
        ]);
        $tags = $data['tags'];
        unset($data['tags']);

        $post->update($data);
        $post->tags()->sync($tags);
        return redirect()->route('post.index');
    }
    public function destroy(Post $post){
        $post->delete();
        return redirect()->route('post.index');
    }
    public function create(){
        $categories = Category::all();
        $tags = Tag::all();
        return view('post.create', compact('categories', 'tags'));
    }

    public function index(){
        $posts = Post::all();

        return view('post.index', [
            'posts' => $posts
        ]);
    }


    public function delete(){
        $post = Post::find(1);
        $post->delete();
        dump('delete');
    }

    public function firstOrCreate(){
        $newPost = [
            'title'=> 'four',
            'content' => 'new news '
        ];

        $post = Post::firstOrCreate(
            // если нет в базе поста с таким тайтлом то он создаст новую запись
            ['title'=>'five'],
            $newPost
        );
        dump($post->content);
    }

    public function updateOrCreate(){
        $newPost = [
            'title'=> 'four',
            'content' => 'new news update '
        ];

        $post = Post::updateOrCreate(
            ['title' => 'four'],
            $newPost
        );
        dump($post->content);
    }
}
