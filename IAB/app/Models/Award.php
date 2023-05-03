<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Award extends Post
{
    use HasFactory;
    protected $timestamps=false;
    protected $fillable = ['postID', 'awardTitle', 'awardDescription', 'awardDate', 'awardImageURL'];
}
