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
        return redirect()->route('currentStudent.dash');
    }

}
