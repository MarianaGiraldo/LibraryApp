@extends('layouts.app')

@section('content')
    <div class="row m-4 ">
        <div class="col">
            <h1>Return book: {{$book->title}} </h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
        @if($errors!=null)
        <div class="w-75 mx-auto" >
          <ul class="list-group-flush" >
            @foreach( $errors as $error)
              <li class="list-group-item list-group-item-danger">{{$error}} </li>
            @endforeach
          </ul>
        </div>
        @endif
            <form action="/books/{{$book->id}}/return" method="POST" class="w-75 mx-auto formulario p-4 rounded" >
                @csrf
                <div class="formgroup row mb-3">
                    <label for="mail" class="col-sm-3 col-form-label">Email: </label>
                    <div class="col-sm-9">
                      <input  type="email" class="form-control" id="email" name="email" placeholder="Type your email" >
                    </div>
                </div>
                <br>
                <div class="row w-50 mx-auto"> <button type="submit" class="btn btn-primary col-12 mx-auto text-center">Return book</button></div>
                <br>
            </form>
        </div>
    </div>
    <a href="/books/{{$book->id}}" class="btn btn-primary m-3" role="button">Back</a>
@endsection
