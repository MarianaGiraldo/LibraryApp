@extends('layouts.layout')

@section('content')
    <div class="row m-4 ">
        <div class="col mx-auto text-center">
            <h1>History of user {{$user->firstName}} {{$user->lastName}}</h1>
        </div>
    </div>

    
    <div class="row mt-5 p-4">
      <table class="table table-hover table-bordered border-success w-75 mx-auto">
      <h2 class="mx-auto text-center">All Users</h2>
        <tr class="table-primary table-active">
            <th>ID</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
            <th scope="col">Birth Date</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
    @foreach ($users as $user)
        <tr class="table-light">
            <td class="table-warning" scope="row" >{{$user->id}}</td>
            <td >{{$user->firstName}} </td>
            <td >{{$user->lastName}} </td>
            <td >{{$user->email}} </td>
            <td >{{$user->birthDate}} </td>
            <td ><a class="btn btn-success btn-sm" role="button" href="/users/{{$user->id}}/edit" >Edit</a> </td>
            <td ><a class="btn btn-danger btn-sm" role="button" href="/users/{{$user->id}}/drop" >Delete</a> </td>
        </tr>
    @endforeach
    </table>
    
    </div>
    <a href="/users" class="btn btn-warning m-3" role="button">Back</a>

@endsection