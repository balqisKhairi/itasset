@extends('layouts.template')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Monitor Details</h2>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Model:</strong>
                {{ $desktop->monitorModel }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Manufacturer:</strong>
                {{ $desktop->monitorManufacturer }}
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Size:</strong>
                {{ $desktop->monitorSize }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Seriel Number:</strong>
                {{ $desktop->monitorSerielNumber }}
            </div>
      
        <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('desktops.index') }}"> Back</a>
        </div>
    </div>
@endsection