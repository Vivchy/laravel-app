@extends('layout.layout')

@section('content')
    <form class="mb-4" action="/article/update" method="post">
        @csrf
        <div class="form-group">
            <input type="hidden" value="{{$article->id}}" name="id">
            <label for="exampleInputEmail1">title</label>
            <input type="text"  name ="title"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$article->title}}">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">content</label>
            <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3">{{$article->body}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">update</button>
    </form>

@endsection
