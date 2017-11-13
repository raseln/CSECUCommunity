<!DOCTYPE html>

<html>

  <head>
    <title>Welcome to CSECU Community</title>
    <meta charset="utf-8">
    <link href="{{ asset('css/profile.css') }}" media="all" rel="stylesheet" type="text/css" />
  </head>
  <body>
    
     

    <h1>Profile of <em>{{$user->name1}} {{$user->name2}}</em></h1>

    <div class="profilepicture">
      <img class="propic" src="{{URL::asset('img/'.$user->pic)}}" alt="profile Pic" height="300px" width="400px"><span class="profilename">
    </div>



    <div class="bodyx">
      <div id="profile">
      <div id="rest">
        <ul>
           <ul>
          <li>Session: {{$user->session}}</li>
          <li>Student ID: {{$user->std_id}}</li>
          <li>Current Status: {{$user->current_status}}</li>
          <li>Interests: {{$user->interest}}</li>
          <li>Things People Should Know About You: {{$user->bio}}</li>
          </ul>
      </div>
        <div> <input type="submit" class="submit11" value="Message"/></div>
    </div>
  </body>
</html>
