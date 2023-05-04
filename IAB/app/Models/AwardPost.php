<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AwardPost extends Post
{
    use HasFactory;
    public $timestamps=false;
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
