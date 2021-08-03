@extends('layouts.layout')

@section('content')
        <div class="row ">
            <div class="col">
                <h2 class="m-3">Books</h2>
                <div class="row">
                @foreach($books as $book)
                    <div class="card col-4 showBooks m-4" >
                    <img src="data:image/gif;base64,{{$book->book_cover}}" alt="{{$book->title}} cover image" >
                    <?php
                    echo '<img src="data:image/jpg;base64,'.base64_encode($book->book_cover).'" alt="{{$book->title}} cover image"/>';
                    ?>
                    <div class="card-body">
                            <h5 class="card-title">Book title: {{$book->title}} </h5>
                            <p class="card-text">Autor: {{$book->autor}} </p>
                            <p class="card-text">Genre: {{$book->genre}} </p>
                            <p class="card-text">Edition: {{$book->edition}} </p>
                            <p class="card-text">Publication Year: {{$book->publication_year}} </p>
                            <p class="card-text">Status: {{$book->status}} </p>
                            <a href="#" class="btn btn-primary">View more</a>
                            <p class="card-text text-end">{{$book->id}} </p>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
@endsection
