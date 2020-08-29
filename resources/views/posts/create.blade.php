@extends('layouts.main')

@section('content')

<form method="POST" action="{{ route('blogposts.store') }}">
    @csrf

    @include('posts._form')

    <button type="submit" class="btn btn-primary">Create</button>

</form>
@endsection