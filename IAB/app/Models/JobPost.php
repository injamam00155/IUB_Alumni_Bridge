<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\Alumni;
// use App\Models\JobPost;
use App\Models\EventPost;
use App\Models\AwardPost;
use App\Models\QueryPost;

class JobPost extends Post
{
    use HasFactory;
    public $timestamps=false;
    protected $table = 'job_posts';
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
