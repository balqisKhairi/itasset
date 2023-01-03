@extends('layouts.template')
@section('content')

<style>

    .checkbox{
    padding-bottom: 5px;
}

.form-control {
    display: block;
    width: 100%;
    height: calc(2.25rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #e1e0e0;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    box-shadow: inset 0 0 0 transparent;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}

.btn-primary {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff;
    box-shadow: none;
    margin-top: 20px;
}
    
    </style>
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
   
<form action="{{ route('roles.store') }}" method="POST">
    @csrf
  
    <div class="card mb-3">
  <h3 class="card-header" align="center" >Role Details</h3>
  <div class="card-body">

     <div class="box-body">
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>ID:</strong>
                <input type="text" name="id" class="form-control" placeholder="The ID will be setup automatically" value="" readonly>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>role Name:</strong>
                <input type="text" class="form-control" name="roleName" placeholder="Description">
            </div>
        </div>


            
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Permissions:</strong>
                <br></br>
        <div class="row">
        <div class="col-lg-2">
         
            <label>Category :&nbsp; &nbsp;</label>
                @foreach ($permissions as $permission)
                @if($permission->forWho == 'category')
              
                <div class="checkbox">
                    
                        <input type="checkbox" name="permission[]" value="{{$permission->id}}"> {{$permission->name}}
                
                </div>
                @endif
                @endforeach
        </div>


        <div class="col-lg-2">
           
            <label>User :&nbsp; &nbsp;</label>
                @foreach ($permissions as $permission)
                @if($permission->forWho == 'user')
             
                <div class="checkbox">
                    
                        <input type="checkbox" name="permission[]" value="{{$permission->id}}"> {{$permission->name}}
                
                </div>
                @endif
                @endforeach
        </div>

        <div class="col-lg-2">
           
           <label>Department :&nbsp; &nbsp;</label>
               @foreach ($permissions as $permission)
               @if($permission->forWho == 'department')
            
               <div class="checkbox">
                   
                       <input type="checkbox" name="permission[]" value="{{$permission->id}}"> {{$permission->name}}
               
               </div>
               @endif
               @endforeach
       </div>


       <div class="col-lg-2">
           
           <label>Vendor :&nbsp; &nbsp;</label>
               @foreach ($permissions as $permission)
               @if($permission->forWho == 'vendor')
            
               <div class="checkbox">
                   
                       <input type="checkbox" name="permission[]" value= "{{$permission->id}}"> {{$permission->name}}
               
               </div>
               @endif
               @endforeach
       </div>



       <div class="col-lg-2">
           
           <label>Other :&nbsp; &nbsp;</label>
               @foreach ($permissions as $permission)
               @if($permission->forWho == 'device')
            
               <div class="checkbox">
                   
                       <input type="checkbox" name="permission[]"value= "{{$permission->id}}"> {{$permission->name}}
               
               </div>
               @endif
               @endforeach
       </div>
<br></br>
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        
                <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
        </div>
    </div>
   
</form>
@endsection