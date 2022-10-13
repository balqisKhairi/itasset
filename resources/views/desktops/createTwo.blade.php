@extends('layouts.template')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
          
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
   


<form action="{{ route('desktops.storeTwo') }}" method="POST">
    @csrf
                            <div class="form-group">
                                <label for="description">Device IP Address:</label>
                                <input type="text"  value="{{{ $desktop->deviceIPaddress ?? '' }}}" class="form-control"  name="deviceIPaddress"/>
                            </div>
                            <div class="form-group">
                                <label for="title">Device Manufacturer:</label>
                                <input type="text" value="{{ $desktop->deviceManufacturer ?? '' }}" class="form-control"  name="deviceManufacturer">
                            </div>
                            <div class="form-group">
                                <label for="description">Device Model:</label>
                                <input type="text"  value="{{{ $desktop->deviceModel ?? '' }}}" class="form-control"  name="deviceModel"/>
                            </div>
                            <div class="form-group">
                                <label for="description">Device Seriel Number:</label>
                                <input type="text"  value="{{{ $desktop->deviceSerielNumber ?? '' }}}" class="form-control"  name="deviceSerielNumber"/>
                            </div>
                            <div class="form-group">
                                <label for="description">Warranty Date:</label>
                                <input type="text"  value="{{{ $desktop->warrantyDate ?? '' }}}" class="form-control"  name="deviceModel"/>
                            </div>
                       </div>

                <div class="card">
                    <div class="card-header">Monitor Details</div>

                    <div class="form-group">
                                <label for="description">Monitor Model:</label>
                                <input type="text"  value="{{{ $desktop->monitorModel ?? '' }}}" class="form-control"  name="deviceIPaddress"/>
                            </div>
                            <div class="form-group">
                                <label for="title">Monitor Manufacturer:</label>
                                <input type="text" value="{{ $desktop->monitorManufacturer ?? '' }}" class="form-control"  name="deviceManufacturer">
                            </div>
                            <div class="form-group">
                                <label for="description">Monitor Size:</label>
                                <input type="text"  value="{{{ $desktop->monitorSize ?? '' }}}" class="form-control"  name="deviceModel"/>
                            </div>
                            <div class="form-group">
                                <label for="description">Monitor Seriel Number:</label>
                                <input type="text"  value="{{{ $desktop->monitorSerielNumber ?? '' }}}" class="form-control"  name="deviceSerielNumber"/>
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