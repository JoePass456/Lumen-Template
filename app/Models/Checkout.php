<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    public function user()
    {
        return $this->hasOne(Author::class);
    }
    public function book()
    {
        return $this->hasOne(Book::class);
    }

}
