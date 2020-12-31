@extends('guest.layouts.default')
 
@section('content')
 
   <section id="sign-up">
       <h2>Sign UP</h2>
  <form action="{{ URL::to('/insert') }}" method="post">
    {{ csrf_field() }}
    <div class="form-group">
      <label>First Name:</label>
      <input type="text" class="form-control" placeholder="Enter First name" name="first_name" required>
    </div>
    <div class="form-group">
      <label>Last Name:</label>
      <input type="text" class="form-control" placeholder="Enter Last name" name="last_name" required>
    </div>
    <div class="form-group">
      <label>Address:</label>
      <input type="text" name="address" class="form-control" placeholder="Enter Address" required>
    </div>
    <div class="form-group">
      <label>Birthdate:</label>
      <input type="date" class="form-control" name="birthdate" required>
    </div>
    <div class="form-group">
      <label>Email:</label>
      <input type="email" class="form-control" placeholder="Enter email" name="email" required>
    </div>
    <div class="form-group">
      <label>Password:</label>
      <input type="password" class="form-control" placeholder="Enter Password" name="password" required>
    </div>
   
    <button type="submit" class="btn btn-default">Submit</button>
    </form>
    </section>
@stop