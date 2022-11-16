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
           

            <form action="{{ route('imageviewers.update',$imageviewer->id) }}" method="POST">
        @csrf
        @method('PUT')
   
              <div class="row">
            
              <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-outline">
                  <label class="form-label" >Assigned To</label>
                    <input type="text" name="assignedTo" value="{{ $imageviewer->assignedTo }}" class="form-control form-control-lg" />
                  </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-outline">
                  <label class="form-label" >Device Hostname</label>
                    <input type="text" name="deviceHostname" value="{{ $imageviewer->deviceHostname }}" class="form-control form-control-lg" />
                  </div>
                </div>


                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-outline">
                  <label class="form-label" >Device IP Address</label>
                    <input type="text" name="deviceIPaddress" value="{{ $imageviewer->deviceIPaddress }}" class="form-control form-control-lg" />
                  </div>
                </div>


                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-outline">
                  <label class="form-label" >Device Manufacturer</label>
                    <input type="text" name="deviceManufacturer" value="{{ $imageviewer->deviceManufacturer }}" class="form-control form-control-lg" />
                  </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-outline">
                  <label class="form-label" >Device Model</label>
                    <input type="text" name="deviceModel" value="{{ $imageviewer->deviceModel }}" class="form-control form-control-lg" />
                  </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-outline">
                  <label class="form-label" >Device Seriel Number</label>
                    <input type="text" name="deviceSerielNumber" value="{{ $imageviewer->deviceSerielNumber }}" class="form-control form-control-lg" />
                  </div>
                </div>


                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-outline">
                  <label class="form-label" >Warranty Date</label>
                    <input type="date" name="warrantyDate" value="{{ $imageviewer->warrantyDate }}" class="form-control form-control-lg" />
                  </div>
                </div>


                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-outline">
                  <label class="form-label" >Department</label>
                    <input type="text" name="department" value="{{ $imageviewer->department }}" class="form-control form-control-lg" />
                  </div>
                </div>





                <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-outline">
                  <label class="form-label" >Device Location</label>
                    <input type="text" name="deviceLocation" value="{{ $imageviewer->deviceLocation }}" class="form-control form-control-lg" />
                  </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-outline">
                  <label class="form-label" >Level</label>
                    <select name="level" class="form-control form-control-lg" >
                    <option value="1" {{ $imageviewer->level == 1 ? 'selected' : '' }} >1</option>
                    <option value="2" {{ $imageviewer->level == 2 ? 'selected' : '' }} > 2</option>
                    <option value="3" {{ $imageviewer->level == 3 ? 'selected' : '' }}> 3</option>
                    <option value="4" {{ $imageviewer->level == 4 ? 'selected' : '' }}> 4</option>
                    <option value="5" {{ $imageviewer->level == 5 ? 'selected' : '' }}> 5</option>
                    <option value="6" {{ $imageviewer->level == 6 ? 'selected' : '' }}> 6</option>
                    <option value="7" {{ $imageviewer->level == 7 ? 'selected' : '' }}> 7</option>
                </select>
                </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-outline">
                  <label class="form-label" >Operating System</label>
                    <input type="text" name="operatingSystem" value="{{ $imageviewer->operatingSystem }}" class="form-control form-control-lg" />
                  </div>
                </div>


                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-outline">
                  <label class="form-label" >Window Version</label>
                    <input type="text" name="windowVersion" value="{{ $imageviewer->windowVersion }}" class="form-control form-control-lg" />
                  </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-outline">
                  <label class="form-label" >Microsoft Office And Version</label>
                    <input type="text" name="msOfficeAndVersion" value="{{ $imageviewer->msOfficeAndVersion }}" class="form-control form-control-lg" />
                  </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-outline">
                  <label class="form-label" >Office Seriel Key</label>
                    <input type="text" name="officeSerielKey" value="{{ $imageviewer->officeSerielKey }}" class="form-control form-control-lg" />
                  </div>
                </div>


                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-outline">
                  <label class="form-label" >Antivirus And Version</label>
                    <input type="text" name="antivirusAndVersion" value="{{ $imageviewer->antivirusAndVersion }}" class="form-control form-control-lg" />
                  </div>
                </div>


                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-outline">
                  <label class="form-label" >Domain</label>
                    <select name="domain" class="form-control form-control-lg" >
                    <option value="kpjhealth.local" {{ $imageviewer->domain == "kpjhealth.local" ? 'selected' : '' }} >kpjhealth.local</option>
                    <option value="No" {{ $imageviewer->domain == "No" ? 'selected' : '' }} > No</option>
                    </select>
                </div>
                </div>




                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-outline">
                  <label class="form-label" >Internet Connection</label>
                    <select name="internetConnection" class="form-control form-control-lg" >
                    <option value="Yes" {{ $imageviewer->internetConnection == "Yes" ? 'selected' : '' }} >Yes</option>
                    <option value="No" {{ $imageviewer->internetConnection == "No" ? 'selected' : '' }} > No</option>
                    <option value="NA" {{ $imageviewer->internetConnection == "NA" ? 'selected' : '' }}> NA</option>
 
                </select>
                </div>
                </div>


                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-outline">
                  <label class="form-label" >Policy Reboot And Shutdown</label>
                    <select name="policyRebootAndShutdown" class="form-control form-control-lg" >
                    <option value="Reboot" {{ $imageviewer->policyRebootAndShutdown =="Reboot" ? 'selected' : '' }} >Reboot</option>
                    <option value="Shutdown" {{ $imageviewer->policyRebootAndShutdown == "Shutdown" ? 'selected' : '' }} > Shutdown</option>
                    <option value="NA" {{ $imageviewer->policyRebootAndShutdown == "NA" ? 'selected' : '' }}> NA</option>
                </select>
                </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-outline">
                  <label class="form-label" >CPU Condition</label>
                    <select name="cpu" class="form-control form-control-lg" >
                    <option value="Good" {{ $imageviewer->cpu == "Good" ? 'selected' : '' }} >Good</option>
                    <option value="Faulty" {{ $imageviewer->cpu == "Faulty" ? 'selected' : '' }} > Faulty</option>
                    </select>
                </div>
                </div>


                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-outline">
                  <label class="form-label" >Monitor Condition</label>
                    <select name="monitor" class="form-control form-control-lg" >
                    <option value="Good" {{ $imageviewer->monitor == "Good" ? 'selected' : '' }} >Good</option>
                    <option value="Faulty" {{ $imageviewer->monitor == "Faulty" ? 'selected' : '' }} > Faulty</option>
                    </select>
                </div>
                </div>


                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-outline">
                  <label class="form-label" >Deployement</label>
                    <select name="deployment" class="form-control form-control-lg" >
                    <option value="Ready Deploy" {{ $imageviewer->deployment == "Ready Deploy" ? 'selected' : '' }} >Ready Deploy</option>
                    <option value="Pending" {{ $imageviewer->deployment == "Pending" ? 'selected' : '' }} > Pending</option>
                    <option value="Not Deploy" {{ $imageviewer->deployment == "Not Deploy" ? 'selected' : '' }}> Not Deploy</option>
                </select>
                </div>
                </div>

                
                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-outline">
                  <label class="form-label" >Monitor Model</label>
                    <input type="text" name="monitorModel" value="{{ $imageviewer->monitorModel }}" class="form-control form-control-lg" />
                  </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-outline">
                  <label class="form-label" >Monitor Manufacturer</label>
                    <input type="text" name="monitorManufacturer" value="{{ $imageviewer->monitorManufacturer }}" class="form-control form-control-lg" />
                  </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-outline">
                  <label class="form-label" >Monitor Size</label>
                    <input type="text" name="monitorSize" value="{{ $imageviewer->monitorSize }}" class="form-control form-control-lg" />
                  </div>
                </div>


                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-outline">
                  <label class="form-label" >Monitor Seriel Number</label>
                    <input type="text" name="monitorSerielNumber" value="{{ $imageviewer->monitorSerielNumber }}" class="form-control form-control-lg" />
                  </div>
                </div>


                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <br>
              <button type="submit" class="btn-primary1">Submit</button>
                <a class="btn-primary1" href="{{ route('imageviewers.index') }}"> Back</a>
            </div>
        </div>
    </form>
          
</section>
    

@endsection
    