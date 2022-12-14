@extends('layouts.template')

@section('content')

<style>
.button2 {
    background-color: #38b6ff;
    border: none;
    color: black;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 6px 4px;
    cursor: pointer;
}
.button:hover {
  background-color: #555555;
  color: white;

}


.table-bordered{
  margin-left: auto;
  margin-right: auto;
}

.card-header{
    color:#000000;
    font-size: 16px;
}


.card {
        margin:auto; /* Added */
        float: none; /* Added */
        
}

.card-body{
        margin:auto; /* Added */
        float: none; /* Added */
        
}

</style>


@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <div class="card border-primary " style="max-width: 60rem;">
  <div class="card-header">{{ __('MY user') }}</div>
  <div class="card-body">
 
<div class="row">
<div class="row justify-content-center">

        @foreach ($users as $s)
      <td>
                <form action="{{ route('users.destroy',$s->id) }}" method="POST">

              
   
                    <a class="button2" href="{{ route('users.show',$s->id) }}">Show Detail</a>
    
                    @can('create', App\Desktop::class)
                    <a class="button2" href="{{ route('users.edit',$s->id) }}">Edit Detail</a>
   @endcan
                     
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div>
</div>
</div>
</div>
@endsection