<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends User
{
    use HasFactory;
    protected $table = 'students'; 
    protected $fillable = ['userEmail',	'firstName','lastName',	'iubId','school','linkedIn','facebook',	'contactNo','dob','profilePictureURL'];
}
