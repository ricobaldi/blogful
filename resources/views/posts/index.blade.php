@extends('layouts.main')

@section('content')

@forelse ($blogposts as $blogpost)
<p>
    <h3>
        <a href="{{ route('blogposts.show', ['blogpost' => $blogpost->id]) }}">{{ $blogpost->title }}</a>
    </h3>

    <a href="{{ route('blogposts.edit', ['blogpost' => $blogpost]) }}" class="btn btn-primary">Edit</a>

    <form class="fm-inline" method="POST" action="{{ route('blogposts.destroy', [ 'blogpost' => $blogpost ]) }}">
        @csrf
        @method('DELETE')

        <input type="submit" value="Delete" class="btn btn-primary">
    </form>
</p>

@empty
<p>
    <h3>No post yet</h3>
</p>
@endforelse
@endsection