<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public function author_book()
    {
        return $this->hasMany(author_book::class);
    }
}
