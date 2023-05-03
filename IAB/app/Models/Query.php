<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Query extends Post
{
    use HasFactory;

    public function isQuery()
    {
        return DB::table('queries')->where('postID', $this->postID)->exists();
    }
}
