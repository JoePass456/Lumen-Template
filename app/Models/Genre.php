<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public function book()
    {
        return $this->belongsToMany(book_genre::class);
    }
}
