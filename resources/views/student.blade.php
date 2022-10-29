@extends('layout.layout')

@section('content')
    @foreach($students as $item)
        <div class="card" style="width: 18rem;">
            <div class="card-header">
                <a href="student/{{ $item->id }}">{{$item->last_name . ' '.  $item->first_name}} ({{ $item->worksa->count() }}) </a>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">{{$item->age}}</li>
                <li class="list-group-item">{{$item->speciality}}</li>
                <li class="list-group-item">id = {{$item->id}}</li>

            </ul>
        </div>
    @endforeach
@endsection
