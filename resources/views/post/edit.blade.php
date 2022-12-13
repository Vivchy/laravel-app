@extends('layouts.main')

@section('content')
    <form action="{{ route('post.update', $post->id) }}" method = 'post'>
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="title" class="form-label">Заголовок</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}">

        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Описание</label>
            <textarea name="content" class="form-control" rows="5">{{ $post->content }}</textarea>
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">автор</label>
            <input type="text" class="form-control" id="author" name="author" value="{{ $post->author }}">
        </div>

        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>


@endsection
