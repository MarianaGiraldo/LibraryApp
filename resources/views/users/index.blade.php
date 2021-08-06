@extends('layouts.layout')

@section('content')
<div class="row p-4">
        <div class="col">
            <h1>Users</h1>
            <table class="table table-hover table-bordered border-success">
                <tr class="table-primary table-active">
                            <th>ID</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Birth Date</th>
                            <th scope="col">Books held</th>
                </tr>
                    @foreach($users as $user)
                        <tr class="table-light">
                            <td class="table-warning" scope="row" > {{$user->id}}</td>
                            <td >{{$user->firstName}} </td>
                            <td >{{$user->lastName}} </td>
                            <td >{{$user->email}} </td>
                            <td >{{$user->birthDate}} </td>
                            <td >{{$user->list_books_held}} </td>                        
                        </tr>
                    @endforeach
                    </table>
                    <a href="/users/create" class="btn btn-primary d-grid gap-2 col-6 mx-auto" role="button">Create a new user</a>
                </div>
            </div>
        </div>
@endsection
