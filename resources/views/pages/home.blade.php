@extends('layouts.app')

@section('title', 'PEB Structures & Turnkey Construction Chennai - Arasuvel Roofings')

@section('meta_description', 'Arasuvel Roofings specializes in premium PEB Structures, color-coated metal roofing sheets, ACP cladding, toughened glass, and pergolas across Chennai.')
@section('meta_keywords', 'PEB Structures Chennai, industrial roofing contractors Chennai, turnkey construction company Chennai, steel structure fabrication, roofing sheets Chennai')

@section('content')

<!-- =========================
        HERO SECTION
========================== -->

<section class="hero-section position-relative overflow-hidden">

    <!-- Background -->

    <div class="hero-slider">

        <img src="{{ asset('assets/images/slider1.jpg') }}" alt="Hero">

        <div class="hero-overlay"></div>

    </div>

    <div class="container">

        <div class="row min-vh-100 align-items-center">

            <div class="col-lg-7">

                <span class="hero-tag">

                    Premium Construction Company

                </span>

                <h1 class="hero-title">

                    Building

                    <span>Future</span>

                    With Excellence

                </h1>

                <p class="hero-text">

                    Premium PEB Structures, Roofing,
                    ACP Cladding, Toughened Glass,
                    Pergolas and Industrial Construction
                    Solutions.

                </p>

                <div class="hero-btn">

                    <a href="#contact" class="btn btn-warning">

                        Get Quote

                    </a>

                    <a href="#projects" class="btn btn-outline-light ms-3">

                        Our Projects

                    </a>

                </div>

            </div>

        </div>

    </div>

    <div class="scroll-down">

        <span></span>

    </div>

</section>

<!-- =========================
        ABOUT
========================== -->

<section id="about" class="about-section">

    <div class="container">

        <div class="row align-items-center g-5">

            <!-- Images -->
            <div class="col-lg-6">

                <div class="about-images">

                    <img src="{{ asset($slider->file_path) }}" class="about-main img-fluid" alt="{{$slider->alt_text}}">

                    <div class="experience-box">

                        <h2>{{ $slider->title }}</h2>

                        <p>Years Experience</p>

                    </div>

                    <img src="{{ asset('assets/images/slider2.jpg') }}" class="about-small img-fluid">

                </div>

            </div>

            <!-- Content -->
            <div class="col-lg-6">

                <span class="section-tag">

                    ABOUT US

                </span>

                <h2 class="section-title">

                    We Build Modern
                    <span>Architectural Spaces</span>

                </h2>

                <p class="section-description">

                    Amudha Decors specializes in PEB Structures,
                    Roofing Solutions, ACP Cladding,
                    Toughened Glass and Pergolas with
                    innovative engineering and premium quality.

                </p>

                <div class="row mt-4">

                    <div class="col-6">

                        <div class="feature-item">

                            <i class="fas fa-check-circle"></i>

                            PEB Structures

                        </div>

                    </div>

                    <div class="col-6">

                        <div class="feature-item">

                            <i class="fas fa-check-circle"></i>

                            Roofing

                        </div>

                    </div>

                    <div class="col-6 mt-3">

                        <div class="feature-item">

                            <i class="fas fa-check-circle"></i>

                            ACP Cladding

                        </div>

                    </div>

                    <div class="col-6 mt-3">

                        <div class="feature-item">

                            <i class="fas fa-check-circle"></i>

                            Toughened Glass

                        </div>

                    </div>

                </div>

                <div class="mt-5">

                    <a href="#contact" class="btn btn-warning">

                        Discover More

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>
<!-- =========================
        SERVICES
========================== -->

