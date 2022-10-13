@extends('layouts.template')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
          
                <div class="card">
                    <div class="card-header">Condition And Status Device</div>
   
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
   


<form action="{{ route('desktops.storeSix') }}" method="POST">
    @csrf
                            <div class="form-group">
                                <label for="description">Condition(CPU):</label>
                                <input type="text"  value="{{{ $desktop->condition(CPU) ?? '' }}}" class="form-control"  name="deviceIPaddress"/>
                            </div>
                            <div class="form-group">
                                <label for="title">Condition(monitor):</label>
                                <input type="text" value="{{ $desktop->condition(monitor) ?? '' }}" class="form-control"  name="deviceManufacturer">
                            </div>
                            <div class="form-group">
                                <label for="description">Deployment:</label>
                                <input type="text"  value="{{{ $desktop->deployment ?? '' }}}" class="form-control"  name="deviceModel"/>
                            </div>
                            
                       </div>

                
  
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>