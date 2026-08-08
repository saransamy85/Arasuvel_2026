@extends('layouts.app')

@section('title', 'Our Completed Projects & Structural Showcase - Arasuvel Roofings')

@section('meta_description', 'Explore Arasuvel Roofings completed PEB structures, color coated metal roofing, tensile sheds, and balcony coverings projects in Chennai.')
@section('meta_keywords', 'completed projects, roofing gallery chennai, peb structures showcase, tensile parking sheds gallery, balcony roofing installations')

@section('content')

<!-- =========================
        PROJECTS HERO SECTION
========================== -->
<section class="about-hero position-relative overflow-hidden d-flex align-items-center justify-content-center text-center">
    <div class="about-hero-bg">
        <img src="{{ asset('assets/images/slider2.jpg') }}" alt="Our Projects Portfolio">
        <div class="about-hero-overlay"></div>
    </div>
    <div class="container position-relative z-1">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <span class="section-tag mb-3 d-inline-block">OUR WORK</span>
                <h1 class="about-hero-title text-white font-weight-bold">
                    Completed <span>Projects Gallery</span>
                </h1>
                <p class="about-hero-text text-light">
                    Explore our diverse portfolio of industrial warehouses, commercial awnings, tensile parking structures, and custom terrace roofs across Tamil Nadu.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- =========================
        PORTFOLIO FILTER SECTION
========================== -->
<section class="portfolio-section py-5">
    <div class="container">
        
        <!-- Category Filter Tabs -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-10 text-center">
                <div class="filter-btn-group d-flex flex-wrap justify-content-center gap-2">
                    <button class="btn btn-outline-warning rounded-pill px-4 active filter-btn" data-filter="all">
                        All Projects
                    </button>
                    @foreach($categories as $cat)
                        <button class="btn btn-outline-warning rounded-pill px-4 filter-btn" data-filter="{{ $cat->slug }}">
                            {{ $cat->name }}
                        </button>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Project Grid -->
        <div class="row g-4" id="projectGrid">
            @forelse($media as $med)
                @php
                    $categorySlug = $med->category->slug ?? 'uncategorized';
                    $categoryName = $med->category->name ?? 'General';
                @endphp
                <div class="col-lg-4 col-md-6 project-card-wrapper" data-category="{{ $categorySlug }}">
                    <div class="project-display-card position-relative rounded-4 overflow-hidden shadow-sm" 
                         data-bs-toggle="modal" 
                         data-bs-target="#projectLightboxModal"
                         data-image="{{ asset($med->file_path) }}"
                         data-title="{{ $med->title ?? 'Featured Project' }}"
                         data-category="{{ $categoryName }}"
                         data-description="{{ $med->description ?? 'Premium structural engineering and roofing project completed by Arasuvel Roofings.' }}"
                         data-alt="{{ $med->alt_text ?? 'Roofing Project' }}">
                        
                        <div class="project-img-container">
                            <img src="{{ asset($med->file_path) }}" alt="{{ $med->alt_text ?? 'Roofing Project' }}" class="img-fluid w-100">
                            <div class="project-card-overlay d-flex flex-column justify-content-end p-4">
                                <span class="badge bg-warning text-dark align-self-start mb-2 px-3 py-2 rounded-pill fw-bold text-uppercase">
                                    {{ $categoryName }}
                                </span>
                                <h4 class="text-white fw-bold mb-1">{{ $med->title ?? 'Featured Project' }}</h4>
                                <p class="text-white-50 small mb-0 d-flex align-items-center">
                                    Click to view details <i class="fas fa-search-plus ms-2"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center py-5">
                    <i class="fas fa-images fa-3x text-muted mb-3"></i>
                    <h4 class="text-muted">No Projects Uploaded Yet</h4>
                    <p class="text-muted small">Please upload project gallery items from the admin panel dashboard.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>

<!-- =========================
        LIGHTBOX DETAILS MODAL
========================== -->
<div class="modal fade" id="projectLightboxModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 bg-transparent">
            <div class="modal-body p-0">
                <div class="card overflow-hidden border-0 rounded-4 shadow-lg bg-white">
                    <div class="row g-0">
                        <!-- Image Column -->
                        <div class="col-md-7 position-relative bg-dark d-flex align-items-center justify-content-center" style="min-height: 350px;">
                            <img id="lightboxImage" src="" class="img-fluid w-100 h-100" style="object-fit: cover;" alt="Project Detail">
                            <button type="button" class="btn-close btn-close-white position-absolute top-3 end-3" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <!-- Content Column -->
                        <div class="col-md-5 d-flex flex-column justify-content-between p-4 bg-white">
                            <div>
                                <span id="lightboxCategory" class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-bold text-uppercase mb-3 d-inline-block">Category</span>
                                <h3 id="lightboxTitle" class="fw-bold text-dark mb-3">Project Title</h3>
                                <p id="lightboxDescription" class="text-muted small leading-relaxed">Project Description</p>
                            </div>
                            <div class="border-top pt-3 mt-3 d-flex justify-content-between align-items-center">
                                <span class="small text-muted"><i class="fas fa-check-circle text-warning me-1"></i> Quality Assured</span>
                                <a href="{{ route('home') }}#contact" class="btn btn-warning rounded-pill px-4 fw-bold btn-sm text-dark">
                                    Inquire Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
document.addEventListener("DOMContentLoaded", function () {
    const filterButtons = document.querySelectorAll(".filter-btn");
    const projectCards = document.querySelectorAll(".project-card-wrapper");

    // Dynamic Filter Handler
    filterButtons.forEach(btn => {
        btn.addEventListener("click", function () {
            // Set active class
            filterButtons.forEach(b => b.classList.remove("active"));
            this.classList.add("active");

            const filterValue = this.getAttribute("data-filter");

            // Filter grid cards
            projectCards.forEach(card => {
                const cardCategory = card.getAttribute("data-category");
                
                if (filterValue === "all" || cardCategory === filterValue) {
                    card.style.display = "block";
                    setTimeout(() => {
                        card.style.opacity = "1";
                        card.style.transform = "scale(1)";
                    }, 50);
                } else {
                    card.style.opacity = "0";
                    card.style.transform = "scale(0.85)";
                    setTimeout(() => {
                        card.style.display = "none";
                    }, 300);
                }
            });
        });
    });

    // Lightbox Modal Data Population
    const lightboxModal = document.getElementById('projectLightboxModal');
    if (lightboxModal) {
        lightboxModal.addEventListener('show.bs.modal', function (event) {
            const triggerCard = event.relatedTarget;
            
            // Extract attributes
            const imgUrl = triggerCard.getAttribute('data-image');
            const title = triggerCard.getAttribute('data-title');
            const category = triggerCard.getAttribute('data-category');
            const description = triggerCard.getAttribute('data-description');
            const altText = triggerCard.getAttribute('data-alt');

            // Populate elements
            document.getElementById('lightboxImage').src = imgUrl;
            document.getElementById('lightboxImage').alt = altText;
            document.getElementById('lightboxTitle').textContent = title;
            document.getElementById('lightboxCategory').textContent = category;
            document.getElementById('lightboxDescription').textContent = description;
        });
    }
});
</script>
@endpush
