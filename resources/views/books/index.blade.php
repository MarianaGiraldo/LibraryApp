@extends('layouts.layout')
<br><br>
@section('content')
        <div class="row ">
            <div class="col">
                <h2 class="m-3">Books</h2>
                <div class="row">
                @foreach($books as $book)
                    <div class="card col-4 showBooks m-4" >
                    <img src="images/books/{{$book->book_cover}}" alt="{{$book->title}} cover image" width="300" height="450"/>
                    <div class="card-body">
                            <h5 class="card-title">Book title: {{$book->title}} </h5>
                            <p class="card-text">Autor: {{$book->autor}} </p>
                            <p class="card-text">Status: {{$book->status}} </p>
                            <a href="books/{{$book->id}}" class="btn btn-primary">View more</a>
                            <a class="btn btn-success btn-sm d-inline" role="button" href="/books/{{$book->id}}/edit" >Edit</a>
                            <p class="card-text text-end">{{$book->id}} </p>
                        </div>
                    </div>
                @endforeach
                </div>
                <a href="/books/create" class="btn btn-primary d-grid gap-2 col-6 mx-auto" role="button">Create a new Book</a>
                <br>
            </div>
        </div>
@endsection
