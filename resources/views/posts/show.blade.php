@extends('layouts.main')

@section('content')


<p>
    <h3>
        {{ $blogpost->title }} {{ $blogpost->content }}
    </h3>
</p>
<p>Added {{ $blogpost->created_at->diffForHumans() }} </p>

@if (((new Carbon\Carbon())->diffInMinutes($blogpost->created_at)) < 5 ) New! @endif @endsection