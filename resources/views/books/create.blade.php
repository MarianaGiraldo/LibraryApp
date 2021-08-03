@extends('layouts.layout')

@section('content')
<div class="row">
            <div class="col">
                <h2>Add books</h2>
                <form action="/books" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="title">Book Name</label>
                        <input type="text" class="form-control" id="bookName" name="bookName" placeholder="Type the book name">
                        <label for="autor">Author</label>
                        <input type="text" class="form-control" id="userName" name="userName" placeholder="Type the author">  
                        <label for="genre">Genre</label>
                        <input type="text" class="form-control" id="Genre" name="Genre" placeholder="Select the genre">  
                        <label for="edition">Edition</label>
                        <input type="text" class="form-control" id="edition" name="edition" placeholder="Select the edition">
                        <label for="publication_year">Publication year</label>
                        <input type="text" class="form-control" id="publication_year" name="publication_year" placeholder="Select publication year"> 
                        <label for="status">Status</label>
                        <input type="text" class="form-control" id="status" name="status" placeholder="Select the status">                                             
                    </div>
                    <button type="submit" class="btn btn-warning">Submit</button>
                </form>                
                <a href="books/create" class="btn btn-primary">Create user</a>
@endsection