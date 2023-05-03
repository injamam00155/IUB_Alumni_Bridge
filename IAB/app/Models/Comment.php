<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Comment extends Model
{
    use HasFactory;
    // public $timestamps=false;
    protected $fillable = ['commentID', 'description', 'userEmail', 'postID'];
}
