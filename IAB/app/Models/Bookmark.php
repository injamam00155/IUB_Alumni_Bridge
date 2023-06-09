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


class Bookmark extends Model
{
    use HasFactory;
    // public $timestamps=false;
    protected $fillable = ['bookmarkID', 'userEmail'];

    //Functions for Relations
    public function user()
    {
        return $this->belongsTo(User::class, 'userEmail');
    }

    public function post()
    {
        return $this->belongsTo(Post::class, 'postID');
    }
    
    //Needed Functions
}
