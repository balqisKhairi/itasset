@extends('layouts.template')
@section('content')

<style>
  .tr{
        color:black;
    }

    .table-bordered th {
    background-color: #a7c0d5;
    
    }

.table-bordered td, .table-bordered th {
    
}

.btn-success {
    color: #fff;
    background-color: #28a745;
    border-color: #28a745;
    box-shadow: none;
    margin-top: 20px;
}

.card {
    box-shadow: 0 0 1px rgb(0 0 0 / 13%), 0 1px 3px rgb(0 0 0 / 98%);
    margin-bottom: 1rem;
}
.card-header {
    background-color: #def1ff;
    border-bottom: 1px solid rgba(0,0,0,.125);
    padding: 0.75rem 1.25rem;
    position: center;
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem;
}

tr:nth-child(odd) {
  background-color: #c0d5db5c;
}

.table-bordered td, .table-bordered th {
    border: 1px solid #00000045;
}

.table tbody+tbody {
    border-top: 2px solid #b7bcc1;
}

.table td, .table th {
    padding: 0.75rem;
    vertical-align: top;
    text-align: center;
    border-top: 1px solid #dee2e6;
}
    </style>

<div class="card border-primary " style="max-width: 100rem;">
  <div class="card-header">{{ __('LIST OF DESKTOPS') }}</div>
  <div class="card-body">



  <table class="table table-bordered">
    <tr class="table-active">

            <th scope="row">ID</th>
            <th>Device IP Address</th>
            <th>Device Manufacturer</th>
            <th>Device Model</th>
            <th>Device Seriel Number</th>
            <th>Department</th> 
            <th>Purchase Order(PO)</th> 
        </tr>
        @if(count($desktops))
        @foreach($desktops as $s)
       <tbody>
           <tr >
           <td>{{$s->id}}</td>
           <td>{{$s->deviceIPaddress}}</td>
           <td>{{$s->deviceManufacturer}}</td>
           <td>{{$s->deviceModel}}</td>
           <td>{{$s->deviceSerielNumber}}</td>
           <td>{{$s->department->departName}}</td>
           <td>{{$s->purchaseOrder}}</td>
</tr>
</tbody>

@endforeach
@else
        <tr>
                    <td colspan="10">There are no data.</td>
                </tr>
            @endif
    </table>
   
</div>
</div>

<div class="card border-primary " style="max-width: 100rem;">
  <div class="card-header">{{ __('LIST OF ALL in ONE DESKTOPS (AiO)') }}</div>
  <div class="card-body">



  <table class="table table-bordered">
    <tr class="table-active">

            <th scope="row">ID</th>
            <th>Device IP Address</th>
            <th>Device Manufacturer</th>
            <th>Device Model</th>
            <th>Device Seriel Number</th>
            <th>Department</th> 
            <th>Purchase Order(PO)</th> 
        </tr>
        @if(count($aiodesktops))

        @foreach($aiodesktops as $s)
       <tbody>
           <tr >
           <td>{{$s->id}}</td>
           <td>{{$s->deviceIPaddress}}</td>
           <td>{{$s->deviceManufacturer}}</td>
           <td>{{$s->deviceModel}}</td>
           <td>{{$s->deviceSerielNumber}}</td>
           <td>{{$s->department->departName}}</td>
           <td>{{$s->purchaseOrder}}</td>
</tr>
</tbody>
@endforeach
@else
        <tr>
                    <td colspan="10">There are no data.</td>
                </tr>
            @endif
    </table>
</div>
</div>


<div class="card border-primary " style="max-width: 100rem;">
  <div class="card-header">{{ __('LIST OF OUTSOURCE') }}</div>
  <div class="card-body">



  <table class="table table-bordered">
    <tr class="table-active">

            <th scope="row">ID</th>
            <th>Device IP Address</th>
            <th>Device Manufacturer</th>
            <th>Device Model</th>
            <th>Device Seriel Number</th>
            <th>Department</th> 
        </tr>
        @if(count($osdesktops))

        @foreach($osdesktops as $s)
       <tbody>
           <tr >
           <td>{{$s->id}}</td>
           <td>{{$s->deviceIPaddress}}</td>
           <td>{{$s->deviceManufacturer}}</td>
           <td>{{$s->deviceModel}}</td>
           <td>{{$s->deviceSerielNumber}}</td>
           <td>{{$s->department->departName}}</td>
</tr>
</tbody>
@endforeach
@else
        <tr>
                    <td colspan="10">There are no data.</td>
                </tr>
            @endif
    </table>
</div>
</div>

