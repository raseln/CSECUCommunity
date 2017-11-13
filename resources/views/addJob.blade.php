<!DOCTYPE html>
<html>
    <head>
        <link href="{{ asset('css/home.css') }}" rel="stylesheet">
        </link>

        <script>
            function showhide(id){
                var form = document.getElementById(id);
                if(form.style.display=='none') form.style.display='block';
                else form.style.display='none';
            }
        </script>
    </head>
    <body>
        <div class="header">
            <div id="logo">
            </div>
            <div class="form6">
                Submission Type
            </div>
            <div class="side">
                <button ;="" class="link3" onclick="window.location.href='/addJob'">
                    Add Job
                </button>
                <button ;="" class="link1" onclick="window.location.href='/questionJob'">
                    Any Question?
                </button>
                <button ;="" class="link2" onclick="window.location.href='/blog'">
                    Share Your Experience About Job
                </button>

                <select class="link4" name="viewSelect">
                    Select View Category
                    <option>All</option>
                    <option>Job Posts</option>
                    <option>Job related Questions</option>
                    <option>Job Blog</option>
                </select>
            </div>
            <div class="second">
                <form action="{{ route('job.create') }}" method="post">
                    <label style="position: absolute; top: 10px; left: 250px;font-size: 18px; font-weight: bolder;">
                        Job Title
                    </label>
                    <input name="job_title" style="position: absolute; top:40px; left: 200px; border:none; border-radius: 8px; height: 25px; width:180px;" type="text">
                        <br>
                            <br>
                                <label style="position: absolute; top: 90px; left: 30px; font-size: 18px; font-weight: bolder;">
                                    Company Name
                                </label>
                                <input name="company_name" style="position: absolute; top: 90px; left: 170px; height: 25px; width: 250px; border-radius:8px; border:none;" type="text">
                                    <br>
                                        <br>
                                            <br>
                                                <br>
                                                    <br>
                                                        <label style="position: absolute; top: 160px; left:100px; font-size: 18px; font-weight: bolder;">
                                                            Skills:
                                                        </label>
                                                        <br>
                                                            {{ Form::checkbox('skills[]','HTML')}}
                                                            <label style="position: absolute; top: 140px; left: 200px; ">
                                                                HTML
                                                            </label>
                                                            <br>
                                                                {{ Form::checkbox('skills[]','CSS') }}
                                                                <label style="position: absolute; top: 160px; left: 200px; ">
                                                                    CSS
                                                                </label>
                                                                <br>
                                                                    {{ Form::checkbox('skills[]','PHP') }}
                                                                    <label style="position: absolute;top: 180px; left: 200px; ">
                                                                        PHP
                                                                    </label>
                                                                    <br>
                                                                        {{ Form::checkbox('skills[]','JAVASCRIPTS') }}
                                                                        <label style="position: absolute;top: 200px; left: 200px; ">
                                                                            JAVASCRIPTS
                                                                        </label>
                                                                        <br>
                                                                            {{ Form::checkbox('skills[]','OTHERS') }}
                                                                            <label style="position: absolute;top: 220px; left: 200px;">
                                                                                OTHERS
                                                                            </label>
                                                                            <label style="position: absolute; top:280px; left:110px; font-size: 18px; font-weight: bolder; ">
                                                                                Salary
                                                                            </label>
                                                                            <input name="salary" style="position: absolute; top: 280px; left: 180px; height: 25px; width: 250px; border-radius:8px; border:none;" type="text">
                                                                                <label style="position: absolute; top:360px; left:20px; font-size: 16px; font-weight: bolder;">
                                                                                    Requirement Details
                                                                                </label>
                                                                                <textarea id="post-body" name="requirements" style="position: absolute; top: 330px; left: 180px; height: 70px; width: 250px; border-radius:8px; border:none;">
                                                                                </textarea>
                                                                                <br>
                                                                                    <br>
                                                                                        <label style="position: absolute; top:430px; left:100px; font-size: 18px; font-weight: bolder;">
                                                                                            Contact
                                                                                        </label>
                                                                                        <input name="contact" style="position: absolute; top: 430px; left: 180px; height: 25px; width: 250px; border-radius:8px; border:none;" type="text">
                                                                                            <br>
                                                                                                <br>
                                                                                                    <input class="btn" style="position: absolute; top:480px; left: 200px; height: 30px; width: 100px; border-radius: 8px; border:none; cursor: pointer; " type="submit" value="Add Job">
                                                                                                        <input name="_token" type="hidden" value="{{ Session::token() }}">
                                                                                                            {{ Form::close() }}
                                                                                                        </input>
                                                                                                    </input>
                                                                                                </br>
                                                                                            </br>
                                                                                        </input>
                                                                                    </br>
                                                                                </br>
                                                                            </input>
                                                                        </br>
                                                                    </br>
                                                                </br>
                                                            </br>
                                                        </br>
                                                    </br>
                                                </br>
                                            </br>
                                        </br>
                                    </br>
                                </input>
                            </br>
                        </br>
                    </input>
                </form>
            </div>
        </div>
        <div class="secc">
            @foreach($jobs as $job)
                

            <div style="background:white; color:black;" id="JobPosts">
                <img src="{{ URL::asset('css/' . $job->user->pic) }}" style="height: 40px; width: 40px; border-radius: 50%; position: relative; left: 15px; top: 10px;">
                    <a href="/profile/{{ ucwords(Auth::user()->slug )}}" style="font-size: 15px; text-decoration: none; position: relative; top: -13px; left: 15px;">
                        {{ucwords(     $job->user->name1)}}
        {{ucwords($job->user->name2)}}
                    </a>
                    <br>
                        <p style="position: relative; top: -28px; left: 60px;">
                            {{$job->created_at}}
                        </p>
                        <br>
                            <br>
                                <center>
                                    <b>
                                        Job Title:
                                    </b>
                                    <p style="background-color: green;">{{ $job->job_title }} </p>
                                    <br>
                                        <br>
                                            <b>
                                                Company Name:
                                            </b>
                                            {{ $job->company_name }}
                                            <br>
                                                <br>
                                                    <b>
                                                        Skills:
                                                    </b>
                                                    {{ $job->skills }}
                                                    <br>
                                                        <br>
                                                            <b>
                                                                Salary:
                                                            </b>
                                                            {{ $job->salary}}
                                                            <br>
                                                                <br>
                                                                    <b>
                                                                        Requirements:
                                                                    </b>
                                                                    {{ $job->requirements }}
                                                                    <br>
                                                                        <br>
                                                                            <b>
                                                                                Contact:
                                                                            </b>
                                                                            {{ $job->contact }}
                                                                            <br>
                                                                            </br>
                                                                        </br>
                                                                    </br>
                                                                </br>
                                                            </br>
                                                        </br>
                                                    </br>
                                                </br>
                                            </br>
                                        </br>
                                    </br>
                                </center>
                                @if(Auth::user() == $job ->user)
                                <button onclick="window.location.href='{{ route( 'edit.job' , ['job_id'=>$job->id] )}}'" style="position: relative; top:-320px; left: 300px; width: 100px; height: 30px; background-color: lightgreen; border:none">
                                    Edit
                                </button>
                                <button onclick="window.location.href='{{ route( 'delete.job' , ['job_id'=>$job->id] )}}'" style="position: relative; top: -320px; left: 330px; width: 100px; height: 30px; background-color: lightgreen; border:none">
                                    Delete
                                </button>
                                @endif
                                
                                <hr>
                                    <a href="#" style="position: relative; text-decoration:none; left: 200px;">
                                        Like
                                    </a>
                                    <button id="button" onclick="showhide();" style="position: relative; text-decoration:none; left: 250px; background-color: transparent; border:none;">
                                        Comments
                                    </button>
                                    <br>
                                        <form action="{{ route( 'comment.create' , ['job_id'=>$job->id] ) }}" method="post">
                                            <hr>
                                                <label style=" position: relative; left: 200px;">
                      
                                                    Leave a comment here!
                                                </label>
                                                <textarea name="body" style="width: 530px; border-radius: 5px; background-color: whitesmoke;">
                                                </textarea>
                                                <input style="position: relative; left: 230px;" type="submit" value="Add Comments">
                                                    <input name="_token" type="hidden" value="{{ Session::token() }}">
                                                        <hr>
                                                            @foreach($job->jobcomments as $comment)
                                                            <div style="background-color: lightgrey; position: relative; top:-9px; height: 100px;">
                                                                <img src="{{ URL::asset('css/' . $comment->user->pic) }}" style="height: 40px; width: 40px; border-radius: 50%; position: relative; left: 15px; top: 10px;">
                                                                    <a href="/profile/{{ ucwords(Auth::user()->slug )}}" style="font-size: 15px; text-decoration: none; position: relative; top: -15px; left: 17px;">
                                                                        {{ucwords(     $comment->user->name1)}}
         {{ucwords($job->user->name2)}}
                                                                    </a>
                                                                    <br>
                                                                        <p style="position: relative; top: -30px; left: 60px;">
                                                                            {{$comment->created_at}}
                                                                        </p>
                                                                        <br>
                                                                            <br>
                                                                                <p style="position: relative; text-align:center; top:-100px;">
                                                                                    {{ $comment->body }}
                                                                                </p>
                                                                            </br>
                                                                        </br>
                                                                    </br>
                                                                </img>
                                                            </div>
                                                            <hr>
                                                                @endforeach
                                                            </hr>
                                                        </hr>
                                                    </input>
                                                </input>
                                            </hr>
                                        </form>
                                    </br>
                                </hr>
                            </br>
                        </br>
                    </br>
                </img>
            </div>
            <br>
                <br>
                
                    @endforeach


	@foreach($questions as $question)
                    <div style="background:white; color:black;" id="jobQuestions">
                        <img src="{{ URL::asset('css/' . $job->user->pic) }}" style="height: 40px; width: 40px; border-radius: 50%; position: relative; left: 15px; top: 10px;">
                            <a href="/profile/{{ ucwords(Auth::user()->slug )}}" style="font-size: 15px; text-decoration: none; position: relative; top: -15px; left: 17px;">
                                {{ucwords(     $job->user->name1)}}
         {{ucwords($job->user->name2)}}
                            </a>
                            <br>
                                <i style="position: relative; top: -15px; left: 60px;">
                                    {{$question->created_at}}
                                </i>
                                <br>
                                    <br>
                                        <b style="position: relative; left:230px; top:-10px;">
                                            Question Title:
                                        </b>
                                        <p style="position: relative; text-align:center; top:-18px;">
                                            {{ $question->question_title }}
                                        </p>
                                        <b style="position: relative; left:250px;">
                                            Question:
                                        </b>
                                        <br>
                                            <p style="position: relative; left: 15px;">
                                                {{ $question->question_details }}
                                            </p>
                                            @if(Auth::user() == $job->user)
                                            <button onclick="openEditModal();" style="position: relative; top:-250px; left: 200px; width: 100px; height: 30px; background-color: lightgreen; border:none">
                                                Edit
                                            </button>
                                            <button onclick="window.location.href='{{ route( 'delete.job' , ['job_id'=>$job->id] )}}'" style="position: relative; top: -250px; left: 220px; width: 100px; height: 30px; background-color: lightgreen; border:none">
                                                Delete
                                            </button>
                                            @endif
                                            <hr>
                                                <p>
                                                    Comments
                                                </p>
                                            </hr>
                                        </br>
                                    </br>
                                </br>
                            </br>
                        </img>
                    </div>
                    <br>
                        <br>
                            @endforeach

	
	@foreach($blogs as $blog)
                            <div style="background:white; color:black;" id="blogQuestions">
                                <img src="{{ URL::asset('css/' . $job->user->pic) }}" style="height: 40px; width: 40px; border-radius: 50%; position: relative; left: 15px; top: 10px;">
                                    <a href="/profile/{{ ucwords(Auth::user()->slug )}}" style="font-size: 15px; text-decoration: none; position: relative; top: -15px; left: 17px;">
                                        {{ucwords(     $job->user->name1)}}
         {{ucwords($job->user->name2)}}
                                    </a>
                                    <br>
                                        <i style="position: relative; top: -15px; left: 60px;">
                                            {{$blog->created_at}}
                                        </i>
                                        <br>
                                            <br>
                                                <b style="position: relative; left:260px; top:-10px;">
                                                    Title
                                                </b>
                                                <p style="position: relative; text-align:center; top:-18px;">
                                                    {{ $blog->topic_name }}
                                                </p>
                                                <b style="position: relative; left:260px;">
                                                    Details
                                                </b>
                                                <br>
                                                    <p style="position: relative; left: 15px;">
                                                        {{ $blog->details }}
                                                    </p>
                                                    @if(Auth::user() == $job->user)
                                                    <button onclick="openEditModal();" style="position: relative; top:-250px; left: 200px; width: 100px; height: 30px; background-color: lightgreen; border:none">
                                                        Edit
                                                    </button>
                                                    <button onclick="window.location.href='{{ route( 'delete.job' , ['job_id'=>$job->id] )}}'" style="position: relative; top: -250px; left: 220px; width: 100px; height: 30px; background-color: lightgreen; border:none">
                                                        Delete
                                                    </button>
                                                    @endif
                                                </br>
                                            </br>
                                        </br>
                                    </br>
                                </img>
                            </div>
                            <br>
                                @endforeach
                            </br>
                        </br>
                    </br>
                </br>
            </br>
        </div>
        <script type="text/javascript">
            function showhide(){
	var x = document.getElementById('hidden');
    if (x.style.display === 'none') {
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }
}
        </script>
    </body>
</html>