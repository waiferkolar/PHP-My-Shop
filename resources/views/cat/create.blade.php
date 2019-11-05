@extends ("layout.master")

@section("title","Create Category Page")

@section("content")


    <div class="container">
        <h1 class="text-center text-info my-5">Create A Category</h1>

        <div class="col-md-6 offset-md-3">
            @if($errors)
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>{{$error}}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endforeach
            @endif
            <form method="post" enctype="multipart/form-data">
                {{csrf_field()}}

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control rounded-0" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="image">Category Image</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                </div>
                <button type="submit" class="btn btn-primary btn-sm float-right ml-2">Create</button>
                <button type="reset" class="btn btn-outline-warning btn-sm float-right">Cancel</button>

            </form>
        </div>
    </div>
@endsection