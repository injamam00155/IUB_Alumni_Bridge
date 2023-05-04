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

class signupController extends Controller
{
    public function store(Request $request)
    {

        // Validate the form data
        $validatedData = $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'inputEmail' => 'required|email',
            'inputPassword' => 'required',
            'inputConfirmPassword' => 'required|same:inputPassword',
            'iubId' => 'required|digits_between:5,7',
        ]);
        
        $users = user::all();
        foreach ($users as $user) {
            if ($user->userEmail == $validatedData['inputEmail'] ) {
                return redirect()->route('signup')->with('msg', "Account with this 'email' already exists");
            }
        }

        // Create a new alumni record using Eloquent
        $user = new user();
        $user->userEmail = $validatedData['inputEmail'];
        $user->password = $validatedData['inputPassword'];
        $user->save();
        $student = new student();
        $student->userEmail = $validatedData['inputEmail'];
        $student->firstName = $validatedData['firstName'];
        $student->lastName = $validatedData['lastName'];
        $student->iubID = $validatedData['iubId'];
        $student->save();
        $alumni = new alumni();
        $alumni->userEmail = $validatedData['inputEmail'];
        $alumni->save();

        // Redirect or return a response
        return redirect()->route('index')->with('msg','Account Created Successfully');
    }
    
}


