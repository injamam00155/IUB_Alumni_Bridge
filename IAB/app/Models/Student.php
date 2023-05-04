<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Student extends User
{
    use HasFactory;
    // protected $table = 'students'; 
    protected $fillable = ['userEmail',	'firstName','lastName',	'iubId','school','linkedIn','facebook',	'contactNo','dob','profilePictureURL'];
    
    
    //Functions for Relations
    public function user()
    {
        return $this->belongsTo(User::class, 'userEmail');
    }

    public function alumni()
    {
        return $this->hasOne(Alumni::class, 'userEmail');
    }

    public function currentStudent()
    {
        return $this->hasOne(CurrentStudent::class, 'userEmail');
    }

    public function comment()
    {
        return $this->hasMany(Comment::class, 'userEmail');
    }

    public function bookmarks()
    {
        return $this->hasMany(Bookmark::class, 'userEmail');
    }

    //Needed Functions
    public function isStudent()
    {
        return DB::table('students')->where('userEmail', $this->userEmail)->exists();
    }

    public function isAlumni()
    {
        return DB::table('alumni')->where('userEmail', $this->userEmail)->exists();
    }
    
    public function isCurrentStudent()
    {
        
        return DB::table('current_students')->where('userEmail', $this->userEmail)->exists();
    }
}
