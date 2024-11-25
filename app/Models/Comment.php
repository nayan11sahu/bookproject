<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
       use HasFactory;

    protected $fillable = ['book_id', 'user_id', 'content'];
}
