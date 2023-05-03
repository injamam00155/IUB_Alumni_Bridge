<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use App\Models\Student;
use App\Models\CurrentStudent;
use App\Models\Alumni;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// class loginController extends Controller
// {
//     function loginCheck(Request $request)
//     {
//         $validatedData = $request->validate([
//             'inputEmail' => 'required|email',
//             'inputPassword' => 'required',
//         ]);
 
//         foreach (user::all() as $user) {
//             if ($user->userEmail == $validatedData['inputEmail']  && $user->password==$validatedData['inputPassword']) {
//                 if (user()->isAdmin()) {
//                     return redirect()->route('admin.dash')->with('failMsg','fUCK YOU');
//                 } elseif (user()->isCurrentStudent()) {
//                     return redirect()->route('currentStudent.dash')->with('failMsg','fUCK YOU');
//                 } elseif (user()->isAlumni()) {
//                     return redirect()->route('alumni.dash')->with('failMsg','fUCK YOU');
//                 }
//                 else{
//                     return redirect()->route('index')->with('failMsg','fUCK YOU');
//                 }
//             }
//             else{
//                 return redirect()->route('index')->with('failMsg','Wrong Login Credentials');
//             }
        
//         }
//     }
// }

// class loginController extends Controller
// {
//     function loginCheck(Request $request)
//     {
//         $validatedData = $request->validate([
//             'inputEmail' => 'required|email',
//             'inputPassword' => 'required',
//         ]);
 
//         foreach (user::all() as $user) {
//             if ($user->userEmail == $validatedData['inputEmail']  && $user->password==$validatedData['inputPassword']) {
//                 foreach (admin::all() as $admin) 
//                 {
//                     if ($admin->userEmail == $validatedData['inputEmail']){
//                         return redirect()->route('admin.dash')->with('failMsg','fUCK YOU');
//                     }
//                     else
//                         {
//                         foreach (CurrentStudent::all() as $currentStudent)
//                         if ($currentStudent->userEmail == $validatedData['inputEmail'])
//                         {
//                             return redirect()->route('currentStudent.dash')->with('failMsg','fUCK YOU');
//                         }
//                         else{
//                                 foreach (Alumni::all() as $alumni)
//                                 if ($alumni->userEmail == $validatedData['inputEmail']){
//                                     return redirect()->route('alumni.dash')->with('failMsg','fUCK YOU');
//                                     }
//                                 }
//                         }
//                     }
//                 }
//             else{
//                 return redirect()->route('login')->with('msg', "Invalid email or password");
//             }
//         }
//     }
// }

function loginCheck(Request $request)
{
    $validatedData = $request->validate([
        'inputEmail' => 'required|email',
        'inputPassword' => 'required',
    ]);

    $user = User::where('userEmail', $validatedData['inputEmail'])
        ->where('password', $validatedData['inputPassword'])
        ->first();

    if ($user) {
        if ($user->isAdmin()) {
            return redirect()->route('admin.dash')->with('failMsg', 'fUCK YOU');
        } elseif ($user->isCurrentStudent()) {
            return redirect()->route('currentStudent.dash')->with('failMsg', 'fUCK YOU');
        } elseif ($user->isAlumni()) {
            return redirect()->route('alumni.dash')->with('failMsg', 'fUCK YOU');
        }
    }

    return redirect()->route('login')->with('msg', 'Invalid email or password');
}

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


// class loginController extends Controller
// {
// public function loginCheck(Request $request)
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

//     return redirect()->route('index')->with('failMsg', 'Invalid email or password');
// }
// }