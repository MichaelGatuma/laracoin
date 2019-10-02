@extends('layouts.app')
@section('content')
    
    <div class="jumbotron text-center">
        <h1>Welcome,
        </h1><br/>
        <p>Superview Microfinance Online System</p>
        <p><a class="btn  btn-primary btn-lg" href="#" role="button">Login</a>
        <a class="btn btn-success btn-lg" href="#" role="button">Register</a>
        </p>
    </div> 
    <div class="container"> 
    <h3>Posts</h3>
    @if(count($posts)>0)
        @foreach($posts as $post)
            <div class="card card-body bg-light">
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a>
                </h3>
                <P>Posted on {{$post->created_at}}</P>
            </div>
            @endforeach
            <ul class="pagination justify-content-end">
            {{ $posts->links('vendor.pagination.bootstrap-4') }}
            </ul>
            
    @else
                <p>No Posts found!</p>
    @endif
    </div>
@endsection