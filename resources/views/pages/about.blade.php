@extends('layouts.app')

@section('title', 'Top Roofing Contractors & PEB Structural Engineers in Chennai')

@section('meta_description', 'About Arasuvel Roofings: Top roofing contractors and PEB structural engineers in Chennai specializing in premium roofing, tensile, cladding, and glass elevations.')
@section('meta_keywords', 'Arasuvel Roofings Chennai, roofing contractors in Chennai, PEB structure manufacturers Chennai, PEB building fabrication, construction company Chennai')

@section('content')

<!-- =========================
        ABOUT HERO SECTION
========================== -->
<section class="about-hero position-relative overflow-hidden d-flex align-items-center justify-content-center text-center">
    <div class="about-hero-bg">
        <img src="{{ asset('assets/images/slider3.jpg') }}" alt="About Us Banner">
        <div class="about-hero-overlay"></div>
    </div>
    <div class="container position-relative z-1">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <span class="section-tag mb-3 d-inline-block">WHO WE ARE</span>
                <h1 class="about-hero-title text-white font-weight-bold">
                    Building Trust, <span>Delivering Excellence</span>
                </h1>
                <p class="about-hero-text text-light">
                    Arasuvel Roofings is a leading name in premium PEB structures, turnkey industrial construction, and advanced architectural glazing across Tamil Nadu.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- =========================
        OUR STORY SECTION
========================== -->
<section class="about-story-section py-5">
    <div class="container my-5">
        <div class="row align-items-center g-5">
            <!-- Content Left -->
            <div class="col-lg-6">
                <span class="section-tag">OUR JOURNEY</span>
                <h2 class="section-title">
                    Crafting Structures with <span>Precision and Passion</span>
                </h2>
                <p class="section-description mb-4">
                    Founded in Chennai, Arasuvel Roofings has grown from a specialized roofing company into a premier engineering and construction enterprise. We cater to industrial, commercial, and residential clients, delivering durable and highly-engineered steel structures.
                </p>
                <p class="section-description mb-4">
                    Our strength lies in our customer-centric approach, use of state-of-the-art materials, and an expert workforce capable of handling large-scale industrial builds, modern ACP cladding, toughened glass elevations, and customized pergolas.
                </p>
                <div class="row pt-2">
                    <div class="col-6">
                        <div class="about-stat">
                            <h3>500+</h3>
                            <p>Projects Completed</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="about-stat">
                            <h3>10+</h3>
                            <p>Years of Innovation</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Image Right -->
            <div class="col-lg-6">
                <div class="about-story-image position-relative">
                    <img src="{{ asset('assets/images/slider1.jpg') }}" class="img-fluid rounded-4 shadow-lg w-100" alt="Arasuvel Factory">
                    <div class="floating-badge d-none d-md-block">
                        <div class="badge-inner">
                            <i class="fas fa-award fa-2x mb-2 text-warning"></i>
                            <h5>ISO Certified</h5>
                            <p class="mb-0 text-muted">Quality & Safety Assured</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =========================
        VISION & MISSION
========================== -->
<section class="vision-mission-section py-5 bg-light">
    <div class="container my-4">
        <div class="row g-4">
            <!-- Vision -->
            <div class="col-md-6">
                <div class="vision-mission-card p-5 h-100 bg-white rounded-4 shadow-sm border-0">
                    <div class="card-icon-wrapper mb-4">
                        <i class="fas fa-eye fa-2x text-warning"></i>
                    </div>
                    <h3>Our Vision</h3>
                    <p class="text-muted leading-relaxed">
                        To be the most trusted and forward-thinking structural and roofing solutions provider in India. We aim to continually pioneer engineering innovations that redefine durability, aesthetics, and structural safety.
                    </p>
                </div>
            </div>
            <!-- Mission -->
            <div class="col-md-6">
                <div class="vision-mission-card p-5 h-100 bg-white rounded-4 shadow-sm border-0">
                    <div class="card-icon-wrapper mb-4">
                        <i class="fas fa-bullseye fa-2x text-warning"></i>
                    </div>
                    <h3>Our Mission</h3>
                    <p class="text-muted leading-relaxed">
                        To deliver state-of-the-art PEB structures, high-performance roofing systems, and modern architectural cladding with uncompromising quality, strict safety standards, and sustainable practices.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =========================
        CORE VALUES
