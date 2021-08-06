@extends('layouts.layout')

@section('content')
<?php 
    function displayImage($id){
        $host     = 'localhost';
        $username = 'root';
        $password = '';
        $db     = 'libraryappdb';
        
        //Create the connection and select the database
        $db = new mysqli($host, $username, $password, $db);
        
        // Check the connection
        if($db->connect_error){
            die("Connexion error: " . $db->connect_error);
        }
        
        //Get the image from the database
        $res = $db->query("SELECT book_cover FROM books WHERE id = {$id}");
        
        if($res->num_rows > 0){
            $img = $res->fetch_assoc();
            
            //Render the image
            header("Content-type: image/jpg"); 
            echo $img['book_cover']; 
        }else{
            echo 'Image not found...';
        }
    
    }
?> 
        <div class="row ">
            <div class="col">
                <h2 class="m-3">Books</h2>
                <div class="row">
                @foreach($books as $book)
                    <div class="card col-4 showBooks m-4" >
                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($book->book_cover); ?>" alt="{{$book->title}} cover image" />
                    <?php
                    displayImage($book->id); 
                    ?>
                    <div class="card-body">
                            <h5 class="card-title">Book title: {{$book->title}} </h5>
                            <p class="card-text">Autor: {{$book->autor}} </p>
                            <p class="card-text">Genre: {{$book->genre}} </p>
                            <p class="card-text">Edition: {{$book->edition}} </p>
                            <p class="card-text">Publication Year: {{$book->publication_year}} </p>
                            <p class="card-text">Status: {{$book->status}} </p>
                            <a href="#" class="btn btn-primary">View more</a>
                            <p class="card-text text-end">{{$book->id}} </p>
                        </div>
                    </div>
                @endforeach
                </div>
                <a href="/books/create" class="btn btn-primary d-grid gap-2 col-6 mx-auto" role="button">Create a new Book</a>
                <br>
            </div>
        </div>
@endsection
