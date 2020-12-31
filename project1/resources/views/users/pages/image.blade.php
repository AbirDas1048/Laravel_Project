@extends('users.layouts.default')
 
@section('content')

<section id="image_upload">
<h3 class="jumbotron">Laravel Multiple File Upload</h3>
<form method="post" action="{{URL::to('image_upload')}}" enctype="multipart/form-data">
  {{csrf_field()}}

        <div class="input-group control-group increment" >
          <input type="file" name="filename[]" class="form-control" multiple>
          <div class="input-group-btn"> 
            <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
          </div>
        </div>

        <button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

  </form>        
</section>



    
 @stop