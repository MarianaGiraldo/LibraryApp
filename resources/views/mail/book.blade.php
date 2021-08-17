@component('mail::message')
<h1>Book Info</h1>

@component('mail::table')
| Book title          | Autor             | Genre            | Publication Year | Status      |
| ------------------- |:-----------------:| ----------------:|-----------------:|------------:|
| {{$book->title}}    |  {{$book->autor}} |  {{$book->genre}}|{{$book->publication_year}}| {{$book->status}} |
@endcomponent

@component('mail::button', ['url' => $url, 'color' => 'success'])
Borrow book
@endcomponent

{{ config('app.name') }}
@endcomponent

