@extends('layouts.template')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Device Details</h2>
            </div>
        </div>
    </div>
   
    <div class="row">

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
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>IP Address:</strong>
                {{ $desktop->deviceIPaddress }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Device Manufacturer:</strong>
                {{ $desktop->deviceManufacturer }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Device Model:</strong>
                {{ $desktop->deviceModel }}
            </div>
        </div>
      
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Device Seriel Number:</strong>
                {{ $desktop->deviceSerielNumber }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Warranty Date:</strong>
                {{ $desktop->warrantyDate }}
            </div>
        </div>
       
        
        <div class="col-md-6 text-right">
                        <button href="{{ route('desktops.editone',$desktop->id) }}"  class="btn btn-primary">Edit</button>
                    

                 
                        <button href="{{ route('desktops.showthree',$desktop->id) }}"  class="btn btn-primary">Next</button>
                    </div>
    </div>
@endsection