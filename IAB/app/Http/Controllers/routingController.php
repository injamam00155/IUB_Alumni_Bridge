<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\User;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class routingController extends Controller
{
    public function index() {
        return view('index');
    }

    public function forgotPassword() {
        return view('forgotPassword');
    }

    public function signup() {
        return view('signup');
    }

    public function adminDashboard() {
        return view('admin/home');
    }
    public function adminBookmarks() {
        return view('admin/bookmarks');
    }
    public function adminEvents() {
        return view('admin/events');
    }
    public function adminJobs() {
        return view('admin/jobs');
    }
    public function adminProfile() {
        return view('admin/profile');
    }
    public function adminAwards() {
        return view('admin/awards');
    }
    
    public function currentStudentDashboard() {
        return view('student/home');
    }
    public function currentStudentBookmarks() {
        return view('student/bookmarks');
    }
    public function currentStudentEvents() {
        return view('student/events');
    }
    public function currentStudentJobs() {
        return view('student/jobs');
    }
    public function currentStudentProfile() {
        return view('student/profile');
    }
    public function currentStudentAwards() {
        return view('student/awards');
    }
    
    public function alumniDashboard() {
        return view('alumni/home');
    }
    public function alumnniBookmarks() {
        return view('alumni/bookmarks');
    }
    public function alumniEvents() {
        return view('alumni/events');
    }
    public function alumniJobs() {
        return view('alumni/jobs');
    }
    public function alumniProfile() {
        return view('alumni/profile');
    }
    public function alumniAwards() {
        return view('alumni/awards');
    }


    
}


