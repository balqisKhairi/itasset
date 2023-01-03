@section('content')
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
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

.tr {
    display: table-row;
    vertical-align: inherit;
    border-color: black;
    background-color: black;
}

tbody:nth-child(odd) {
  background-color: #D6EEEE;
}

.btn-success {
    color: #fff;
    background-color: #28a745;
    border-color: #28a745;
    box-shadow: none;
    margin-top: 20px;
}
</style>
    <body>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div>
                <h2>List of Departments</h2>
            </div>
            <div>
                <a class="btn btn-success" href="{{ route('departments.create') }}"> Add New Department</a>
            
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
      
            <th>Department Name</th>
           
           
            <th width="600px">Action</th>
        </tr>
       @foreach ($departments as $s)
       <tbody id="myTable">
        <tr>
            
            <td>{{ $s->id }}</td>
            <td>{{ $s->departName }}</td>
            
            <td>
            <form action="{{ route('departments.destroy',$s->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('departments.show',$s->id) }}">View Full Details</a>
    
                 
    
                    <a class="btn btn-primary" href="{{ route('departments.edit',$s->id) }}">Edit</a>
    
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" onclick="return confirm('Are you sure want to delete this?')" class="btn btn-danger remove-user">Delete</button>

                    <a class="btn btn-warning" href="{{ url('theDevice',$s->id) }}">List Of Device</a>
                </form>
            </td>
        </tr>
        @endforeach
      
</tbody>
    </table>

    </body>
</html>

@endsection