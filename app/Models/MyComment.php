<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyComment extends Model
{
    use HasFactory;

    protected $fillable = ['my_blog_id', 'body', 'id'];
}
