<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Query extends Post
{
    use HasFactory;
    protected $timestamps=false;
    protected $fillable = ['postID', 'postDescription', 'userEmail'];
    public function isQuery()
    {
        return DB::table('queries')->where('postID', $this->postID)->exists();
    }
}
