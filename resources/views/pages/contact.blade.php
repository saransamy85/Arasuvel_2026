@extends('layouts.app')

@section('title', 'Contact Us - Arasuvel Roofings Chennai')

@section('meta_description', 'Contact Arasuvel Roofings: Top structural engineers and roofing sheet contractors on Mount Poonamallee High Road, Porur, Chennai. Call 9094902614.')
@section('meta_keywords', 'contact arasuvel roofings, roofing contractors in porur, peb structure builders chennai, phone number 9094902614, location mount poonamallee road')

@section('content')

<!-- =========================
        CONTACT HERO SECTION
========================== -->
<section class="about-hero position-relative overflow-hidden d-flex align-items-center justify-content-center text-center">
    <div class="about-hero-bg">
        <img src="{{ asset('assets/images/slider3.jpg') }}" alt="Contact Arasuvel Roofings">
        <div class="about-hero-overlay"></div>
    </div>
    <div class="container position-relative z-1">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <span class="section-tag mb-3 d-inline-block">CONTACT US</span>
                <h1 class="about-hero-title text-white font-weight-bold">
                    Get In <span>Touch</span>
                </h1>
                <p class="about-hero-text text-light">
                    Have any questions regarding our PEB building fabrication, tensile structures, or rooftop coverings? Reach out to our team today.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- =========================
        CONTACT DETAILS GRID
========================== -->
<section class="contact-details-section py-5">
    <div class="container my-4">
        <div class="row g-4">

            <!-- Get in Touch -->
            <div class="col-md-4">
                <div class="contact-info-card p-4 rounded-4 shadow-sm h-100 bg-white border border-light">
                    <div class="contact-icon mb-3 bg-light rounded-3 p-3 d-inline-block text-warning">
                        <i class="fas fa-phone-alt fa-2x"></i>
                    </div>
                    <h4 class="fw-bold mb-3 text-dark">Get in Touch</h4>
                    <h6 class="fw-bold text-dark mb-1">Jayaparvathy sivakumar</h6>
                    <p class="text-warning mb-2 fw-bold" style="font-size: 18px;">90949 02614</p>
                    <p class="text-muted small mb-0">Email: arasuvelroofings@gmail.com</p>
                </div>
            </div>

            <!-- Location -->
            <div class="col-md-4">
                <div class="contact-info-card p-4 rounded-4 shadow-sm h-100 bg-white border border-light">
                    <div class="contact-icon mb-3 bg-light rounded-3 p-3 d-inline-block text-warning">
                        <i class="fas fa-map-marker-alt fa-2x"></i>
                    </div>
                    <h4 class="fw-bold mb-3 text-dark">Location</h4>
                    <p class="text-muted leading-relaxed small mb-0">
                        Ground Floor, Amudhadecors building,<br>
                        Mount Poonamallee high road, lakshmi nagar porur,<br>
                        chennai-116
                    </p>
                </div>
            </div>

            <!-- Working Hours -->
            <div class="col-md-4">
                <div class="contact-info-card p-4 rounded-4 shadow-sm h-100 bg-white border border-light">
                    <div class="contact-icon mb-3 bg-light rounded-3 p-3 d-inline-block text-warning">
                        <i class="fas fa-clock fa-2x"></i>
                    </div>
                    <h4 class="fw-bold mb-3 text-dark">Working Hours</h4>
                    <p class="text-muted leading-relaxed small mb-0">
                        Monday - Saturday: 9:00 AM - 6:00 PM
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- =========================
        MAP & FORM SECTION
========================== -->
<section class="map-form-section py-5 bg-light">
    <div class="container my-4">
        <div class="row g-5 align-items-center">

            <!-- Left Side: Interactive Map -->
            <div class="col-lg-6">
                <div class="map-wrapper rounded-4 overflow-hidden shadow-sm border bg-white p-3">
                    <iframe src="https://maps.google.com/maps?q=Arasuvel%20Roofings,%20Porur,%20Chennai&t=&z=16&ie=UTF8&iwloc=&output=embed" width="100%" height="450" style="border:0; border-radius: 15px;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>

            <!-- Right Side: Contact Form -->
            <div class="col-lg-6">
                <div class="contact-form-wrapper p-5 rounded-4 shadow-sm bg-white border border-light">
                    <h2 class="fw-bold text-dark mb-4 text-center">Contact Us</h2>

                    <form action="{{ route('feedback') }}" method="POST">
                        @csrf

                        <!-- Name -->
                        <div class="mb-3">
                            <label class="form-label text-dark fw-medium small">Name</label>
                            <input type="text" name="name" class="form-control py-3" placeholder="Enter your name" value="{{ old('name') }}" required>

                            @error('name')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- Phone -->
                        <div class="mb-3">
                            <label class="form-label text-dark fw-medium small">Phone</label>
                            <input type="tel" name="phone" class="form-control py-3" placeholder="Enter phone number" value="{{ old('phone') }}" required>

                            @error('phone')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label class="form-label text-dark fw-medium small">Email</label>
                            <input type="email" name="email" class="form-control py-3" placeholder="Enter email address" value="{{ old('email') }}">

                            @error('email')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- Location -->
                        <div class="mb-3">
                            <label class="form-label text-dark fw-medium small">Location</label>
                            <input type="text" name="location" class="form-control py-3" placeholder="Enter your location" value="{{ old('location') }}">

                            @error('location')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- Message -->
                        <div class="mb-4">
                            <label class="form-label text-dark fw-medium small">Message</label>
                            <textarea name="message" rows="4" class="form-control py-3" placeholder="Enter your requirements" required>{{ old('message') }}</textarea>

                            @error('message')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-success w-100 py-3">
                            Send Message
                        </button>

                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
