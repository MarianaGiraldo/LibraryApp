<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('books.index', ['books'=>Book::all(), 'fondo'=>'#add8e6']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.create', ['books'=>Book::all(), 'fondo'=>'#ccb8e6']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nuevo = new book();
        $nuevo ->title = $request->get('title');
        $nuevo ->autor = $request->get('autor');
        $nuevo ->genre = $request->genre;
        $nuevo ->publication_year = $request->get('p_year');
        $nuevo ->status = $request->status;
        $photo = $request->file('book_cover')->getClientOriginalExtension();
        dd($photo);
        $filename = time() . '.' . $photo->getClientOriginalExtension();
        Image::make($photo)->resize(350,350)->save(public_path('images/' . $filename));
        $nuevo ->book_cover = $filename;
        $nuevo -> save();
        return redirect('/books');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('books.show', ['id'=>$id ,'book'=>Book::findOrFail($id), 'books'=>Book::all(), 'fondo'=>'#91a5f5']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('books.create', ['book'=>$book, 'fondo'=>'#ccb8e6']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
    }
}
