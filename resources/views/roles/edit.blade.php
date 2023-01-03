@extends('layouts.template')


   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit role</h2>
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

    <style>

.form-control {
    display: block;
    width: 100%;
    height: calc(2.25rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #dcf2ff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    box-shadow: inset 0 0 0 transparent;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
        </style>

  
    <form action="{{ route('roles.update',$role->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
         <br>

            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="card">
                        <div class="card-header">role</div>
                    <div class="card-body">
                <div class="form-group">
                    <strong>ID:</strong>
                    <input type="text" name="id" value="{{ $role->id }}" class="form-control" placeholder="ID" readonly>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    <input type="text" class="form-control" name="roleName" value="{{ $role->roleName }}" placeholder="Description"></input>
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
                    
                        <input type="checkbox" name="permission[]" value="{{$permission->id}}"

                        @foreach ($role->permissions as $role_permit)
                            @if($role_permit->id == $permission->id)
                        checked
                            @endif
                        @endforeach
                        > {{$permission->name}}</input>
            
                  
                </div>
                @endif
                @endforeach
        </div>


        <div class="col-lg-2">
           
            <label>User :&nbsp; &nbsp;</label>
                @foreach ($permissions as $permission)
                @if($permission->forWho == 'user')
             
                <div class="checkbox">
                    
                        <input type="checkbox" name="permission[]" value="{{$permission->id}}"
               
                        @foreach ($role->permissions as $role_permit)
                            @if($role_permit->id == $permission->id)
                        checked
                            @endif
                        @endforeach
                        > {{$permission->name}}</input>
            
                  
                </div>
                @endif
                @endforeach
        </div>
        <div class="col-lg-2">
           
           <label>Department :&nbsp; &nbsp;</label>
               @foreach ($permissions as $permission)
               @if($permission->forWho == 'department')
            
               <div class="checkbox">
                   
                       <input type="checkbox" name="permission[]" value="{{$permission->id}}"
               
                       @foreach ($role->permissions as $role_permit)
                            @if($role_permit->id == $permission->id)
                        checked
                            @endif
                        @endforeach
                        > {{$permission->name}}</input>
            
                  
                </div>
                @endif
                @endforeach
        </div>


       <div class="col-lg-2">
           
           <label>Vendor :&nbsp; &nbsp;</label>
               @foreach ($permissions as $permission)
               @if($permission->forWho == 'vendor')
            
               <div class="checkbox">
                   
                       <input type="checkbox" name="permission[]" value= "{{$permission->id}}"
               
             
                       @foreach ($role->permissions as $role_permit)
                            @if($role_permit->id == $permission->id)
                        checked
                            @endif
                        @endforeach
                        > {{$permission->name}}</input>
            
                  
                </div>
                @endif
                @endforeach
        </div>


       <div class="col-lg-2">
           
           <label>Other :&nbsp; &nbsp;</label>
               @foreach ($permissions as $permission)
               @if($permission->forWho == 'device')
            
               <div class="checkbox">
                   
               
               <input type="checkbox" name="permission[]" value= "{{$permission->id}}"
               
             
               @foreach ($role->permissions as $role_permit)
                            @if($role_permit->id == $permission->id)
                        checked
                            @endif
                        @endforeach
                        > {{$permission->name}}</input>
            
                  
                </div>
                @endif
                @endforeach
        </div>
            </div>


            <br></br>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
            </div>
        </div>
   
    </form>
</div>
</div>
</div>
@endsection