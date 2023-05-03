<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Post
{
    use HasFactory;

    public function isJob()
    {
        return DB::table('jobs')->where('postID', $this->postID)->exists();
    }

    
}
