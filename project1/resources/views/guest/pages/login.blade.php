@extends('guest.layouts.default')
 
@section('content')

<section id="login">
  <h2>Login</h2>
	<form action="{{ URL::to('/login_store') }}" method="post">
		{{ csrf_field() }}
		<div class="form-group">
      <label>Email:</label>
      <input type="email" class="form-control" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label>Password:</label>
      <input type="password" class="form-control" placeholder="Enter Password" name="password">
    </div>
   
    <button type="submit" class="btn btn-default">Login</button>
	</form>
	
</section>

    @stop
