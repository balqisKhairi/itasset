@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>List of Tv Sharp</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('tvsharps.createone') }}"> Add New TV Sharp</a>
            </div>
        </div>
    </div>
    <br></br>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Device Manufacturer</th>
            <th>Device Model</th>
            <th>Device Seriel Number</th>
           
           
            <th width="500px">Action</th>
        </tr>
       @foreach ($tvsharps as $s)
        <tr>
            
            <td>{{ $s->id }}</td>
            <td>{{ $s->deviceManufacturer }}</td>
            <td>{{ $s->deviceModel }}</td>
            <td>{{ $s->deviceSerielNumber }}</td>
            
            <td>
            <form action="{{ route('tvsharps.destroy',$s->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('tvsharps.show',$s->id) }}">View Full Details</a>
    
                    <!--<a class="btn btn-primary" href="">Monitor</a>

                    <a class="btn btn-info" href="">Location</a>
    
                    <a class="btn btn-primary" href="">OS</a>
                    
                    <a class="btn btn-info" href="">Others</a>
    
                    <a class="btn btn-primary" href="">Condition</a>

                    <a class="btn btn-info" href="">Status</a> -->
    
                    <a class="btn btn-primary" href="{{ route('tvsharps.edit',$s->id) }}">Edit</a>
    
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" onclick="return confirm('Are you sure want to delete this?')" class="btn btn-danger remove-user">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>
@endsection