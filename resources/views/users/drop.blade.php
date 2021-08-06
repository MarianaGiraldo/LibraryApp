@extends('layouts.layout')

@section('content')
<div class="row m-4 ">
        <div class="col">
            <h1>¿Delete User {{$deleteUser-> name}} ?</h1>
        </div>
    <div class="row">
            <div class="col">
                <form action="/users/{{deleteUser->id}}" method="POST">
                @csrf
                @method('delete')
                    <button type="submit" class="btn btn-warning">Delete</button>
                </form>
            </div>
    </div>
    <a href="/users" class="btn btn-primary m-3" role="button">Back</a>
</div>
@endsection