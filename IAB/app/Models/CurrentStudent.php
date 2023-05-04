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

class CurrentStudent extends Student
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable = ['userEmail', 'program', 'major', 'minor'];

    //Functions for Relations
    public function student()
    {
        return $this->belongsTo(Student::class, 'userEmail');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'userEmail');
    }
    
    //Needed Functions

    public function isCurrentStudent()
    {
        
        return DB::table('current_students')->where('userEmail', $this->userEmail)->exists();
    }
}
