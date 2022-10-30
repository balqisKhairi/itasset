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

<form action="{{ route('printers.storefour') }}" method="POST">
    @csrf  
    
                                <div class="form-group">
                               
                                <label>Internet Connection : &nbsp; &nbsp;</label>
                                <select name="internetConnection" id="internetConnection"class="form-control">
                                <option value=""> --SELECT--</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                                <option value="N/A">N/A</option>
                                </select> 
                                </div>
</div>
</div>
                                <div class="card">
             
             <div class="card-header">Purchase Details</div>
             <div class="card-body">
                                
                            <div class="form-group">
                                <label for="description">Purchase Order(PO):</label>
                                <input type="text"  value="{{{ $printer->purchaseOrder ?? '' }}}" class="form-control"  name="purchaseOrder"/>
                            </div>
                            <div class="form-group">
                                <label for="description">Delivery Order(DO):</label>
                                <input type="text"  value="{{{ $printer->deliveryOrder ?? '' }}}" class="form-control"  name="deliveryOrder"/>
                            </div>
                            <div class="form-group">
                                <label for="description">Invoice No:</label>
                                <input type="text"  value="{{{ $printer->noInvoice ?? '' }}}" class="form-control"  name="noInvoice"/>
                            </div>
                      
                            <div class="form-group">
                                <label for="description">Supplier:</label>
                                <input type="text"  value="{{{ $printer->supplier ?? '' }}}" class="form-control"  name="supplier"/>
                            </div>
                            <div class="form-group">
                                <label for="title">Price per Unit(RM):</label>
                                <input type="text" value="{{ $printer->pricePerUnit ?? '' }}" class="form-control"  name="pricePerUnit">
                            </div>
                            <div class="form-group">
                                <label for="description">Status Asset:</label>
                                <input type="text"  value="{{{ $printer->statusAsset ?? '' }}}" class="form-control"  name="statusAsset"/>
                            </div>
                            
                       </div>
                       </div>
                
  
                       <div class="card-footer">
                        <div class="row">

                    <div class="col-md-6 text-left">
                                <a href="{{ route('printers.createthree') }}" class="btn btn-danger pull-right">Previous</a>
                            </div>
  
                    <div class="col-md-6 text-right">
                        <button type="submit" class="btn btn-primary">Next</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection