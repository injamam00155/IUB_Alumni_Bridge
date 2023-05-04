<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Admin extends User
{
    use HasFactory;

    //Functions for relations
    public function user()
    {
        return $this->belongsTo(User::class, 'userEmail');
    }

    public function awardPost()
    {
        return $this->hasMany(AwardPost::class, 'userEmail');
    }

    public function eventPost()
    {
        return $this->hasMany(EventPost::class, 'userEmail');
    }
    
    //Needed Functions
    public function isAdmin()
    {
        return DB::table('admins')->where('userEmail', $this->userEmail)->exists();
    }

}
