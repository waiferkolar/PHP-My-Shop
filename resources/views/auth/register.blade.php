@extends ("layout.master")

@section("title","Register Page")

@section("content")


    <div class="container">
        <h1 class="text-center text-info my-5">Register To Be A Member</h1>

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
            <form method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control rounded-0" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control rounded-0" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control rounded-0" id="password" name="password">
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Password Confirm</label>
                    <input type="password" class="form-control rounded-0" id="password_confirmation"
                           name="password_confirmation">
                </div>
                <button type="submit" class="btn btn-primary btn-sm float-right ml-2">Register</button>
                <button type="reset" class="btn btn-outline-warning btn-sm float-right">Cancel</button>

            </form>
        </div>
    </div>
@endsection