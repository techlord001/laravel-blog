<h2>{{ $post->title }}</h2>
<p>{{ $post->content }}</p>
<img src="{{ $post->image_path }}" alt="Post Image">
<!-- Edit Button -->
<a href="{{ route('posts.edit', $post) }}" class="btn btn-primary">Edit</a>

<!-- Delete Button -->
<form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
</form>