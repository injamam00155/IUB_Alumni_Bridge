<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class EventPost extends Post
{
    use HasFactory;
    public $timestamps=false;
    protected $table = 'event_posts';
    protected $fillable = ['postID', 'eventTitle', 'eventDescription', 'eventDate'. 'eventImageURL', 'eventLocation'];
    
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
    public function isEventPost()
    {
        return DB::table('events')->where('postID', $this->postID)->exists();
    }
    
}
