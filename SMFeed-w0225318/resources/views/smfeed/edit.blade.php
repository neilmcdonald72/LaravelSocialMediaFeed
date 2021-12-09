@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit User</div>

                    <div class="card-body">
                        <form action="/admin/users/{{$user->id}}" method="post">
                            @method('PATCH')

                            <div class="form-group">
                                <label for="exampleInputName1">Name</label>
                                <input type="text" name="name" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" value="{{$user->name}}">


                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$user->email}}">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="text" name="password" class="form-control" id="exampleInputPassword1" value="{{$user->password}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Role</label>
                                    <input type="text" name="role" class="form-control" id="exampleInputPassword1" value="{{$role->name}}">
                                </div>


                                @csrf
                                <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

