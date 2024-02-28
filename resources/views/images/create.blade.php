<!-- resources/views/gallery/create.blade.php -->

@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('images.store') }}" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" name="image" id="image" required>
    </div>

    <div class="form-group">
        <label for="caption">Caption</label>
        <input type="text" name="caption" id="caption" required maxlength="255">
    </div>

    <button type="submit" class="btn btn-primary">Upload</button>
</form>
@endsection
