@extends('layouts.template')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            
        </div>
       
    </div>
</div>


                <div class="card">
                    <div class="card-header">Purchase Details </div>
   
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

<form action="{{ route('osdesktops.storesix') }}" method="POST">
    @csrf
                            <div class="form-group">
                                <label for="description">Tagging No (CPU):</label>
                                <input type="text"  value="{{{ $osdesktops->taggingcpu ?? '' }}}" class="form-control"  name="deviceIPaddress"/>
                            </div>
                            <div class="form-group">
                                <label for="title">Tagging No (Monitor):</label>
                                <input type="text" value="{{ $osdesktops->taggingmonitor ?? '' }}" class="form-control"  name="deviceManufacturer">
                            </div>
                            <div class="form-group">
                                <label for="description">Purchase Order(PO):</label>
                                <input type="text"  value="{{{ $osdesktops->purchaseOrder ?? '' }}}" class="form-control"  name="deviceModel"/>
                            </div>
                            <div class="form-group">
                                <label for="description">Delivery Order(DO):</label>
                                <input type="text"  value="{{{ $osdesktops->deliveryOrder ?? '' }}}" class="form-control"  name="deviceSerielNumber"/>
                            </div>
                            <div class="form-group">
                                <label for="description">Invoice No:</label>
                                <input type="text"  value="{{{ $osdesktops->noInvoice ?? '' }}}" class="form-control"  name="warrantyDate"/>
                            </div>
                      
                    <div class="form-group">
                                <label for="description">Supplier:</label>
                                <input type="text"  value="{{{ $osdesktops->supplier ?? '' }}}" class="form-control"  name="monitorModel"/>
                            </div>
                            <div class="form-group">
                                <label for="title">Price per Unit(RM):</label>
                                <input type="text" value="{{ $osdesktops->pricePerUnit ?? '' }}" class="form-control"  name="monitorManufacturer">
                            </div>
                            <div class="form-group">
                                <label for="description">Status Asset:</label>
                                <input type="text"  value="{{{ $osdesktops->statusAsset ?? '' }}}" class="form-control"  name="monitorSize"/>
                            </div>
                            
</div>
</div>

                    <div class="card-footer">
                        <div class="row">

                    <div class="col-md-6 text-left">
                                <a href="{{ route('osdesktops.createfive') }}" class="btn btn-danger pull-right">Previous</a>
                            </div>
  
                    <div class="col-md-6 text-right">
                        <button type="submit" class="btn btn-primary">Next</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
    </div>
</div>
@endsection