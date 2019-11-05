@extends ("layout.master")

@section('title','Category Home Page')

@section('content')
    <div class="container">
        <h1 class="text-center text-info my-5">All Categoies</h1>
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{session('success')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <a href="{{url("/cat/create")}}" class="btn btn-primary btn-sm mb-2">
            Create <i class="fa fa-plus"></i>
        </a>
        <table class="table table-bordered">
            <thead>
            <tr class="bg-dark text-white">
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Image</th>
                <th scope="col">Created</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cats as $cat)
                <tr class="text-muted">
                    <td>{{$cat->id}}</td>
                    <td>{{$cat->name}}</td>
                    <td>
                        <img src="{{asset("imgs/uploads/$cat->image")}}" alt="" style="width:100px;height:70px;">
                    </td>
                    <td>{{$cat->created_at->toFormattedDateString()}}</td>
                    <td>
                        <a href="{{url("cat/edit/$cat->id")}}" class="btn btn-warning btn-sm">
                            <i class="fa fa-edit"></i>
                        </a>
                        <a href="{{url("cat/delete/$cat->id")}}" class="btn btn-danger btn-sm">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection