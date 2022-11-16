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
                {{ $mpos->assignedTo }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Device Hostname:</strong>
                {{ $mpos->deviceHostname }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>IP Address:</strong>
                {{ $mpos->deviceIPaddress }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Device Manufacturer:</strong>
                {{ $mpos->deviceManufacturer }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Device Model:</strong>
                {{ $mpos->deviceModel }}
            </div>
        </div>
      
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Device Seriel Number:</strong>
                {{ $mpos->deviceSerielNumber }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Warranty Date:</strong>
                {{ $mpos->warrantyDate }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Department:</strong>
                {{ $mpos->department }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Device Location:</strong>
                {{ $mpos->deviceLocation }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Level:</strong>
                {{ $mpos->level }}
            </div>
        </div>

       

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Operating System:</strong>
                {{ $mpos->operatingSystem }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Window Version:</strong>
                {{ $mpos->windowVersion }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>MS Office And Version:</strong>
                {{ $mpos->msOfficeAndVersion }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Office Seriel Key:</strong>
                {{ $mpos->officeSerielKey }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Antivirus And Version:</strong>
                {{ $mpos->antivirusAndVersion }}
            </div>
</div>


<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Domain:</strong>
                {{ $mpos->domain }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Internet Connection:</strong>
                {{ $mpos->internetConnection }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Policy Reboot And Shutdown:</strong>
                {{ $mpos->policyRebootAndShutdown }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Condition (CPU):</strong>
                {{ $mpos->cpu }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Condition (monitor):</strong>
                {{ $mpos->monitor }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Deployment:</strong>
                {{ $mpos->deployment }}
            </div>
        </div>
       
       
        <div class="col-md-6 text-right">
                        <button href="{{ route('mposs.edit',$mpos->id) }}"  class="btn btn-primary">EDIT</button>
                    
                 
                        <button  class="btn btn-primary">BACK</button>
                    </div>
    </div>
 
@endsection