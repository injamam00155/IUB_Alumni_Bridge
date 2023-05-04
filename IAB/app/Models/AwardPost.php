<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\Alumni;
use App\Models\JobPost;
use App\Models\EventPost;
// use App\Models\AwardPost;
use App\Models\QueryPost;


class AwardPost extends Post
{
    use HasFactory;
    public $timestamps=false;
    protected $table = 'award_posts';
    protected $fillable = ['postID', 'awardTitle', 'awardDescription', 'awardDate', 'awardImageURL'];

    //Functions for Relations
    public function post()
    {
        return $this->belongsTo(Post::class, 'postID');
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'userEmail');
    }
    
    //Needed Functions
}
