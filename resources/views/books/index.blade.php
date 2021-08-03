@extends('layouts.layout')

@section('content')
        <div class="row showBooks">
            <div class="col">
                <h2>Books</h2>
                <table class="table-light hover">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Autor</th>
                        <th>Genre</th>
                        <th>Edition</th>
                        <th>Publication year</th>
                        <th>Status</th>
                    </tr>
                @foreach($books as $books)
                            
                            <tr>
                                <td>{{$books->id}}</td>
                                <td>{{$books->name}}</td>
                                <td>{{$books->autor}}</td>
                                <td>{{$books->genre}}</td>
                                <td>{{$books->edition}}</td>
                                <td>{{$books->publication_year}}</td>
                                <td>{{$books->status}}</td>
                            </tr>
                            @endforeach 
                </table>
            </div>
        </div>
@endsection
