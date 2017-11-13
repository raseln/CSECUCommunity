<!DoCTYPE html>
<head>
  <title>Welcome to CSECU Community</title>
  <meta charset="utf-8">
  <link href="{{ asset('css/profile.css') }}" media="all" rel="stylesheet" type="text/css" />
</head>
<body>

  <form action="{{URL('/updatepicture')}}" method="post" enctype="multipart/form-data">
    <ul>
    <li><input type="file" name="pic"></li>
    <li><input type="submit" value="Upload"></li>
    <input type="hidden" name="_token" value="{{Session::token()}}">
  </ul>
  </form>
</body>
