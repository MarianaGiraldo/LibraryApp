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
        $photo = $request->file('book_cover');
        $filename = time() . '.' . $photo->getClientOriginalExtension();
        $destino=public_path('images/books/');
        $request->book_cover->move($destino, $filename);
        //dd($photo. " Se movió el archivo");
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
        return view('books.edit', ['book'=>$book, 'fondo'=>'#ccb8e6']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $bookUpdt = Book::find($id);
        $bookUpdt ->title = $request->get('titleEdit');
        $bookUpdt ->autor = $request->get('autorEdit');
        $bookUpdt ->genre = $request->genreEdit;
        $bookUpdt ->publication_year = $request->get('p_yearEdit');
        $photo = $request->file('book_cover');
        $filename = time() . '.' . $photo->getClientOriginalExtension();
        $destino=public_path('images/books/');
        $request->book_cover->move($destino, $filename);
        $bookUpdt ->book_cover = $filename;
        $bookUpdt -> save();
        return redirect('/books');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroyBook = Book::find($id);
        $destroyBook->delete();
        return redirect('/books');
    }

    public function drop($id)
    {
        $dropBook = Book::find($id);
        return view('books.drop', ['dropBook'=>$dropBook, 'fondo'=>'#ccb8e6']);

    }

}
