@extends('layouts.template')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            
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

@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


<form action="{{ route('vendors.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>ID:</strong>
                <input type="text" name="id" class="form-control" placeholder="The ID will be setup automatically" value="" readonly>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Company Name:</strong>
                <input type="text" class="form-control" name="companyName" placeholder="Company Name">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="email" class="form-control" name="companyEmail" placeholder="Email">
            </div>
        </div>
        
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Phone Number:</strong>
                <input type="text" class="form-control" name="compPhoneNum" placeholder="Phone Number">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        
                <a class="btn btn-primary" href="{{ route('vendors.index') }}"> Back</a>
        </div>
    </div>
   
</form>
@endsection