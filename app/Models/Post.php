<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    # protected $table = 'posts'; // Use this if your table name is different from the model name
    protected $fillable = ['title', 'body']; // Use this to allow mass assignment
}
