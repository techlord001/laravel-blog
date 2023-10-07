{{-- @extends('layouts.app') --}}

{{-- @section('content') --}}
    <div class="container">
        <h1>Create a New Post</h1>
        <form method="POST" action="{{ route('posts.store') }}">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" id="image" class="form-control-file" name="image"></div>
            <button type="submit" class="btn btn-primary">Create Post</button>
        </form>
    </div>
{{-- @endsection --}}
