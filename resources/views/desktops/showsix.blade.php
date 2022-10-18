@extends('layouts.template')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Condition And Status Device Details</h2>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Condition (CPU):</strong>
                {{ $desktop->cpu }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Coniditiom (monitor):</strong>
                {{ $desktop->monitor }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Deployment:</strong>
                {{ $desktop->deployment }}
            </div>
        </div>

       
      
        <div class="col-md-6 text-left">
                                <a href="{{ route('desktops.showfive') }}" class="btn btn-danger pull-right">Previous</a>
                            </div>
  
                    <div class="col-md-6 text-right">
                        <button href="{{ route('desktops.editsix') }}"  class="btn btn-primary">Edit</button>
                    </div>

                    
    </div>
    </div>
@endsection