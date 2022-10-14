@extends('layouts.template')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            
        </div>
       
    </div>
</div>
          
                <div class="card">
                    <div class="card-header">Condition And Status Device</div>
   
</div>
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
   


<form action="{{ route('desktops.storesix') }}" method="POST">
    @csrf
                            <div class="form-group">
                                <label for="description">Condition(CPU):</label>
                                <input type="text"  value="{{{ $desktop->cpu ?? '' }}}" class="form-control"  name="deviceIPaddress"/>
                            </div>
                            <div class="form-group">
                                <label for="title">Condition(monitor):</label>
                                <input type="text" value="{{ $desktop->monitor?? '' }}" class="form-control"  name="deviceManufacturer">
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
@endsection