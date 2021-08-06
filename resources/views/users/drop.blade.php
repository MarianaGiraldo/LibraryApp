@extends('layouts.layout')

@section('content')
<div class="row m-4 ">
        <div class="col">
            <h1>¿Delete User {{$dropUser-> firstName}} ?</h1>
        </div>
    <div class="row">
            <div class="col">
                <form action="{{ route('users.destroy'), $dropUser->id}}" method="POST" class="w-50 mx-auto formularioConfirm p-4 rounded">
                @csrf
                @method('DELETE')
                <div class="formgroup row mb-3">
                    <label for="delete" class="col col-form-label fs-3 ">Confirm if you want to delete the user. </label>
                </div>
                <button type="submit" class="btn btn-warning">Delete</button>
                </form>
                <a href="/users" class="btn btn-primary m-3" role="button">Cancel</a>
            </div>
    </div>
</div>
@endsection