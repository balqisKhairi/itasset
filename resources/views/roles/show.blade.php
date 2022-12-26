@extends('layouts.template')
@section('content')
    <style>
.btn-primary1  {
  background-color: #38acff;
  border: none;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin-top: 15px;
  cursor: pointer;
}

.table-below{
  background-color: #dcf2ff;
}


.table-warning, .table-warning>td, .table-warning>th {
    background-color: #a6deff;
}

.flex-parent {
  display: flex;
}


.jc-center {
  justify-content: center;
}

.btn-primary1:hover {
  background-color: #555555;
  color: white;

}

.card-header{
    color: black;
}

.table table-hover{
    
}
</style>


<div class="card mb-3">
  <h3 class="card-header" align="center" >Category Details</h3>
  <div class="card-body">
  <table class="table table-hover">
  
  <tbody>
    <tr >
      <th scope="row">ID :</th>
      <td> {{ $role->id }}</td>
      
    </tr>
    <tr class="table-below">
      <th scope="row">Description :</th>
      <td>  {{ $role->roleName }}</td>
     
    </tr>
   
   
  </tbody>
</table>


<div class="flex-parent jc-center">
  <button class="btn btn-primary1 " type="button" onclick="history.back()">BACK</button>
 
</div>
    </div>
</div>
@endsection