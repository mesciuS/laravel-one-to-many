@extends('layouts/admin')
@section('content')
    <div class="container">
        <h1 style="text-align: center">Here's the text</h1>
        <h3 style="text-align: center">{{$post->title}}</h3>
        <p style="text-align: center">{{$post->slug}}</p>
        <br>
        <p>{{$post->content}}</p>
        <hr>
        <a href="{{route('admin.posts.edit', $post)}}" class="btn btn-primary mb-3">Edit</a>
        <form action="{{route('admin.posts.destroy', $post)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
@endsection 