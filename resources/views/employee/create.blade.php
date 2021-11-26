@extends('employee.layout')
@section('content')
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
           <div class="pull-left">
              <h2>Add New Employee</h2>
           </div>
           <div class="pull-right">
              <a class="btn btn-primary" href="{{ route('employee.index') }}"> Back</a>
           </div>
        </div>
     </div>


@if ($errors->any())
<div class="alert alert-danger">
   <strong>Whoops!</strong> There were some problems with your input.<br />
   <br />
   <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
   </ul>
</div>
@endif
<form action="{{ route('employee.store') }}" method="POST">
   @csrf
   <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
            <strong>Name:</strong>
            <input type="text" name="user_name" class="form-control" placeholder="Enter Name" />
         </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
           <strong>Email:</strong>
           <input type="email" name="email" class="form-control" placeholder="Enter Email" />
        </div>
     </div>

     <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
           <strong>Phone Number:</strong>
           <input type="number" name="phone_no" class="form-control" placeholder="Enter Phone number" />
        </div>
     </div>

     <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
           <strong>Date of Birth:</strong>
           <input type="date" name="dob" class="form-control" />
        </div>
     </div>

      <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
            <strong>Country:</strong>
            <select id="country" name="country" class="form-control">
                <option>select country</option>
                <option value="Afghanistan">Afghanistan</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Canada">Canada</option>
                <option value="China">China</option>
                <option value="Denmark">Denmark</option>
                <option value="Egypt">Egypt</option>
                <option value="Finland">Finland</option>
                <option value="Germany">Germany</option>
                <option value="India">India</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Kenya">Kenya</option>
                <option value="Mexico">Mexico</option>
                <option value="Nepal">Nepal</option>
                <option value="Thailand">Thailand</option>
                <option value="Yemen">Yemen</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
            </select>
         </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12 text-center">
         <button type="submit" class="btn btn-primary">Submit</button>
      </div>
   </div>
</form>
</div>
@endsection

