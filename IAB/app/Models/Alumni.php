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
    
    //Needed Functions
    public function isCurrentStudent()
    {
        
        return DB::table('current_students')->where('userEmail', $this->userEmail)->exists();
    }
}
