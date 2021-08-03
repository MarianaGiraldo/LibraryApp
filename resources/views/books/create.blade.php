@extends('layouts.layout')

@section('content')
<div class="row m-4 ">
        <div class="col">
            <h1>Create a new book</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
        @if($errors->any())
        <div class="w-75 mx-auto" >
          <div class="alert alert-danger  my-1" role="alert"> Error! Record not saved </div>
          <ul class="list-group-flush" >
            @foreach( $errors->all() as $error)
              <li class="list-group-item list-group-item-danger">{{$error}} </li>
            @endforeach
          </ul>
        </div>         
        @endif
            <form action="/books" method="POST" class="w-75 mx-auto booksFormCreate p-4 rounded" >
                @csrf
                <div class="formgroup row mb-3">
                    <label for="title" class="col-sm-4 col-form-label">Book Title: </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="title" name="title" placeholder="Enter the book title">
                    </div>
                </div>
                <div class="formgroup row mb-3">
                    <label for="autor" class="col-sm-4 col-form-label">Autor: </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="autor" name="autor" placeholder="Enter the book autor">
                    </div>
                </div>
                <div class="formgroup row mb-3">
                    <label for="genre" class="col-sm-4 col-form-label">Genre: </label>
                    <div class="col-sm-8">
                      <select class="form-select" aria-label="genre" name="genre">
                        <option value="Action">Action</option>
                        <option value="Romance">Romance</option>
                        <option value="Politics">Politics</option>
                        <option value="Science Fiction">Science Fiction</option>
                        <option value="Literary fiction">Literary fiction</option>
                        <option value="Mistery">Mistery</option>
                        <option value="Thriller">Thriller</option>
                        <option value="Horror">Horror</option>
                        <option value="Historical">Historical</option>
                        <option value="Fantasy">Fantasy</option>
                        <option value="Dystopian">Dystopian</option>
                        <option value="Magical Realism">Magical Realism</option>
                        <option value="Realist Literature">Realist Literature</option>
                        <option value="Other">Other</option>
                      </select>
                    </div>
                </div>
                <div class="formgroup row mb-3">
                    <label for="edition" class="col-sm-4 col-form-label">Book edition: </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="edition" name="edition" placeholder="Enter the book edition">
                    </div>
                </div>
                <div class="formgroup row mb-3">
                    <label for="p_year" class="col-sm-4 col-form-label">Publication Year: </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="p_year" name="p_year" placeholder="YYYY">
                    </div>
                </div>
                <div class="formgroup row mb-3">
                    <label for="status" class="col-sm-4 col-form-label">Book status: </label>
                    <div class="col-sm-8">
                      <select class="form-select" aria-label="status" name="status">
                        <option value="Available">Available</option>
                        <option value="Borrowed">Borrowed</option>
                      </select>
                    </div>
                </div>
                <div class="formgroup row mb-3">
                    <label for="book_cover" class="col-sm-4 col-form-label">Book Cover: </label>
                    <div class="col-sm-8">
                      <input class="form-control" type="file" id="book_cover" name="book_cover">
                    </div>
                </div>

                <div class="row w-50 mx-auto"> <button type="submit" class="btn btn-success btn-lg col-12 mx-auto text-center">Create</button></div>
            </form>
        </div>
    </div>
    <a href="/books" class="btn btn-primary m-3" role="button">Back</a>

@endsection
