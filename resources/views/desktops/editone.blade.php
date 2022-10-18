@extends('layouts.template')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Desktop</h2>
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
  

    <div class="card-body">
    <form action="{{ route('desktop.update',$desktop->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                                <label for="title">Assigned To:</label>
                                <input type="text" value="{{ $desktop->assignedTo }}" class="form-control"  name="assignedTo">
                            </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                                <label for="title">Hostname:</label>
                                <input type="text" value="{{ $desktop->deviceHostname }}" class="form-control"  name="deviceHostname">
                            </div>
            </div>
          

          
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-primary" href="{{ route('categorys.index') }}"> Back</a>
            </div>
        </div>
   
    </form>
@endsection