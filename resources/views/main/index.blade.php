@extends('main.layout.mainlayout');

@section('title', 'Welcome')

@section('styles')
<link href="{{ asset('css/serv/service.css') }}" rel="stylesheet">
@endsection

@section('content')

<!-- Banner section -->
<section class="services-area pt-100 pb-70">
    <div class="container center-content">
        <div class="section-title">
            <h1>"स्वास्थ्य में सामंजस्य: हमारे सफल होम्योपैथिक उपचार"</h1>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                @foreach ($testimonials as $key => $testimonial)
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $key }}" class="{{ $key === 0 ? 'active' : '' }}"></li>
                @endforeach
            </ol>
            <div class="carousel-inner">
                @foreach ($testimonials as $key => $testimonial)
                    <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                    <img src="{{ $testimonial['image'] }}" class="w-20" alt="{{ $testimonial['title'] }}">
                    <h5>{{ $testimonial['title'] }}</h5>
                    <p>{{ $testimonial['description'] }}</p>
                    <a href="{{ $testimonial['link'] }}" class="btn btn-primary">Read More</a>
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="services-shape">
        <img src="img/services-shape.png" alt="Image">
    </div>
</section>
<!-- Banner section end -->

<!-- Banner section -->
<section class="banner-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-lg">
                <h2>Get in Touch</h2>
                <div class="col-lg-12 text-lg">
                    <div class="red p-1" style="font-size:10px;color:#007bff !important;"><a class=" btn-link" href="https://maps.app.goo.gl/oHQSbFPvy1FMaTfP6"><i class="fa fa-map-marker" aria-hidden="true"></i> Ghosh Homeopathy Clinic, Berka Road, Dhunela, Sohna, 8478019973 </a></div>
                </div>
                <p>
                    Dr. Swati Ghosh, Homeopathy Doctor, Dhunela, Sohna, 8478019973, Near Global Heights, Signature GLobal Park, Ashiȧnȧ Anmol, Central Park Flower Valley, Sohna Road
                    <a href="/registerp" class="btn btn-link sb-light">Book Appointment</a>
                </p>
            </div>
        </div>
    </div>
</section>
<!-- Banner section end -->

<div class="header-info">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 hi-item">
                <div class="hs-icon">
                    <a href="https://maps.app.goo.gl/oHQSbFPvy1FMaTfP6"><img src="{{ asset('images/main/mainlayout/icons/map-marker.png') }}" alt="GHOSH CLINIC"></a>
                </div>
                <div class="hi-content">
                    <h6><a href="https://maps.app.goo.gl/oHQSbFPvy1FMaTfP6">Ghosh Clinic, Berka Road</a></h6>
                    <p>Dhunela, Sohna, Haryana 122103</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 hi-item">
                <div class="hs-icon">
                    <img src="{{ asset('images/main/mainlayout/icons/clock.png') }}" alt="">
                </div>
                <div class="hi-content">
                    <h6>Opening Hours</h6>
                    <p>Mon - SUN: 8:00 - 21:00</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 hi-item">
                <div class="hs-icon">
                    <img src="{{ asset('images/main/mainlayout/icons/phone.png') }}" alt="">
                </div>
                <div class="hi-content">
                    <h6>+91 8478019973</h6>
                    <p>Call us now!</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 hi-item">
                <div class="hs-icon">
                    <img src="{{ asset('images/main/mainlayout/icons/calendar.png') }}" alt="">
                </div>
                <div class="hi-content">
                    <h6>Make an appointment</h6>
                    <p>Call 8478019973</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Banner section -->
<section class="services-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <h2>Diseases Treated By Homeopathy</h2>
        </div>
        <div class="row">
            <div class="col-lg-12 banner-text text-black">
            ▲ Orthopaedic / Arthroscopy ▲ Hair Fall Treatment ▲ Constipation ▲ High blood pressure Medication ▲ Joint Pain Management ▲ Infertility ▲ Skin Treatment ▲ Piles Treatment (Non Surgical) ▲ Urinary Tract Infection ▲ Diabetes ▲ Vertigo Treatment  ▲ Anxiety Disorder Treatment ▲ Child Psychology ▲ Weight Loss/Gain ▲ Infertility Treatment PCOD Gynae Problems ▲ Metabolic Diseases ▲ Breast tumor ▲Renal Stone ▲ Pediatric  ▲ Glaucoma ▲ Personal and Professional Growth ▲ Hair Fall ▲ Acne ▲ Allergy  ▲ Depression & Anger Problems ▲ Thyroid disorder ▲ General Gynecology ▲ Mouth ▲ Migraine ▲ Arthritis Treatment & Orthopaedics ▲ Tonsillitis Treatment ▲ Health Screening ▲ General Medical Consultation  ▲ Menstrual Disorders Management ▲ Dermatology ▲ Preventive Medicine ▲ Acidity ▲ Allegic rhinitis & sinusitis ▲ Sexual Problems ▲ Warts ▲ Spine Problems ▲ Joint Pain
            </div>
        </div>
    </div>
