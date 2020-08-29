@extends('layouts.main')

@section('content')

<form method="POST" action="{{ route('blogposts.update', [ 'blogpost' => $blogpost ]) }}">
    @csrf
    @method('PUT')

    @include('posts._form')

    <button type="submit" class="btn btn-primary">Update</button>

</form>
@endsection