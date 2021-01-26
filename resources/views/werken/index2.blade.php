@extends('layout.app')

@section('content')
<h1>Works</h1>
@if(count($works) > 0)
@foreach($works as $work)
<div class="well">
    <h3>{{$work->title}}</h3>
    <small>{{$blog->blog}}</small>
    <!-- <img src="assets/images/work/{{$work->imageUrl}}"> -->
    <img src="/storage/work/{{$work->imageUrl}}">
</div>
@endforeach
@else
<p>no works found</p>
@endif
@endsection