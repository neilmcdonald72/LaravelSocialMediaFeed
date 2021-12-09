@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create new post</div>

                    <div class="card-body">
                        <form action="/posts" method="post">
                            <div class="form-group">
                                <label for="title">Your name</label>
                                <input type="text" class="form-control" id="name" name="title" aria-describedby="nameHelp" placeholder="Enter your name">
                                <small id="titleHelp" class="form-text text-muted">Give your post a title</small>
                                @error('title')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="content">Quote</label>
                                <input type="text" class="form-control" id="content" name="content" aria-describedby="contentHelp" >
                                <small id="contentHelp" class="form-text text-muted">Share a famous quote</small>
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
