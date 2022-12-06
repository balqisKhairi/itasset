@extends('layouts.template')
@section('content')

<style>

.form-control {
    
    color: #000000;
    background-color: #ddeeff;
    
}


    </style>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            
        </div>
       
    </div>
</div>


<div class="card">
                    <div class="card-header">Human Information</div>
   
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

<form action="{{ route('tvsharps.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
   
        
            <div class="form-group">


            <div class="form-group avatar">
                                <figure class="figure col-md-2 col-sm-3 col-xs-12">
                                    <img class="img-rounded img-responsive" id="output" height="100%" width="100%" style="width:100%;" src="{{ asset($tvsharp->image ?? '' ) }}" alt="">
                                </figure>

              </div>
            <label for="title">Picture:</label>
            <input class="form-control " id="image"  name="image" value="{{$tvsharp->image?? '' }}" src="{{ asset($tvsharp->image?? '' ) }}"type="file" onchange="loadFile(event)"/>
           
            <div class="small text-muted mt-2">Upload your picture. Max file size 50 MB</div>

</div>

   
                </div>
                  </div>
  
                    <div class="card">
                        <div class="card-header">Device Details</div>
                    <div class="card-body">
                    <div class="form-group">

                   
                            <div class="form-group">
                                <label for="title">Device Manufacturer:</label>
                                <input type="text" value="{{ $tvsharp->deviceManufacturer ?? '' }}" class="form-control"  name="deviceManufacturer">
                            </div>
                            <div class="form-group">
                                <label for="description">Device Model:</label>
                                <input type="text"  value="{{{ $tvsharp->deviceModel ?? '' }}}" class="form-control"  name="deviceModel"/>
                            </div>
                            <div class="form-group">
                                <label for="description">Device Seriel Number:</label>
                                <input type="text"  value="{{{ $tvsharp->deviceSerielNumber ?? '' }}}" class="form-control"  name="deviceSerielNumber"/>
                            </div>
                            <div class="form-group">
                                <label for="description">Warranty Date:</label>
                                <input type="date"  value="{{{ $tvsharp->warrantyDate ?? '' }}}" class="form-control"  name="warrantyDate"/>
                            </div>


                        </div>
                        </div>
                    </div>
                   
  
                    <div class="card">
                    <div class="card-header">Monitor Details</div>
                    <div class="card-body">
                    <div class="form-group">

                    
                            <div class="form-group">
                                <label for="description">Monitor Size:</label>
                                <input type="text"  value="{{{ $tvsharp->monitorSize ?? '' }}}" class="form-control"  name="monitorSize"/>
                            </div>
                            <div class="form-group">
                                <label for="description">Tagging Monitor:</label>
                                <input type="text"  value="{{{ $tvsharp->taggingMonitor ?? '' }}}" class="form-control"  name="taggingMonitor"/>
                            </div>
                           
                        </div>
                        </div>
                    </div>
                   

                    <div class="card">
                        <div class="card-header">Location Device</div>
                    <div class="card-body">
                    <div class="form-group">
                    
                    
                    <div class="form-group">
                   <label> Department&nbsp; &nbsp; </label>
                    <select name="department" id="skill_filter" class="form-control">
                    <option value=""> --SELECT--</option>
                    @foreach(App\Department::all() ->sortBy('departName') as $cat)
                    <option value="{{$cat->id}}">{{$cat->departName}}</option>
                    @endforeach


                </select>
</div>

                            <div class="form-group">
                                <label for="title">Device Location:</label>
                                <input type="text" value="{{ $tvsharp->deviceLocation ?? '' }}" class="form-control"  name="deviceLocation">
                            </div>

                            <div class="form-group">
                                <label>Level :&nbsp; &nbsp;</label>
                                <select name="level" id="level"class="form-control">
                                <option value=""  readonly > --SELECT--</option>
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
                   
</div>

                           

                            <div class="card">
                            <div class="card-header">Condition And Status Device</div>
                            <div class="card-body">
                            <div class="form-group">

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
                            </div>



                            <div class="card">
                        <div class="card-header">Purchase Details</div>
                    <div class="card-body">
                    <div class="form-group">

                  

                    <div class="form-group">
                                <label for="description">Purchase Order(PO):</label>
                                <input type="text"  value="{{{ $tvsharp->purchaseOrder ?? '' }}}" class="form-control"  name="purchaseOrder"/>
                            </div>
                            <div class="form-group">
                                <label for="title">Delivery Oder(DO):</label>
                                <input type="text" value="{{ $tvsharp->deliveryOrder ?? '' }}" class="form-control"  name="deliveryOrder"/>
                            </div>
                            <div class="form-group">
                                <label for="description">Invoice No:</label>
                                <input type="text"  value="{{{ $tvsharp->noInvoice ?? '' }}}" class="form-control"  name="noInvoice"/>
                            </div>
                            <div class="form-group">
                            <label> Supplier&nbsp; &nbsp; </label>
                                <select name="vendorId" id="vendorId" class="form-control">
                                <option value="" readonly> --SELECT--</option>
                                @foreach(App\Vendor::all() ->sortBy('companyName') as $cat)
                                <option value="{{$cat->id}}">{{$cat->companyName}}</option>
                                @endforeach
                            </select>
                            </div>
                            <div class="form-group">
                                <label for="description">Price Per Unit(RM):</label>
                                <input type="text"  value="{{{ $tvsharp->pricePerUnit ?? '' }}}" class="form-control"  name="pricePerUnit" placeholder="RM 000.00"/>
                            </div>


                            <div class="form-group">
                               
                                <label>Status Asset : &nbsp; &nbsp;</label>
                                <select name="statusAsset" id="statusAsset"class="form-control">
                                <option value=""> --SELECT--</option>
                                <option value="Good">IT Asset</option>
                                <option value="Faulty">Vendor</option>
                                <option value="Faulty">BioMedical Engineering </option>
                                <option value="Faulty">LabLink</option>
                                </select> 
                            </div>

                            <div class="form-group">
                                <label for="description">File:</label>
                                <input type="file"  value="{{{ $tvsharp->folder ?? '' }}}" class="form-control"  name="folder[]" multiple/>
                            </div>

                       
</div>
</div>
</div>

                  <div class="card-footer text-right">
                        <button type="submit" onclick="return confirm('Are you sure want to submit this?')" class="btn btn-primary">SUBMIT</button>
                    </div>


            </form>
        </div>

        <script>
var loadFile = function (event) {
  var image = document.getElementById("output");
  image.src = URL.createObjectURL(event.target.files[0]);
};
</script>

       

</body>
</html>



        </div>
    </div>
</div>


@endsection