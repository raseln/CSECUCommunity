<!DOCTYPE html>

<html>

  <head>
    <title>Edit your profile</title>
    <meta charset="utf-8">
    <link href="{{ asset('css/profile.css') }}" media="all" rel="stylesheet" type="text/css" />
  </head>
  <body>

    <h1>Edit your profile</h1>
    <form action="{{URL('/updateprofile')}}" method="post" enctype="multipart/form-data">
      <ul>
        <li><label>First Name</label><input type="text" name="name1" value="{{$user->name1}}"></li>
        <li><label>Last Name</label><input type="text" name="name2" value="{{$user->name2}}"></li>
        <li><label>Session</label><input placeholder="Session" type="text" name="session" value="{{$user->session}}"></li>
        <li><label>Student ID</label><input placeholder="Student ID" type="text" name="std_id" value="{{$user->std_id}}"></li>
        <li><label>Current Status</label><input placeholder="Current Status" type="text" name="current_status" value="{{$user->current_status}}"></li>
        <li><label>Interest</label><input placeholder="Interests" type="text" name="interest" value="{{$user->interest}}"></li>
        <li><label>Bio</label><textarea name="bio" type="text" name="bio">{{$user->bio}}</textarea><li>
        <li><input type="submit" value="Update"/></li>
        <input type="hidden" name="_token" value="{{Session::token()}}">
      </ul>
    </form>
  </body>
</html>
