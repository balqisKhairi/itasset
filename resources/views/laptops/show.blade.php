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
                {{ $laptop->assignedTo }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Device Hostname:</strong>
                {{ $laptop->deviceHostname }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>IP Address:</strong>
                {{ $laptop->deviceIPaddress }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Device Manufacturer:</strong>
                {{ $laptop->deviceManufacturer }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Device Model:</strong>
                {{ $laptop->deviceModel }}
            </div>
        </div>
      
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Device Seriel Number:</strong>
                {{ $laptop->deviceSerielNumber }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Warranty Date:</strong>
                {{ $laptop->warrantyDate }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Department:</strong>
                {{ $laptop->department }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Device Location:</strong>
                {{ $laptop->deviceLocation }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Level:</strong>
                {{ $laptop->level }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Operating System:</strong>
                {{ $laptop->operatingSystem }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Window Version:</strong>
                {{ $laptop->windowVersion }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>MS Office And Version:</strong>
                {{ $laptop->msOfficeAndVersion }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Office Seriel Key:</strong>
                {{ $laptop->officeSerielKey }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Antivirus And Version:</strong>
                {{ $laptop->antivirusAndVersion }}
            </div>
</div>


<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Domain:</strong>
                {{ $laptop->domain }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Internet Connection:</strong>
                {{ $laptop->internetConnection }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Policy Reboot And Shutdown:</strong>
                {{ $laptop->policyRebootAndShutdown }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Condition (CPU):</strong>
                {{ $laptop->cpu }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Condition (monitor):</strong>
                {{ $laptop->monitor }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Deployment:</strong>
                {{ $laptop->deployment }}
            </div>
        </div>

       
       
        <div class="col-md-6 text-right">
                        <button href="{{ route('laptops.edit',$laptop->id) }}"  class="btn btn-primary">EDIT</button>
                    
                 
                        <button  class="btn btn-primary">BACK</button>
                    </div>
    </div>
 
@endsection