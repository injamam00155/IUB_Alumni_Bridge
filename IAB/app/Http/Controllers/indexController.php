<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
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

    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'inputEmail' => 'required|email',
            'inputPassword' => 'required',
            'inputConfirmPassword' => 'required|same:inputPassword',
            'iubId' => 'required',
        ]);

        // Create a new alumni record using Eloquent
        // $user = new user();
        // $user->userEmail = $validatedData['inputEmail'];
        // $user->password = $validatedData['inputPassword'];
        // $student = new student();
        // $student->userEmail = $validatedData['inputEmail'];
        // $student->firstName = $validatedData['firstName'];
        // $student->lastName = $validatedData['lastName'];
        // $student->iubID = $validatedData['iubId'];
        // $alumni = new alumni();
        // $student->userEmail = $validatedData['inputEmail'];
        // $alumni->save();
        user::create([
            'userEmail'=>$request->input($validatedData['inputEmail']),
            'password'=>$request->input($validatedData['Password'])
        ]);

        // Redirect or return a response
        return redirect()->route('/');
    }
}


