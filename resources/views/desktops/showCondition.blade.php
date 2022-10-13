@extends('layouts.template')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Condition Details</h2>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Condition(CPU):</strong>
                {{ $desktop->condition(CPU) }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Condition(monitor):</strong>
                {{ $desktop->condition(monitor) }}
            </div>

           
        <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('desktops.index') }}"> Back</a>
        </div>
    </div>
@endsection