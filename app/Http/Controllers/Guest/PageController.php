<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Book;

class PageController extends Controller
{
    public function homepage(){
        $books = Book::where('title', 'LIKE' , 'a%')->limit(10)->get();

        // $book = new Book();
        // $book->title = 'Ginetto va in campagna';
        // $book->author = 'Ginetta Tolkien';
        // $book->cover ='img che non c\'e\'';
        // $book->save();


        return view('guest.home', compact('books'));
    }
}
