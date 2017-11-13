<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
@foreach($posts as $post)
      
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <a href="#">
              <img src="{{URL::asset('css/'.$post->user->pic)}}" alt="profile Pic" height="50" width="50">
               </a>
            
                <p><a href="{{URL('/profile', ['user_id'=>$post->user->id])}}">{{$post->user->name1}} {{$post->user->name2}}</a></p>
                {{$post->created_at->diffForHumans()}}<br><br>
                <p><span class="btn btn-default">Title : </span> {{ $post->title }} </p>
                <p><span class="btn btn-default">Body : </span> {!! htmlspecialchars_decode($post->body)  !!}</p>
               
                <span class="btn btn-default">Tags : </span> <br><br>
                @foreach($post->tags as $tag)
               
                <a href={{ route('tag', ['tag_id'=>$tag->id])}}><small style="border-radius: 5px; border: 1px solid gray; margin-right: 20px; padding: 5px;">
                  {{ $tag->name }}
                  </small></a>
                @endforeach

                @foreach($post->comments as $comment)
                <div class="answers">
                  <a href="#">
                    <img src="{{URL::asset('img/'.$comment->user->pic)}}" alt="profile Pic" height="50" width="50">
                    </a>
                  <p class="accountnametext"><a href="{{URL('/profile', ['user_id'=>$comment->user->id])}}">{{$comment->user->name1}} {{$comment->user->name2}}</a></p>
                  <p class="answertext">{{$comment->comment_body}}</p>

                  <form action="{{URL('/editcomment', ['comment_id'=>$comment->id])}}" method="post" id="edit-comment">
                    <ul>
                      <li>
                        <label for="answer">Update your Answer</label>
                        <input type="hidden" name="post_id" value="{{ $post->id }}">
                        <textarea id="answer" name="comment_body">{{$comment->comment_body}}</textarea>
                      </li>
                      <li>
                        <input type="submit" value="Update answer">
                      </li>
                      <li>
                        <input type="hidden" name="_token" value="{{Session::token()}}">
                      </li>
                      </ul>
                  </form>

                  <div class="interaction">
                    <button>Like</button> |
                    <button>Dislike</button> |
                    <button onclick="showhide('reply-form');">Reply</button>
                    @if(Auth::user()==$comment->user)
                    |
                      <button onclick="showhide('edit-comment');">Edit</button> |
                      <button onclick="window.location.href='{{URL('/deletecomment', ['comment_id'=>$comment->id])}}';" >Delete</button>
                    @endif

                    @foreach($comment->replies as $reply)
                    <div class="reply">
                    <a href="#">
                      <img src="{{URL::asset('img/'.$reply->user->pic)}}" alt="profile Pic" height="50" width="50">
                      </a>
                    <p class="accountnametext"><a href="{{URL('/profile', ['user_id'=>$reply->user->id])}}">{{$reply->user->name1}} {{$reply->user->name2}}</a></p>
                    <p class="replytext">{{$reply->reply_body}}</p>

                    <div id="edit-reply">
                    <form action="{{URL('/editreply', ['reply_id'=>$reply->id])}}" method="post">
                      <ul>
                        <li>
                          <label for="answer">Update your Reply</label>
                          <input type="hidden" name="post_id" value="{{ $post->id }}">
                          <input type="hidden" name="comment_id" value="{{ $comment->id }}">
                          <textarea id="reply" name="reply_body">{{$reply->reply_body}}</textarea>
                        </li>
                        <li>
                          <input type="submit" value="Update Reply">
                        </li>
                        <li>
                          <input type="hidden" name="_token" value="{{Session::token()}}">
                        </li>
                        </ul>
                    </form>
                    <button>Cancel</button>
                  </div>
                </div>

                    <div class="interaction">
                      <button>Like</button> |
                      <button>Dislike</button> |
                      <button onclick="showhide('reply-form');">Reply</button>
                      @if(Auth::user()==$reply->user)
                      |
                        <button onclick="showhide('edit-reply');">Edit</button> |
                        <button onclick="window.location.href='{{URL('/deletereply', ['reply_id'=>$reply->id])}}';" >Delete</button>
                      @endif
                    </div>
                      @endforeach
                    <form action="{{URL('/createreply')}}" method="post" id="reply-form">
                      <ul>
                        <li>
                          <label for="answer">Reply to the answer</label>
                          <input type="hidden" name="post_id" value="{{ $post->id }}">
                          <input type="hidden" name="comment_id" value="{{ $comment->id }}">
                          <textarea placeholder="Enter your Reply" id="reply" name="reply_body"></textarea>
                        </li>
                        <li>
                          <input type="submit" value="Post">
                        </li>
                        <li>
                          <input type="hidden" name="_token" value="{{Session::token()}}">
                        </li>
                        </ul>
                    </form>
                </div>
              @endforeach
              <form action="{{URL('/createcomment')}}" method="post">
                <ul>
                  <li>
                    <label for="answer">Post your thought about this question.</label>
                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                    <textarea placeholder="Enter your Thought" id="answer" name="comment_body"></textarea>
                  </li>
                  <li>
                    <input type="submit" value="Post">
                  </li>
                  <li>
                    <input type="hidden" name="_token" value="{{Session::token()}}">
                  </li>
                  </ul>
              </form>
                
              
           </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
    
   
    <!-- /.content -->
  
  @endforeach
          <!-- End -->
        
</body>
</html>