@extends('layouts.main')

@section('content')
    <form action="{{ route('post.store') }}" method = 'post'>
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Заголовок</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
            @error('title')
            <div>{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Описание</label>
            <textarea name="content" class="form-control" rows="5">{{old('content')}}</textarea>
            @error('content')
            <div>{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">автор</label>
            <input type="text" class="form-control" id="author" name="author" value="{{old('author')}}">
            @error('title')
            <div>{{$message}}</div>
            @enderror
        </div>
        <select class="form-select form-select-sm" aria-label=".form-select-sm" id="category" name="category_id">
            @foreach($categories as $category)
            <option
                {{old('category_id') == $category->id ? 'selected' : ''}}
                value="{{ $category->id }}"> {{ $category->title }} </option>
            @endforeach
        </select>

        @foreach($tags as $tag)
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="tags[]"
                   value="{{ $tag->id }}" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                {{ $tag->title }}
            </label>
        </div>
        @endforeach

        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
@endsection
