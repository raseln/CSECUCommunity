
<!DOCTYPE html>
<html>
<head>

  <title>Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href={{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}>
  <!-- Font Awesome -->
  <link rel="stylesheet" href={{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}>
  <!-- Ionicons -->
  <link rel="stylesheet" href={{ asset('bower_components/Ionicons/css/ionicons.min.css') }}>
  <!-- jvectormap -->
  <link rel="stylesheet" href={{ asset('bower_components/jvectormap/jquery-jvectormap.css') }}>
  <!-- Theme style -->
  <link rel="stylesheet" href={{ asset('dist/css/AdminLTE.min.css') }}>

 <link rel="stylesheet" href={{ asset('css/prism.css') }}>

 <link rel="stylesheet" href={{  asset('bower_components/select2/dist/css/select2.min.css') }}>

 <link rel="stylesheet" href={{ asset('dist/css/skins/_all-skins.min.css') }}>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>


<body class="hold-transition skin-blue sidebar-mini">

  <div class="wrapper">
  <header class="main-header">
    <a href="index2.html" class="logo">
      <span class="logo-mini"><b>D</b>P</span>
      <span class="logo-lg"><b>Dinning</b>Phillosopers</span>
    </a>

<nav class="navbar navbar-static-top" role="navigation">

      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <li class="dropdown messages-menu">

            <a  class="dropdown-toggle" data-toggle="dropdown">
            <a href="/chat" class="fa fa-envelope-o"></a>
              </a>

            <a  class="dropdown-toggle" data-toggle="dropdown">
            <a href="/addJob">Job</a>
              </a>


          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="{{
              URL::asset('img/' . Auth::user()->pic)}}" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">{{ucwords(Auth::user()->name1)}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="{{
              URL::asset('img/' . Auth::user()->pic)}}" class="img-circle" alt="User Image">

                <p>
                  {{ucwords(Auth::user()->name1)}} {{ucwords(Auth::user()->name2)}}
                  <small>Member since <br> {{ucwords(Auth::user()->created_at->diffForHumans())}}</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">

                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="{{ route('myprofile')}}" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="/logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->

        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ URL::asset('img/' . Auth::user()->pic)}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ucwords(Auth::user()->name1)}} {{ucwords(Auth::user()->name2)}}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="{{ route('search') }}" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="search_data" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">

        <!-- Optionally, you can add icons to the links -->
        <li class="treeview">
          <a href="/home">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>

      <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i><span>Job</span>
        </a>
      </li>

      <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Tags</span>

            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>

              </span>
          </a>

          <ul class="treeview-menu">

            <li>
              @foreach($tags as $tag)
              <a href="#">{{ $tag->name }}</a>
              @endforeach
            </li>
          </ul>

        </li>

      <li class="treeview">
          <a href="#"><i class="glyphicon glyphicon-user"></i> <span>Members</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li>
            @foreach($users as $user)
            <a href="#">{{ $user->name1 }} {{ $user->name2 }}</a>
            @endforeach
          </li>

          </ul>
        </li>


        <li class="treeview">



        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>



  <div class="content-wrapper">

    <section class="content-header">
      <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>

              </div>
              <h3 class="box-title">Have Anything to ask? Please proceed!
              </h3>


            <form action="{{ route('createpost') }}" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label  for="name"><b>Question Title</b></label>
                  <input style="background-color:whitesmoke;" type="text" class="form-control" id="title" placeholder="title" name="title"><br>
                  <label  for="slug"><b>Question</b></label>
                   <textarea  id="editor1" name="body" rows="10" cols="80" placeholder="Write something here...">

                    </textarea><br>



                    <!--  nn !-->

              <div class="form-group">
                <label>Tags</label>
                <select class="form-control select2" multiple="multiple" data-placeholder="Select a State"
                        style="width: 100%;" name="tags[]">
                        @foreach($tags as $tag)
                  <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                  @endforeach
                </select>
              </div>

                <!-- nn -->
                 <input type="submit" class="btn btn-primary" value="submit">
                 <input name="_token" type="hidden" value="{{ Session::token() }}">

                </div>



              </div>
              </form>


          </div>

            </div>
          </div>
          <!-- Start -->

   @foreach($posts as $post)

      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <a href="#">
              <img src="{{URL::asset('img/'.$post->user->pic)}}" alt="profile Pic" height="50" width="50">
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

                  <div class="interaction">
                    <button>Like</button> |
                    <button>Dislike</button> |
                    <button onclick="showhide('reply-form');">Reply</button>
                    @if(Auth::user()==$comment->user)
                    |
                      <button onclick="window.location.href='{{URL('/deletecomment', ['comment_id'=>$comment->id])}}';" >Delete</button>
                    @endif

                  </div>
                </div>

                    @foreach($comment->replies as $reply)
                    <div class="reply">
                    <a href="#">
                      <img src="{{URL::asset('img/'.$reply->user->pic)}}" alt="profile Pic" height="50" width="50">
                      </a>
                    <p class="accountnametext"><a href="{{URL('/profile', ['user_id'=>$reply->user->id])}}">{{$reply->user->name1}} {{$reply->user->name2}}</a></p>
                    <p class="replytext">{{$reply->reply_body}}</p>

                    <div class="interaction">
                      <button>Like</button> |
                      <button>Dislike</button> |
                      <button onclick="showhide('reply-form');">Reply</button>
                      @if(Auth::user()==$reply->user)
                      |
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
              <div>
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
    </div>


    <!-- /.content -->

  @endforeach
          <!-- End -->

            </div>
      </div>



          </div>
          </div>


    </section>

    </section>

  </div>


  </aside>


<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script src={{ asset('../../bower_components/jquery/dist/jquery.min.js') }}></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- CK Editor -->

<script src="//cdn.ckeditor.com/4.7.3/full/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="{{ asset('bower_components/select2/dist/js/select2.full.min.js') }}"></script>

<script src="{{ asset('ckeditor/build-config.js') }}"></script>
<script src="{{ asset('ckeditor/styles.js') }}"></script>
<script src="{{ asset('ckeditor/styles.js') }}"></script>
<script src="{{ asset('js/prism.js') }}"></script>

<script>
  $(function () {
   $('.select2').select2();
    CKEDITOR.replace('editor1');
    $('.textarea').wysihtml5();

  });




</script>
</body>
</html>
