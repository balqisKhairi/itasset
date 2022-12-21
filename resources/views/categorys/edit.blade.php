@extends('layouts.template')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Category</h2>
            </div>
        </div>
    </div>
   

    <style>

.form-control {
    display: block;
    width: 100%;
    height: calc(2.25rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #dcf2ff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    box-shadow: inset 0 0 0 transparent;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
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
  
    <form action="{{ route('categorys.update',$category->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
                <br>

                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="card">
                        <div class="card-header">Category</div>
                    <div class="card-body">
                    

                    <div class="form-group">

                    <strong>ID:</strong>
                    <input type="text" name="category_id" value="{{ $category->category_id }}" class="form-control" placeholder="ID">
                </div>
                <div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    <input type="text" class="form-control" name="categoryName" value="{{ $category->categoryName }}" placeholder="Description"></input>
</div>
</div>
</div>
            
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-primary" href="{{ route('categorys.index') }}"> Back</a>
            </div>
        </div>
   
    </form>

</div>
</div>
</div>
@endsection