<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\MyBlog;
use App\Models\MyComment;

class MyBlogController extends Controller
{
    public function allBlog(){

        $result = [
            'title_page'=> 'список постов'
            ];
        $blog = MyBlog::all();
        $result['blogs'] = $blog;
        return view('my-blog', $result);
    }

    public function newBlog(){
        $result = [
            'title_page'=> 'Создать пост'
        ];

        return view('add-blog', $result);
    }

    public function addPost(Request $request){
        $data = $request->only(['title', 'body']);

        $blog= MyBlog::create([
            'title'=>$data['title'],
            'body'=>$data['body']
        ]);

        if ($blog) return redirect()->route('my-blog');
    }

    public function post($id){
        $post = MyBlog::find($id);
        if (!$post){
            return abort(404);
        }

        return view('post', [
            'title_page' => $post->title,
            'post' => $post,
        ]);
    }

    public function addComment(Request $request){
        $data = $request->only(['body', 'my_blog_id']);

        $comment= MyComment::create([
            'body'=>$data['body'],
            'my_blog_id'=>$data['my_blog_id']
        ]);

        if ($comment) return redirect()->back();
        if (!$comment) abort(404);
    }

    public function deletePost(Request $request){
        $blog = MyBlog::find($request->id);

        if (!$blog){
            return abort(404);
        }

        $blog->delete();
        return redirect()->back();
    }

    public function delcom(){
        $com = MyComment::all();

        $result['cs'] = $com;
        $result['title_page'] = 'sdfsdf';
        return view('my-c', $result);
    }

    public function admin(){
        return view('admin');
    }
}
