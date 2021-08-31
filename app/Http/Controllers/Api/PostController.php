<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Website;
use App\Jobs\SendEmailJob;
use App\Mail\SendMail;
use Mail;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Post::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request, Website $website
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Website $website)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string' 
        ]);
        $post               = new Post;
        $post->title        = $request->title;
        $post->description  = $request->description;
        $response           = $website->posts()->save($post);

        $data['title']      = $request->title;
        $data['description']= $request->description;
        $data['website_id'] = $website->id;
        dispatch(new SendEmailJob($data));
        
        return response()->json($response, 201);
    }

}
