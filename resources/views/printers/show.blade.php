
@extends('layouts.template')
@section('content')



<style>
   
.img-account-monitor {
    height: 10rem;
}
.rounded-circle {
    border-radius: 50% !important;
}
.card {
    box-shadow: 0 0.15rem 1.75rem 0 rgb(33 40 50 / 15%);
}

.card-body {
    -webkit-flex: 1 1 auto;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    min-height: 1px;
      
    
}
.card-body1 {
    -webkit-flex: 1 1 auto;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    min-height: 1px;
    /* padding: 1.25rem; */
}

.card .card-header {
    font-weight: 500;
}
.card-header:first-child {
    border-radius: 0.35rem 0.35rem 0 0;
}
.card-header {
    padding: 1rem 1.35rem;
    margin-bottom: 0;
    background-color: rgba(33, 40, 50, 0.03);
    border-bottom: 1px solid rgba(33, 40, 50, 0.125);
}
.form-control, .dataTable-input {
    display: block;
    width: 100%;
    padding: 0.875rem 1.125rem;
    font-size: 0.875rem;
    font-weight: 400;
    line-height: 1;
    color: #69707a;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #c5ccd6;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 0.35rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.nav-borders .nav-link.active {
    color: #0061f2;
    border-bottom-color: #0061f2;
}
.nav-borders .nav-link {
    color: #69707a;
    border-bottom-width: 0.125rem;
    border-bottom-style: solid;
    border-bottom-color: transparent;
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    padding-left: 0;
    padding-right: 0;
    margin-left: 1rem;
    margin-right: 1rem;
}

.mb-3, .my-3 {
    margin-bottom: 0.2rem!important;
}




.bio-graph-heading {
    background: #fbc02d;
    color: #fff;
    text-align: center;
    font-style: italic;
    padding: 40px 110px;
    border-radius: 4px 4px 0 0;
    -webkit-border-radius: 4px 4px 0 0;
    font-size: 16px;
    font-weight: 300;
}

.bio-graph-info {
    color: #89817e;
}

.bio-graph-info h1 {
    font-size: 22px;
    font-weight: 300;
    margin: 0 0 20px;
}

.bio-row {
    width: 50%;
    float: left;
    margin-bottom: 0px;
    padding:2px;
}

.bio-row p span {
    width: 100px;
    display: inline;
    font-weight: 600;
}

.row1 p span{
    display: inline-block;
    align:center;
}

.mb-3, .my-3 {
    margin-bottom: auto;
}

.mb-4, .my-4 {
    margin-bottom: 0.2rem;
    margin-block-end: 0rem;
    padding-inline-end: 1rem;
    padding-block-end: -2rem;
    margin-bottom: auto;
}

p {
    margin-top: 0;
    margin-bottom: 0.5rem;
    font-size: 16px;
}

.monitor-tab label{
    font-weight: 600;
}
.monitor-tab p{
    font-weight: 500;
    color: #000000;
}
.span{
    font-weight: 600;
}

.monitor-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}

.table-warning, .table-warning>td, .table-warning>th {
    background-color: #baddff;
}

a {
    
    text-decoration: bold;
    background-color: transparent;
}

