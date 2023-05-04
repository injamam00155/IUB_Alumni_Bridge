<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Alumni;
use App\Models\User;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\EventPost;

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
        $data = [];
        $posts = Post::where('postID', 3)->get();
        // foreach($posts as $post)
        // { 
        //     if($post->queryPost){$data[]=['post'=>$post->queryPost];}
        //     if($post->jobPost){$data[]=['post'=>$post->jobPost];}
        //     if($post->awardPost){$data[]=['post'=>$post->awardPost];}
        //     if($post->eventPost){$data[]=['post'=>$post->eventPost];}
        // }
        // $data[]=$posts;
        // dd($data[0][2]->eventPost);
        $events=$posts->eventPost;
        dd($events);
        
        // var_dump($data);
        return view('alumni/home', ['data' => $events]);
    }
    public function alumniBookmarks() {
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


