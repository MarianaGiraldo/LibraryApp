@extends('layouts.layout')

@section('content')
        <div class="row mt-5 p-4">
      <table class="table table-hover table-bordered border-success w-75 mx-auto">
      <h2 class="mx-auto text-center">Lendings History</h2>
        <tr class="table-primary table-active">
            <th>ID</th>
            <th scope="col">Lending type</th>
            <th scope="col">Book title</th>
            <th scope="col">User name</th>
            <th scope="col">Date</th>
        </tr>
        <?php $i=0; ?>
    @foreach ($lendings as $lending)
        <tr class="table-light">
            <td class="table-warning" scope="row" >{{$lending->id}}</td>
            <td >{{$lending->type}} </td>
            <td >{{$books[$i]->title}} </td>
            <td >{{$users[$i]->name}}</td>
            <td>{{date("d/m/Y",strtotime($lending->created_at))}} </td>
        </tr>
        <?php $i++; ?>
    @endforeach
    </table>
    
    </div>
    <a href="/books" class="btn btn-warning m-3" role="button">Back</a>

@endsection