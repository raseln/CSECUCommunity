<?php

namespace App\Http\Controllers;
use App\Reply;
use Auth;
use Illuminate\Http\Request;

class ReplyController extends Controller
{


	public function getHome()
	{
		$replies = Reply::orderBy('created_at')->get();
		return view('home', ['replies'=> $replies]);
	}


    public function postCreateReply(Request $request)
    {
    	$this->validate($request, [
			'reply_body'=>'required|max:1000'
			]);

    	$reply = new Reply();
  		$reply->reply_body = $request->reply_body;
  		$reply->user_id = Auth::user()->id;
  		$reply->post_id = $request->post_id;
      $reply->comment_id = $request->comment_id;
  		$reply->save();

		return redirect()->route('home');
    }

    public function getDeleteReply($reply_id){
		$reply = Reply::where('id', $reply_id)->first();
		if(Auth::user()!=$reply->user){
			return redirect()->back();
		}
		$reply->delete();
		return redirect()->route('home');
		}

		public function postEditReply(Request $request, $reply_id){

			$this->validate($request, [
				'reply_body' => 'required'
				]);
				$reply = Reply::where('id', $reply_id)->first();
				if (Auth::user()!=$reply->user) return redirect()->back();
				$reply->reply_body=$request['reply_body'];
				$reply->update();
				return redirect()->route('home', $reply->reply_id);
		}
}
