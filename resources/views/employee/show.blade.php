

@extends('employee.layout')
@section('content')
<div class="row">
   <div class="col-lg-12 margin-tb">
      <div class="pull-left">
         <h2> Show Employee</h2>
      </div>
      <div class="pull-right">
         <a class="btn btn-primary" href="{{ route('employee.index') }}"> Back</a>
      </div>
   </div>
</div>
<div class="row">
   <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
         <strong>Name:</strong>
         {{ $employee->user_name }}
      </div>
   </div>

   <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
         <strong>Email:</strong>
         {{ $employee->email }}
      </div>
   </div>

   <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
         <strong>Phone Number:</strong>
         {{ $employee->phone_no }}
      </div>
   </div>

   <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
         <strong>Date of Birth:</strong>
         {{ $employee->dob }}
      </div>
   </div>

   <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
         <strong>Country:</strong>
         {{ $employee->country }}
      </div>
   </div>
</div>
@endsection

