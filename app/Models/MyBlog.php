<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyBlog extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body', 'id'];

    public function comment(){
        return $this->hasMany(MyComment::class, 'my_blog_id', 'id');
    }

}
