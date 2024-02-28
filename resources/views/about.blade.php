<!-- resources/views/about.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="display-4 text-white mb-4">About DJ Uncle P</h2>
                <img src="{{ asset('path/to/dj_uncle_p_photo.jpg') }}" alt="DJ Uncle P" class="img-fluid rounded-circle mb-4" style="width: 200px;">
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card p-4" style="background-color: rgba(0, 0, 0, 0.7);">
                    <h3 class="text-white">Introduction</h3>
                    <p class="lead text-white">
                        Welcome to the official website of DJ Uncle P! Get ready to groove to the beats of the ultimate party master. DJ Uncle P is here to take your music experience to the next level!
                    </p>
                    <h3 class="text-white">Biography</h3>
                    <p class="lead text-white">
                        DJ Uncle P is a seasoned DJ and entertainer known for his electrifying performances and infectious energy. With years of experience in the music industry, DJ Uncle P has become a household name in the world of electronic dance music.
                    </p>
                    <h3 class="text-white">Genres</h3>
                    <p class="lead text-white">
                        DJ Uncle P is a master of a wide range of genres, from classic House and Disco to modern EDM and Trap. His versatile style and ability to read the crowd ensure that every set is a memorable experience for his audience.
                    </p>
                    <h3 class="text-white">Events</h3>
                    <p class="lead text-white">
                        Keep an eye out for DJ Uncle P's upcoming events! Whether it's a club night, beach party, or music festival, you won't want to miss the chance to dance to the beats of DJ Uncle P.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <style>
        body {
            background-image: url('{{ asset('path/to/background_image.jpg') }}');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: #fff;
        }
    </style>
@endsection
