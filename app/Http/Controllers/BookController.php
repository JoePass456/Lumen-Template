<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function new_book(Request $request)
    {
        $title = $_GET['title'];
        $book = new Book;
        $book->title = $title;
        $book->save();
        return 'Done';

    } 
}
