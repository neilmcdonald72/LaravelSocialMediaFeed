@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if ( $currentuser != null)
                    <a class="btn btn-success" href="/posts/create" role="button">Create new post</a>
                @endif

                    @forelse ($posts as $post)
                        <div class="card">
                    <div class="card-header">{{$post->title}}
                        <div>
                            {{$post->created_at}}
                        </div>
                    </div>

                    <div class="card-body">
                        <h2>{{$post->content}}</h2>
                    </div>

                        @if ( $post->created_by == $currentuser)
                                <div>
                                <a class="btn btn-warning" href="/posts/{{$post->id}}/edit" role="button">Edit</a>
                        </div>

                        @endif
                        @if($currentuser != null)
                        @if ( $post->created_by == $currentuser or $roles[$currentuser-1]->name == 'Moderator')
                            <div>
                                <form action="/posts/{{$post -> id}}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        @endif
                        @endif



                    @csrf
                        </div>
                    @empty
                    @endforelse
            </div>
        </div>
    </div>
@endsection
