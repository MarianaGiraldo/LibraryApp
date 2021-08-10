<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lending;
use App\Models\Book;
use App\Models\User;
use Illuminate\Support\Facades\DB;

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

    public function return_form($book_id)
    {
        $book= Book::findOrFail($book_id);
        return view('lendings.return', ['book'=>$book, 'fondo'=>'#f6ec9c']);
    }

    public function return(Request $request, $book_id)
    {
        $book= Book::findOrFail($book_id);
        $user = DB::table('users')->where('email', $request->get('email'))->first();
        $user = User::findOrFail($user->id);
        $user->list_books_held = str_replace($book->title, "", $user->list_books_held);
        $user->save();

        $book->status = 'Available';
        $book->save();

        $new_lend = new Lending();
        $new_lend ->user_id = $user->id;
        $new_lend ->book_id = $book_id;
        $new_lend ->type = "Return";
        $new_lend-> save();
        return redirect('/books/'.$book_id);
    }

}
