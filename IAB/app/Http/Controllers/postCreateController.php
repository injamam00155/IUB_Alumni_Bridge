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
use Illuminate\Support\Facades\Storage;

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
        // dd($jobPost);
        $jobPost->save();
        return redirect()->route('alumni.jobs')->with('msg','Job Posted Successfully');
    }



    public function awardPostCreate(Request $request)
    {
        $validatedData = $request->validate([
            'awardTitle' => 'required|string|max:255',
            'awardDate' => 'required|date|max:255',
            'awardLocation' => 'required|string|max:255',
            'awardDescription' => 'required|string',
            'awardPosterImage' => 'required',
        ]);
        // dd($validatedData);
        
        Post::create([
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        if($request->hasFile('awardPosterImage')){
            $image = $request->file('awardPosterImage');
            $imagePath = $image->getClientOriginalName();
            $image->move(public_path('images'), $imagePath);
        
            $postID = Post::latest('postID')->first()->postID;


            AwardPost::create([
                'awardTitle' => $request->input('awardTitle'),
                'awardDescription' => $request->input('awardDescription'),
                'awardDate' => $request->input('awardDate'),
                'awardImageURL' => $imagePath,
                'postID' => $postID,

            ]);
        }
        // dd($awardPost);
        return redirect()->route('admin.awards')->with('msg','Award Posted Successfully');
    }

    

    public function eventPostCreate(Request $request)
    {
        $validatedData = $request->validate([
            'eventTitle' => 'required|string|max:255',
            'eventStartTime' => 'required',
            'eventEndTime' => 'required',
            'eventStartDate' => 'required|date|max:255',
            'eventEndDate' => 'required|date|max:255',
            'eventLocation' => 'required|string',
            'eventDescription' => 'required|string',
            'eventPosterImage' => 'required',
        ]);

        Post::create([
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        // $post = new post;
        // $post->created_at = now();
        // $post->updated_at = now();
        // $post->save();

        // if($request->hasFile('eventPosterImage')){
            $image = $request->file('eventPosterImage');
            $imagePath = $image->getClientOriginalName();
            $image->move(public_path('images'), $imagePath);
        
            $postID = Post::latest('postID')->first()->postID;

            EventPost::create([
                'eventTitle' => $request->input('eventTitle'),
                'eventDescription' => $request->input('eventDescription'),
                'eventStartDate' => $request->input('eventStartDate'),
                'eventEndDate' => $request->input('eventEndDate'),
                'eventStartTime' => $request->input('eventStartTime'),
                'eventEndTime' => $request->input('eventEndTime'),
                'eventLocation' => $request->input('eventLocation'),
                'eventImageURL' => $imagePath,
                'postID' => $postID,

            ]);

            // $eventPost = new EventPost;
            // $eventPost->eventTitle = $validatedData['eventTitle'];
            // $eventPost->eventDescription = $validatedData['awardDescription'];
            // $eventPost->eventStartDate	 = $validatedData['eventStartTime'];
            // $eventPost->eventEndDate	 = $validatedData['eventEndDate'];
            // $eventPost->eventStartTime	 = $validatedData['eventStartTime'];
            // $eventPost->eventEndTime	 = $validatedData['eventEndTime'];
            // $eventPost->eventImageURL = $validatedData[$imagePath];
            // $eventPost->eventLocation = $validatedData['eventLocation'];

            // $eventPost->postID = post::latest('postID')->first()->postID; 
            
            // $eventPost->save();
        // }
        // dd($post);
        // dd($jobPost);
        return redirect()->route('admin.events')->with('msg','Job Posted Successfully');
    }


}
