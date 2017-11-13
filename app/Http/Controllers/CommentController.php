<?php

namespace App\Http\Controllers;
use App\Comment;
use Auth;
use Illuminate\Http\Request;

class CommentController extends Controller
{


	public function getHome()
	{
		$comments = Comment::orderBy('created_at')->get();
		return view('home', ['comments'=> $comments]);
	}


    public function postCreateComment(Request $request)
    {
    	$this->validate($request, [
			'comment_body'=>'required|max:1000'
			]);

    	$comment = new Comment();
		$comment->comment_body = $request->comment_body;
		$comment->user_id = Auth::user()->id;
		$comment->post_id = $request->post_id;
		$comment->save();

		return redirect()->route('home');
    }

    public function getDeleteComment($comment_id){
		$comment = Comment::where('id', $comment_id)->first();
		if(Auth::user()!=$comment->user){
			return redirect()->back();
		}
		$comment->delete();
		return redirect()->route('home');
		}

		/*public function postEditComment(Request $request, $comment_id){

			$this->validate($request, [
				'comment_body' => 'required'
				]);
				$comment = Comment::where('id', $comment_id)->first();
				if (Auth::user()!=$comment->user) return redirect()->back();
				$comment->comment_body=$request['comment_body'];
				$comment->update();
				return redirect()->route('home', $comment->comment_id);
		}*/
}
