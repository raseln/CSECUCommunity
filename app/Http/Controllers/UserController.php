<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use DB;

class UserController extends Controller
{


    public function postSignUp(Request $request)
    {
         $this->validate($request ,[
            'email'=> 'required|email|unique:users' ,
            'name1' => 'required|max:60' ,
             'name2' => 'required|max:60',
             'gender' => 'required',
             'password' =>'required|min:4|confirmed'
            ]);
        
         $email = $request['email'];
          $name1 = $request['name1'];
         $name2 = $request['name2'];
         $gender = $request['gender'];

         $password = bcrypt($request['password']);
         $slug  =   str_slug($request['name1'],'-');
         $pic= $request['pic'];
         if($request['gender']=='male')
        {
            $pic_path='profile-male.png';
        }
        else
        {
           $pic_path ='pm.png';
        } 

         $user = new User();
         

         $user->email= $email;
         $user->pic= $pic_path;
         $user->name1= $name1;
         $user->name2= $name2;
         $user->password= $password;
         $user->gender = $gender;
         $user->slug =$slug;

        
        
         $user->save();
         
         Auth::login($user);

        return redirect()->route('home');
   }
   

public function postSignIn(Request $request)
{
   $this->validate($request ,[
            'email'=> 'required' ,
            'password' => 'required'
            ]);

     $logged = auth()->attempt(
          ['email' => $request['email'], 
           'password' => $request['password']
           ]);

    if($logged) {
        return redirect()->route('home');
} 
else
{
   return redirect()->back();

    }
}

public function getLogout()
{
    Auth::logout();
    
    return redirect()->route('welcome');
}


public function getRegisterPage()
{
    return view('welcome');
}

//zahir

public function executeSearch(Request $request){

    $searchKey = $request->search_data;
    $user = User::where('name1', 'Like', '%'.$searchKey.'%')->paginate(20);
    return view ('search', compact('user'));

}

public function getProfile($user_id){
        $user = User::where('id', $user_id)->first();
        if(Auth::user()!=$user){
            return view('profile', ['user'=> $user]);
        }
        return redirect()->route('myprofile');
        }

        public function getAuthProfile(){
            return view ('profile0');
            }

            public function getEditProfile(){
                return view ('editprofile', ['user'=>Auth::user()]);
                }

                public function getEditPicture(){
                    return view ('uploadimg', ['user'=>Auth::user()]);
                    }


                    //edit profile

    public function postUpdateProfile(Request $request){

        $this->validate($request, [
            'name1' => 'required',
            'name2' => 'required'
            ]);

        $user = Auth::user();
        $user->name1 = $request['name1'];
        $user->name2 = $request['name2'];
        $user->session = $request['session'];
        $user->std_id = $request['std_id'];
        $user->current_status = $request['current_status'];
        $user->interest = $request['interest'];
        $user->bio = $request['bio'];
        $user->update();
        return redirect()->route('myprofile');
    }




    public function postUpdatePicture(Request $request){
        $file = $request->file('pic');
        $filename = $file->getClientOriginalName();
        $path = 'img';
        $file->move($path, $filename);
        $user_id = Auth::user()->id;
        DB::table('users')->where('id', $user_id)->update(['pic'=>$filename]);
        return redirect()->route('myprofile');
    }
}