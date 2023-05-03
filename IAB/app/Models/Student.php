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
