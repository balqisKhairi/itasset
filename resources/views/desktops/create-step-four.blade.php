@extends('layouts.template')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
          
                <div class="card">
                    <div class="card-header">OS Version and Software</div>
   
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
   


<form action="{{ route('desktops.create.step.four.post') }}" method="POST">
    @csrf
                            <div class="form-group">
                                <label for="description">Operating System:</label>
                                <input type="text"  value="{{{ $desktop->operatingSystem ?? '' }}}" class="form-control"  name="deviceIPaddress"/>
                            </div>
                            <div class="form-group">
                                <label for="title">Window Version:</label>
                                <input type="text" value="{{ $desktop->windowVersion ?? '' }}" class="form-control"  name="deviceManufacturer">
                            </div>
                            <div class="form-group">
                                <label for="description">Microsoft Office And Version:</label>
                                <input type="text"  value="{{{ $desktop->msOfficeAndVersion ?? '' }}}" class="form-control"  name="deviceModel"/>
                            </div>
                            <div class="form-group">
                                <label for="description">Office Seriel Key:</label>
                                <input type="text"  value="{{{ $desktop->officeSerielKey ?? '' }}}" class="form-control"  name="deviceSerielNumber"/>
                            </div>
                            <div class="form-group">
                                <label for="description">Antivirus And Version:</label>
                                <input type="text"  value="{{{ $desktop->antivirusAndVersion ?? '' }}}" class="form-control"  name="deviceModel"/>
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