<section class="services-section py-5" id="services">
    <div class="container">
        <div class="row g-5">
            <!-- Left Column: Services Accordion -->
            <div class="col-lg-6">

                <h2 class="section-title mb-5">
                    We Provide Premium <span>Construction Solutions</span>
                </h2>

                <div class="services-accordion">
                    <!-- Service 1 -->
                    <div class="service-list-item active" data-service="1">
                        <div class="service-header">
                            <span class="service-idx">01</span>
                            <span class="service-title">Puf / Sandwich Roofings</span>
                            <div class="service-arrow">
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </div>
                        <div class="service-body">
                            <p>Complete industrial steel building solutions with modern engineering and high-quality fabrication.</p>
                            <a href="#contact" class="service-link">Get a Quote <i class="fas fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>

                    <!-- Service 2 -->
                    <div class="service-list-item" data-service="2">
                        <div class="service-header">
                            <span class="service-idx">02</span>
                            <span class="service-title">Metal Roofings</span>
                            <div class="service-arrow">
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </div>
                        <div class="service-body">
                            <p>Industrial, commercial, and tensile roofing with superior durability, weather resistance, and aesthetics.</p>
                            <a href="#contact" class="service-link">Get a Quote <i class="fas fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>

                    <!-- Service 3 -->
                    <div class="service-list-item" data-service="3">
                        <div class="service-header">
                            <span class="service-idx">03</span>
                            <span class="service-title">Aluminium Awnings</span>
                            <div class="service-arrow">
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </div>
                        <div class="service-body">
                            <p>Elegant and modern Aluminum Composite Panel (ACP) wall cladding and exterior elevations.</p>
                            <a href="#contact" class="service-link">Get a Quote <i class="fas fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>

                    <!-- Service 4 -->
                    <div class="service-list-item" data-service="4">
                        <div class="service-header">
                            <span class="service-idx">04</span>
                            <span class="service-title">Tensile Roofings</span>
                            <div class="service-arrow">
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </div>
                        <div class="service-body">
                            <p>Premium toughened safety glass installations for commercial storefronts, offices, and glazing.</p>
                            <a href="#contact" class="service-link">Get a Quote <i class="fas fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>

                    <!-- Service 5 -->
                    <div class="service-list-item" data-service="5">
                        <div class="service-header">
                            <span class="service-idx">05</span>
                            <span class="service-title">Polycarbonate Roofings</span>
                            <div class="service-arrow">
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </div>
                        <div class="service-body">
                            <p>Elegant, customizable outdoor wooden and metal pergola designs for patio spaces.</p>
                            <a href="#contact" class="service-link">Get a Quote <i class="fas fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>

                    <!-- Service 6 -->
                    <div class="service-list-item" data-service="6">
                        <div class="service-header">
                            <span class="service-idx">06</span>
                            <span class="service-title">Terrace roofings</span>
                            <div class="service-arrow">
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </div>
                        <div class="service-body">
                            <p>Comprehensive turnkey design, fabrication, and building construction for large-scale industrial warehouses.</p>
                            <a href="#contact" class="service-link">Get a Quote <i class="fas fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Sticky Image Showcase -->
            <div class="col-lg-6 position-relative d-none d-lg-block">
                <div class="sticky-image-wrapper">
                    @foreach($slider2 as $sli)
                    <img src="{{ asset($sli->file_path) }}" class="service-showcase-img {{ $loop->first ? 'active' : '' }}" data-img="{{ $loop->iteration }}" alt="{{ $sli->alt_text }}">
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =========================
        WHY US
========================== -->

<section>

    <div class="container text-center">

        <h2>

            Why Choose Us

        </h2>

        <div class="row mt-5">

            <div class="col-md-3">

                <h3>10+</h3>

                <p>Years Experience</p>

            </div>

            <div class="col-md-3">

                <h3>500+</h3>

                <p>Projects</p>

            </div>

            <div class="col-md-3">

                <h3>50+</h3>

                <p>Experts</p>

            </div>

            <div class="col-md-3">

                <h3>100%</h3>

                <p>Client Satisfaction</p>

            </div>

        </div>

    </div>

</section>

<!-- =========================
        PROJECTS
========================== -->

<section id="projects" class="bg-light">

    <div class="container">

        <div class="text-center mb-5">

            <h2>

                Our Recent Works

            </h2>

        </div>

        <div class="row g-4">

            <div class="col-lg-12">

                <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">

                    <div class="carousel-inner">

                        @foreach($products->chunk(3) as $chunk)

                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">

                            <div class="row g-4">

                                @foreach($chunk as $product)

                                <div class="col-lg-4">

                                    <div class="card border-0 shadow-sm">

                                        <img src="{{ asset($product->file_path) }}" class="card-img-top img-fluid" alt="{{ $product->alt_text }}" style="height:280px;object-fit:cover;">

                                        <div class="card-body">

                                            <h5>{{ $product->title }}</h5>

                                            <p class="text-muted mb-0">
                                                {{ Str::limit($product->caption,60) }}
                                            </p>

                                        </div>

                                    </div>

                                </div>

                                @endforeach

                            </div>

                        </div>

                        @endforeach

                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">

                        <span class="carousel-control-prev-icon bg-dark rounded-circle p-3"></span>

                    </button>

                    <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">

                        <span class="carousel-control-next-icon bg-dark rounded-circle p-3"></span>

                    </button>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- =========================
        CONTACT
========================== -->

<section id="contact">

    <div class="container">

        <div class="text-center">

            <h2>

                Let's Build Together

            </h2>

            <p>

                Ready to start your next project?

            </p>

            <a href="{{ route('contact') }}" class="btn btn-warning btn-lg">

                Contact Us

            </a>

        </div>

    </div>

</section>

@endsection
