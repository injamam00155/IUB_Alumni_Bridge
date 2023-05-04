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
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;


// class loginController extends Controller
// {
// function loginCheck(Request $request)
// {
//     $validatedData = $request->validate([
//         'inputEmail' => 'required|email',
//         'inputPassword' => 'required',
//     ]);

//     $user = User::where('userEmail', $validatedData['inputEmail'])
//         ->where('password', $validatedData['inputPassword'])
//         ->first();

//     if ($user) {
//         if ($user->isAdmin()) {
//             return redirect()->route('admin.dash')->with('failMsg', 'fUCK YOU');
//         } elseif ($user->isCurrentStudent()) {
//             return redirect()->route('currentStudent.dash')->with('failMsg', 'fUCK YOU');
//         } elseif ($user->isAlumni()) {
//             return redirect()->route('alumni.dash')->with('failMsg', 'fUCK YOU');
//         }
//     }

//     return redirect()->route('login')->with('msg', 'Invalid email or password');
// }
// }

class loginController extends Controller
{
    public function loginCheck(Request $request)
    {
        $validatedData = $request->validate([
            'inputEmail' => 'required|email',
            'inputPassword' => 'required',
        ]);
        

        $user = User::where('userEmail', $validatedData['inputEmail'])
            ->where('password', $validatedData['inputPassword'])
            ->first();

        // if ($user) {
        //     if ($user->isAdmin()) {
        //         return redirect()->route('admin.dash');
        //     } elseif ($user->isCurrentStudent()) {

        //         // $postViewController = new postViewController();        
        //         // Call the viewPosts method
        //         // $posts = $postViewController->viewPost();
        //         // return view('currentStudent.dash');
        //         // , ['posts' => $posts]);
        //         return redirect()->route('currentStudent.dash');
        //     } elseif ($user->isAlumni()) {
        //         return redirect()->route('alumni.dash');
        //     }
        // }

    
        if ($user) {
            // $postViewController = new postViewController();
             // $posts = $postViewController->viewPosts();
            if ($user->isAdmin()) {
                // return view('admin/home', compact('posts'));
                return redirect()->route('admin.dash');
            } elseif ($user->isCurrentStudent()) {
                // return view('student/home', ['data' => $data]);
                return redirect()->route('currentStudent.dash');
            } elseif ($user->isAlumni()) {
                // return view('alumni/home', compact('posts'));
                return redirect()->route('alumni.dash');
            }
        }
        

        return redirect()->route('index')->with('failMsg', 'Invalid email or password');
    }
}