@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">User Administration</div>

                <div class="card-body">

                    <table class="table">
                        <a class="btn btn-success" href="/admin/users/create" role="button">Create new admin user</a>
                        <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Roles</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>

                        @forelse ($users as $index => $user)


                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$roles[$index]->name}}</td>
                            <td>
                                <a class="btn btn-success" href="/admin/users/{{$user->id}}" role="button">Show</a>
                                <a class="btn btn-warning" href="/admin/users/{{$user->id}}/edit" role="button">Edit</a>
                                <form action="/admin/users/{{$user -> id}}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>

                        @empty
                        @endforelse


                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
