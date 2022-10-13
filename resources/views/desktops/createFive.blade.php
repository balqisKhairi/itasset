@extends('layouts.template')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
          
                <div class="card">
                    <div class="card-header">Others</div>
   
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
   


<form action="{{ route('desktops.create.step.five.post') }}" method="POST">
    @csrf
                            <div class="form-group">
                                <label for="description">Domain:</label>
                                <input type="text"  value="{{{ $desktop->domain ?? '' }}}" class="form-control"  name="deviceIPaddress"/>
                            </div>
                            <div class="form-group">
                                <label for="title">Internet Connection:</label>
                                <input type="text" value="{{ $desktop->internetConnection ?? '' }}" class="form-control"  name="deviceManufacturer">
                            </div>
                            <div class="form-group">
                                <label for="description">Policy Reboot And Shtudown:</label>
                                <input type="text"  value="{{{ $desktop->policyRebootAndShutdown ?? '' }}}" class="form-control"  name="deviceModel"/>
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