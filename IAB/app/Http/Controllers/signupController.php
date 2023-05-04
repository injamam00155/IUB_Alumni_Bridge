<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\User;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


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


