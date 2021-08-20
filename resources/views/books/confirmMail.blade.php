@extends('layouts.app')

@section('content')
    <div class="row m-4 ">
        <div class="col">
            <h1>Send book info to: </h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
        @if($errors->any())
        <div class="w-75 mx-auto" >
          <div class="alert alert-danger  my-1" role="alert"> Error! No se ha guardado el registro </div>
          <ul class="list-group-flush" >
            @foreach( $errors->all() as $error)
              <li class="list-group-item list-group-item-danger">{{$error}} </li>
            @endforeach
          </ul>
        </div>
        @endif
            <form action="/books/{{$book->id}}/sendMail" method="POST" class="w-75 mx-auto formulario p-4 rounded" >
                @csrf
                <div class="formgroup row mb-3">
                    <label for="mailbook" class="col-sm-3 col-form-label">Email: </label>
                    <div class="col-sm-9">
                      <input  type="email" class="form-control" id="mail" name="mail" placeholder="Type your email" >
                    </div>
                </div>
                <br>
                <div class="row w-50 mx-auto"> <button type="submit" class="btn btn-primary col-12 mx-auto text-center">Sent</button></div>
                <br>
            </form>
        </div>
    </div>
    <a href="/books/{{$book->id}}" class="btn btn-primary m-3" role="button">Back</a>
@endsection
