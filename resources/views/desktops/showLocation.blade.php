@extends('layouts.template')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Location Details</h2>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Department:</strong>
                {{ $desktop->department }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Location:</strong>
                {{ $desktop->deviceLocation }}
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Level:</strong>
                {{ $desktop->level }}
            </div>
        </div>

        
      
        <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('desktops.index') }}"> Back</a>
        </div>
    </div>
@endsection