<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
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
    public function findAdmindRecord($userEmail)
    {
        $data = DB::table('users')
        ->join('admins', 'users.userEmail', '=', 'admins.userEmail')
        ->where('users.userEmail', $userEmail)
        ->select('users.*', 'admins.*')
        ->first();
    }


}
