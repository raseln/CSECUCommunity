<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\Tag;
use App\User;


class PostController extends Controller
{
	public function getHome()
	{
		$posts = Post::orderBy('created_at', 'desc')->get();
		return view('home', ['posts'=> $posts]);
	}

	public function getProfile()
	{
		return view('profile');
	}


  //create post


		
       public function postCreatePost(Request $request) {
		$post = new Post();
		$post->title = $request['title'];
		$post->body = $request['body'];
		$request->user()->posts()->save($post);
        $post->tags()->sync($request->tags);
         
		return redirect()->route('home');
	     
	}

	//delete post

	public function getDeletePost($post_id){
		$post = Post::where('id', $post_id)->first();
		if(Auth::user()!=$post->user){
			return redirect()->back();
		}
		$post->delete();
		return redirect()->route('home')->with(['message'=>"Successfully deleted."]);
		}

		public function postEditPost(Request $request, $post_id){

			$this->validate($request, [
				'body' => 'required'
				]);

				$post = Post::where('id', $post_id)->first();
				if (Auth::user()!=$post->user) return redirect()->back();
				$post->body=$request['body'];
				$post->catagory=$request['catagory'];
				$post->update();
				return redirect()->route('home', $post->post_id);
		}
}
