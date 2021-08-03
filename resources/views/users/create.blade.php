@extends('layouts.layout')

@section('content')
<div class="row">
            <div class="col">
                <h2>Create User</h2>
                <form action="/users" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="firstName">First Name</label>
                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Type your first name">
                        <label for="lastName">Last Name</label>
                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Type your last name">
                        <label for="birthDate">Date of birth</label>
                        <input type="date" class="form-control" id="birthDate" name="birthDate" placeholder="Select your date of birth">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Type your Email"> 
                        <label for="password">Password</label>
                        <input type="hidden" class="form-control" id="password" name="password" placeholder="Type your Email">                       
                    </div>
                    <button type="submit" class="btn btn-warning">Submit</button>
                </form>
@endsection