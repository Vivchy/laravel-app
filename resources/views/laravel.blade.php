@extends('layout.layout')

@section('content')
    <ul>
        @foreach($result as $res)
            <li>{{$res}}</li>
        @endforeach
    </ul>
@endsection