<div class="card border-primary " style="max-width: 100rem;">
  <div class="card-header">{{ __('LIST OF LAPTOPS') }}</div>
  <div class="card-body">



  <table class="table table-bordered">
    <tr class="table-active">

            <th scope="row">ID</th>
            <th>Device IP Address</th>
            <th>Device Manufacturer</th>
            <th>Device Model</th>
            <th>Device Seriel Number</th>
            <th>Department</th> 
            <th>Purchase Order</th> 
        </tr>
        @if(count($laptops))

        @foreach($laptops as $s)
       <tbody>
           <tr >
           <td>{{$s->id}}</td>
           <td>{{$s->deviceIPaddress}}</td>
           <td>{{$s->deviceManufacturer}}</td>
           <td>{{$s->deviceModel}}</td>
           <td>{{$s->deviceSerielNumber}}</td>
           <td>{{$s->department->departName}}</td>
           <td>{{$s->purchaseOrder}}</td>
</tr>
</tbody>
@endforeach
@else
        <tr>
                    <td colspan="10">There are no data.</td>
                </tr>
            @endif
    </table>
</div>
</div>

<div class="card border-primary " style="max-width: 100rem;">
  <div class="card-header">{{ __('LIST OF TABLETS') }}</div>
  <div class="card-body">



  <table class="table table-bordered">
    <tr class="table-active">

            <th scope="row">ID</th>
            <th>Device IP Address</th>
            <th>Device Manufacturer</th>
            <th>Device Model</th>
            <th>Device Seriel Number</th>
            <th>Department</th> 
            <th>Purchase Order(PO)</th> 
        </tr>
        @if(count($tablets))

        @foreach($tablets as $s)
       <tbody>
           <tr >
           <td>{{$s->id}}</td>
           <td>{{$s->deviceIPaddress}}</td>
           <td>{{$s->deviceManufacturer}}</td>
           <td>{{$s->deviceModel}}</td>
           <td>{{$s->deviceSerielNumber}}</td>
           <td>{{$s->department->departName}}</td>
           <td>{{$s->purchaseOrder}}</td>
</tr>
</tbody>
@endforeach
@else
        <tr>
                    <td colspan="10">There are no data.</td>
                </tr>
            @endif
    </table>
</div>
</div>


<div class="card border-primary " style="max-width: 100rem;">
  <div class="card-header">{{ __('LIST OF PRINTERS') }}</div>
  <div class="card-body">



  <table class="table table-bordered">
    <tr class="table-active">

            <th scope="row">ID</th>
           
            <th>Device Manufacturer</th>
            <th>Device Model</th>
            <th>Device Seriel Number</th>
            <th>Department</th> 
            <th>Purchase Order(PO)</th> 
        </tr>
        @if(count($printers))

        @foreach($printers as $s)
       <tbody>
           <tr >
           <td>{{$s->id}}</td>
           <td>{{$s->deviceManufacturer}}</td>
           <td>{{$s->deviceModel}}</td>
           <td>{{$s->deviceSerielNumber}}</td>
           <td>{{$s->department->departName}}</td>
           <td>{{$s->purchaseOrder}}</td>
</tr>
</tbody>
@endforeach
@else
        <tr>
                    <td colspan="10">There are no data.</td>
                </tr>
            @endif
    </table>
</div>
</div>


<div class="card border-primary " style="max-width: 100rem;">
  <div class="card-header">{{ __('LIST OF IMAGE VIEWERS') }}</div>
  <div class="card-body">



  <table class="table table-bordered">
    <tr class="table-active">

            <th scope="row">ID</th>
            <th>Device IP Address</th>
            <th>Device Manufacturer</th>
            <th>Device Model</th>
            <th>Device Seriel Number</th>
            <th>Department</th> 
            <th>Purchase Order(PO)</th> 
        </tr>
        @if(count($imageviewers))

        @foreach($imageviewers as $s)
       <tbody>
           <tr >
           <td>{{$s->id}}</td>
           <td>{{$s->deviceIPaddress}}</td>
           <td>{{$s->deviceManufacturer}}</td>
           <td>{{$s->deviceModel}}</td>
           <td>{{$s->deviceSerielNumber}}</td>
           <td>{{$s->department->departName}}</td>
           <td>{{$s->purchaseOrder}}</td>
           
</tr>
</tbody>
@endforeach
@else
        <tr>
                    <td colspan="10">There are no data.</td>
                </tr>
            @endif
    </table>
</div>
</div>


<div class="card border-primary " style="max-width: 100rem;">
  <div class="card-header">{{ __('LIST OF TV SHARPS') }}</div>
  <div class="card-body">



  <table class="table table-bordered">
    <tr class="table-active">

            <th scope="row">ID</th>
           
            <th>Device Manufacturer</th>
            <th>Device Model</th>
            <th>Device Seriel Number</th>
            <th>Department</th> 
            <th>Purchase Order(PO)</th> 
        </tr>
        @if(count($tvsharps))

        @foreach($tvsharps as $s)
       <tbody>
           <tr >
           <td>{{$s->id}}</td>
           <td>{{$s->deviceManufacturer}}</td>
           <td>{{$s->deviceModel}}</td>
           <td>{{$s->deviceSerielNumber}}</td>
           <td>{{$s->department->departName}}</td>
           <td>{{$s->purchaseOrder}}</td>
           
