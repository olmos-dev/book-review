<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    Use HasFactory;

    protected $fillable = ['review','rating'];

    public function books()
    {
        return $this->belongsTo(Book::class);
    }
}
