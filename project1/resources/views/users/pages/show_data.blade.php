@extends('users.layouts.default')
 
@section('content')
  
<div class="table">
<h2>List all data</h2>
<div class="table-responsive">
      <table>
  
  <thead>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Address</th>
        <th>Birthdate</th>
        <th>Email</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($q as $t)
          <tr>
            <td>{{ $t->first_name }}</td>
            <td>{{ $t->last_name }}</td>
            <td>{{ $t->address }}</td>
            <td>{{ $t->birthdate }}</td>
            <td>{{ $t->email }}</td>
            <td><a href="{{ URL::to('edit/'.$t->id) }}" class="btn btn-primary">Edit</a> 
                <a data-toggle="modal" data-target="#{{ $t->id }}" class="btn btn-primary">Delete</a>
                <div id="{{ $t->id }}" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Delete Confirmation</h4>
                      </div>
                      <div class="modal-body">
                        <p>Are you sure you want to delete <b>{{ $t->name }}</b>?</p>
                      </div>
                      <div class="modal-footer">
                        <a href="{{ URL::to('delete/'.$t->id) }}" class="btn btn-primary">Yes</a>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>

                  </div>
                </div>
              </td>

          </tr>

        @endforeach
    </tbody>
  </table>
</div>
</div>

  @stop