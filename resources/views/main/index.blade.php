@extends('main.layout.mainlayout')

@section('title', 'Welcome to Ghosh Clinic: Healing through Homeopathy at Dhunela, Sohna')
@section('description', 'Dr. Swati Ghosh offers healing through homeopathy at Dhunela, Sohna. Discover holistic care with a trusted homeopathy doctor near Sohna specializing in natural remedies for your well-being. <b></b>Call 8478019973</b> for enquiry to Ghosh CLinic')

@section('styles')
<style>
    .single-services .services-icon {
        background-color: #fdeee7;
        padding: 20px;
        border-radius: 50%;
        width: 100px;
        height: 100px;
        margin: 0 auto 20px;
    }

    .single-services {
        text-align: center;
        background-color: #fff;
        -webkit-box-shadow: 0 0 20px 3px rgba(0, 0, 0, .05);
        box-shadow: 0 0 20px 3px rgba(0, 0, 0, .05);
        padding: 1px;
        -webkit-transition: all ease .5s;
        transition: all ease .5s;
        margin-bottom: 5px;
    }

    .center-content {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    img {
        max-width: 100%;
        height: auto;
    }
</style>
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
</section>
<!-- Banner section end -->

<!-- Banner section -->
<section class="services-area pt-100 pb-70 mt-3">
    <div class="container">
        <div class="section-title text-center">
            <h4>Connect with Us || हमसे संपर्क करें</h4>
        </div>
        <div class="row">
            <div class="col-lg-12 text-lg">
                <div class="col-lg-12 text-lg text-center">
                    <div class="red p-1" style="font-size:10px;color:#007bff !important;"><a class=" btn-link" href="https://maps.app.goo.gl/oHQSbFPvy1FMaTfP6"><i class="fa fa-map-marker" aria-hidden="true"></i> Ghosh Homeopathy Clinic, Berka Road, Dhunela, Sohna, 8478019973 </a></div>
                </div>
                <p>
                    Dr. Swati Ghosh, Homeopathy Doctor, Dhunela, Sohna, 8478019973, Near Global Heights, Signature GLobal Park, Ashiȧnȧ Anmol, Central Park Flower Valley, Sohna Road
                    <a href="/registerp" class="btn btn-link sb-light">Book Appointment</a>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 hi-item">
                <div class="hs-icon">
                    <a href="https://maps.app.goo.gl/oHQSbFPvy1FMaTfP6"><img src="{{ asset('images/main/mainlayout/icons/map-marker.png') }}" alt="GHOSH CLINIC"></a>
                </div>
                <div class="hi-content">
                    <h6><a href="https://maps.app.goo.gl/oHQSbFPvy1FMaTfP6">Ghosh Clinic, Berka Road</a></h6>
                    <p>Dhunela, Sohna, HR 122103</p>
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
                    <p><b>Call 8478019973</b></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner section end -->

<!-- Banner section -->
<section class="services-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <h4>Medical Conditions Remedied Through Homeopathic Medicine <br> होम्योपैथिक चिकित्सा द्वारा इलाज की जाने वाली चिकित्साएं</h4>
        </div>
        <div class="row">
            <div class="col-lg-12 banner-text text-black">
                ▲ Orthopaedic / Arthroscopy ▲ Hair Fall Treatment ▲ Constipation ▲ High blood pressure Medication ▲ Joint Pain Management ▲ Infertility ▲ Skin Treatment ▲ Piles Treatment (Non Surgical) ▲ Urinary Tract Infection ▲ Diabetes ▲ Vertigo Treatment ▲ Anxiety Disorder Treatment ▲ Child Psychology ▲ Weight Loss/Gain ▲ Infertility Treatment PCOD Gynae Problems ▲ Metabolic Diseases ▲ Breast tumor ▲Renal Stone ▲ Pediatric ▲ Glaucoma ▲ Personal and Professional Growth ▲ Hair Fall ▲ Acne ▲ Allergy ▲ Depression & Anger Problems ▲ Thyroid disorder ▲ General Gynecology ▲ Mouth ▲ Migraine ▲ Arthritis Treatment & Orthopaedics ▲ Tonsillitis Treatment ▲ Health Screening ▲ General Medical Consultation ▲ Menstrual Disorders Management ▲ Dermatology ▲ Preventive Medicine ▲ Acidity ▲ Allegic rhinitis & sinusitis ▲ Sexual Problems ▲ Warts ▲ Spine Problems ▲ Joint Pain
            </div>
        </div>
    </div>
</section>
<!-- Banner section end -->

<section class="services-area pt-100 pb-70 mt-3">
    <div class="container">
        <div class="section-title text-center">
            <h4>Services in Homeopathic Treatments Offered <br> होम्योपैथिक उपचार में प्रदान की जाने वाली सेवाएं</h4>
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

<section class="services-area pt-100 pb-70 mt-3">
    <div class="container">
        <div class="section-title text-center">
            <h4>About Dr. Swati Ghosh: Bringing Healing through Homeopathy <br> डॉ. स्वाति घोष के बारे में: होम्योपैथी के माध्यम से चिकित्सा लाना।</h4>
        </div>
        <div class="content">
            <p>Dr. Swati Ghosh, a dedicated practitioner at Ghosh Clinic, brings a wealth of expertise and compassion to her practice in homeopathy. With a commitment to holistic healing, she endeavors to empower her patients on their journey toward wellness.</p>

            <p>Dr. Ghosh's passion for homeopathy stems from a profound belief in the body's innate ability to heal itself. Her approach revolves around understanding each individual's unique constitution, addressing not only the symptoms but also delving into the root cause of ailments.</p>

            <p>Having honed her skills through extensive education and practical experience, Dr. Swati Ghosh has become a trusted name in the field of homeopathic medicine. Her patients in Dunela, Sohna, and the surrounding areas have benefited from her personalized treatment plans and compassionate care.</p>

            <p>At Ghosh Clinic, Dr. Ghosh emphasizes a patient-centric approach, fostering a warm and welcoming environment where individuals feel heard and understood. Her dedication to continuous learning and staying abreast of advancements in homeopathy ensures that patients receive the most effective and tailored treatment options.</p>

            <p>Dr. Swati Ghosh's practice extends beyond merely alleviating symptoms; she aims to facilitate lasting well-being and a renewed sense of vitality in every patient she treats.</p>

            <p>Whether it's chronic conditions, acute illnesses, or seeking overall wellness, Dr. Ghosh's expertise in homeopathy offers a holistic path to health and vitality.</p>

            <p>Contact Ghosh Clinic today to embark on a journey toward holistic healing with Dr. Swati Ghosh, a compassionate and experienced homeopathy practitioner serving the Dunela and Sohna communities.</p>
        </div>
    </div>
</section>

<section class="services-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <h4>Diseases are Entirely Treatable with Homeopathy <br> रोग पूरी तरह से होम्योपैथी से ठीक हो सकते हैं।</h4>
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
<section class="services-area">
    <div class="container">
        <div class="section-title text-center">
            <h4>Approaches in Homeopathy <br> होम्योपैथी में दृष्टिकोण।</h4>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 service">
                <div class="service-icon">
                    <img src="{{ asset('images/main/index/svg-icons/001-medicine.svg') }}" style="width: 50px;" alt="">
                </div>
                <div class="service-content approach">
                    <h4>Auto-isopathy</h4>
                    <p>Involves using substances derived from the patient's own body, such as bodily discharges, for treatment.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 service">
                <div class="service-icon">
                    <img src="{{ asset('images/main/index/svg-icons/002-first-aid-kit.svg') }}" style="width: 50px;" alt="">
                </div>
                <div class="service-content approach">
                    <h4>Classical Homeopathy</h4>
                    <p>This is the traditional form of homeopathy, where a single remedy is prescribed based on the patient's overall symptoms and constitution.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 service">
                <div class="service-icon">
                    <img src="{{ asset('images/main/index/svg-icons/003-stethoscope.svg') }}" style="width: 50px;" alt="">
                </div>
                <div class="service-content approach">
                    <h4>Clinical Homeopathy</h4>
                    <p>Refers to the application of homeopathy in a clinical or medical setting, often integrating homeopathic remedies with medical practices.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 service">
                <div class="service-icon">
                    <img src="{{ asset('images/main/index/svg-icons/004-care.svg') }}" style="width: 50px;" alt="">
                </div>
                <div class="service-content approach">
                    <h4>Complex homeopathy</h4>
                    <p>Involves using combinations of homeopathic remedies to address multiple symptoms or conditions simultaneously.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 service">
                <div class="service-icon">
                    <img src="{{ asset('images/main/index/svg-icons/005-doctor.svg') }}" style="width: 50px;" alt="">
                </div>
                <div class="service-content approach">
                    <h4>Homotoxicology</h4>
                    <p>Focuses on removing toxins from the body using homeopathic remedies, addressing the concept of "homotoxins" as the cause of diseases.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 service">
                <div class="service-icon">
                    <img src="{{ asset('images/main/index/svg-icons/007-hospital.svg') }}" style="width: 50px;" alt="">
                </div>
                <div class="service-content approach">
                    <h4>Isopathy</h4>
                    <p> Involves using remedies derived from causative agents of a disease to treat that same disease, aiming to stimulate the body's immune response.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services section end -->

@endsection