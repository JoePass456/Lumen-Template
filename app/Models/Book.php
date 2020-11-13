<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;
    protected $table = 'books';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;

    public function author_book()
    {
        return $this->belongsToMany(author_book::class);
    }

    public function new_book($title)
    {
        $book = new Book;
        $book->title = $title;
        $book->save();
    }
}
