@extends('layout.layout')

@section('content')
    <div class="container">
    <form class="mb-4" action="/addPost" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">title</label>
            <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                   placeholder="Enter title">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">content</label>
            <textarea class="form-control" name="body" id="exampleFormControlTextarea1" rows="5"></textarea>
        </div>
        <div class="form-check">

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
@endsection
