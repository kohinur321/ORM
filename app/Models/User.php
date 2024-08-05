<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model

{

    function profile()
    {
        return $this->hasOne(Profile::class);
    }

    function post()
    {
        return $this->hasOne(Post::class);
    }

    function comment()
    {
        return $this->hasOne(Comment::class);
    }

    use HasFactory;
}
