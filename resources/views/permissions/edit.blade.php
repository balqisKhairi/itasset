@extends('layouts.template')


   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit permission</h2>
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

  
    <form action="{{ route('permissions.update',$permission->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
         <br>

            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="card">
                        <div class="card-header">permission</div>
                    <div class="card-body">
                <div class="form-group">
                    <strong>ID:</strong>
                    <input type="text" name="id" value="{{ $permission->id }}" class="form-control" placeholder="ID" readonly>
                </div>
   
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>

                    <label for="psw">
            <h6>*example: IT-create/edit/delete.</h6>
          </label>
                   
                    <input type="text" class="form-control" name="name" value="{{ $permission->name }}" placeholder="Ex:IT-create/edit/delete"></input>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                                <label>Permission For :&nbsp; &nbsp;</label>
                                <select name="forWho" id="forWho"class="form-control">
                                <option value=""  readonly > --SELECT--</option>
                                <option value="user" {{ $permission->forWho == "user" ? 'selected' : '' }} > User</option>
                                <option value="admin" {{ $permission->forWho == "admin" ? 'selected' : '' }} > Admin</option>
                                <option value="viewer" {{ $permission->forWho == "viewer" ? 'selected' : '' }}> Viewer</option>

                                </select>
                            </div>
          
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-primary" href="{{ route('permissions.index') }}"> Back</a>
            </div>
        </div>
   
    </form>
</div>
</div>
</div>
@endsection