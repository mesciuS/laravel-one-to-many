
@extends('layouts/admin')
@section('content')
    <div class="container">
        <h3 class="mb-3">Edit</h3>
        <form action="{{route('admin.posts.update', $post)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{old('title')}}">
                @error('title')
                    {{$message}}
                @enderror
            </div>
            <div class="mb-3">
                <label for="content">Text</label>
                <textarea name="content" id="content" cols="30" rows="10" class="form-control @error('title') is-invalid @enderror" value="{{old('content')}}"></textarea>
                @error('content')
                    {{$message}}
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Crea</button>
        </form>
    </div>
@endsection 