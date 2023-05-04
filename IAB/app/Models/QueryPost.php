<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class QueryPost extends Post
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable = ['postID', 'postDescription', 'userEmail'];
    
    //Functions for Relations
    public function post()
    {
        return $this->belongsTo(Post::class, 'postID');
    }

    //Needed Functions
    public function isQueryPost()
    {
        return DB::table('queries')->where('postID', $this->postID)->exists();
    }
}
