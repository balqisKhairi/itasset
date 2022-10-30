@extends('layouts.template')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            
        </div>
       
    </div>
</div>
          
                <div class="card">
                    <div class="card-header">OS Version and Software</div>

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
<form action="{{ route('laptops.storefour') }}" method="POST">
    @csrf
                            <div class="form-group">
                                <label for="description">Operating System:</label>
                                <input type="text"  value="{{{ $laptop->operatingSystem ?? '' }}}" class="form-control"  name="operatingSystem"/>
                            </div>
                            <div class="form-group">
                                <label for="title">Window Version:</label>
                                <input type="text" value="{{ $laptop->windowVersion ?? '' }}" class="form-control"  name="windowVersion"/>
                            </div>
                            <div class="form-group">
                                <label for="description">Microsoft Office And Version:</label>
                                <input type="text"  value="{{{ $laptop->msOfficeAndVersion ?? '' }}}" class="form-control"  name="msOfficeAndVersion"/>
                            </div>
                            <div class="form-group">
                                <label for="description">Office Seriel Key:</label>
                                <input type="text"  value="{{{ $laptop->officeSerielKey ?? '' }}}" class="form-control"  name="officeSerielKey"/>
                            </div>
                            <div class="form-group">
                                <label for="description">Antivirus And Version:</label>
                                <input type="text"  value="{{{ $laptop->antivirusAndVersion ?? '' }}}" class="form-control"  name="antivirusAndVersion"/>
                            </div>
                     
                </div>
                  </div>
  
                  <div class="card-footer">
                        <div class="row">

                    <div class="col-md-6 text-left">
                                <a href="{{ route('laptops.createthree') }}" class="btn btn-danger pull-right">Previous</a>
                            </div>
  
                    <div class="col-md-6 text-right">
                        <button type="submit" class="btn btn-primary">Next</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection