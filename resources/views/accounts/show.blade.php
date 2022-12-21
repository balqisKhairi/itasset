@extends('layouts.template')
@section('content')
    <style>
.btn-primary1  {
  background-color: #68ceff;
  border: none;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
 
  cursor: pointer;
}

.flex-parent {
  display: flex;
}

.jc-center {
    justify-content: center;
    margin-bottom: 20px;
}

.btn-primary1:hover {
  background-color: #555555;
  color: white;

}

.card-header{
    color: black;
}

.table-warning tbody+tbody, .table-warning td, .table-warning th, .table-warning thead th {
    border-color: #7ec3ff;
}

.table-warning, .table-warning>td, .table-warning>th {
    background-color: #baf2ff;
}

.table table-hover{
    
}
</style>


<div class="card mb-3">
  <h3 class="card-header" align="center" >My Profile</h3>
  <div class="card-body">
  <table class="table table-hover">
  
  <tbody>
    <tr class="table-warning">
      <th scope="row">Name :</th>
      <td>{{ $account->name }}</td>
      
    </tr>

    <tr>
      <th scope="row">Email :</th>
      <td>{{ $account->email }}</td>
      
    </tr>

   
    <tr class="table-warning">
      <th scope="row">Phone Number :</th>
      <td> {{ $account->phoneNumber }}</td>
</tr>
   
   
  </tbody>
</table>
</div>

<div class="flex-parent jc-center">
  <button class="btn btn-primary1 " type="button" onclick="history.back()">BACK</button>
 
</div>
    </div>
</div>
</div>
@endsection