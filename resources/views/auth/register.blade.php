@extends('layouts.app')

@section('content')

<div class="row">  
	<div class="col-3"></div>
	<div class="col-6">
		<h3>Register a new Account</h3>
		<form method="post" action="{{route('register')}}">
			@csrf
			
			<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Enter your name">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter your Email">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" placeholder="Enter your password">
  </div>

   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" name="password_confirm" placeholder="Enter retype password">
  </div>

  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Registation</button>
</form>
	</div>
	
</div>

@endsection