========================== -->
<section class="core-values-section py-5">
    <div class="container my-4">
        <div class="text-center mb-5">
            <span class="section-tag">WHAT GUIDES US</span>
            <h2 class="section-title">Our <span>Core Values</span></h2>
            <p class="lead text-muted mx-auto" style="max-width: 600px;">
                These principles guide every blueprint, project, and relationship we build.
            </p>
        </div>

        <div class="row g-4">
            <!-- Value 1 -->
            <div class="col-md-4">
                <div class="value-card p-4 text-center rounded-4 border-0 shadow-sm h-100 bg-white">
                    <div class="value-icon mb-3">
                        <i class="fas fa-shield-alt fa-2x text-warning"></i>
                    </div>
                    <h4>Safety First</h4>
                    <p class="text-muted mb-0">We guarantee rigorous safety protocols on every construction site, protecting our workers and your assets.</p>
                </div>
            </div>
            <!-- Value 2 -->
            <div class="col-md-4">
                <div class="value-card p-4 text-center rounded-4 border-0 shadow-sm h-100 bg-white">
                    <div class="value-icon mb-3">
                        <i class="fas fa-gem fa-2x text-warning"></i>
                    </div>
                    <h4>Uncompromising Quality</h4>
                    <p class="text-muted mb-0">From raw steel sheets to the final coat of paint, we only use materials that meet high international standards.</p>
                </div>
            </div>
            <!-- Value 3 -->
            <div class="col-md-4">
                <div class="value-card p-4 text-center rounded-4 border-0 shadow-sm h-100 bg-white">
                    <div class="value-icon mb-3">
                        <i class="fas fa-handshake fa-2x text-warning"></i>
                    </div>
                    <h4>Client Integrity</h4>
                    <p class="text-muted mb-0">We believe in transparent pricing, realistic timelines, and open communication throughout our partnership.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =========================
        MILESTONES / TIMELINE
========================== -->
<section class="timeline-section py-5 bg-light">
    <div class="container my-4">
        <div class="text-center mb-5">
            <span class="section-tag">OUR GROWTH</span>
            <h2 class="section-title">Key <span>Milestones</span></h2>
        </div>

        <div class="timeline-container position-relative">
            <div class="row g-4">
                <!-- Milestone 1 -->
                <div class="col-md-3">
                    <div class="timeline-item text-center p-4 bg-white rounded-4 shadow-sm h-100">
                        <div class="timeline-badge mb-3 bg-warning text-dark d-inline-block px-3 py-1 rounded-pill fw-bold">2015</div>
                        <h5 class="fw-bold">Founding</h5>
                        <p class="text-muted px-2 small">Established Arasuvel Roofings in Chennai, starting with local industrial roofing projects.</p>
                    </div>
                </div>
                <!-- Milestone 2 -->
                <div class="col-md-3">
                    <div class="timeline-item text-center p-4 bg-white rounded-4 shadow-sm h-100">
                        <div class="timeline-badge mb-3 bg-warning text-dark d-inline-block px-3 py-1 rounded-pill fw-bold">2018</div>
                        <h5 class="fw-bold">Expansion</h5>
                        <p class="text-muted px-2 small">Completed 100+ projects and expanded operations to encompass larger PEB Structures.</p>
                    </div>
                </div>
                <!-- Milestone 3 -->
                <div class="col-md-3">
                    <div class="timeline-item text-center p-4 bg-white rounded-4 shadow-sm h-100">
                        <div class="timeline-badge mb-3 bg-warning text-dark d-inline-block px-3 py-1 rounded-pill fw-bold">2021</div>
                        <h5 class="fw-bold">New Verticals</h5>
                        <p class="text-muted px-2 small">Added ACP Cladding, Toughened Glass structures, and modern pergola systems.</p>
                    </div>
                </div>
                <!-- Milestone 4 -->
                <div class="col-md-3">
                    <div class="timeline-item text-center p-4 bg-white rounded-4 shadow-sm h-100">
                        <div class="timeline-badge mb-3 bg-warning text-dark d-inline-block px-3 py-1 rounded-pill fw-bold">2026</div>
                        <h5 class="fw-bold">Leader</h5>
                        <p class="text-muted px-2 small">Ranked as a premier turnkey structural solution provider in all districts of Tamil Nadu.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =========================
        CTA SECTION
========================== -->
<section class="about-cta-section py-5 text-center text-white bg-dark position-relative">
    <div class="container py-4 position-relative z-1">
        <h2 class="mb-3 fw-bold">Let's Construct Your Future Together</h2>
        <p class="lead mb-4 opacity-75">Contact our team today to get a customized, high-quality quote for your structural needs.</p>
        <a href="{{ route('home') }}#contact" class="btn btn-warning btn-lg px-5 py-3 rounded-pill text-dark fw-bold">
            Get A Free Quote
        </a>
    </div>
</section>

@endsection
