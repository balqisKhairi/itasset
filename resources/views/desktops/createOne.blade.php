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
   


<form action="{{ route('desktops.storeOne') }}" method="POST">
    @csrf
<div class="form-group">
                                <label for="title">Assigned To:</label>
                                <input type="text" value="{{ $desktop->assignedTo ?? '' }}" class="form-control"  name="assignedTo">
                            </div>
                            <div class="form-group">
                                <label for="description">Device Hostname:</label>
                                <input type="text"  value="{{{ $desktop->deviceHostname ?? '' }}}" class="form-control"  name="deviceHostname"/>
                            </div>
                           
   
   
                           
                          
                    </div>
  
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Next</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>