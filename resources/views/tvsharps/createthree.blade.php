@extends('layouts.template')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            
        </div>
       
    </div>
</div>
                <div class="card">
                    <div class="card-header">Others</div>

   
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

<form action="{{ route('tvsharps.storethree') }}" method="POST">
    @csrf  
    

                            <div class="form-group">
                                <label for="description">Tagging Monitor:</label>
                                <input type="text"  value="{{{ $tvsharp->taggingMonitor ?? '' }}}" class="form-control"  name="taggingMonitor"/>
                            </div>
                            <div class="form-group">
                                <label for="description">Purchase Order(PO):</label>
                                <input type="text"  value="{{{ $tvsharp->purchaseOrder ?? '' }}}" class="form-control"  name="purchaseOrder"/>
                            </div>
                            <div class="form-group">
                                <label for="description">Delivery Order(DO):</label>
                                <input type="text"  value="{{{ $tvsharp->deliveryOrder ?? '' }}}" class="form-control"  name="deliveryOrder"/>
                            </div>
                            <div class="form-group">
                                <label for="description">Invoice No:</label>
                                <input type="text"  value="{{{ $tvsharp->noInvoice ?? '' }}}" class="form-control"  name="noInvoice"/>
                            </div>
                      
                            <div class="form-group">
                                <label for="description">Supplier:</label>
                                <input type="text"  value="{{{ $tvsharp->supplier ?? '' }}}" class="form-control"  name="supplier"/>
                            </div>
                            <div class="form-group">
                                <label for="title">Price per Unit(RM):</label>
                                <input type="text" value="{{ $tvsharp->pricePerUnit ?? '' }}" class="form-control"  name="pricePerUnit">
                            </div>
                            <div class="form-group">
                                <label for="description">Status Asset:</label>
                                <input type="text"  value="{{{ $tvsharp->statusAsset ?? '' }}}" class="form-control"  name="statusAsset"/>
                            </div>
                            
                       </div>
                       </div>
                
  
                       <div class="card-footer">
                        <div class="row">

                    <div class="col-md-6 text-left">
                                <a href="{{ route('tvsharps.createtwo') }}" class="btn btn-danger pull-right">Previous</a>
                            </div>
  
                    <div class="col-md-6 text-right">
                        <button type="submit" class="btn btn-primary">Next</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection