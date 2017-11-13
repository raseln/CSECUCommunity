<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible"/>
        <style>
            body{padding-top: 60px;}
        </style>
        <link href="{{ asset('css/bootstrap3/css/bootstrap.css') }}" rel="stylesheet">
            <link href="{{ asset('css/login-register.css') }}" rel="stylesheet">
                <script src="{{ asset('js/jquery/jquery-1.10.2.js') }}">
                </script>
                <script src="{{ asset('js/bootstrap.js') }}">
                </script>
                <script src="{{ asset('js/login-register.js') }}">
                </script>
            </link>
        </link>
    </head>
    <body>
        <div class="header">
            <div id="logo">
            </div>
            <button class="btn1" data-target="#Modal1" onclick="openLoginModal();" style="position: absolute; 
                    left: 1100px; 
                    top:30px;">
                Login
            </button>
            <button class="btn1" data-target="#Modal2" onclick="openRegisterModal();" style="position: absolute; 
                    left: 900px; 
                    top:30px;">
                Sign Up
            </button>
            
        </div>
        <div class="bodyx">
            <br>
                <strong style="text-shadow:3px 8px 8px rgba(0,0,0,0.5);text-align-last: center; position: absolute; left: 100px; font-size: 40px">
                    Welcome
                    <br>
                        to the amazing journey of gathering and sharing knowledge!
                    </br>
                </strong>
                <br>
                    <br>
                        <br>
                            <br>
                                <br>
                                    <br>
                                        If you are/were a student of
                                        <br>
                                            Computer Science and Engineering, University of Chittagong
                                            <br>
                                                click on SignUp button , create an account and sit on the dinning.
                                                <br>
                                                    Eat, Ask and Repeat
                                                    <img src="{{asset('css/emo.png')}}">
                                                    </img>
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
        </div>
        <div class="modal fade login" data-backdrop="static" data-keyboard="false" id="Modal1">
            <div class="modal-dialog login animated">
                <div class="modal-content">
                    <div class="modal-header">
                        <button aria-hidden="true" class="close" data-dismiss="modal" type="button">
                            ×
                        </button>
                        <h4 class="modal-title" style="position: absolute; left: 300px; color: white; top:5px;">
                            User Login
                        </h4>
                    </div>
                    <div class="modal-body">
                        <div class="box">
                            <div class="content">
                                <div class="error">
                                </div>
                                @if (count($errors) > 0)
                                <div>
                                    <br>
                                        <img src="{{asset('css/error.png')}}" style="position: absolute; left: 300px;">
                                            <br>
                                                <br>
                                                    <ul style="position: relative; float: left; display: block; left: 200px;">
                                                        @foreach ($errors->all() as $error)
                                                        <li>
                                                            {{ $error }}
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                </br>
                                            </br>
                                        </img>
                                    </br>
                                </div>
                                @endif
                                <div class="loginBox">
                                    <form action="{{ route('signin') }}" method="post">
                                        <label for="email" style="color:white; left:95px; top: 145px; position: absolute; font-weight:bolder; text-shadow:3px 8px 8px rgba(0,0,0,0.5);">
                                            E-mail Address
                                        </label>
                                        <input id="email" name="email" type="name">
                                            <label for="password" style="color:white; left:135px; top: 205px; position: absolute; font-weight:bolder; text-shadow: 3px 8px 8px rgba(0,0,0,0.5);">
                                                Password
                                            </label>
                                            <input id="password" name="password" type="password">
                                                <input id="submit" type="submit" value="Login">
                                                    <input name="_token" type="hidden" value="{{ Session::token() }}">
                                                    </input>
                                                </input>
                                            </input>
                                        </input>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <div class="forgot login-footer">
                                        <span>
                                            Looking to
                                            <a href="javascript: showRegisterForm();">
                                                create an account
                                            </a>
                                            ?
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade login" data-backdrop="static" data-keyboard="false" id="Modal3">
            <div class="modal-dialog login animated">
                <div class="modal-content">
                    <div class="modal-header">
                        <button aria-hidden="true" class="close" data-dismiss="modal" type="button">
                            ×
                        </button>
                        <h4 class="modal-title" style="position: absolute; left: 300px; color: white; top:5px;">
                            Admin Login
                        </h4>
                    </div>
                    <div class="modal-body">
                        <div class="box">
                            <div class="content">
                                <div class="error">
                                </div>
                                @if (count($errors) > 0)
                                <div>
                                    <br>
                                        <img src="{{asset('css/error.png')}}" style="position: absolute; left: 300px;">
                                            <br>
                                                <br>
                                                    <ul style="position: relative; float: left; display: block; left: 200px;">
                                                        @foreach ($errors->all() as $error)
                                                        <li>
                                                            {{ $error }}
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                </br>
                                            </br>
                                        </img>
                                    </br>
                                </div>
                                @endif
                                <div class="loginBox">
                                    <form method="post">
                                        <label for="email" style="color:white; left:95px; top: 145px; position: absolute; font-weight:bolder; text-shadow:3px 8px 8px rgba(0,0,0,0.5);">
                                            E-mail Address
                                        </label>
                                        <input id="email" name="email" type="name">
                                            <label for="password" style="color:white; left:135px; top: 205px; position: absolute; font-weight:bolder; text-shadow: 3px 8px 8px rgba(0,0,0,0.5);">
                                                Password
                                            </label>
                                            <input id="password" name="password" type="password">
                                                <input id="submit" type="submit" value="Login">
                                                    <input name="_token" type="hidden" value="{{ Session::token() }}">
                                                    </input>
                                                </input>
                                            </input>
                                        </input>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <div class="forgot login-footer">
                                        <span>
                                            Looking to
                                            <a href="javascript: showRegisterForm();">
                                                create an account
                                            </a>
                                            ?
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade register" data-backdrop="static" data-keyboard="false" id="Modal2">
            <div class="modal-dialog login animated">
                <div class="modal-content">
                    <div class="modal-header">
                        <button aria-hidden="true" class="close" data-dismiss="modal" type="button">
                            ×
                        </button>
                        <h4 class="modal-title" style="position: absolute; left: 300px; color: white; top:5px;">
                            Register
                        </h4>
                    </div>
                    <div class="modal-body">
                        <div class="box">
                            <div class="content">
                                <div class="error">
                                </div>
                                <div class="content registerBox">
                                    <form action="{{route('signup')}}" method="post">
                                        @if (count($errors) > 0)
                                        <div>
                                            <br>
                                                <img src="{{asset('css/error.png')}}" style="position: absolute; left: 300px;">
                                                    <br>
                                                        <br>
                                                            <ul style="position: relative; float: left; display: block; left: 200px;">
                                                                @foreach ($errors->all() as $error)
                                                                <li>
                                                                    {{ $error }}
                                                                </li>
                                                                @endforeach
                                                            </ul>
                                                        </br>
                                                    </br>
                                                </img>
                                            </br>
                                        </div>
                                        @endif
                                        <label for="name1" style="color: white; position:absolute; left:125px; top:125px; font-weight: bolder; text-shadow: 3px 8px 8px rgba(0,0,0,0.5);">
                                            User Name
                                        </label>
                                        <span>
                                            <input id="name1" name="name1" placeholder="First Name" reqired="" type="name">
                                                <input id="name2" name="name2" placeholder="Last Name" required="" type="name">
                                                </input>
                                            </input>
                                        </span>
                                        <div>
                                            <label for="email" style="color:white; left:95px; top: 190px; position: absolute; font-weight:bolder; text-shadow:3px 8px 8px rgba(0,0,0,0.5);">
                                                E-mail Address
                                            </label>
                                            <input id="email1" name="email" required="" type="name">
                                            </input>
                                        </div>
                                        <div>
                                            <label for="password" style="color:white; left:135px; top: 245px; position: absolute; font-weight:bolder; text-shadow: 3px 8px 8px rgba(0,0,0,0.5);">
                                                Password
                                            </label>
                                            <input id="password1" name="password" required="" type="password">
                                            </input>
                                        </div>
                                        <div>
                                            <label for="password_confirmation" style="color:white; left:70px; top: 305px; position: absolute; font-weight:bolder; text-shadow: 3px 8px 8px rgba(0,0,0,0.5);">
                                                Re-enter Password
                                            </label>
                                            <input id="password_confirmation" name="password_confirmation" required="" type="password">
                                            </input>
                                        </div>
                                    
                                </div>
                                <label for="gender" style="color: white; position:absolute; left:140px; top:60px; font-weight: bolder; text-shadow: 3px 8px 8px rgba(0,0,0,0.5);">
                                    Gender
                                </label>
                                <select name="gender" style="color: black;
                                         top:60px;
                                         font-weight: bolder;
                                         text-align:center;
                                         width: 100px;
                                         height: 30px;
                                         position: absolute;
                                         left: 210px;
                                         text-align: center;
                                         border-top-color: #cdcdcd;
                                         border-bottom-color: #cdcdcd;
                                         border-left-color: #cdcdcd;
                                         border-right-color: #cdcdcd;
                                         border-radius: 8px;
                                         background-color: transparent;
                                        -webkit-box-shadow:3px 8px 8px rgba(0,0,0,0.5);">
                                    <option style="text-align-last: center;" value="male">
                                        Male
                                    </option>
                                    <option value="female">
                                        Female
                                    </option>
                                </select>
                                <input id="submit1" name="commit" type="submit" value="Register">
                                    <input name="_token" type="hidden" value="{{ Session::token() }}">
                                    </input>
                                </input>
                                <div class="forgot register-footer">
                                <span>
                                    Already have an account?
                                </span>
                                <a href="javascript: showLoginForm();">
                                    Login
                                </a>
                            </div>
                            </div>
                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
