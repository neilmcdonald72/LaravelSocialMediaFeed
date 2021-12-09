@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Enter new user info</div>

                    <div class="card-body">
                        <form action="/admin/users" method="post">
                            <div class="form-group">
                                <label for="exampleInputName1">Name</label>
                                <input type="text" name="name" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" placeholder="Enter name">
                                @error('name')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                @error('email')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="text" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                @error('password')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
{{--                            <div class="form-group">--}}
{{--                                <label for="exampleInputPassword1">Confirm Password</label>--}}
{{--                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">--}}
{{--                            </div>--}}
                            <div>
                                <label for="role">Role</label>
                            </div>
                            <div>

                                <input type="radio" id="role1" name="role" value="Moderator">
                                <label for="html">Moderator</label><br>
                                <input type="radio" id="role2" name="role2" value="Theme Manager">
                                <label for="css">Theme Manager</label><br>
                                <input type="radio" id="role3" name="role3" value="User Administrator">
                                <label for="javascript">User Administration</label>
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

