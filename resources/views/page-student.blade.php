@extends('layout.layout')

@section('content')
    <h1>{{ $student->first_name }}</h1>
<p>{{ $student->age }}</p>
    <p>######################################</p>
    @foreach($student->worksa as $item)
        <p>{{$item->link}}</p>
    @endforeach
@endsection
