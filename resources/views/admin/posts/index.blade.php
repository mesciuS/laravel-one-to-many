@extends('layouts/admin')
@section('content')
    <div class="container">
        <table class="table" style="mb-5">
            <thead>
                <th>Title</th>
                <th>Slug</th>
                <th></th>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <td>
                        {{$post->title}}
                    </td>
                    <td>
                        {{$post->slug}}
                    </td>
                    <td>
                        <a href="{{route('admin.posts.show', $post)}}">Text</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            <a href="{{route('admin.posts.create')}}" class="btn btn-primary">Crea un post</a>
        </div>
    </div>
@endsection