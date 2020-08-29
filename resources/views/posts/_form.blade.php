<div class="form-group">
    <label for="">Title</label>
    <input type="text" name="title" class="form-control" value="{{ old('title', $blogpost->title ?? null) }}">
</div>

<div class="form-group">
    <label for="">Content</label>
    <input type="text" name="content" class="form-control" value="{{ old('content', $blogpost->content ?? null) }}">
</div>

@if($errors->any())
<div>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}
        </li>
        @endforeach
    </ul>
</div>
@endif