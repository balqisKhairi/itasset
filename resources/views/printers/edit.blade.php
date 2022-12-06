@extends('layouts.template')
@section('content')

<style>

.form-control {
    
    color: #000000;
    background-color: #dee2e6;
    
}

.img-rounded{
 
  margin-left: auto;
  margin-right: auto;
  width: 100%;
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

<form action="{{ route('printers.update',$printer->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
        
            <div class="form-group">

            <div class="form-group avatar">
                                <figure class="figure col-md-2 col-sm-3 col-xs-12">
                                    <img class="img-rounded img-responsive" id="output" height="100%" width="100%" style="width:100%;" src="{{ asset($printer->image) }}" alt="">
                                </figure>

              </div>

              
            <label for="image">Picture:</label>
            <input class="form-control "  id="image" name="image" value="{{$printer->image}}" src="{{ asset($printer->image) }}"type="file" onchange="loadFile(event)"/>
            <div class="small text-muted mt-2">Upload your picture. Max file size 50 MB</div>

           

                                <label for="title">Assigned To:</label>
                                <input type="text" value="{{ $printer->assignedTo }}" class="form-control"  name="assignedTo" placeholder="NAME">
                            </div>
                      
                            <div class="form-group">
                                <label for="description">Device Hostname:</label>
                                <input type="text"  value="{{{ $printer->deviceHostname }}}" class="form-control"  name="deviceHostname"/>
                            </div>
                           
   
                </div>
                  </div>
  
                    <div class="card">
                        <div class="card-header">Device Details</div>
                    <div class="card-body">
                    <div class="form-group">

                    <div class="form-group">
                                <label for="description">Device IP Address:</label>
                                <input type="text"  value="{{{ $printer->deviceIPaddress }}}" class="form-control"  name="deviceIPaddress" placeholder="Ex: 10.31.0.0"/>
                            </div>
                            <div class="form-group">
                                <label for="title">Device Manufacturer:</label>
                                <input type="text" value="{{ $printer->deviceManufacturer }}" class="form-control"  name="deviceManufacturer">
                            </div>
                            <div class="form-group">
                                <label for="description">Device Model:</label>
                                <input type="text"  value="{{{ $printer->deviceModel }}}" class="form-control"  name="deviceModel"/>
                            </div>
                            <div class="form-group">
                                <label for="description">Device Seriel Number:</label>
                                <input type="text"  value="{{{ $printer->deviceSerielNumber }}}" class="form-control"  name="deviceSerielNumber"/>
                            </div>
                            <div class="form-group">
                                <label for="description">Warranty Date:</label>
                                <input type="date"  value="{{{ $printer->warrantyDate }}}" class="form-control"  name="warrantyDate"/>
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
                                <input type="text" value="{{ $printer->deviceLocation }}" class="form-control"  name="deviceLocation">
                            </div>

                            <div class="form-group">
                                <label>Level :&nbsp; &nbsp;</label>
                                <select name="level" id="level"class="form-control">
                                <option value=""  readonly > --SELECT--</option>
                                <option value="1" {{ $printer->level == 1 ? 'selected' : '' }} >1</option>
                                <option value="2" {{ $printer->level == 2 ? 'selected' : '' }} > 2</option>
                                <option value="3" {{ $printer->level == 3 ? 'selected' : '' }}> 3</option>
                                <option value="4" {{ $printer->level == 4 ? 'selected' : '' }}> 4</option>
                                <option value="5" {{ $printer->level == 5 ? 'selected' : '' }}> 5</option>
                                <option value="6" {{ $printer->level == 6 ? 'selected' : '' }}> 6</option>
                                <option value="7" {{ $printer->level == 7 ? 'selected' : '' }}> 7</option>
                                </select>
                            </div>
                    
                    </div>
                    </div>
                   
</div>

                 


                        <div class="card">
                        <div class="card-header">Others</div>
                    <div class="card-body">
                    <div class="form-group">

                          
                      
                               <div class="form-group">
                              
                               <label>Internet Connection : &nbsp; &nbsp;</label>
                               <select name="internetConnection" id="internetConnection"class="form-control">
                               <option value=""> --SELECT--</option>
                               <option value="Yes" {{ $printer->internetConnection == "Yes" ? 'selected' : '' }} >Yes</option>
                              <option value="No" {{ $printer->internetConnection == "No" ? 'selected' : '' }} > No</option>
                              <option value="NA" {{ $printer->internetConnection == "NA" ? 'selected' : '' }}> NA</option>
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
                                
                                <label>Condition :&nbsp; &nbsp;</label>
                                <select name="condition" id="condition"class="form-control">
                                <option value=""> --SELECT--</option>
                                <option value="Good" {{ $printer->condition == "Good" ? 'selected' : '' }} >Good</option>
                                <option value="Faulty" {{ $printer->condition == "Faulty" ? 'selected' : '' }} > Faulty</option>
                    </select> 
                            </div>



                          
                            <div class="form-group">
                               
                                <label>Deployement :&nbsp; &nbsp;</label>
                                <select name="deployment" id="deployment"class="form-control">
                                <option value=""> --SELECT--</option>
                                <option value="Ready Deploy" {{ $printer->deployment == "Ready Deploy" ? 'selected' : '' }} >Ready Deploy</option>
                                <option value="Pending" {{ $printer->deployment == "Pending" ? 'selected' : '' }} > Pending</option>
                                <option value="Not Deploy" {{ $printer->deployment == "Not Deploy" ? 'selected' : '' }}> Not Deploy</option>
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
                                <label for="description">Tagging No(CPU):</label>
                                <input type="text"  value="{{{ $printer->taggingcpu }}}" class="form-control"  name="purchaseOrder"/>
                            </div>
                            <div class="form-group">
                                <label for="title">Tagging No(Monitor):</label>
                                <input type="text" value="{{ $printer->taggingmonitor }}" class="form-control"  name="deliveryOrder"/>
                            </div>

                    <div class="form-group">
                                <label for="description">Purchase Order(PO):</label>
                                <input type="text"  value="{{{ $printer->purchaseOrder }}}" class="form-control"  name="purchaseOrder"/>
                            </div>
                            <div class="form-group">
                                <label for="title">Delivery Oder(DO):</label>
                                <input type="text" value="{{ $printer->deliveryOrder }}" class="form-control"  name="deliveryOrder"/>
                            </div>
                            <div class="form-group">
                                <label for="description">Invoice No:</label>
                                <input type="text"  value="{{{ $printer->noInvoice }}}" class="form-control"  name="noInvoice"/>
                            </div>
                            <div class="form-group">
                   <label> Supplier&nbsp; &nbsp; </label>
                    <select name="vendorId" id="vendorId" class="form-control">
                    <option value=""> --SELECT--</option>
                    @foreach(App\Vendor::all() ->sortBy('companyName') as $cat)
                    <option value="{{$cat->id}}">{{$cat->companyName}}</option>
                    @endforeach
                    </select>
                    </div>
                            <div class="form-group">
                                <label for="description">Price Per Unit(RM):</label>
                                <input type="text"  value="{{{ $printer->pricePerUnit }}}" class="form-control"  name="pricePerUnit" placeholder="RM 000.00"/>
                            </div>


                            <div class="form-group">
                               
                                <label>Status Asset : &nbsp; &nbsp;</label>
                                <select name="statusAsset" id="statusAsset"class="form-control">
                                <option value=""> --SELECT--</option>
                                <option value="IT Asset" {{ $printer->statusAsset == "IT Asset" ? 'selected' : '' }} >IT Asset</option>
                                <option value="Vendor" {{ $printer->statusAsset == "Vendor" ? 'selected' : '' }} > Vendor</option>
                                <option value="Biomedical Engineering" {{ $printer->statusAsset == "Biomedical Engineering" ? 'selected' : '' }}> Biomedical Engineering</option>
                                <option value="Lablink" {{ $printer->statusAsset == "Lablink" ? 'selected' : '' }}> Lablink</option>
                           
                              </select> 
                            </div>

                            <div class="form-group">
                                <label for="description">File:</label>
                                <input type="file"  value="{{ asset($printer->folder) }}" class="form-control"  name="folder[]" multiple/>
                            </div>

                       
</div>
</div>
</div>

                  <div class="card-footer text-right">
                        <button type="submit" onclick="return confirm('Are you sure want to save this change?')" class="btn btn-primary">UPDATE</button>
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