</style>




    <div class="row">
        <div class="col-xl-4">
            <!-- monitor picture card-->
            <div class="card mb-3 mb-xl-0">
            <h4 class="card-header" align="center" >Details</h4>
                <div class="card-body text-center">
                    <!-- monitor picture image-->
                    <img class="img img-responsive"  width='400' height='250' src="{{ asset($printer->image) }}" alt=""/>
                    
                    


                    
                    </br></br>    

                <table class="table table-hover">
                <tbody>
                 <tr >
                <th scope="row">Assigned To:</th>
                <td>{{ $printer->assignedTo }}</td>
                </tr>

                <tr>
                <th scope="row">Device Hostname:</th>
                <td>{{ $printer->deviceHostname }}</td>
                </tr>

                <tr>
                <th scope="row">Device Seriel Number:</th>
                <td>{{ $printer->deviceSerielNumber }}</td>
                </tr>

            </tbody>
        </table>

         </div>
            </div>
        </div>


        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-3">

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                <a class="nav-link active" id="device-tab" data-toggle="tab" href="#device" role="tab" aria-controls="device" aria-selected="true">Device</a>
                                </li>
                               
                                <li class="nav-item">
                                <a class="nav-link" id="location-tab" data-toggle="tab" href="#location" role="tab" aria-controls="location" aria-selected="false">Location</a>
                                </li>
                               
                                <li class="nav-item">
                                <a class="nav-link" id="other-tab" data-toggle="tab" href="#other" role="tab" aria-controls="other" aria-selected="false">Other</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" id="condition-tab" data-toggle="tab" href="#condition" role="tab" aria-controls="condition" aria-selected="false">Condition</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" id="status-tab" data-toggle="tab" href="#status" role="tab" aria-controls="status" aria-selected="false">Status</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" id="purchase-tab" data-toggle="tab" href="#purchase" role="tab" aria-controls="purchase" aria-selected="false">Purchase</a>
                                </li>
                                </ul>  
           
                        <div class="tab-content monitor-tab" id="myTabContent">
                         <div class="tab-pane fade show active" id="device" role="tabpanel" aria-labelledby="device-tab">
                                 
                <h5 class="card-header">Device Details</h5>
                <div class="card-body">
                 
                <table class="table table-hover">

                <tbody>
                <tr class="table-warning">
                <th scope="row">IP Address:</th>
                <td> {{ $printer->deviceIPaddress }}</td>
                </tr>

                <tr>
                <th scope="row">Device Manufacturer:</th>
                <td>{{ $printer->deviceManufacturer }}</td>
                </tr>

                <tr class="table-warning">
                <th scope="row">Device Model:</th>
                <td>{{ $printer->deviceModel }}</td>
                </tr>

                <tr >
                <th scope="row">Warranty Date:</th>
                <td>{{ $printer->warrantyDate }}</td>
                </tr>
                </tbody>
                </table>

                </div>
                </div>

               
               
            

            <div class="tab-pane fade" id="location" role="tabpanel" aria-labelledby="location-tab">
                <h5 class="card-header">Location Details</h5>
                <div class="card-body">
                <table class="table table-hover">
                <tbody>    
                 
                <tr class="table-warning"> 
                <th scope="row">Department:</th>
                <td> </td>
                </tr>

                <tr>
                <th scope="row">Location:</th>
                <td>{{ $printer->deviceLocation }}</td>
                </tr>
      
                <tr class="table-warning">
                <th scope="row">Level:</th>
                <td>{{ $printer->level }}</td>
                </tr>

                
                </tbody>
                </table>
                </div>
                </div>


           



            
            <div class="tab-pane fade" id="other" role="tabpanel" aria-labelledby="other-tab">
                <h5 class="card-header">Others</h5>
             
            <div class="card-body">
                <table class="table table-hover">
                <tbody>    
                 
             
                <tr class="table-warning"> 
                <th scope="row">Internet Connection:</th>
                <td>{{ $printer->internetConnection }}</td>
                </tr>
      
               
                
                </tbody>
                </table>
                </div>
                </div>


            <div class="tab-pane fade" id="condition" role="tabpanel" aria-labelledby="condition-tab">
                <h5 class="card-header">Device Condition</h5>
               <div class="card-body">
                <table class="table table-hover">
                <tbody>    
                 
                <tr class="table-warning"> 
                <th scope="row"> Condition:</th>
                <td>{{ $printer->condition }}</td>
                </tr>

                
      
                </tbody>
                </table>
                </div>
                </div>

            <div class="tab-pane fade" id="status" role="tabpanel" aria-labelledby="status-tab">
                <h5 class="card-header">Device Status</h5>
                <div class="card-body">
                <table class="table table-hover">
                <tbody>    
                 
                <tr class="table-warning"> 
                <th scope="row">Deployement:</th>
                <td>{{ $printer->deployment }}</td>
                </tr>
                </tbody>
                </table>
                </div>
                </div>

            <div class="tab-pane fade" id="purchase" role="tabpanel" aria-labelledby="purchase-tab">
                <h5 class="card-header">Purchase Details</h5>
            <div class="card-body">
                <table class="table table-hover">
                <tbody>    
                 
                <tr class="table-warning"> 
                <th scope="row">Purchase Order(PO):</th>
                <td>
                <a href ="{{ route('printers.viewFolder',$printer->id) }}">{{ $printer->purchaseOrder }}</a>    
                </td>
                </tr>

                <tr>
                <th scope="row">Delivery Order(DO):</th>
                <td>
                <a href ="{{ route('printers.viewFolder',$printer->id) }}">{{ $printer->deliveryOrder }}</a>    
                </td>
                </tr>

                <tr class="table-warning"> 
                <th scope="row">Invoive No:</th>
                <td>
                <a href ="{{ route('printers.viewFolder',$printer->id) }}">{{ $printer->noInvoice }}</a>    
              
                </td>
                </tr>

                <tr>
                <th scope="row">Supplier:</th>
                <td>{{ $printer->supplier }}</td>
                </tr>

                <tr class="table-warning"> 
                <th scope="row">Price Per Unit(RM):</th>
                <td>{{ $printer->pricePerUnit }}</td>
                </tr>

                <tr > 
                <th scope="row">Status Asset:</th>
                <td>{{ $printer->statusAsset }}</td>
                </tr>

               
                </tbody>
                </table>
                </div>
                </div>


</div>
</div>
</div>
</div>

@endsection