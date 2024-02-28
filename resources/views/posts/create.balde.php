@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>

    @if (<span class="math-inline">errors\-\>any\(\)\)
<div class\="alert alert\-danger"\>
<ul\>
@foreach \(</span>errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('posts.store') }}">
        @csrf

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" required>
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="content" class="form-control" rows="5" required>{{ old('content') }}</textarea>
        </div>

        <div class="form-group">
            <label for="type">Type</label>
            <select name="type" id="type" class="form-control" required>
                <option value="text">Text</option>
                <option value="video">Video</option>
            </select>
        </div>

        <div class="form-group" id="video_url_field" style="display: none;">
            <label for="video_url">Video URL</label>
            <input type="url" name="video_url" id="video_url" class="form-control" value="{{ old('video_url') }}">
        </div>

        <button type="submit" class="btn btn-primary">Create Post</button>
    </form>

<script>
    const typeSelect = document.getElementById('type');
    const videoUrlField = document.getElementById('video_url_field');

    typeSelect.addEventListener('change', () => {
        if (typeSelect.value === 'video') {
            videoUrlField.style.display = 'block';
        } else {
            videoUrlField.style.display = 'none';
        }
    });
</script>
@endsection
