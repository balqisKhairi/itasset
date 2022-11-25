@section('content')

<style>
    thead, tbody, tfoot, tr, td, th {
    border-color: inherit;
    border-style: solid;
    border-width: 0;
    color: black;
}
    </style>
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>List of Department</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('departments.create') }}"> Add New Department</a>
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
            <th>Description</th>
           
            <th width="280px">Action</th>
        </tr>
       @foreach ($departments as $s)
        <tr>
            
            <td>{{ $s->id }}</td>
            <td>{{ $s->departName }}</td>
            
            <td>
                <form action="{{ route('departments.destroy',$s->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('departments.show',$s->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('departments.edit',$s->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" onclick="return confirm('Are you sure want to delete this?')" class="btn btn-danger remove-user">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>
@endsection