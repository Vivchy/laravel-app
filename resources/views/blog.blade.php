@extends('layout.layout')

@section('content')
    <form class="mb-4" action="/article" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">title</label>
            <input type="text"  name ="title"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter title">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">content</label>
            <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" onclick=" addArticle()" class="btn btn-primary">Submit</button>
    </form>
    <script>

        function addArticle(){
            const title = document.querySelector('input[name="title"]').value;
            const body = document.querySelector('textarea[name="content"]').value;

            let formData = new FormData();
            formData.append('title', title);
            formData.append('body', body);

            fetch('/article', {
                method: "POST",
                body: formData,
                headers:{
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf"]').getAttribute('content')
                }
            })
            location.reload();
        }
    </script>
    <div class="container">
        @foreach($result as $item)
            <div class="card text-center">
                <div class="card-header">
                    Featured
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{$item->title}}</h5>
                    <p class="card-text">{{$item->body}}</p>
                    <a href="/article/{{ $item->id }}" class="btn btn-primary">Переход куда-нибудь</a>
                </div>
                <div class="card-footer text-muted">
                    {{$item->created_at->format('d.m.Y')}}
                </div>
                <form action="/article/delete" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $item->id }}">
                    <button type="submit" class="btn-danger mb-2">delete</button>
                </form>

                <a href="/article/{{ $item->id }}/update" class="btn mb-2">update</a>

            </div>

        @endforeach
    </div>
@endsection
