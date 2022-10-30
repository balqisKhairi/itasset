@extends('layouts.template')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            
        </div>
       
    </div>
</div>
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
   
<div class="card-body">

<form action="{{ route('imageviewers.storefive') }}" method="POST">
    @csrf  
    
                            <div class="form-group">
                               
                                <label>Domain : &nbsp; &nbsp;</label>
                                <select name="domain" id="domain"class="form-control">
                                <option value=""> --SELECT--</option>
                                <option value="kpjhealth.local">kpjhealth.local</option>
                                <option value="No">No</option>
                                </select> 
                            </div>

                       
                                <div class="form-group">
                               
                                <label>Internet Connection : &nbsp; &nbsp;</label>
                                <select name="internetConnection" id="internetConnection"class="form-control">
                                <option value=""> --SELECT--</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                                <option value="N/A">N/A</option>
                                </select> 
                                </div>

                                <div class="form-group">
                               
                                <label>Policy Reboot And Shutdown :&nbsp; &nbsp;</label>
                                <select name="policyRebootAndShutdown" id="policyRebootAndShutdown"class="form-control">
                                <option value=""> --SELECT--</option>
                                <option value="Reboot">Reboot</option>
                                <option value="Shutdown">Shutdown</option>
                                <option value="N/A">N/A</option>
                                </select> 
                            </div>
                            
                       </div>
                       </div>
                
  
                       <div class="card-footer">
                        <div class="row">

                    <div class="col-md-6 text-left">
                                <a href="{{ route('imageviewers.createfour') }}" class="btn btn-danger pull-right">Previous</a>
                            </div>
  
                    <div class="col-md-6 text-right">
                        <button type="submit" class="btn btn-primary">Next</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection