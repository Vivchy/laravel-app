@extends('layouts.main')

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>
    <p>{{ $post->author }}</p>
    <p>{{ $post->category->title }}</p>
    @foreach($post->tags as $tag)
        <p>{{$tag->title}}</p>
    @endforeach
    <p><a href="{{ route('post.edit', $post->id) }}"> изменить</a></p>
@endsection
