@extends('layouts.app')

@section('content')
<div class="row p-4">
        <div class="col">
            <h1>Users</h1>
            <table class="table table-hover table-bordered border-success">
                <tr class="table-primary table-active">
                            <th>ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Birth Date</th>
                            <th scope="col">View</th>
                            <th scope="col">History</th>
                </tr>
                    @foreach($users as $user)
                        <tr class="table-light">
                            <td class="table-warning" scope="row" > {{$user->id}}</td>
                            <td >{{$user->name}} </td>
                            <td >{{$user->email}} </td>
                            <td >{{$user->birthDate}} </td>
                            <td><a href="users/{{$user->id}}" class="btn btn-success">View User</a></td>
                            <td><a href="users/{{$user->id}}/lendings/history" class="btn btn-primary">View History</a></td>
                        </tr>
                    @endforeach
                    </table>
                    <a href="users/create" class="btn btn-primary d-grid gap-2 col-6 mx-auto" role="button">Create a new user</a>
                </div>
            </div>
        </div>
@endsection
