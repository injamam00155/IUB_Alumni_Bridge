<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use App\Models\Student;
use App\Models\CurrentStudent;
use App\Models\Alumni;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class loginController extends Controller
{
    function validate(Request $request)
    {
        $validatedData = $request->validate([
            'inputEmail' => 'required|email',
            'inputPassword' => 'required',
        ]);
 
        foreach (user::all() as $user) {
            if ($user->userEmail == $validatedData['inputEmail']  && $user->password==$validatedData['inputPassword']) {
                if (Auth::user()->isAdmin()) {
                    return redirect()->route('admin.dash');
                } elseif (Auth::user()->isCurrentStudent()) {
                    return redirect()->route('currentStudent.dash');
                } elseif (Auth::user()->isAlumni()) {
                    return redirect()->route('alumni.dash');
                }
            }
        
        }
    }
}