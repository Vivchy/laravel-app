@extends('layouts.main')

@section('content')
    <h1>Posts</h1>
    <div>

        @foreach($posts as $post)
            <div class="card" >
                <div class="card-body">
                    <h2 class="card-title">{{ $post->title }}</h2>
                        <p class="card-text">{{ $post->content }}</p>
                        <a href="{{ route('post.show', $post->id) }}" class="btn btn-primary">Подробнее</a>

                    <form action="{{ route('post.destroy', $post->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>


@endsection
