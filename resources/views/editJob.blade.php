<!DOCTYPE html>

<html>

<head>
<link href="{{ asset('css/home.css') }}" rel="stylesheet">

</head>
<body>
<div class="header">
<div id="logo">

</div>

 <div class="form6">Submission Type</div>
 <div class="side">
 <button  class="link3" onclick="window.location.href='/addJob'";>Add Job</button>
 <button  class="link1" onclick="window.location.href='/questionJob'";>Any Question?</button>
 <button class="link2" onclick="window.location.href='/blog'";>Share Your Experience About Job</button>	
 </div>
</div>

 

<div class="secc">
	@foreach($jobs as $job)
	
<div class="secondPost">

<form action="{{ route( 'update.job' , ['job_id'=>$job->id] ) }}" method="post" > 
<label style="position: absolute; top: 10px; left: 250px;font-size: 18px; font-weight: bolder;">Job Title</label>	
<input value ="{{ $job->job_title }}" type="text" name="job_title" style="position: absolute; top:40px; left: 200px; border:none; border-radius: 8px; height: 25px; width:180px;"></br></br>
<label style="position: absolute; top: 90px; left: 30px; font-size: 18px; font-weight: bolder;">Company Name</label>
<input value="{{ $job->company_name}}" type="text" name="company_name" style="position: absolute; top: 90px; left: 170px; height: 25px; width: 250px; border-radius:8px; border:none;"></br></br></br></br></br>
<label style="position: absolute; top: 160px; left:100px; font-size: 18px; font-weight: bolder;">Skills:</label></br>

{{ Form::checkbox('skills[]','HTML')}}
<label style="position: absolute; top: 140px; left: 200px; ">HTML</label></br>
{{ Form::checkbox('skills[]','CSS') }}
<label style="position: absolute; top: 160px; left: 200px; ">CSS</label></br>
{{ Form::checkbox('skills[]','PHP') }}
<label style="position: absolute;top: 180px; left: 200px; ">PHP</label></br>
{{ Form::checkbox('skills[]','JAVASCRIPTS') }}
<label style="position: absolute;top: 200px; left: 200px; ">JAVASCRIPTS</label></br>
{{ Form::checkbox('skills[]','OTHERS') }} 
<label style="position: absolute;top: 220px; left: 200px;">OTHERS</label>

<label style="position: absolute; top:280px; left:110px; font-size: 18px; font-weight: bolder; ">Salary
</label>
<input value={{$job->salary}} type="text" name="salary" style="position: absolute; top: 280px; left: 180px; height: 25px; width: 250px; border-radius:8px; border:none;">

<label style="position: absolute; top:360px; left:20px; font-size: 16px; font-weight: bolder;">Requirement Details
</label>
<textarea id="post-body" name='requirements' style="position: absolute; top: 330px; left: 180px; height: 70px; width: 250px; border-radius:8px; border:none;">{{ $job->requirements}}
</textarea></br></br>
<label style="position: absolute; top:430px; left:100px; font-size: 18px; font-weight: bolder;" > Contact 
</label>
<input value="{{ $job->contact }}" type="text" name="contact" style="position: absolute; top: 430px; left: 180px; height: 25px; width: 250px; border-radius:8px; border:none;">
</br></br>
	    
        
        <input type="submit" value="Save Changes" style="position: relative; top: 200px; left: 280px; width: 150px; height: 30px; background-color: blue; color: white; border:none">
        <input type="hidden" name="_token"  value="{{ Session:: token()}}" >
         
	    </form>

	    <button style="position: relative; top:170px; left: 100px; width: 150px; height: 30px; background-color: darkred; color: white; border:none" onclick="window.location.href='{{ route( 'cancle.job' , ['job_id'=>$job->id] )}}'">Cancle</button>   
	</div>    
	    </div></br></br>
	
	@endforeach


	


</body>
</html>