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
        $pass=  [   

                ];
        return view('index', ['data' => $pass]);
    }

    public function forgotPassword() {
        $pass=  [   

                ];
        return view('forgotPassword', ['data' => $pass]);
    }

    // public function signup() {
    //     $pass=  [   

    //             ];
    //     return view('signup', ['data' => $pass]);
    // }

    //admin routing functions
    public function adminDashboard() {
        $pvc=new postViewController;
        $data= $pvc->viewPosts();
        $upcoming=$pvc->upcomingEvent();
        $studentPosts=$pvc->getStudentsPosts();
        $allStudent=$pvc->getAllStudents();
        // $studentComments=$pvc->getStudentsComments();
        // $bookmarks=$pvc->getallBookmarks();
        // dd($data);
        // dd(session()->all());
        $pass=  ['data' => $data,
                'upcoming'=> $upcoming,
                'studentPosts'=>$studentPosts,
                'allStudent'=>$allStudent,
                // 'studentComments'=>$studentComments,
                // 'bookmarks'=>$bookmarks,
                ];
                // dd(session()->all());
                // dd($pass);
        return view('admin/home', $pass);
    }
    public function adminEvents() {
        $pvc=new postViewController;
        $data= $pvc->viewEvents();
        $upcoming=$pvc->upcomingEvent();
        $studentPosts=$pvc->getStudentsPosts();
        $allStudent=$pvc->getAllStudents();
        $pass=  ['data' => $data,
                'upcoming'=> $upcoming,
                'studentPosts'=>$studentPosts,
                'allStudent'=>$allStudent,
                ];
        return view('admin/events', $pass);
    }
    public function adminJobs() {
        $pvc=new postViewController;
        $data= $pvc->viewJobs();
        $upcoming=$pvc->upcomingEvent();
        $studentPosts=$pvc->getStudentsPosts();
        $allStudent=$pvc->getAllStudents();
        $pass=  ['data' => $data,
                'upcoming'=> $upcoming,
                'studentPosts'=>$studentPosts,
                'allStudent'=>$allStudent,
                ];
        return view('admin/jobs', $pass);
    }
    public function adminAwards() {
        $pvc=new postViewController;
        $data= $pvc->viewAwards();
        $upcoming=$pvc->upcomingEvent();
        $studentPosts=$pvc->getStudentsPosts();
        $allStudent=$pvc->getAllStudents();
        $pass=  [
            'data' => $data,
            'upcoming'=> $upcoming,
            'studentPosts'=>$studentPosts,
            'allStudent'=>$allStudent,
            ];
        return view('admin/awards', $pass);
    }
    
    //currentStudent routing functions
    public function currentStudentDashboard() {
        $pvc=new postViewController;
        $data= $pvc->viewPosts();
        $upcoming=$pvc->upcomingEvent();
        $studentPosts=$pvc->getStudentsPosts();
        $allStudent=$pvc->getAllStudents();
        // $studentComments=$pvc->getStudentsComments();
        // $bookmarks=$pvc->getallBookmarks();
        // dd($data);
        // dd(session()->all());
        $pass=  ['data' => $data,
                'upcoming'=> $upcoming,
                'studentPosts'=>$studentPosts,
                'allStudent'=>$allStudent,
                // 'studentComments'=>$studentComments,
                // 'bookmarks'=>$bookmarks,
                ];
                // dd(session()->all());
                // dd($pass);
        return view('student/home', $pass);
    }

    public function currentStudentBookmarks() {
        $pvc=new postViewController;
        $upcoming=$pvc->upcomingEvent();
        $studentPosts=$pvc->getStudentsPosts();
        $allStudent=$pvc->getAllStudents();
        $pass=  [
            'upcoming'=> $upcoming,
            'studentPosts'=>$studentPosts,
            'allStudent'=>$allStudent,
            ];
        return view('student/bookmarks', $pass);
    }
    public function currentStudentEvents() {
        $pvc=new postViewController;
        $data= $pvc->viewEvents();
        $upcoming=$pvc->upcomingEvent();
        $studentPosts=$pvc->getStudentsPosts();
        $allStudent=$pvc->getAllStudents();
        $pass=  ['data' => $data,
                'upcoming'=> $upcoming,
                'studentPosts'=>$studentPosts,
                'allStudent'=>$allStudent,
                ];
        return view('student/events', $pass);
    }
    public function currentStudentJobs() {
        $pvc=new postViewController;
        $data= $pvc->viewJobs();
        $upcoming=$pvc->upcomingEvent();
        $studentPosts=$pvc->getStudentsPosts();
        $allStudent=$pvc->getAllStudents();
        $pass=  ['data' => $data,
                'upcoming'=> $upcoming,
                'studentPosts'=>$studentPosts,
                'allStudent'=>$allStudent,
                ];
        return view('student/jobs',$pass);
    }
    public function currentStudentProfile() {
        $pvc=new postViewController;
        $upcoming=$pvc->upcomingEvent();
        $studentPosts=$pvc->getStudentsPosts();
        $allStudent=$pvc->getAllStudents();
        $pass=  [
            'upcoming'=> $upcoming,
            'studentPosts'=>$studentPosts,
            'allStudent'=>$allStudent,
            ];
        return view('student/profile',$pass);
    }
    public function currentStudentAwards() {
        $pvc=new postViewController;
        $data= $pvc->viewAwards();
        $upcoming=$pvc->upcomingEvent();
        $studentPosts=$pvc->getStudentsPosts();
        $allStudent=$pvc->getAllStudents();
        $pass=  [
            'data' => $data,
            'upcoming'=> $upcoming,
            'studentPosts'=>$studentPosts,
            'allStudent'=>$allStudent,
            ];
        return view('student/awards',$pass);
    }
    
    //alumni routing functions
    public function alumniDashboard() {
        $pvc=new postViewController;
        $data= $pvc->viewPosts();
        $upcoming=$pvc->upcomingEvent();
        $studentPosts=$pvc->getStudentsPosts();
        $allStudent=$pvc->getAllStudents();
        // $studentComments=$pvc->getStudentsComments();
        // $bookmarks=$pvc->getallBookmarks();
        // dd($data);
        // dd(session()->all());
        $pass=  ['data' => $data,
                'upcoming'=> $upcoming,
                'studentPosts'=>$studentPosts,
                'allStudent'=>$allStudent,
                // 'studentComments'=>$studentComments,
                // 'bookmarks'=>$bookmarks,
                ];
                // dd(session()->all());
                // dd($pass);
        return view('alumni/home', $pass);
    }
    
    public function alumniBookmarks() {
        $pvc=new postViewController;
        $upcoming=$pvc->upcomingEvent();
        $studentPosts=$pvc->getStudentsPosts();
        $allStudent=$pvc->getAllStudents();
        $pass=  [
            'upcoming'=> $upcoming,
            'studentPosts'=>$studentPosts,
            'allStudent'=>$allStudent,
            ];
        return view('alumni/bookmarks',$pass);
    }
    public function alumniEvents() {
        $pvc=new postViewController;
        $data= $pvc->viewEvents();
        $upcoming=$pvc->upcomingEvent();
        $studentPosts=$pvc->getStudentsPosts();
        $allStudent=$pvc->getAllStudents();
        $pass=  ['data' => $data,
                'upcoming'=> $upcoming,
                'studentPosts'=>$studentPosts,
                'allStudent'=>$allStudent,
                ];
        return view('alumni/events',$pass);
    }

    public function alumniJobs() {
        $pvc=new postViewController;
        $data= $pvc->viewJobs();
        $upcoming=$pvc->upcomingEvent();
        $studentPosts=$pvc->getStudentsPosts();
        $allStudent=$pvc->getAllStudents();
        $pass=  ['data' => $data,
                'upcoming'=> $upcoming,
                'studentPosts'=>$studentPosts,
                'allStudent'=>$allStudent,
                ];
        return view('alumni/jobs',$pass);
    }
    public function alumniProfile() {
        $pvc=new postViewController;
        $upcoming=$pvc->upcomingEvent();
        $studentPosts=$pvc->getStudentsPosts();
        $allStudent=$pvc->getAllStudents();
        $pass=  [
            'upcoming'=> $upcoming,
            'studentPosts'=>$studentPosts,
            'allStudent'=>$allStudent,
            ];
        return view('alumni/profile',$pass);
    }
    public function alumniAwards() {
        $pvc=new postViewController;
        $data= $pvc->viewAwards();
        $upcoming=$pvc->upcomingEvent();
        $studentPosts=$pvc->getStudentsPosts();
        $allStudent=$pvc->getAllStudents();
        $pass=  [
            'data' => $data,
            'upcoming'=> $upcoming,
            'studentPosts'=>$studentPosts,
            'allStudent'=>$allStudent,
            ];
        return view('alumni/awards',$pass);
    }
}


