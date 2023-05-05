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

    public function signup() {
        $pass=  [   

                ];
        return view('signup', ['data' => $pass]);
    }

    //admin routing functions
    public function adminDashboard() {
        $pass=  [   

                ];
        return view('admin/home', ['data' => $pass]);
        }
        public function adminBookmarks() {
            $pass=  [   

                    ];
            return view('admin/bookmarks', ['data' => $pass]);
        }
        public function adminEvents() {
            $pass=  [   

                    ];
            return view('admin/events', ['data' => $pass]);
        }
        public function adminJobs() {
            $pass=  [   

                    ];
            return view('admin/jobs', ['data' => $pass]);
        }
        public function adminProfile() {
            $pass=  [   

                    ];
            return view('admin/profile', ['data' => $pass]);
        }
        public function adminAwards() {
            $pass=  [   

                    ];
            return view('admin/awards', ['data' => $pass]);
        }
    
    //currentStudent routing functions
    public function currentStudentDashboard() {

        $pass=  [   

                ];
        return view('student/home', ['data' => $pass]);
    }

    public function currentStudentBookmarks() {
        $pass=  [   

                ];
        return view('student/bookmarks', ['data' => $pass]);
    }
    public function currentStudentEvents() {
        $pass=  [   

                ];
        return view('student/events', ['data' => $pass]);
    }
    public function currentStudentJobs() {
        $pass=  [   

                ];
        return view('student/jobs',['data' => $pass]);
    }
    public function currentStudentProfile() {
        $pass=  [   

                ];
        return view('student/profile',['data' => $pass]);
    }
    public function currentStudentAwards() {
        $pass=  [   

                ];
        return view('student/awards',['data' => $pass]);
    }
    
    //alumni routing functions
    public function alumniDashboard() {
        // $data= Post::all();
        // dd($data[3]->eventPost);
        // $data= EventPost::all();
        $pvc=new postViewController;
        $data= $pvc->viewPosts();
        $upcoming=$pvc->upcomingEvent();
        $studentPosts=$pvc->getStudentsPosts();
        $studentComments=$pvc->getStudentsComments();
        $bookmarks=$pvc->getallBookmarks();
        // $data = $pvc->viewEvents(); 
        // dd($data);
        // dd(session()->all());
        $pass=  ['data' => $data,
                'event'=> $upcoming,
                'studentPosts',$studentPosts,
                'studentComments',$studentComments,
                'bookmarks',$bookmarks,
                ];
        return view('alumni/home', $pass);
        // return view('alumni/home', ['data' => $data,'upcoming'=> $upcoming ]);
    }
    
    public function alumniBookmarks() {
        $pass=  [   

                ];
        return view('alumni/bookmarks',['data' => $pass]);
    }
    public function alumniEvents() {
        $pvc = new postViewController;
        $data = $pvc->viewEvents(); 
        // dd($data);
        $pass=  [   

                ];
        return view('alumni/events', ['data' => $data]);
    }

    public function alumniJobs() {
        $pvc=new postViewController;
        $data= $pvc->viewJobs();
        $upcoming=$pvc->upcomingEvent();
        $pass=  ['data' => $data,
                'event'=> $upcoming,
                ];
        // return view('alumni/jobs', ['data' => $data]);
        return view('alumni/jobs',$pass);
    }
    public function alumniProfile() {
        $pass=  [   

                ];
        return view('alumni/profile',$pass);
    }
    public function alumniAwards() {
        return view('alumni/awards');
    }
}


