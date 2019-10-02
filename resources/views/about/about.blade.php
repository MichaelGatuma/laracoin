@extends('layouts.app')

@section('content')
<h1>
    {{$title}}
</h1>
@if(count($program) > 0)
<ul class="list-group">
    @foreach($program as $p)
        <li class="list-group-item">{{$p}}</li>
    @endforeach
</ul>
@endif
@endsection