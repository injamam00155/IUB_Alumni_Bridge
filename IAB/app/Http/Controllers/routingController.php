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

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class routingController extends Controller
{
    //login, signup and forgotPassword routing functions
    public function index() {
        return view('index');
    }

    public function forgotPassword() {
        return view('forgotPassword');
    }

    public function signup() {
        return view('signup');
    }

    //admin routing functions
    public function adminDashboard() {
        $posts = Post::all();
        $data = [
            'name' => 'John Doe',
            'age' => 25,
            'email' => 'johndoe@example.com'
        ];
        return view('admin/home', ['data' => $data]);
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
    
    //currentStudent routing functions
    public function currentStudentDashboard() {
        $posts = Post::all();
        $data = [
            'name' => 'John Doe',
            'age' => 25,
            'email' => 'johndoe@example.com'
        ];
        return view('student/home', ['data' => $data]);
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
    
    //alumni routing functions
    public function alumniDashboard() {
        $data= Post::all();
        // dd($data[3]->eventPost);
        // $data= EventPost::all();
        $pvc=new postViewController;
        $data= $pvc->viewPosts();
        // dd($data);
        // dd(session()->all());
        return view('alumni/home', ['data' => $data]);
    }
    
    public function alumniBookmarks() {
        return view('alumni/bookmarks');
    }
    public function alumniEvents() {
        $pvc = new postViewController;
        $data = $pvc->viewEvents(); 
        return view('alumni/events', ['data' => $data]);
    }

    public function alumniJobs() {
        // $pvc = new postViewController;
        // $data = $pvc->viewJobs(); 
        // return view('alumni/jobs', ['data' => $data]);
        return view('alumni/jobs');
    }
    public function alumniProfile() {
        return view('alumni/profile');
    }
    public function alumniAwards() {
        return view('alumni/awards');
    }
}


