@extends('layout.layout')

@section('content')
    <div class="container">
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>
    <p>{{ $post->created_at->format('d.m.Y') }}</p>
        <h3>Комментарии</h3>
    @foreach($post->comment as $item)
        <div style = "border: 2px solid red; padding: 5px">
            <p>{{$item->body}}</p>
            <p style="text-align: end">{{ $item->created_at->format('d.m.Y') }}</p>
    </div>
    @endforeach
    <h3>Добавить комментарий</h3>
    <form class="mb-4" action="/addComment" method="post">
        @csrf

        <div class="form-group">
            <input type="hidden" value="{{ $post->id }}" name="my_blog_id" >
            <textarea class="form-control" name="body" id="exampleFormControlTextarea1" rows="5"></textarea>
        </div>
        <div class="form-check">

        </div>
        <button type="submit" class="btn btn-primary">Добавить</button>
    </form>
    </div>
@endsection
