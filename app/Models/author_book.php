<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class author_book extends Pivot
{
    // public function author()
    // {
    //     return $this->manyToMany(Author::class);
    // }
    // public function book()
    // {
    //     return $this->manyToMany(Book::class);
    // }
}