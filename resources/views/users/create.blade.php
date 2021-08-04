@extends('layouts.layout')

@section('content')
<div class="row m-4 ">
        <div class="col">
            <h1>Create a new User</h1>
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
        <div class="row">
            <div class="col">
                <form action="/users" method="POST" class="w-75 mx-auto usersFormCreate p-4 rounded">
                @csrf
                    <div class="formgroup row mb-3">
                        <label for="firstName" class="col-sm-4 col-form-label">First Name: </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Type your first name">
                        </div>
                    </div>
                    <div class="formgroup row mb-3">
                        <label for="lastName" class="col-sm-4 col-form-label">Last Name: </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Type your Last name">
                        </div>
                    </div>
                    <div class="formgroup row mb-3">
                        <label for="birthDate" class="col-sm-4 col-form-label">Date of birth: </label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="birthDate" name="birthDate" placeholder="Select your birth date">
                        </div>
                    </div>
                    <div class="formgroup row mb-3">
                        <label for="email" class="col-sm-4 col-form-label">Email: </label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Type your Email"> 
                        </div>
                    </div>
                    <div class="formgroup row mb-3">
                        <label for="password" class="col-sm-4 col-form-label">Password: </label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Type your Password">                       
                        </div>
                    </div>
                    <div class="row w-50 mx-auto"> <button type="submit" class="btn btn-success btn-lg col-12 mx-auto text-center">Create</button></div>
                </form>
            </div>
        </div>
<a href="/users" class="btn btn-primary m-3" role="button">Back</a>
</div>
@endsection