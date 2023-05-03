<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use App\Models\Post;
use App\Models\Query;
use App\Models\Job;
use App\Models\Event;
use App\Models\Award;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class postViewController extends Controller
{

    public function viewPosts()
    {
            $orderedPostIds = Post::orderBy('id')->pluck('id');
            $mergedResults = [];

            foreach ($orderedPostIds as $postId) {

                $queryData = Query::where('post_id', $postId)->first();
                if ($queryData) {
                    $mergedResults[] = [
                        'source' => 'query',
                        'data' => $queryData,
                    ];
                    continue;
                }

                $jobData = Job::where('post_id', $postId)->first();
                if ($jobData) {
                    $mergedResults[] = [
                        'source' => 'job',
                        'data' => $jobData,
                    ];
                    continue;
                }

                $eventData = Event::where('post_id', $postId)->first();
                if ($eventData) {
                    $mergedResults[] = [
                        'source' => 'event',
                        'data' => $eventData,
                    ];
                    continue;
                }
                
                $awardData = Award::where('post_id', $postId)->first();
                if ($awardData) {
                    $mergedResults[] = [
                        'source' => 'award',
                        'data' => $awardData,
                    ];
                    continue; 
                }
            }
        return $mergedResults;
    }

    public function viewQueries()
    {
        $queries = Query::latest('postDateTime')->get();
        return $queries;
    }
    
    public function viewJobs()
    {
        $jobs = Job::latest('postDateTime')->get();
        return $jobs;
    }

    public function viewEvents()
    {
        $events = Event::latest('postDateTime')->get();
        return $events;
    }
    public function viewAwards()
    {
        $awards = Award::latest('postDateTime')->get();
        return $awards;
    }
    
}
