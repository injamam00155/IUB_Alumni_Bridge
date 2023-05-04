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
    
        //Functions for Relations
    public function queryPost()
    {
        return $this->hasMany(QueryPost::class, 'postID');
    }

    public function awardPost()
    {
        return $this->hasMany(AwardPost::class, 'postID');
    }

    public function eventPost()
    {
        return $this->hasMany(EventPost::class, 'postID');
    }


    public function jobPost()
    {
        return $this->hasMany(Job::class, 'postID');
    }

    public function comment()
    {
        return $this->hasMany(Comment::class, 'postID');
    }

    public function bookmark()
    {
        return $this->hasMany(Bookmark::class, 'postID');
    }

    //Needed Functions
    public function isPost()
    {
        return DB::table('posts')->where('postID', $this->postID)->exists();
    }

    public function isQueryPost()
    {
        return DB::table('queries')->where('postID', $this->postID)->exists();
    }

    public function isJob()
    {
        return DB::table('jobs')->where('postID', $this->postID)->exists();
    }

    public function isEventPost()
    {
        return DB::table('events')->where('postID', $this->postID)->exists();
    }
    
    public function isAward()
    {
        return DB::table('awards')->where('postID', $this->postID)->exists();
    }
}
