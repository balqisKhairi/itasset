@extends('layouts.template')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show OS Version and Software Details</h2>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Operating System:</strong>
                {{ $desktop->operatingSystem }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Window Version:</strong>
                {{ $desktop->windowVersion }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>MS Office And Version:</strong>
                {{ $desktop->msOfficeAndVersion }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Office Seriel Key:</strong>
                {{ $desktop->officeSerielKey }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Antivirus And Version:</strong>
                {{ $desktop->antivirusAndVersion }}
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