<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Job extends Post
{
    use HasFactory;
    protected $timestamps=false;
    protected $fillable = ['postID', 'jobTitle', 'companyName', 'location', 'jobDescription', 'responsibility', 'requirement', 'contactEmail', 'userEmail'];
    public function isJob()
    {
        return DB::table('jobs')->where('postID', $this->postID)->exists();
    }

    
}
