@extends('layouts.template')
   
@section('content')

<style>
  .gradient-custom {
/* fallback for old browsers */
background: #f093fb;


/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1))
}

.mb-4{
    color:#000000;
}

.form-label{
    color:#000000;
    font-size: 16px;
}

.form-control{
    color:#000000;
    font-size: 16px;
}

.mb-2{
    color:#000000;
    font-size: 16px;
}

.form-check{
    color:#000000;
}

.btn-primary1:hover {
  background-color: #555555;
  color: white;

}

.btn-primary1  {
  background-color: #ffd338;
  border: none;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
 
  cursor: pointer;
}
.card-registration .select-input.form-control[readonly]:not([disabled]) {
font-size: 1rem;
line-height: 2.15;
padding-left: .50em;
padding-right: .75em;
}
.card-registration .select-arrow {
top: 13px;
}
</style>

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
  


  <div class="container  h-50">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="card shadow-2-strong card-registration">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-2">Edit Detail</h3>
           

            <form action="{{ route('tvsharps.update',$tvsharp->id) }}" method="POST">
        @csrf
        @method('PUT')
   
              <div class="row">
            
               <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-outline">
                  <label class="form-label" >Device Manufacturer</label>
                    <input type="text" name="deviceManufacturer" value="{{ $tvsharp->deviceManufacturer }}" class="form-control form-control-lg" />
                  </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-outline">
                  <label class="form-label" >Device Model</label>
                    <input type="text" name="deviceModel" value="{{ $tvsharp->deviceModel }}" class="form-control form-control-lg" />
                  </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-outline">
                  <label class="form-label" >Device Seriel Number</label>
                    <input type="text" name="deviceSerielNumber" value="{{ $tvsharp->deviceSerielNumber }}" class="form-control form-control-lg" />
                  </div>
                </div>


                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-outline">
                  <label class="form-label" >Warranty Date</label>
                    <input type="date" name="warrantyDate" value="{{ $tvsharp->warrantyDate }}" class="form-control form-control-lg" />
                  </div>
                </div>


                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-outline">
                  <label class="form-label" >Monitor Size</label>
                    <input type="text" name="monitorSize" value="{{ $tvsharp->monitorSize }}" class="form-control form-control-lg" />
                  </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-outline">
                  <label class="form-label" >Department</label>
                    <input type="text" name="department" value="{{ $tvsharp->department }}" class="form-control form-control-lg" />
                  </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-outline">
                  <label class="form-label" >Device Location</label>
                    <input type="text" name="deviceLocation" value="{{ $tvsharp->deviceLocation }}" class="form-control form-control-lg" />
                  </div>
                </div>


                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-outline">
                  <label class="form-label" >Level</label>
                    <select name="level" class="form-control form-control-lg" >
                    <option value="1" {{ $tvsharp->level == 1 ? 'selected' : '' }} >1</option>
                    <option value="2" {{ $tvsharp->level == 2 ? 'selected' : '' }} > 2</option>
                    <option value="3" {{ $tvsharp->level == 3 ? 'selected' : '' }}> 3</option>
                    <option value="4" {{ $tvsharp->level == 4 ? 'selected' : '' }}> 4</option>
                    <option value="5" {{ $tvsharp->level == 5 ? 'selected' : '' }}> 5</option>
                    <option value="6" {{ $tvsharp->level == 6 ? 'selected' : '' }}> 6</option>
                    <option value="7" {{ $tvsharp->level == 7 ? 'selected' : '' }}> 7</option>
                </select>
                </div>
                </div>


                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-outline">
                  <label class="form-label" >Tagging Number(Monitor)</label>
                    <input type="text" name="taggingMonitor" value="{{ $tvsharp->taggingMonitor }}" class="form-control form-control-lg" />
                  </div>
                </div>


                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-outline">
                  <label class="form-label" >Purchase Order</label>
                    <input type="text" name="purchaseOrder" value="{{ $tvsharp->purchaseOrder }}" class="form-control form-control-lg" />
                  </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-outline">
                  <label class="form-label" >Delivery Order</label>
                    <input type="text" name="deliveryOrder" value="{{ $tvsharp->deliveryOrder }}" class="form-control form-control-lg" />
                  </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-outline">
                  <label class="form-label" >Invoice Number</label>
                    <input type="text" name="noInvoice" value="{{ $tvsharp->noInvoice }}" class="form-control form-control-lg" />
                  </div>
                </div>


                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-outline">
                  <label class="form-label" >Supplier</label>
                    <input type="text" name="supplier" value="{{ $tvsharp->supplier }}" class="form-control form-control-lg" />
                  </div>
                </div>

                
                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-outline">
                  <label class="form-label" >Price Per Unit(RM)</label>
                    <input type="text" name="pricePerUnit" value="{{ $tvsharp->pricePerUnit }}" class="form-control form-control-lg" />
                  </div>
                </div>


                
                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-outline">
                  <label class="form-label" >Status Asset</label>
                    <input type="text" name="statusAsset" value="{{ $tvsharp->statusAsset }}" class="form-control form-control-lg" />
                  </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-outline">
                  <label class="form-label" >CPU Condition</label>
                    <select name="cpu" class="form-control form-control-lg" >
                    <option value="Good" {{ $tvsharp->cpu == "Good" ? 'selected' : '' }} >Good</option>
                    <option value="Faulty" {{ $tvsharp->cpu == "Faulty" ? 'selected' : '' }} > Faulty</option>
                    </select>
                </div>
                </div>


                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-outline">
                  <label class="form-label" >Monitor Condition</label>
                    <select name="monitor" class="form-control form-control-lg" >
                    <option value="Good" {{ $tvsharp->monitor == "Good" ? 'selected' : '' }} >Good</option>
                    <option value="Faulty" {{ $tvsharp->monitor == "Faulty" ? 'selected' : '' }} > Faulty</option>
                    </select>
                </div>
                </div>


                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-outline">
                  <label class="form-label" >Deployement</label>
                    <select name="deployment" class="form-control form-control-lg" >
                    <option value="Ready Deploy" {{ $tvsharp->deployment == "Ready Deploy" ? 'selected' : '' }} >Ready Deploy</option>
                    <option value="Pending" {{ $tvsharp->deployment == "Pending" ? 'selected' : '' }} > Pending</option>
                    <option value="Not Deploy" {{ $tvsharp->deployment == "Not Deploy" ? 'selected' : '' }}> Not Deploy</option>
                </select>
                </div>
                </div>



                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <br>
              <button type="submit" class="btn-primary1">Submit</button>
                <a class="btn-primary1" href="{{ route('tvsharps.index') }}"> Back</a>
            </div>
        </div>
    </form>
          
</section>
    

@endsection
    