<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
// use App\Models\Alumni;
use App\Models\JobPost;
use App\Models\EventPost;
use App\Models\AwardPost;
use App\Models\QueryPost;

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
