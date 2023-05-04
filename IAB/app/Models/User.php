<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class User extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable = ['userEmail', 'password'];

    
    //Functions for Relations
    public function admin()
    {
        return $this->hasOne(Admin::class, 'userEmail');
    }

    public function student()
    {
        return $this->hasOne(Student::class, 'userEmail');
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
    public function isAdmin()
    {
        return DB::table('admins')->where('userEmail', $this->userEmail)->exists();
    }

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
