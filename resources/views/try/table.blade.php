@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>List of Students</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('subjects.create') }}"> Add New Application</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>code</th>
            <th>part</th>
           <th>Joined On</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($subjects as $s)
        <tr>
            <td>{{ $s->id }}</td>
            <td>{{ $s->subjectName }}</td>
            <td>{{ $s->code }}</td>
            <td>{{ $s->subjectPart}}</td>
            <td>{{ $s->created_at }}</td>
            <td>
                <form action="{{ route('subjects.destroy',$s->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('subjects.show',$s->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('subjects.edit',$s->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection