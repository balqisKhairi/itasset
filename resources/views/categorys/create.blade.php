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
   
<form action="{{ route('categorys.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>ID:</strong>
                <input type="text" name="category_id" class="form-control" placeholder="category ID">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <input type="text" class="form-control" name="categoryName" placeholder="Description">
            </div>
        </div>

        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        
                <a class="btn btn-primary" href="{{ route('categorys.index') }}"> Back</a>
        </div>
    </div>
   
</form>
@endsection