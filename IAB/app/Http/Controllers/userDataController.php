<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use App\Models\Student;
use App\Models\CurrentStudent;
use App\Models\Alumni;
use App\Models\Post;
use App\Models\JobPost;
use App\Models\EventPost;
use App\Models\AwardPost;
use App\Models\QueryPost;
use App\Models\Comment;
use App\Models\Bookmark;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class userDataController extends Controller
{
    public function findCurrentStudentRecord($userEmail)
    {
        $data = DB::table('users')
        ->join('students', 'users.userEmail', '=', 'students.userEmail')
        ->join('current_students', 'users.userEmail', '=', 'current_students.userEmail')
        ->where('users.userEmail', $userEmail)
        ->select('users.*', 'students.*', 'current_students.*')
        ->first();
    }

    
    public function findAlumniRecord($userEmail)
    {
        $data = DB::table('users')
        ->join('students', 'users.userEmail', '=', 'students.userEmail')
        ->join('alumni', 'users.userEmail', '=', 'alumni.userEmail')
        ->where('users.userEmail', $userEmail)
        ->select('users.*', 'students.*', 'alumni.*')
        ->first();
    }
    public function findAdminRecord($userEmail)
    {
        $data = DB::table('users')
        ->join('admins', 'users.userEmail', '=', 'admins.userEmail')
        ->where('users.userEmail', $userEmail)
        ->select('users.*', 'admins.*')
        ->first();
    }


}
