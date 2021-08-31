<?php

namespace App\Http\Controllers\Api;

use App\Models\Subscriber;
use Illuminate\Http\Request;
use App\Models\Website;

class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Subscriber::all());
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
            'email' => 'required|email|unique:subscribers'
        ]);
        $post               = new Subscriber;
        $post->email        = $request->email;
        $response           = $website->posts()->save($post);
        return response()->json($response, 201);
    }

}
