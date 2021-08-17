<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Book;

class BookInfo extends Mailable
{
    use Queueable, SerializesModels;
    private $book;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Book $book)
    {
        $this->book = $book;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('norequest@thegoldenbook.com')
                ->markdown('mail.book', [
                    'book' => $this->book,
                    'url' => 'http://localhost:8000/books/'.$this->book->id.'/borrow'
                ]);
    }
}
