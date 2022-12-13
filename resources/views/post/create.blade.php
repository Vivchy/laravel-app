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

        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
@endsection
