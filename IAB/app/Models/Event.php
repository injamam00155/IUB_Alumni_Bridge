<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Event extends Post
{
    use HasFactory;
    protected $timestamps=false;
    protected $fillable = ['postID', 'eventTitle', 'eventDescription', 'eventDate'. 'eventImageURL', 'eventLocation'];
    public function isEvent()
    {
        return DB::table('events')->where('postID', $this->postID)->exists();
    }
    
}
