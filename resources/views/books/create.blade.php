@extends('layouts.layout')

@section('content')
<div class="row">
            <div class="col">
                <h2>Users</h2>
                <form action="/books" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Type your name">
                        <label for="name">UserName</label>
                        <input type="text" class="form-control" id="userName" name="userName" placeholder="Type your User Name">                        
                    </div>
                    <button type="submit" class="btn btn-warning">Submit</button>
                </form>                
                <a href="books/create" class="btn btn-primary">Create user</a>
@endsection