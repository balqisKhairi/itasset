@section('content')
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   
<style>
    .tr{
        color:white;
    }

    .table-bordered th {
    background-color: #71b8f5;
    }

.table-bordered td, .table-bordered th {
    
}

.tr {
    display: table-row;
    vertical-align: inherit;
    border-color: black;
    background-color: black;
}

tr:nth-child(odd) {
  background-color: #D6EEEE;
}
    </style>
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>List of Desktops</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('desktops.createone') }}"> Add New Desktops</a>
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
    <tr class="table-active">
      <th scope="row">ID</th>
      
            <th>Assigned To</th>
            <th>Hostname</th>
            <th>IP Address</th>
            <th>Device Seriel Number</th>
           
           
            <th width="500px">Action</th>
        </tr>
       @foreach ($desktops as $s)
        <tr>
            
            <td>{{ $s->id }}</td>
            <td>{{ $s->assignedTo }}</td>
            <td>{{ $s->deviceHostname }}</td>
            <td>{{ $s->deviceIPaddress }}</td>
            <td>{{ $s->deviceSerielNumber }}</td>
            
            <td>
            <form action="{{ route('desktops.destroy',$s->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('desktops.show1',$s->id) }}">View Full Details</a>
    
                 
    
                    <a class="btn btn-primary" href="{{ route('desktops.edit',$s->id) }}">Edit</a>
    
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" onclick="return confirm('Are you sure want to delete this?')" class="btn btn-danger remove-user">Delete</button>

                    <a href="#" class="btn btn-warning">
          <span class="glyphicon glyphicon-upload" ></span> Upload
        </a>
                </form>
            </td>
        </tr>
        @endforeach

    </table>
@endsection