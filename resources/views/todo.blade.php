@extends('layout.layout')

@section('content')

    <div class="container">
        <div>
            <a href="todo/done">выполнено</a>
            <a href="todo/not-done">не выполнено</a>
        </div>

        <div class="list-group mt-4">
            @foreach($todos as $item)
                <a href="#"
                   class="list-group-item list-group-item-action {{$item->status ? 'disabled' : 'active'}}">{{ $item['title'] }}

                </a>
            @endforeach
        </div>
    </div>

@endsection