</section>
<!-- Banner section end -->

<section class="services-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <h2>Homeopathic Treatment</h2>
        </div>
        <div id="services-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @php $i = 0; @endphp
                @foreach($services as $service)
                    <div class="carousel-item @if($i === 0) active @endif">
                        <div class="row">
                            <div class="col-lg-12 col-sm-6">
                                <div class="single-services" style="box-shadow: 0 0 3px 3px #E0E0E0;">
                                    <div class="services-icon">
                                        <a href="{{ $service['link'] }}">
                                            <img src="{{ $service['icon'] }}" alt="{{ $service['title'] }} icon">
                                        </a>
                                    </div>
                                    <div class="service-content" style="">
                                        <h3>
                                            <a href="{{ $service['link'] }}">{{ $service['title'] }}</a>
                                        </h3>
                                        <p style="font-size:14px;">{{ $service['description'] }}</p>
                                    </div>
                                    <div class="serv1-btn">
                                        <!-- Add your buttons and links here -->
                                    </div>
                                    <div class="red p-1" style="font-size:10px;color:#007bff !important;">
                                        <a href="https://maps.app.goo.gl/oHQSbFPvy1FMaTfP6">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            Ghosh Homeopathy Clinic, Berka Road, Dhunela, Sohna, 8478019973
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @php $i++; @endphp
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#services-carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#services-carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>

<!-- About section -->
<section class="about-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <img src="{{ asset('images/main/index/child.jpg') }}" alt="">
            </div>
            <div class="col-lg-7 about-text">
                <h2>We Care About Your Health</h2>
                <p>
                    Homeopathy is a 200-year-old system of alternative holistic medicine. It is the preferred form of medical treatment for approximately 100 million individuals in India.
                    Homeopathic medicines are made from natural substances, which is considered a safer form of medical treatment. Natural substances’ healing properties are used to cure and treat various medical conditions, whether acute or chronic, without any side effects.
                    With the passage of time, homeopathy has helped people find relief from their diseases where other treatments failed.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- About section end -->

<section class="services-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <h2>All diseases are fully curable with Homeopathy without any side effects.</h2>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                @foreach($homeopathyTreatments as $key => $category)
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                @endforeach
            </ol>
            <div class="carousel-inner">
                @foreach($homeopathyTreatments as $key => $category)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <div class="card">
                            <div class="card-header">
                                {{ $key }}
                            </div>
                            <div class="card-body">
                                <ul class="horizontal-list">
                                    @foreach($category as $ailment)
                                        <li>{{ $ailment }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>

<!-- Services section -->
<section class="services-section spad  pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <h2>Our Services</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 service">
                <div class="service-icon">
                    <img src="{{ asset('images/main/index/svg-icons/001-medicine.svg') }}" style="width: 50px;" alt="">
                </div>
                <div class="service-content">
                    <h4>Auto-isopathy</h4>
                    <p>Treatment with remedies made from the particular patients’ own body substances.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 service">
                <div class="service-icon">
                    <img src="{{ asset('images/main/index/svg-icons/002-first-aid-kit.svg') }}" style="width: 50px;" alt="">
                </div>
                <div class="service-content">
                    <h4>Classical Homeopathy</h4>
                    <p>The individual is considered as a whole and symptoms from the body, mind, and spirit are
                        considered when choosing a homeopathic remedy.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 service">
                <div class="service-icon">
                    <img src="{{ asset('images/main/index/svg-icons/003-stethoscope.svg') }}" style="width: 50px;" alt="">
                </div>
                <div class="service-content">
                    <h4>Clinical Homeopathy</h4>
                    <p>Non-individualised treatment based mainly on guiding symptoms; (e.g. arnica for bruises).</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 service">
                <div class="service-icon">
                    <img src="{{ asset('images/main/index/svg-icons/004-care.svg') }}" style="width: 50px;" alt="">
                </div>
                <div class="service-content">
                    <h4>Complex homeopathy</h4>
                    <p>Uses remedies that are mixtures of ingredients or that prescribes several remedies taken in
                        combination.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 service">
                <div class="service-icon">
                    <img src="{{ asset('images/main/index/svg-icons/005-doctor.svg') }}" style="width: 50px;" alt="">
                </div>
                <div class="service-content">
                    <h4>Homotoxicology</h4>
                    <p>Homotoxicology, a therapeutic branch of homeopathy, focuses on deep cleansing of the body tissues.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 service">
                <div class="service-icon">
                    <img src="{{ asset('images/main/index/svg-icons/007-hospital.svg') }}" style="width: 50px;" alt="">
                </div>
                <div class="service-content">
                    <h4>Isopathy</h4>
                    <p>Use of remedies made from the causative agent, e.g. a specific allergen for an allergy.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services section end -->

@endsection