<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
class CompletionsController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}


    public function store(Request $request)
    {
    	$video = Video::findOrFail($request->videoId);
    	\Auth::user()->completions()->attach($video);
    }
}
