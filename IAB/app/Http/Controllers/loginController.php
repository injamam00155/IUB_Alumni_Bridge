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

    
        if ($user) {
            $userEmail=$validatedData['inputEmail'];
             session(['userEmail' => $userEmail]);
            if ($user->isAdmin()) {
                return redirect()->route('admin.dash');
            } elseif ($user->isCurrentStudent()) {
                return redirect()->route('currentStudent.dash');
            } elseif ($user->isAlumni()) {
                return redirect()->route('alumni.dash');
            }
        }
        

        return redirect()->route('index')->with('failMsg', 'Invalid email or password');
    }
}