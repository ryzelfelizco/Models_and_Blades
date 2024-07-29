<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    // Define fillable fields if necessary
    protected $fillable = ['isbn', 'title', 'author', 'description', 'date_published'];
}
