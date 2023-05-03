<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Post extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable = ['postID', 'postDateTime'];
    public function isPost()
    {
        return DB::table('posts')->where('postID', $this->postID)->exists();
    }

    public function isQuery()
    {
        return DB::table('queries')->where('postID', $this->postID)->exists();
    }

    public function isJob()
    {
        return DB::table('jobs')->where('postID', $this->postID)->exists();
    }

    public function isEvent()
    {
        return DB::table('events')->where('postID', $this->postID)->exists();
    }
    
    public function isAward()
    {
        return DB::table('awards')->where('postID', $this->postID)->exists();
    }
}
