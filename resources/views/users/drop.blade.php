@extends('layouts.layout')

@section('content')
<div class="row m-4 ">
        <div class="col">
            <h1>¿Delete User {{$dropUser-> firstName}} {{$dropUser-> lastName}}?</h1> <br><br>
        </div>
    <div class="row">
            <div class="col">
                <form action="users/{{$dropUser->id}} " method="POST" class="w-50 mx-auto confirmDrop p-4 rounded">
                @csrf
                @method('DELETE')
                <div class="formgroup row mb-3">
                    <label for="delete" class="col col-form-label fs-3 ">Confirm if you want to delete this user. </label>
                </div>
                <button type="submit" class="btn btn-warning">Delete</button>
                </form>
                <a href="/users" class="btn btn-primary m-3" role="button">Cancel</a>
            </div>
    </div>
</div>
@endsection
