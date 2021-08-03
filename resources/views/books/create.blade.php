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
            <form action="/books" method="POST" class="w-75 mx-auto formulario p-4 rounded" >
                @csrf
                <div class="formgroup row mb-3">
                    <label for="title" class="col-sm-4 col-form-label">Book Title: </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="title" name="title">
                    </div>
                </div>
                <div class="formgroup row mb-3">
                    <label for="autor" class="col-sm-4 col-form-label">Autor: </label>
                    <div class="col-sm-8">
                      <input type="date" class="form-control" id="autor" name="autor">
                    </div>
                </div>
                <div class="formgroup row mb-3">
                    <label for="genre" class="col-sm-4 col-form-label">Genre: </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="genre" name="genre">
                    </div>
                </div>
                <div class="formgroup row mb-3">
                    <label for="edition" class="col-sm-4 col-form-label">Book edition: </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="edition" name="edition">
                    </div>
                </div>
                <div class="formgroup row mb-3">
                    <label for="p_year" class="col-sm-4 col-form-label">publication_year: </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="p_year" name="p_year">
                    </div>
                </div>
                <div class="formgroup row mb-3">
                    <label for="status" class="col-sm-4 col-form-label">Book status: </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="status" name="status">
                    </div>
                </div>
                <div class="row w-50 mx-auto"> <button type="submit" class="btn btn-success btn-lg col-12 mx-auto text-center">Crear</button></div>
            </form>
        </div>
    </div>
    <a href="/books" class="btn btn-primary m-3" role="button">Atrás</a>

@endsection
