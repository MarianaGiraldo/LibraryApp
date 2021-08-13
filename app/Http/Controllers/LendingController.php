<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lending;
use App\Models\Book;
use App\Models\User;
use Illuminate\Support\Str;

class LendingController extends Controller
{
    public function borrow_form($book_id)
    {
        $book= Book::findOrFail($book_id);
        return view('lendings.borrow', ['book'=>$book, 'fondo'=>'#f6ec9c']);
    }

    public function borrow(Request $request, $book_id)
    {
        $book= Book::findOrFail($book_id);
        $errors=array();

        if (User::('email', $request->get('email'))->count() == 0) {
            array_push($errors, 'That email isn´t registered', 'Enter a registered email');
            return view('lendings.borrow', ['book'=>$book, 'fondo'=>'#f6ec9c', 'errors'=>$errors]);
        }else {
            $user = User::where('email', $request->get('email'))->first();
            $user = User::findOrFail($user->id);
            $user->list_books_held = $user->list_books_held.' '.$book->title;
            $user->save();

            $book->status = 'Borrowed';
            $book->save();

            $new_lend = new Lending();
            $new_lend ->user_id = $user->id;
            $new_lend ->book_id = $book_id;
            $new_lend ->type = "Borrow";
            $new_lend-> save();
            return redirect('/books/'.$book_id);
        }
    }

    public function return_form($book_id)
    {
        $book= Book::findOrFail($book_id);
        return view('lendings.return', ['book'=>$book, 'fondo'=>'#f6ec9c']);
    }

    public function return(Request $request, $book_id)
    {
        $book= Book::findOrFail($book_id);
        $user = User::where('email', $request->get('email'))->first();
        $errors=array();
        if (User::where('email', $request->get('email'))->count() == 0) {
            array_push($errors, 'That email isn´t registered', 'Enter a registered email');
            return view('lendings.return', ['book'=>$book, 'fondo'=>'#f6ec9c', 'errors'=>$errors]);
        }
        $user = User::findOrFail($user->id);
        if (Str::contains($user->list_books_held, $book->title)) {
            $user->list_books_held = Str::replace($book->title, "", $user->list_books_held);
            $user->save();

            $book->status = 'Available';
            $book->save();

            $new_lend = new Lending();
            $new_lend ->user_id = $user->id;
            $new_lend ->book_id = $book_id;
            $new_lend ->type = "Return";
            $new_lend-> save();
            return redirect('/books/'.$book_id, );
        }else{
            array_push($errors,'This user didn´t borrowed this book', 'Enter the user email used to borrow this book');
            return view('lendings.return', ['book'=>$book, 'fondo'=>'#f6ec9c', 'errors'=>$errors]);
        }        
    }

    public function history()
    {
        $lendings = Lending::all();
        $users= array();
        $books= array();
        for ($i=0; $i < count($lendings); $i++) { 
            $lending = $lendings[$i];
            $user = User::findOrFail($lending->user_id);
            $book = Book::findOrFail($lending->book_id);
            array_push($users, $user);
            array_push($books, $book);
        }
        return view('lendings.history', ['lendings'=>$lendings, 'books'=>$books, 'users'=>$users , 'fondo'=>'#91a5f5']);
    }

    public function historyByUser($id)
    {
        $lendings = Lending::where('user_id', $id)->get();
        $user= User::findOrFail($id);
        $books= array();
        for ($i=0; $i < count($lendings); $i++) { 
            $lending = $lendings[$i];
            $book = Book::findOrFail($lending->book_id);
            array_push($books, $book);
        }
        return view('lendings.historyByUser', ['lendings'=>$lendings, 'books'=>$books, 'user'=>$user , 'fondo'=>'#91a5f5']);
    }

}
