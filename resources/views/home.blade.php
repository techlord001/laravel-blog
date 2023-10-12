<!-- home.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Create a New Post</a>

                    <h3>Your Posts</h3>
                    @if($posts->count())
                        <ul>
                            @foreach($posts as $post)
                                <li>
                                    <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p>You have not created any posts yet.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
