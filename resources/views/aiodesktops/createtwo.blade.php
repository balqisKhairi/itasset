@extends('layouts.template')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            
        </div>
       
    </div>
</div>


                <div class="card">
                    <div class="card-header">Device Details </div>
   
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

<form action="{{ route('aiodesktops.storetwo') }}" method="POST">
    @csrf
                            <div class="form-group">
                                <label for="description">Device IP Address:</label>
                                <input type="text"  value="{{{ $aiodesktop->deviceIPaddress ?? '' }}}" class="form-control"  name="deviceIPaddress"/>
                            </div>
                            <div class="form-group">
                                <label for="title">Device Manufacturer:</label>
                                <input type="text" value="{{ $aiodesktop->deviceManufacturer ?? '' }}" class="form-control"  name="deviceManufacturer">
                            </div>
                            <div class="form-group">
                                <label for="description">Device Model:</label>
                                <input type="text"  value="{{{ $aiodesktop->deviceModel ?? '' }}}" class="form-control"  name="deviceModel"/>
                            </div>
                            <div class="form-group">
                                <label for="description">Device Seriel Number:</label>
                                <input type="text"  value="{{{ $aiodesktop->deviceSerielNumber ?? '' }}}" class="form-control"  name="deviceSerielNumber"/>
                            </div>
                            <div class="form-group">
                                <label for="description">Warranty Date:</label>
                                <input type="date"  value="{{{ $aiodesktop->warrantyDate ?? '' }}}" class="form-control"  name="warrantyDate"/>
                            </div>
                       </div>
                </div>

                <div class="card">
             
                    <div class="card-header">Monitor Details</div>
                    <div class="card-body">
                    <div class="form-group">
                                <label for="description">Monitor Model:</label>
                                <input type="text"  value="{{{ $aiodesktop->monitorModel ?? '' }}}" class="form-control"  name="monitorModel"/>
                            </div>
                            <div class="form-group">
                                <label for="title">Monitor Manufacturer:</label>
                                <input type="text" value="{{ $aiodesktop->monitorManufacturer ?? '' }}" class="form-control"  name="monitorManufacturer">
                            </div>
                            <div class="form-group">
                                <label for="description">Monitor Size:</label>
                                <input type="text"  value="{{{ $aiodesktop->monitorSize ?? '' }}}" class="form-control"  name="monitorSize"/>
                            </div>
                            <div class="form-group">
                                <label for="description">Monitor Seriel Number:</label>
                                <input type="text"  value="{{{ $aiodesktop->monitorSerielNumber ?? '' }}}" class="form-control"  name="monitorSerielNumber"/>
                            </div>
                          
</div>
</div>

                    <div class="card-footer">
                        <div class="row">

                    <div class="col-md-6 text-left">
                                <a href="{{ route('aiodesktops.createone') }}" class="btn btn-danger pull-right">Previous</a>
                            </div>
  
                    <div class="col-md-6 text-right">
                        <button type="submit" class="btn btn-primary">Next</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
    </div>
</div>
@endsection