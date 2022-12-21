@section('content')
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>




<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

<style>

input {
    border-radius: 6px;
    background-color: #eff0f6;
    border-width: 0;
    min-height: 40px;
    border: solid #98c1eb 2px !important;
}
    .tr{
        color:white;
    }

    .table-bordered th {
    background-color: #71b8f5;
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

.tr {
    display: table-row;
    vertical-align: inherit;
    border-color: black;
    background-color: black;
}

tbody:nth-child(odd) {
  background-color: #D6EEEE;
}
</style>
    <body>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div>
                <h2>List of Encoremeds</h2>
            </div>
            <div>
                <a class="btn btn-success" href="{{ route('encoremeds.create') }}"> Add New Encoremeds</a>
            
                <br></br>
              <div class="form-group">
              <input id="myInput" type="text"  class="form-control" placeholder="Search..">
 
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
            <th>Device Manufacturer</th>
           
           <th width="350px">Action</th>
       </tr>
      
       @foreach ($encoremeds as $s)
       <tbody id="myTable">
        <tr >
            <td>{{ $s->id }}</td>
            <td>{{ $s->assignedTo }}</td>
            <td>{{ $s->deviceHostname }}</td>
            <td>{{ $s->deviceIPaddress }}</td>
            <td>{{ $s->deviceSerielNumber }}</td>
            <td>{{ $s->deviceManufacturer }}</td>

            <td>
            <form action="{{ route('encoremeds.destroy',$s->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('encoremeds.show',$s->id) }}">View Full Details</a>
    
                 
    
                    <a class="btn btn-primary" href="{{ route('encoremeds.edit',$s->id) }}">Edit</a>
    
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" onclick="return confirm('Are you sure want to delete this?')" class="btn btn-danger remove-user">Delete</button>

                  
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
  
    </body>
</html>

@endsection