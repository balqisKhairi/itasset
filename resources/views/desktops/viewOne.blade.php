@extends('layouts.template')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Human Information Details</h2>
            </div>
        </div>
    </div>
   
    
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Assigned To:</strong>
                {{ $desktop->assignedTo }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Device Hostname:</strong>
                {{ $desktop->deviceHostname }}
            </div>
        </div>
      
       
  
                    <div class="col-md-6 text-right">
                        <button href="{{ route('desktops.editone',$desktop->id) }}"  class="btn btn-primary">Edit</button>
                    </div>

                    <div class="col-md-6 text-right">
                        <button href="{{ route('desktops.showtwo',$desktop->id) }}"  class="btn btn-primary">Next</button>
                    </div>
    </div>
@endsection