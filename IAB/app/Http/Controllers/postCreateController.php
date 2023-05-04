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

class postCreateController extends Controller
{

    public function queryPostCreate(Request $request)
    {
        $validatedData = $request->validate([
            'postQuery' => 'required',
        ]);
        $post = new post;
        $post->created_at = now();
        $post->updated_at = now();
        $post->save();

        $queryPost = new queryPost;
        $queryPost->postDescription = $validatedData['postQuery'];
        $queryPost->userEmail = session('userEmail');
        $queryPost->postID = post::latest('postID')->first()->postID; 
        // dd($post);
        $queryPost->save();
        return redirect()->route('alumni.dash');
    }

    public function jobPostCreate(Request $request)
    {
        $validatedData = $request->validate([
            'jobTitle' => 'required|string|max:255',
            'jobCompany' => 'required|string|max:255',
            'jobLocation' => 'required|string|max:255',
            'jobDescription' => 'required|string',
            'jobResponsibility' => 'required|string',
            'jobRequirement' => 'required|string',
            'contactMail' => 'required|email',
        ]);

        $post = new post;
        $post->created_at = now();
        $post->updated_at = now();
        $post->save();

        $jobPost = new jobPost;
        $jobPost->jobTitle = $validatedData['jobTitle'];
        $jobPost->companyName	 = $validatedData['jobCompany'];
        $jobPost->jobDescription = $validatedData['jobDescription'];
        $jobPost->responsibility = $validatedData['jobResponsibility'];
        $jobPost->requirement = $validatedData['jobRequirement'];
        $jobPost->location = $validatedData['jobLocation'];
        $jobPost->contactEmail = $validatedData['contactMail'];
        $jobPost->userEmail = session('userEmail');
        $jobPost->postID = post::latest('postID')->first()->postID; 
        // dd($post);
        dd($jobPost);
        $jobPost->save();
        return redirect()->route('alumni.jobs')->with('msg','Job Posted Successfully');
    }



}
