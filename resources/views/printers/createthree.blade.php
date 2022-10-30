@extends('layouts.template')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            
        </div>
       
    </div>
</div>
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
   

<div class="card-body">
<form action="{{ route('printers.storethree') }}" method="POST">
    @csrf
                            <div class="form-group">
                                <label for="description">Department:</label>
                                <input type="text"  value="{{{ $printer->department ?? '' }}}" class="form-control"  name="department"/>
                            </div>

                            <div class="form-group">
                                <label for="title">Device Location:</label>
                                <input type="text" value="{{ $printer->deviceLocation ?? '' }}" class="form-control"  name="deviceLocation">
                            </div>

                            <div class="form-group">
                                <label>Level :&nbsp; &nbsp;</label>
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
                </div>

                <div class="card-footer">
                        <div class="row">

                    <div class="col-md-6 text-left">
                                <a href="{{ route('printers.createtwo') }}" class="btn btn-danger pull-right">Previous</a>
                            </div>
  
                    <div class="col-md-6 text-right">
                        <button type="submit" class="btn btn-primary">Next</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

@endsection