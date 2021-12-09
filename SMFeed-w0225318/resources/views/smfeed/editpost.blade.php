@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit post</div>

                    <div class="card-body">
                        <form action="/posts/{{$post->id}}" method="post">
                            @method('PATCH')
                            <div class="form-group">
                                <label for="title">Your name</label>
                                <input type="text" class="form-control" id="title" name="title" aria-describedby="titleHelp" value="{{$post->title}}">
                                <small id="titleHelp" class="form-text text-muted">Give your post a title</small>
                                @error('title')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="content">Content</label>
                                <input type="text" class="form-control" id="content" name="content" aria-describedby="contentHelp" value="{{$post->content}}">
                                <small id="contentHelp" class="form-text text-muted">Give your post some content</small>
                                @error('content')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            @csrf
                            <button type="submit" class="btn btn-primary">Post</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
