<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Question;
use App\Job;
use App\Blog;
class QuestionController extends Controller
{
   public function getQuestionJob()
	{
		$questions =Question::all();
		$jobs = Job::all();
		$blogs = Blog::all();
		return view('questionJob', ['questions' => $questions , 'jobs'=>$jobs , 'blogs'=>$blogs]);
	}


	
	public function questionCreateQuestion(Request $request)
	{

         $question = new Question();
         $question->question_title = $request['question_title'];
         $question->question_details = $request['question_details'];
         $message ='there was an error';
         if($request->user()->questions()->save($question))
	{
    	$message ='the post created successfully';
	}
         return redirect()->route('questionJob')->with(['message' => $message]);
}
}
