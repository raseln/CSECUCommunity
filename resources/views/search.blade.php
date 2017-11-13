<div> 

	@forelse($user as $user )
	<a href="{{URL('/profile', ['user_id'=>$user->id])}}"><h3>{{ $user->name1}} {{ $user->name2 }}</h3></a>
	<h3>{{ $user->email}}</h3>
	@empty
	<h3>NO ONE FOUND</h3>
	@endforelse

</div>