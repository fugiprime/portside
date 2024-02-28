<!-- resources/views/contact.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <!-- Contact Form -->
            <div class="col-md-6 mb-4">
                <h2>Contact Us</h2>
                <form action="{{ route('contact.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>

            <!-- Contact Information -->
            <div class="col-md-6">
                <h2>Contact Information</h2>
                <ul class="list-unstyled">
                    <li><strong>Email:</strong> info@example.com</li>
                    <li><strong>Phone:</strong> +1 (123) 456-7890</li>
                    <li><strong>Website:</strong> www.example.com</li>
                    <li><strong>Address:</strong> PO Box 1234, City, Country</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
