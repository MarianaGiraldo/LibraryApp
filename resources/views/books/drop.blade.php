@extends('layouts.app')

@section('content')
<?php
// use App\Models\informe;
// $informe = informe::all();
// $id = $informe[1]->id;
// $informe = informe::find($id);
// $fondo= '#ffaa22';
?>
    <div class="row m-4 ">
        <div class="col">
            <h1>Delete book {{$dropBook->title}} </h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="{{ route('books.destroy', $dropBook->id) }}" method="POST" class="w-50 mx-auto confirmDrop p-4 rounded" >
                @csrf
                @method('DELETE')
                <div class="formgroup row mb-3">
                    <label for="delete" class="col col-form-label fs-3 ">Confirm if you want to delete the book. </label>
                </div>
                <button type="submit" class="btn btn-danger">Delete</button>
                <a href="/books" class="btn btn-primary m-3" role="button">Cancel</a>

            </form>
            <br><br>
        </div>
    </div>

@endsection
