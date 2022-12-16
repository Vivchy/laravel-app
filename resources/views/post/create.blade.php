@extends('layouts.main')

@section('content')
    <form action="{{ route('post.store') }}" method = 'post'>
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Заголовок</label>
            <input type="text" class="form-control" id="title" name="title">

        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Описание</label>
            <textarea name="content" class="form-control" rows="5"></textarea>
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">автор</label>
            <input type="text" class="form-control" id="author" name="author">
        </div>
        <select class="form-select form-select-sm" aria-label=".form-select-sm" id="category" name="category_id">
            @foreach($categories as $category)
            <option value="{{ $category->id }}"> {{ $category->title }} </option>
            @endforeach
        </select>

        @foreach($tags as $tag)
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="tags[]" value="{{ $tag->id }}" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                {{ $tag->title }}
            </label>
        </div>
        @endforeach

        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
@endsection
