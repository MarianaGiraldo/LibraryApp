@extends('layouts.layout')

@section('content')
    <div class="row m-4 ">
        <div class="col mx-auto text-center">
            <h1>Information of Book {{$book->id}} </h1>
        </div>
    </div>
    <div class="row">
        <div class="w-75 mx-auto rounded">
          <div class="card m-auto">
            <img src="images/books/{{$book->book_cover}}" alt="{{$book->title}} cover image" />
          </div>
          <div class="row my-3">
          <h4>Book: {{$book->title}} </h4>
            <div class="col-sm-4">
              <div class="card show">
                <div class="card-body">
                  <h5 class="card-title">Book autor: </h5>
                  <p class="card-text">{{$book->autor}}</p>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card show">
                <div class="card-body">
                  <h5 class="card-title">Genre:</h5>
                  <p class="card-text">{{$book->genre}}</p>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card show">
                <div class="card-body">
                  <h5 class="card-title">Publication Year:</h5>
                  <p class="card-text">{{$book->publication_year}}</p>
                </div>
              </div>
            </div>
            
          </div>
          <h5>Book status: {{$book->status}} </h5>
          @if ($book->status === 'Available')
            <a href="" class="btn btn-success m-3 col btn-lg" role="button">Borrow book</a>
          @else
            <a href="" class="btn btn-success m-3 col btn-lg" role="button">Return book</a>
          @endif
         
          <a href="" class="btn btn-primary m-3 col btn-lg" role="button">Email me the Book info</a>
        </div>  
    </div>
    
    <div class="row mt-5 p-4">
      <table class="table table-hover table-bordered border-success w-75 mx-auto">
      <h2 class="mx-auto text-center">All Books</h2>
        <tr class="table-primary table-active">
            <th>ID</th>
            <th scope="col">Book title</th>
            <th scope="col">Autor</th>
            <th scope="col">Genre</th>
            <th scope="col">Publication year</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
    @foreach ($books as $book)
        <tr class="table-light">
            <td class="table-warning" scope="row" >{{$book->id}}</td>
            <td >{{$book->title}} </td>
            <td >{{$book->autor}} </td>
            <td >{{$book->genre}} </td>
            <td >{{$book->publication_year}} </td>
            <td ><a class="btn btn-success btn-sm" role="button" href="/books/{{$book->id}}/edit" >Edit</a> </td>
            <td ><a class="btn btn-danger btn-sm" role="button" href="/books/{{$book->id}}/drop" >Delete</a> </td>
        </tr>
    @endforeach
    </table>
    
    </div>
    <a href="/books" class="btn btn-warning m-3" role="button">Atrás</a>

@endsection