{{-- @extends('layouts.app') --}}

{{-- @section('content') --}}
<div class="container">
    <h1>Edit Post</h1>
    <form method="POST" action="{{ route('posts.update', $post) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT') 
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" required>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" id="content" name="content" rows="5" required>{{ $post->content }}</textarea>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" id="image" class="form-control-file" name="image" value="{{ $post->img_path }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Post</button>
    </form>
</div>
{{-- @endsection --}}