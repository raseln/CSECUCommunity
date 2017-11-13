<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Question;
use App\Job;
use App\Blog;

class BlogController extends Controller
{
   public function getBlog()
	{
		$questions =Question::all();
		$jobs = Job::all();
		$blogs = Blog::all();
		return view('blog', ['questions' => $questions , 'jobs'=>$jobs , 'blogs'=>$blogs]);
	}


	
	public function blogCreateBlog(Request $request)
	{

         $blog = new Blog();
         $blog->topic_name = $request['topic_name'];
         $blog->details = $request['details'];
         $message ='there was an error';
         if($request->user()->blogs()->save($blog))
	{
    	$message ='the post created successfully';
	}
         return redirect()->route('questionJob')->with(['message' => $message]);
}
}
