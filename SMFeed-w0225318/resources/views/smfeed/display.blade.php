@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">User Administration</div>

                <div class="card-body">

                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Roles</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse ($users as $user)

                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$role->name}}</td>
                            <td></td>
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
