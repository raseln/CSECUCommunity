<!DOCTYPE html>
<html>
    <head>
        <link href="{{ asset('css/home.css') }}" rel="stylesheet">
        </link>
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
            </div>
            <div class="third">
                <form action="{{ route('question.create') }}" method="post">
                    <label style="position: absolute; top: 60px; left: 50px; font-size: 16px; font-weight: bolder;">
                        Question Title
                    </label>
                    <input name="question_title" style="position: absolute; top:60px; left: 180px; border:none; border-radius: 8px; height: 25px; width:250px;" type="text">
                        <br>
                            <br>
                                <label style="position: absolute; top:160px; left:50px; font-size: 16px; font-weight: bolder;">
                                    Question Details
                                </label>
                                <textarea name="question_details" style="position: absolute; top: 130px; left: 180px; height: 70px; width: 250px; border-radius:8px; border:none;">
                                </textarea>
                                <br>
                                    <br>
                                        <input class="btn" style="position: absolute; top:220px; left: 220px; height: 30px; width: 150px; border-radius: 8px; border:none; cursor: pointer; " type="submit" value="Submit Question">
                                            <input name="_token" type="hidden" value="{{ Session::token() }}">
                                                {{ Form::close() }}
                                            </input>
                                        </input>
                                    </br>
                                </br>
                            </br>
                        </br>
                    </input>
                </form>
            </div>
            <div class="secc" style="position: absolute; top: 600px;">
                @foreach($jobs as $job)
                <div style="background:white; color:black;">
                    <img src="{{ URL::asset('css/' . Auth::user()->pic) }}" style="height: 40px; width: 40px; border-radius: 50%; position: relative; left: 15px; top: 10px;">
                        <a href="/profile/{{ ucwords(Auth::user()->slug )}}" style="font-size: 15px; text-decoration: none; position: relative; top: -15px; left: 17px;">
                            {{ucwords(     Auth::user()->name1)}}
        {{ucwords(Auth::user()->name2)}}
                        </a>
                        <br>
                            <i style="position: relative; top: -15px; left: 60px;">
                                {{$job->created_at}}
                            </i>
                            <br>
                                <br>
                                    <b>
                                        Job Title:
                                    </b>
                                    {{ $job->job_title }}
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
                            </br>
                        </br>
                    </img>
                </div>
                <br>
                    @endforeach
	
	
	@foreach($questions as $question)
                    <div style="background:white; color:black;">
                        <img src="{{ URL::asset('css/' . Auth::user()->pic) }}" style="height: 40px; width: 40px; border-radius: 50%; position: relative; left: 15px; top: 10px;">
                            <a href="/profile/{{ ucwords(Auth::user()->slug )}}" style="font-size: 15px; text-decoration: none; position: relative; top: -15px; left: 17px;">
                                {{ucwords(     Auth::user()->name1)}}
         {{ucwords(Auth::user()->name2)}}
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
                                            <br>
                                            </br>
                                        </br>
                                    </br>
                                </br>
                            </br>
                        </img>
                    </div>
                    <br>
                        @endforeach

	
	@foreach($blogs as $blog)
                        <div style="background:white; color:black;">
                            <img src="{{ URL::asset('css/' . Auth::user()->pic) }}" style="height: 40px; width: 40px; border-radius: 50%; position: relative; left: 15px; top: 10px;">
                                <a href="/profile/{{ ucwords(Auth::user()->slug )}}" style="font-size: 15px; text-decoration: none; position: relative; top: -15px; left: 17px;">
                                    {{ucwords(     Auth::user()->name1)}}
         {{ucwords(Auth::user()->name2)}}
                                </a>
                                <br>
                                    <i style="position: relative; top: -15px; left: 60px;">
                                        {{$blog->created_at}}
                                    </i>
                                    <br>
                                        <br>
                                            <b style="position: relative; left:230px; top:-10px;">
                                                Title
                                            </b>
                                            <p style="position: relative; text-align:center; top:-18px;">
                                                {{ $blog->topic_name }}
                                            </p>
                                            <b style="position: relative; left:250px;">
                                                Details
                                            </b>
                                            <br>
                                                <p style="position: relative; left: 15px;">
                                                    {{ $blog->details }}
                                                </p>
                                                <br>
                                                </br>
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
            </div>
        </div>
    </body>
</html>