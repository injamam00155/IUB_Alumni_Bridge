<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Student
{
    use HasFactory;
    protected $table = 'alumni'; 
    protected $fillable = ['userEmail',	'designation',	'currentWorkPlace',	'graduationYear'];
}
