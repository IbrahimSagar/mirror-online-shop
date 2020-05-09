@extends('pages.users.master')

@section('sub-content')

<div class="container">
    <h1 class="h1 m-0">Users Dashboard</h1>
    <h2>Welcome{{ $user->first_name.' '. $user->last_name }}</h2>
    <p>You can change your profile and every information here...</p>
    <hr>
     
    <div class="row">
    	<div class="col-md-4">
    		<div class="card card-body mt-2 pointer" onclick="location.href='{{ route('user.profile') }}'">
    			<h2>Update Profile</h2>
    		</div>	
    	</div>
    </div>   
</div>
@endsection