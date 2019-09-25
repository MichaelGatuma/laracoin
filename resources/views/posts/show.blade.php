@extends('layouts.app')

@section('content')
<div class="container">
<a class="btn btn-outline-secondary" href="/posts" role="button">Go Back</a>
    <h1>{{$post->title}}</h1>
    
    <div>
    <p>{{$post->body}}
    </p></div>
    <hr>
    <small>Written on {{$post->created_at}}</small>
</div>
@endsection