<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class JobPost extends Post
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable = ['postID', 'jobTitle', 'companyName', 'location', 'jobDescription', 'responsibility', 'requirement', 'contactEmail', 'userEmail'];
    
    //Functions for Relations
    public function post()
    {
        return $this->belongsTo(Post::class, 'postID');
    }

    public function alumni()
    {
        return $this->belongsTo(Alumni::class, 'userEmail');
    }
    
    //Needed Functions
    public function isJobPost()
    {
        return DB::table('jobs')->where('postID', $this->postID)->exists();
    }

    
}
