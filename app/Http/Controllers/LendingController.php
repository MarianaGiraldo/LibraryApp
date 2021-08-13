<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lending;
use App\Models\Book;
use App\Models\User;
use Illuminate\Support\Facades\DB;
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

        if (DB::table('users')->where('email', $request->get('email'))->count() == 0) {
            array_push($errors, 'That email isn´t registered', 'Enter a registered email');
            return view('lendings.borrow', ['book'=>$book, 'fondo'=>'#f6ec9c', 'errors'=>$errors]);
        }else {
            $user = DB::table('users')->where('email', $request->get('email'))->first();
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
        $user = DB::table('users')->where('email', $request->get('email'))->first();
        $errors=array();
        if (DB::table('users')->where('email', $request->get('email'))->count() == 0) {
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
        return view('lendings.show', ['lendings'=>$lendings, 'books'=>$books, 'users'=>$users , 'fondo'=>'#91a5f5']);
    }


}
