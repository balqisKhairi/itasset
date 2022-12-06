@extends('layouts.template')
@section('content')

<style>
.card-header{
    color:#000000;
    font-size: 16px;
}

.btn-success{
    background: rgb(255,207,35);
    color: rgb(0,0,0)
}
.card {
        margin: 0 auto; /* Added */
        float: none; /* Added */
        margin-bottom: 10px; /* Added */
        
}

.card-body{
        margin: 0 auto; /* Added */
        float: none; /* Added */
        margin-bottom: 10px; /* Added */
}

.table-bordered{
        margin: 0 auto; /* Added */
        float: none; /* Added */
        margin-bottom: 10px; /* Added */
}
.table-one{
    background-color:#000000;
}
thead, tbody, tfoot, tr, td, th {
    border-color: inherit;
    border-style: solid;
    border-width: 0;
    color: black;
}
    </style>

<div class="card border-primary " style="max-width: 100rem;">
  <div class="card-header">{{ __('LIST OF DEVICE') }}</div>
  <div class="card-body">
  
<div class="row">


         <table class="table table-bordered">
        <thead>
        <th>No</th>
            <th>Device Hostname</th>
            <th>Device IP Address</th>
            <th>Device Seriel Number</th>
            <th>Location</th>
          
         
        </thead>
        @foreach($samevendor as $s)
       <tbody>
           <tr >
           <td>{{$s->id}}</td>
           <td>{{$s->deviceHostname}}</td>
           <td>{{$s->deviceIPaddress}}</td>
           <td>{{$s->deviceSerielNumber}}</td>
           <td>{{$s->deviceLocation}}</td>
</tr>
</tbody>
@endforeach
    </table>
</div>
</div>

</div>
</div>
</div>
</div>
@endsection