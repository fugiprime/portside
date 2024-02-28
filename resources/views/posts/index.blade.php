@extends('layouts.app')

@section('content')
    <h1>Posts</h1>

    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="card mb-3">
                <div class="card-header">
                    {{ $post->title }}
                </div>
                <div class="card-body">
                    @if ($post->isVideo())
                        <iframe src="{{ $post->video_url }}" width="560" height="315" frameborder="0" allowfullscreen></iframe>
                    @else
                        {!! $post->content !!}
                    @endif
                </div>
            </div>
        @endforeach
    @else
        <p>No posts found.</p>
    @endif
@endsection
