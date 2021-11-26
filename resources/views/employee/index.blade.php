

@extends('employee.layout') @section('content') 
<div class="row">
   <div class="col-lg-12 margin-tb">
      <div class="pull-left">
         <h2>Laravel</h2>
      </div>
      <div class="pull-right">
         <a class="btn btn-success" href="{{ route('employee.create') }}"> Create New Employee</a>
      </div>
   </div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
   <p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
   <tr>
      <th>No</th>
      <th>Name</th>
      <th>Email</th>
      <th>Phone Number</th>
      <th>Date of Birth</th>
      <th>Country</th>
      <th width="280px">Action</th>
   </tr>
   @foreach ($employees as $employee)
   <tr>
      <td>{{ ++$i }}</td>
      <td>{{ $employee->user_name }}</td>
      <td>{{ $employee->email }}</td>
      <td>{{ $employee->phone_no }}</td>
      <td>{{ $employee->dob }}</td>
      <td>{{ $employee->country }}</td>
      <td>
         <form action="{{ route('employee.destroy',$employee->id) }}" method="POST">
            <a class="btn btn-info" href="{{ route('employee.show',$employee->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('employee.edit',$employee->id) }}">Edit</a> @csrf @method('DELETE') <button type="submit" class="btn btn-danger">Delete</button>
         </form>
      </td>
   </tr>
   @endforeach
</table>
{!! $employees->links() !!} @endsection

