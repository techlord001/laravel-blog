{{-- @extends('layouts.app') --}}

@section('content')
    @foreach($posts as $post)
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->content }}</p>
        <img src="{{ $post->image_path }}" alt="Post Image">
    @endforeach
@endsection
