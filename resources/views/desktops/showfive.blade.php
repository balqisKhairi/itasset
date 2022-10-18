@extends('layouts.template')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Others Details</h2>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Domain:</strong>
                {{ $desktop->domain }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Internet Connection:</strong>
                {{ $desktop->internetConnection }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Policy Reboot And Shutdown:</strong>
                {{ $desktop->policyRebootAndShutdown }}
            </div>
        </div>

        <div class="col-md-6 text-right">
                        <button href="{{ route('desktops.editfive') }}"  class="btn btn-primary">Edit</button>
                    </div>

                    <div class="col-md-6 text-right">
                        <button href="{{ route('desktops.showsix') }}"  class="btn btn-primary">Next</button>
                    </div>
    </div>
@endsection