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
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  left: 45%;
        top: 5%;
        transform: translate(-50%, 5%);
        border: 3px solid #999999;
        z-index: 9;
      }


/* Add styles to the form container */
.form-container {
    max-width: 350px;
    padding: 20px;
    background-color: #fff;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
    background-color: #24d953;
    color: black;
    padding: 5px 5px;
    border: aliceblue;
    /* margin-bottom: 5px; */
    padding-top: 5px;
    cursor: pointer;
    width: 100%;
    margin-bottom: 10px;
    opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

input {
    border-radius: 6px;
    background-color: #eff0f6;
    border-width: 0;
    min-height: 40px;
    border: solid #98c1eb 2px !important;
    margin-bottom: 10px;
    padding-top: 5px;
}

b, h6 {
    font-size: 15px;
    margin-bottom: 5px;
}

.btn-success1 {
    color: #000;
    background-color: #ffd333;
    border-color: #000000;
    box-shadow: none;
    margin-top: 20px;
}
    </style>
    <body>
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div>
                <h2>List of Outsource Desktops</h2>
            </div>
            <div>
                <a class="btn btn-success" href="{{ route('osdesktops.create') }}"> Add New OutSource Desktop</a>
            
                <a class="btn btn-success1"  onclick="openForm()">Import from Excel</a>

               
         
           
            <div class="form-popup" id="myForm">
            <form action="{{ url('importOsdesktop') }}" class="form-container" method="post" enctype="multipart/form-data">
                @csrf
                
                <input type="file"  name="excel_file" required>


                <label for="psw">
            <h6>*Please be sure to remove your header in Excel.</h6>
            </label>

                <button type="submit" class="btn">Submit</button>
                <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
            </form>
            </div>


                <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('osdesktops.exportOsdesktop') }}"> Export to Excel</a>
            </div>
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
   

     
    @if (Session::has('excel_error'))
    @foreach(Session::get('excel_error') as $failure)
        <div class="alert alert-danger">
            <p>{{ $failure->errors()[0] }} 6 is for row Seriel number at line no {{ $failure->row()}} from your Excel.</p>
        </div>
        @endforeach
    @endif


    <table class="table table-bordered">
    <tr class="table-active">
      <th scope="row">ID</th>
      
            <th>Assigned To</th>
            <th>Hostname</th>
            <th>IP Address</th>
            <th>Device Seriel Number</th>
            <th>Device Manufacturer</th>
           
            <th width="500px">Action</th>
        </tr>
        @if(count($osdesktops))
       @foreach ($osdesktops as $key => $s)
       <tbody id="myTable">
        <tr>
            
            <td>{{ $s->id }}</td>
            <td>{{ $s->assignedTo }}</td>
            <td>{{ $s->deviceHostname }}</td>
            <td>{{ $s->deviceIPaddress }}</td>
            <td>{{ $s->deviceSerielNumber }}</td>
            <td>{{ $s->deviceManufacturer }}</td>
            <td>
            <form action="{{ route('osdesktops.destroy',$s->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('osdesktops.show',$s->id) }}">View Full Details</a>
    
                 
    
                    <a class="btn btn-primary" href="{{ route('osdesktops.edit',$s->id) }}">Edit</a>
    
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" onclick="return confirm('Are you sure want to delete this?')" class="btn btn-danger remove-user">Delete</button>

                  
                </form>
            </td>
        </tr>
        @endforeach
        @else
        <tr>
                    <td colspan="10">There are no data.</td>
                </tr>
            @endif
</tbody>
    </table>
   

    <script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>


    </body>
</html>

@endsection