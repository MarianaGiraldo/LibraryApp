<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lending extends Model
{
    use HasFactory;
    public function lendingUser(){
        return $this->belongsTo(User::class);
    }
    public function lendingBook(){
        return $this->belongsTo(Book::class);
    }
}
