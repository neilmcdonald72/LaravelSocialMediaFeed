@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{$user->name}}'s info</div>

                    <div class="card-body">

                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Roles</th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$role->name}}</td>

                            </tr>


                            </tbody>

                        </table>
                        <a class="btn btn-success" href="/admin/users/" role="button">Back to main page</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
