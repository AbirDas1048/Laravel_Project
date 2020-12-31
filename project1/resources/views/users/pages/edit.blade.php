@extends('users.layouts.default')
 
@section('content')
 
   <section id="sign-up">
       <h2>Update</h2>
  <form action="{{ URL::to('/update/'.$user->id) }}" method="post">
    {{ csrf_field() }}
    <div class="form-group">
      <label>First Name:</label>
      <input type="text" class="form-control" placeholder="Enter First name" name="first_name" value="{{ $user->first_name }}">
    </div>
    <div class="form-group">
      <label>Last Name:</label>
      <input type="text" class="form-control" placeholder="Enter Last name" name="last_name" value="{{ $user->last_name }}">
    </div>
    <div class="form-group">
      <label>Address:</label>
      <input type="text" name="address" class="form-control" placeholder="Enter Address" value="{{ $user->address }}">
    </div>
    <div class="form-group">
      <label>Birthdate:</label>
      <input type="date" class="form-control" name="birthdate" value="{{ $user->birthdate }}">
    </div>
    <div class="form-group">
      <label>Email:</label>
      <input type="email" class="form-control" placeholder="Enter email" name="email" value="{{ $user->email }}">
    </div>
    <div class="form-group">
      <label>Password:</label>
      <input type="password" class="form-control" placeholder="Enter Password" name="password" value="{{ $user->password }}">
    </div>
   
    <button type="submit" class="btn btn-default">Update</button>
    </form>
    </section>
@stop