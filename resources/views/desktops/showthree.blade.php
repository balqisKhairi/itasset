@extends('layouts.template')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Location Device Details</h2>
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
                <strong>Device Location:</strong>
                {{ $desktop->deviceLocation }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Level:</strong>
                {{ $desktop->level }}
            </div>
        </div>
      
        <div class="col-md-6 text-right">
                        <button href="{{ route('desktops.editthree') }}"  class="btn btn-primary">Edit</button>
                    </div>

                    <div class="col-md-6 text-right">
                        <button href="{{ route('desktops.showfour') }}"  class="btn btn-primary">Next</button>
                    </div>
    </div>
@endsection