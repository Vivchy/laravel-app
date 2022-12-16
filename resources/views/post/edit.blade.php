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
        <select class="form-select form-select-sm" aria-label=".form-select-sm" id="category" name="category_id"
        >
            @foreach($categories as $category)
                <option
                    {{ $category->id == $post->category->id ? 'selected' : '' }}
                    value="{{ $category->id }}"> {{ $category->title }} </option>

            @endforeach
        </select>
        @foreach($tags as $tag)
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="tags[]" value="{{ $tag->id }}" id="flexCheckDefault"
                @foreach($post->tags as $postTag)
                    {{ $tag->id == $postTag->id ? 'checked' : ''}}
                @endforeach
                >
                <label class="form-check-label" for="flexCheckDefault">
                    {{ $tag->title }}
                </label>
            </div>
        @endforeach

        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>


@endsection
