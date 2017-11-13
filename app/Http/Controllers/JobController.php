<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Job;
use App\Question;
use App\Blog;
use App\Jobcomment;

class JobController extends Controller
{
    
	public function getAddJob()
	{
		$questions =Question::orderBy('created_at' , 'desc')->get();
      $jobs = Job::orderBy('created_at' , 'desc')->get();
      $blogs = Blog::orderBy('created_at' , 'desc')->get();
      $comments = Jobcomment::orderBy('created_at' , 'desc')->get();
      return view('addJob', ['questions' => $questions , 'jobs'=>$jobs , 'blogs'=>$blogs , 'comments'=>$comments]);
	}
	
	public function jobCreateJob(Request $request)
	{

         $job = new Job();
         $job->job_title = $request['job_title'];
         $job->company_name = $request['company_name'];
         $job->skills = implode($request->skills,',');
         $job->requirements = $request['requirements'];
         $job->contact = $request['contact'];
         $job->salary = $request['salary'];

         $message ='there was an error';
         if($request->user()->jobs()->save($job))
	{
    	$message ='the post created successfully';
	}
         return redirect()->route('addJob')->with(['message' => $message]);
}

public function getDeleteJob($job_id)
{
   $job = Job::where('id', '=' , $job_id)->first();
   if( Auth::user() != $job->user)
   {
      return redirect()->back();
   }
   $job->delete();
   return redirect()->route('addJob');
}

public function edit($job_id)
{
   $jobs =Job::where('id' , '=', $job_id)->get();
   return view('editJob' , ['jobs' => $jobs]);
}
public function update(Request $request, $job_id)
{
         $job = Job::where('id', '=' , $job_id)->first();
         
         if($job !=null) 
      {
         $job->job_title = $request->input('job_title');
         $job->company_name = $request->input('company_name');
         $job->skills = implode($request->skills,',');
         $job->requirements = $request->input('requirements');
         $job->contact = $request->input('contact');
         $job->salary = $request->input('salary');

        $job->save();
         return redirect()->route('addJob' , $job->job_id);
      }
      
}
public function cancle()
{
   return redirect()->route('addJob');

}

public function store(Request $request , $job_id)
   {
         $job = Job::where('id', '=' , $job_id)->get();
         if($job !=null) 
         {
         $comment = new Jobcomment();
         $comment->body = $request['body'];
         $comment->job_id = $job_id;
         $request->user()->jobcomments()->save($comment);
         return redirect()->route('addJob' , $comment->job_id);
      }
}


}