</tr>
</tbody>
@endforeach
@else
        <tr>
                    <td colspan="10">There are no data.</td>
                </tr>
            @endif
    </table>
</div>
</div>


<div class="card border-primary " style="max-width: 100rem;">
  <div class="card-header">{{ __('LIST OF CARD READERS') }}</div>
  <div class="card-body">



  <table class="table table-bordered">
    <tr class="table-active">

            <th scope="row">ID</th>
           
            <th>Device Manufacturer</th>
            <th>Device Model</th>
            <th>Device Seriel Number</th>
            <th>Department</th> 
        </tr>
        @if(count($cardreaders))

        @foreach($cardreaders as $s)
       <tbody>
           <tr >
           <td>{{$s->id}}</td>
           <td>{{$s->deviceManufacturer}}</td>
           <td>{{$s->deviceModel}}</td>
           <td>{{$s->deviceSerielNumber}}</td>
           <td>{{$s->department->departName}}</td>
           
</tr>
</tbody>
@endforeach
@else
        <tr>
                    <td colspan="10">There are no data.</td>
                </tr>
            @endif
    </table>
</div>
</div>


<div class="card border-primary " style="max-width: 100rem;">
  <div class="card-header">{{ __('LIST OF BIOMETRICS') }}</div>
  <div class="card-body">



  <table class="table table-bordered">
    <tr class="table-active">

            <th scope="row">ID</th>
           
            <th>Device Manufacturer</th>
            <th>Device Model</th>
            <th>Device Seriel Number</th>
            <th>Department</th> 
        </tr>
        @if(count($biometrics))

        @foreach($biometrics as $s)
       <tbody>
           <tr >
           <td>{{$s->id}}</td>
           <td>{{$s->deviceManufacturer}}</td>
           <td>{{$s->deviceModel}}</td>
           <td>{{$s->deviceSerielNumber}}</td>
           <td>{{$s->department->departName}}</td>
           
</tr>
</tbody>
@endforeach
@else
        <tr>
                    <td colspan="10">There are no data.</td>
                </tr>
            @endif
    </table>
</div>
</div>

<div class="card border-primary " style="max-width: 100rem;">
  <div class="card-header">{{ __('LIST OF ENCOREMEDS') }}</div>
  <div class="card-body">



  <table class="table table-bordered">
    <tr class="table-active">

            <th scope="row">ID</th>
           
            <th>Device Manufacturer</th>
            <th>Device Model</th>
            <th>Device Seriel Number</th>
            <th>Department</th> 
        </tr>
        @if(count($encoremeds))

        @foreach($encoremeds as $s)
       <tbody>
           <tr >
           <td>{{$s->id}}</td>
           <td>{{$s->deviceManufacturer}}</td>
           <td>{{$s->deviceModel}}</td>
           <td>{{$s->deviceSerielNumber}}</td>
           <td>{{$s->department->departName}}</td>
           
</tr>
</tbody>
@endforeach
@else
        <tr>
                    <td colspan="10">There are no data.</td>
                </tr>
            @endif
    </table>
</div>
</div>

<div class="card border-primary " style="max-width: 100rem;">
  <div class="card-header">{{ __('LIST OF UPS') }}</div>
  <div class="card-body">



  <table class="table table-bordered">
    <tr class="table-active">

            <th scope="row">ID</th>
           
            <th>Device Manufacturer</th>
            <th>Device Model</th>
            <th>Device Seriel Number</th>
            <th>Department</th> 
        </tr>
        @if(count($powers))

        @foreach($powers as $s)
       <tbody>
           <tr >
           <td>{{$s->id}}</td>
           <td>{{$s->deviceManufacturer}}</td>
           <td>{{$s->deviceModel}}</td>
           <td>{{$s->deviceSerielNumber}}</td>
           <td>{{$s->department->departName}}</td>
           
</tr>
</tbody>
@endforeach
@else
        <tr>
                    <td colspan="10">There are no data.</td>
                </tr>
            @endif
    </table>
</div>
</div>



<div class="card border-primary " style="max-width: 100rem;">
  <div class="card-header">{{ __('LIST OF MPOS') }}</div>
  <div class="card-body">



  <table class="table table-bordered">
    <tr class="table-active">

            <th scope="row">ID</th>
           
            <th>Device Manufacturer</th>
            <th>Device Model</th>
            <th>Device Seriel Number</th>
            <th>Department</th> 
        </tr>
        @if(count($mpos))

        @foreach($mpos as $s)
       <tbody>
           <tr >
           <td>{{$s->id}}</td>
           <td>{{$s->deviceManufacturer}}</td>
           <td>{{$s->deviceModel}}</td>
           <td>{{$s->deviceSerielNumber}}</td>
           <td>{{$s->department->departName}}</td>
           
</tr>
</tbody>
@endforeach
@else
        <tr>
                    <td colspan="10">There are no data.</td>
                </tr>
            @endif
    </table>
</div>
</div>



</div>
</div>
</div>
</div>
@endsection