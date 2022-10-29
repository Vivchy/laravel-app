@extends('layout.layout')

@section('content')

    @foreach($blogs as $item)
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{$item->title}}</h5>
                <p class="card-text">{{ Str::limit($item->body, 255) }}</p>
                <a href="/post/{{$item->id}}" class="btn btn-primary">Перейти</a>
                <form action="/deletePost" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $item->id }}">
                    <button type="submit" class="btn-danger mb-2">удалить</button>
                </form>
            </div>
        </div>
    @endforeach

@endsection
