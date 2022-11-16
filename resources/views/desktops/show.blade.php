@extends('layouts.template')
@section('content')

<style>
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
  margin: 10px;
}
.flex-parent {
  display: flex;
  align-items: CENTER;
    align-content: center;
}
.jc-center {
  justify-content: center;
}
.btn-primary1:hover {
  background-color: #555555;
  color: white;
}
.card-header{
    color: black;
}
.table table-hover{
    
}

.table-warning, .table-warning>td, .table-warning>th {
    background-color: #92cdff;
}
</style>


<div class="container  h-50">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="card shadow-2-strong card-registration">
          <div class="card-body p-4 p-md-5">
          <h2 class="card-header" align="center" >FULL DETAILS</h2>
           
  <table class="table table-hover">

  <tbody>
                 <tr class="table-warning">
                <th scope="row">Assigned To:</th>
                <td>{{ $desktop->assignedTo }}</td>
                </tr>

                <tr>
                <th scope="row">Device Hostname:</th>
                <td>{{ $desktop->deviceHostname }}</td>
                </tr>

                <tr class="table-warning">
                <th scope="row">IP Address:</th>
               <td> {{ $desktop->deviceIPaddress }}</td>
                </tr>


         <tr>
                <th scope="row">Device Manufacturer:</th>
                <td>{{ $desktop->deviceManufacturer }}</td>
        </tr>

        <tr class="table-warning">
                <th scope="row">Device Model:</th>
                <td>{{ $desktop->deviceModel }}</td>
</tr>
      
<tr>
                <th scope="row">Device Manufacturer:</th>
                <td>{{ $desktop->deviceSerielNumber }}</td>
</tr>

                <tr class="table-warning">
                <th scope="row">Warranty Date:</th>
                <td>{{ $desktop->warrantyDate }}</td>
</tr>
                
<tr>
                <th scope="row">Department:</th>
                <td>{{ $desktop->department }}</td>
</tr>
<tr class="table-warning">
                <th scope="row">Device Location:</th>
                <td>{{ $desktop->deviceLocation }}</td>
</tr>

        <tr>
        <th scope="row">Level:</th>
                <td>{{ $desktop->level }}</td>
</tr>
        <tr class="table-warning">
                <th scope="row">Operating System:</th>
                <td>{{ $desktop->operatingSystem }}</td>
        </tr>

        <tr>
        <th scope="row">Window Version:</th>
                <td>{{ $desktop->windowVersion }}</td>
        </tr>

                <tr class="table-warning">
                <th scope="row">Microsoft Office And Version:</th>
                <td>{{ $desktop->msOfficeAndVersion }}</td>
                </tr>

                <tr>
        <th scope="row">Office Seriel Key:</th>
                <td>{{ $desktop->officeSerielKey }}</td>
</tr>

<tr class="table-warning">
                <th scope="row">Antivirus And Version:</th>
                <td>{{ $desktop->antivirusAndVersion }}</td>
</tr>

<tr>
        <th scope="row">Domain:</th>
               <td> {{ $desktop->domain }}</td>
</tr>


<tr class="table-warning">
                <th scope="row">Internet Connection:</th>
                <td>{{ $desktop->internetConnection }}</td>
</tr>

<tr>
        <th scope="row">Policy Reboot And Shutdown:</th>
               <td> {{ $desktop->policyRebootAndShutdown }}</td>
</tr>

<tr class="table-warning">
                <th scope="row">CPU Condition:</th>
                <td>{{ $desktop->cpu }}</td>
</tr>

<tr>
        <th scope="row">Monitor Condition:</th>
                <td>{{ $desktop->monitor }}</td>
</tr>


<tr class="table-warning">
                <th scope="row">Deployement:</th>
                <td>{{ $desktop->deployment }}</td>
</tr>

</tbody>
</table>
</div>
<div class="flex-parent jc-center">
                        <button href="{{ route('desktops.edit',$desktop->id) }}"  class="btn btn-primary1">EDIT</button>
                       <button  class="btn btn-primary1" onclick="history.back()" >BACK</button>
                    
</div>
</div>
</div>

 
@endsection