<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use App\Models\Student;
use App\Models\Todo;
use App\Models\Work;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function helloPage()
    {
        $result = [
            'title' => 'Python'
        ];
        return view('hello', $result);
    }

    public function todo(){
//        $todo = new Todo();
//        $todo->title = "read book 2";
//        $todo->note = 'begin with 23 page';
//
//        $todo->save();

//        $todo = Todo::create([
//            'title' => 'sleep',
//            'note' => 'sleep 8 hour',
//            'status' => 1
//        ]);
        $result = [
            'title_page' => 'ToDo'
        ];

//        $del_todo = Todo::find(2);
//        $del_todo->delete();

        $todos = Todo::all();

        $result['todos'] = $todos;

        return view('todo', $result);
    }

    public function todoDone(){

        $todos = Todo::where('status', 1)->get();

        $result = [
            'title_page' => 'ToDo'
        ];

        $result['todos'] = $todos;
        return view('todoDone', $result);
    }

    public function todoNotDone(){
        $todos = Todo::where('status', 0)->get();
        $result = [
            'title_page' => 'ToDo'
        ];
        $result['todos'] = $todos;

        return view('todoNotDone', $result);
    }

    public function student(){
//        $student = Student::create(
//            [
//                'first_name' => 'Анна',
//                'last_name' => 'Иакова',
//                'age' => 18,
//                'group' => '252',
//                'course' => '2',
//                'speciality' => 'биология'
//            ]
//        );
        $student = Student::all();
        $result = [
            'title_page' => 'Students'
        ];
        $result['students'] = $student;
        return view('student', $result);
    }

    public function pageStudent($id){
        $student = Student::find($id);
        if (!$student){
            return abort(404);
        }

        return view('page-student', [
            'title_page' => $student->last_name,
            'student' => $student,
        ]);
    }

    public function blog(){
        $articles = Article::all();
        $result = [
            'title_page' => 'Posts',
            'result' => $articles
        ];
//        return view('blog', $result);

//        $com = new Comment();
//        $com->body = 'the best !!!!!';
//        $com->article_id = 1;
//        $com->save();
        return view('blog', $result);
    }

    public function pageBlog($id){
        $article = Article::find($id);

        if (!$article){
            return abort(404);
        }

        return view('article', [
            'article' => $article,
        ]);
    }

    public function newLink(){
        $com = new Work();
        $com->link = 'whaaaaat';
        $com->student_id = 2;
        $com->save();

        return view('link');
    }

    public function articleUpdate($id){
        $article = Article::find($id);
        if (!$article) return abort(404);

        return view('article-update', [
            'title_page' => 'update',
           'article' => $article,
        ]);
    }
}
