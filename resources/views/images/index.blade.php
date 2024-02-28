@extends('layouts.app')

@section('content')
    <h1>Images</h1>

    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

    @if (count($images) > 0)
        <ul>
            @foreach ($images as $image)
                <li>
                    <img src="{{ asset('storage/' . $image->path) }}" alt="{{ $image->caption }}">
                    <p>{{ $image->caption }}</p>
                </li>
            @endforeach
        </ul>
    @else
        <p>No images uploaded yet.</p>
    @endif
@endsection
