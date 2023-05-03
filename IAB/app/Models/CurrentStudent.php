<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class CurrentStudent extends Student
{
    use HasFactory;
    protected $timestamps=false;
    protected $fillable = ['userEmail', 'program', 'major', 'minor'];

    public function isCurrentStudent()
    {
        
        return DB::table('current_students')->where('userEmail', $this->userEmail)->exists();
    }
}
