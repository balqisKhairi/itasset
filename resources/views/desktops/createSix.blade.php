@extends('layouts.template')
@section('content')


<style>

.form-control {
    
    color: #000000;
    background-color: #dee2e6;
}
    </style>
    
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            
        </div>
       
    </div>
</div>
          
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
   
<div class="card-body">

<form action="{{ route('desktops.storesix') }}" method="POST">
    @csrf
                            

                            <div class="form-group">
                                
                                <label>Condition(CPU) :&nbsp; &nbsp;</label>
                                <select name="cpu" id="cpu"class="form-control">
                                <option value=""> --SELECT--</option>
                                <option value="Good">Good</option>
                                <option value="Faulty">Faulty</option>
                                </select> 
                            </div>



                            <div class="form-group">
                               
                                <label>Condition(monitor) : &nbsp; &nbsp;</label>
                                <select name="monitor" id="monitor"class="form-control">
                                <option value=""> --SELECT--</option>
                                <option value="Good">Good</option>
                                <option value="Faulty">Faulty</option>
                                </select> 
                            </div>

                            
                            <div class="form-group">
                               
                                <label>Deployement :&nbsp; &nbsp;</label>
                                <select name="deployment" id="deployment"class="form-control">
                                <option value=""> --SELECT--</option>
                                <option value="Ready Deploy">Ready Deploy</option>
                                <option value="Pending">Pending</option>
                                <option value="Not Deploy">Not Deploy</option>
                                </select> 
                            </div>

                       </div>

                       </div>
  
                       <div class="card-footer">
                        <div class="row">

                    <div class="col-md-6 text-left">
                                <a href="{{ route('desktops.createfive') }}" class="btn btn-danger pull-right">Previous</a>
                            </div>
  
                    <div class="col-md-6 text-right">
                        <button type="submit" onclick="return confirm('Are you sure want to submit this?')" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection