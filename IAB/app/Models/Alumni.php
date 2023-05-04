<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Alumni extends Student
{
    use HasFactory;
    protected $table = 'alumni'; 
    protected $fillable = ['userEmail',	'designation',	'currentWorkPlace',	'graduationYear'];

    //Functions for Relations
    public function student()
    {
        return $this->belongsTo(Student::class, 'userEmail');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'userEmail');
    }
    public function jobPost()
    {
        return $this->hasMany(JobPost::class, 'postID');
    }
    
    //Needed Functions
    public function isCurrentStudent()
    {
        
        return DB::table('current_students')->where('userEmail', $this->userEmail)->exists();
    }
}
