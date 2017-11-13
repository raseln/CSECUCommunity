<!DOCTYPE html>

<html>

  <head>
    <title>Welcome to CSECU Community</title>
    <meta charset="utf-8">
    <link href="{{ asset('css/profile.css') }}" media="all" rel="stylesheet" type="text/css" />
  </head>

    <h1>Profile of <em>{{Auth::user()->name1}} {{Auth::user()->name2}}</em></h1>

    <div class="profilepicture">
      <img class="propic" src="{{URL::asset('img/'.Auth::user()->pic)}}" alt="profile Pic" height="300px" width="400px">
    </div>



    <div class="bodyx">
      <div id="profile">
      <div id="rest">
        <ul>
           <ul>
          <li>Session: {{Auth::user()->session}}</li>
          <li>Student ID: {{Auth::user()->std_id}}</li>
          <li>Current Status: {{Auth::user()->current_status}}</li>
          <li>Interests: {{Auth::user()->interest}}</li>
          <li>Things People Should Know About You: {{Auth::user()->bio}}</li>
          </ul>
      </div>
        <div> <button class="submit11" onclick="window.location.href='{{URL('/editpicture')}}';">Change Picture</button></div>
        <div>
          <button class="submit22" onclick="window.location.href='{{URL('/editprofile')}}';">Edit Profile</button>
        </div>
    </div>
  </body>
</html>
