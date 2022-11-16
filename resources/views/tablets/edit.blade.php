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
           

            <form action="{{ route('tablets.update',$tablet->id) }}" method="POST">
        @csrf
        @method('PUT')
   
              <div class="row">
            
              <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-outline">
                  <label class="form-label" >Assigned To</label>
                    <input type="text" name="assignedTo" value="{{ $tablet->assignedTo }}" class="form-control form-control-lg" />
                  </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-outline">
                  <label class="form-label" >Device Hostname</label>
                    <input type="text" name="deviceHostname" value="{{ $tablet->deviceHostname }}" class="form-control form-control-lg" />
                  </div>
                </div>


                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-outline">
                  <label class="form-label" >Device IP Address</label>
                    <input type="text" name="deviceIPaddress" value="{{ $tablet->deviceIPaddress }}" class="form-control form-control-lg" />
                  </div>
                </div>


                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-outline">
                  <label class="form-label" >Device Manufacturer</label>
                    <input type="text" name="deviceManufacturer" value="{{ $tablet->deviceManufacturer }}" class="form-control form-control-lg" />
                  </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-outline">
                  <label class="form-label" >Device Model</label>
                    <input type="text" name="deviceModel" value="{{ $tablet->deviceModel }}" class="form-control form-control-lg" />
                  </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-outline">
                  <label class="form-label" >Device Seriel Number</label>
                    <input type="text" name="deviceSerielNumber" value="{{ $tablet->deviceSerielNumber }}" class="form-control form-control-lg" />
                  </div>
                </div>


                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-outline">
                  <label class="form-label" >Warranty Date</label>
                    <input type="date" name="warrantyDate" value="{{ $tablet->warrantyDate }}" class="form-control form-control-lg" />
                  </div>
                </div>


                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-outline">
                  <label class="form-label" >Department</label>
                    <input type="text" name="department" value="{{ $tablet->department }}" class="form-control form-control-lg" />
                  </div>
                </div>





                <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-outline">
                  <label class="form-label" >Device Location</label>
                    <input type="text" name="deviceLocation" value="{{ $tablet->deviceLocation }}" class="form-control form-control-lg" />
                  </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-outline">
                  <label class="form-label" >Level</label>
                    <select name="level" class="form-control form-control-lg" >
                    <option value="1" {{ $tablet->level == 1 ? 'selected' : '' }} >1</option>
                    <option value="2" {{ $tablet->level == 2 ? 'selected' : '' }} > 2</option>
                    <option value="3" {{ $tablet->level == 3 ? 'selected' : '' }}> 3</option>
                    <option value="4" {{ $tablet->level == 4 ? 'selected' : '' }}> 4</option>
                    <option value="5" {{ $tablet->level == 5 ? 'selected' : '' }}> 5</option>
                    <option value="6" {{ $tablet->level == 6 ? 'selected' : '' }}> 6</option>
                    <option value="7" {{ $tablet->level == 7 ? 'selected' : '' }}> 7</option>
                </select>
                </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-outline">
                  <label class="form-label" >Operating System</label>
                    <input type="text" name="operatingSystem" value="{{ $tablet->operatingSystem }}" class="form-control form-control-lg" />
                  </div>
                </div>


                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-outline">
                  <label class="form-label" >Window Version</label>
                    <input type="text" name="windowVersion" value="{{ $tablet->windowVersion }}" class="form-control form-control-lg" />
                  </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-outline">
                  <label class="form-label" >Microsoft Office And Version</label>
                    <input type="text" name="msOfficeAndVersion" value="{{ $tablet->msOfficeAndVersion }}" class="form-control form-control-lg" />
                  </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-outline">
                  <label class="form-label" >Office Seriel Key</label>
                    <input type="text" name="officeSerielKey" value="{{ $tablet->officeSerielKey }}" class="form-control form-control-lg" />
                  </div>
                </div>


                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-outline">
                  <label class="form-label" >Antivirus And Version</label>
                    <input type="text" name="antivirusAndVersion" value="{{ $tablet->antivirusAndVersion }}" class="form-control form-control-lg" />
                  </div>
                </div>


                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-outline">
                  <label class="form-label" >Domain</label>
                    <select name="domain" class="form-control form-control-lg" >
                    <option value="kpjhealth.local" {{ $tablet->domain == "kpjhealth.local" ? 'selected' : '' }} >kpjhealth.local</option>
                    <option value="No" {{ $tablet->domain == "No" ? 'selected' : '' }} > No</option>
                    </select>
                </div>
                </div>




                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-outline">
                  <label class="form-label" >Internet Connection</label>
                    <select name="internetConnection" class="form-control form-control-lg" >
                    <option value="Yes" {{ $tablet->internetConnection == "Yes" ? 'selected' : '' }} >Yes</option>
                    <option value="No" {{ $tablet->internetConnection == "No" ? 'selected' : '' }} > No</option>
                    <option value="NA" {{ $tablet->internetConnection == "NA" ? 'selected' : '' }}> NA</option>
 
                </select>
                </div>
                </div>


                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-outline">
                  <label class="form-label" >Policy Reboot And Shutdown</label>
                    <select name="policyRebootAndShutdown" class="form-control form-control-lg" >
                    <option value="Reboot" {{ $tablet->policyRebootAndShutdown =="Reboot" ? 'selected' : '' }} >Reboot</option>
                    <option value="Shutdown" {{ $tablet->policyRebootAndShutdown == "Shutdown" ? 'selected' : '' }} > Shutdown</option>
                    <option value="NA" {{ $tablet->policyRebootAndShutdown == "NA" ? 'selected' : '' }}> NA</option>
                </select>
                </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-outline">
                  <label class="form-label" >CPU Condition</label>
                    <select name="cpu" class="form-control form-control-lg" >
                    <option value="Good" {{ $tablet->cpu == "Good" ? 'selected' : '' }} >Good</option>
                    <option value="Faulty" {{ $tablet->cpu == "Faulty" ? 'selected' : '' }} > Faulty</option>
                    </select>
                </div>
                </div>


                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-outline">
                  <label class="form-label" >Monitor Condition</label>
                    <select name="monitor" class="form-control form-control-lg" >
                    <option value="Good" {{ $tablet->monitor == "Good" ? 'selected' : '' }} >Good</option>
                    <option value="Faulty" {{ $tablet->monitor == "Faulty" ? 'selected' : '' }} > Faulty</option>
                    </select>
                </div>
                </div>


                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-outline">
                  <label class="form-label" >Deployement</label>
                    <select name="deployment" class="form-control form-control-lg" >
                    <option value="Ready Deploy" {{ $tablet->deployment == "Ready Deploy" ? 'selected' : '' }} >Ready Deploy</option>
                    <option value="Pending" {{ $tablet->deployment == "Pending" ? 'selected' : '' }} > Pending</option>
                    <option value="Not Deploy" {{ $tablet->deployment == "Not Deploy" ? 'selected' : '' }}> Not Deploy</option>
                </select>
                </div>
                </div>



                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <br>
              <button type="submit" class="btn-primary1">Submit</button>
                <a class="btn-primary1" href="{{ route('tablets.index') }}"> Back</a>
            </div>
        </div>
    </form>
          
</section>
    

@endsection
    