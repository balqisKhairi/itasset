@extends('layouts.template')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
          
                <div class="card">
                    <div class="card-header" >Location Device</div>
   
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
   


<form action="{{ route('desktops.create.step.three.post') }}" method="POST">
    @csrf
                            <div class="form-group">
                                <label for="description">Department:</label>
                                <input type="text"  value="{{{ $desktop->department ?? '' }}}" class="form-control"  name="deviceIPaddress"/>
                            </div>
                            <div class="form-group">
                                <label for="title">Device Location:</label>
                                <input type="text" value="{{ $desktop->deviceLocation ?? '' }}" class="form-control"  name="deviceManufacturer">
                            </div>
                            <div class="form-group">
                                <label for="description">Level:</label>
                                <label>Level &nbsp; &nbsp;</label>
                               
                                <select name="level" id="level"class="form-control">
                                <option value=""> --SELECT--</option>
                                <option value="1"> 1</option>
                                <option value="2"> 2</option>
                                <option value="3"> 3</option>
                                <option value="4"> 4</option>
                                <option value="5">5</option>
                                <option value="6"> 6</option>
                                <option value="7"> 7</option>
                                
                                </select>
                           
                           
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