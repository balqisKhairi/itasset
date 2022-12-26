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
   
<form action="{{ route('register') }}" method="Post">
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
                <strong>Name:</strong>
                <input type="text" class="form-control" name="name" placeholder="Staff Name">
            </div>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Passw:</strong>
                <input type="text" class="form-control" name="password" placeholder="Password">
            </div>
        </div>


        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="text" class="form-control" name="email" placeholder="Staff Email">
            </div>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Role:</strong>
                <input type="text" class="form-control" name="email" placeholder="Staff Email">
            </div>
        </div>


        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Permisions:</strong>
                <input type="text" class="form-control" name="email" placeholder="Staff Email">
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        
                <a class="btn btn-primary" href="{{ route('accounts.index') }}"> Back</a>
        </div>
    </div>
   
</form>
@endsection