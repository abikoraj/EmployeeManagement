<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    use HasFactory;

    public function getStdBook(){
        return $this->belongsToMany(Book::class,'libraries','student_id','book_id');
    }
}
