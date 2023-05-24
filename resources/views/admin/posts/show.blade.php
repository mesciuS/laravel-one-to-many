@extends('layouts/admin')
@section('content')
    <div class="container">
        <h1 style="text-align: center">Here's the text</h1>
        <h3 style="text-align: center">{{$post->title}}</h3>
        <p style="text-align: center">{{$post->slug}}</p>
        <br>
        <p>{{$post->content}}</p>
    </div>
@endsection