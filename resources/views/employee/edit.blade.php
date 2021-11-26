

@extends('employee.layout')
@section('content')
<div class="row">
   <div class="col-lg-12 margin-tb">
      <div class="pull-left">
         <h2>Edit Employee</h2>
      </div>
      <div class="pull-right">
         <a class="btn btn-primary" href="{{ route('employee.index') }}"> Back</a>
      </div>
   </div>
</div>
@if ($errors->any())
<div class="alert alert-danger">
   <strong>Whoops!</strong> There were some problems with your input.<br><br>
   <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
   </ul>
</div>
@endif
<form action="{{ route('employee.update',$employee->id) }}" method="POST">
   @csrf
   @method('PUT')
   <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
            <strong>Name:</strong>
            <input type="text" name="user_name"  value="{{ $employee->user_name }}" class="form-control" placeholder="Enter Name" />
         </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
           <strong>Email:</strong>
           <input type="email" name="email" value="{{ $employee->email }}" class="form-control" placeholder="Enter Email" />
        </div>
     </div>

     <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
           <strong>Phone Number:</strong>
           <input type="number" name="phone_no" value="{{ $employee->phone_no }}" class="form-control" placeholder="Enter Phone number" />
        </div>
     </div>

     <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
           <strong>Date of Birth:</strong>
           <input type="date" name="dob"  value="{{ $employee->dob }}" class="form-control" />
        </div>
     </div>

      <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
            <strong>Country:</strong>
            <select id="country" name="country" class="form-control">
               <option>select country</option>
               <option {{ ($employee->country) == 'Afghanistan' ? 'selected' : '' }}  value="Afghanistan">Afghanistan</option>
               <option {{ ($employee->country) == 'Bangladesh' ? 'selected' : '' }}  value="Bangladesh">Bangladesh</option>
               <option {{ ($employee->country) == 'Canada' ? 'selected' : '' }}  value="Canada">Canada</option>
               <option {{ ($employee->country) == 'China' ? 'selected' : '' }}  value="China">China</option>
               <option {{ ($employee->country) == 'Denmark' ? 'selected' : '' }}  value="Denmark">Denmark</option>
               <option {{ ($employee->country) == 'Egypt' ? 'selected' : '' }}  value="Egypt">Egypt</option>
               <option {{ ($employee->country) == 'Finland' ? 'selected' : '' }}  value="Finland">Finland</option>
               <option {{ ($employee->country) == 'Germany' ? 'selected' : '' }}  value="Germany">Germany</option>
               <option {{ ($employee->country) == 'India' ? 'selected' : '' }}  value="India">India</option>
               <option {{ ($employee->country) == 'Jamaica' ? 'selected' : '' }}  value="Jamaica">Jamaica</option>
               <option {{ ($employee->country) == 'Kenya' ? 'selected' : '' }}  value="Kenya">Kenya</option>
               <option {{ ($employee->country) == 'Mexico' ? 'selected' : '' }}  value="Mexico">Mexico</option>
               <option {{ ($employee->country) == 'Nepal' ? 'selected' : '' }}  value="Nepal">Nepal</option>
               <option {{ ($employee->country) == 'Thailand' ? 'selected' : '' }}  value="Thailand">Thailand</option>
               <option {{ ($employee->country) == 'Yemen' ? 'selected' : '' }}  value="Yemen">Yemen</option>
               <option {{ ($employee->country) == 'Zambia' ? 'selected' : '' }}  value="Zambia">Zambia</option>
               <option {{ ($employee->country) == 'Zimbabwe' ? 'selected' : '' }}  value="Zimbabwe">Zimbabwe</option>
            </select>
         </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12 text-center">
         <button type="submit" class="btn btn-primary">Submit</button>
      </div>
   </div>
</form>
@endsection

