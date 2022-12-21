@extends('layouts.template')
   
@section('content')
<html>
<body>


<style>
  .gradient-custom {
/* fallback for old browsers */
background: #f093fb;


/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1))
}

.mb-4{
    color:#000000;
}

.form-label{
    color:#000000;
    font-size: 16px;
}


.mb-2{
    color:#000000;
    font-size: 16px;
}

.form-check{
    color:#000000;
}


.form-control {
    display: block;
    width: 100%;
    height: calc(2.25rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #c8e8f5;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    box-shadow: 1px 20px 0 transparent;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
.btn-primary1:hover {
  background-color: #555555;
  color: white;

}

.btn-primary1 {
    background-color: #68ceff;
    border: none;
    color: black;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    cursor: pointer;
    margin-bottom: 50px;
}
.card-registration .select-input.form-control[readonly]:not([disabled]) {
font-size: 1rem;
line-height: 2.15;
padding-left: .50em;
padding-right: .75em;
}
.card-registration .select-arrow {
top: 13px;
}
</style>

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
  


  <div class="container  h-50">
    <div class="row justify-content-center align-items-center h-50">
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="card shadow-2-strong card-registration">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-2">Edit Detail</h3>
           

            <form action="{{ route('accounts.update',$account->id) }}" method="POST">
        @csrf
        @method('PUT')
   
        <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">

                  <div class="form-outline">
                  <label class="form-label" >Name</label>
                    <input type="text" name="name" value="{{ $account->name }}" class="form-control form-control-lg" />
                  </div>
                </div>

          <div class="col-xs-12 col-sm-12 col-md-12">
            <br>
                 <div class="form-outline">
                 <label class="form-label">Email</label>
                 <input type="email" name="email" value="{{ $account->email }}"  class="form-control form-control-lg" />
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
            <br>
                 <div class="form-outline">
                 <label class="form-label">Phone Number</label>
                 <input type="text" name="phoneNumber" value="{{ $account->phoneNumber }}"  class="form-control form-control-lg" />
                    </div>
                </div>
              
             
          
                <div class="col-xs-12 col-sm-12 col-md-12">
            <br>
                 <div class="form-outline">
                 <label class="form-label">Change Password</label>
                 <input type="password"  id="myInput" name="password" value="{{ $account->password }}"  class="form-control form-control-lg" />
                    </div>  
                   
                    <input type="checkbox" onclick="myFunction()"> Show Password
                    </div>
                </div>
              </div>
              <br>

              <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <br>
              <button type="submit" class="btn-primary1">Submit</button>
                <a class="btn-primary1" href="{{ url('myAcc') }}"> Back</a>
            </div>
        </div>

    </form>
          <div></div>
</section>
    
<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

</body>
</html>
@endsection