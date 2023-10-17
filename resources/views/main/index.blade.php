@extends('main.layout.mainlayout');

@section('title', 'Welcome')

@section('content')
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

<!-- Hero section -->
<section class="hero-section image-overlay">
    <div class="hero-slider owl-carousel">
        <div class="hs-item set-bg text-white" data-setbg="{{ asset('images/main/index/ezgif.com-webp-to-skin.png') }}">
            <div class="container">
                <div class="row">
                <div class="col-xl-7" style="color: black;">
                        <h2 style="color: red;">Skin</h2>
                    <!-- <p style="color:#834fa9;">
                    Skin is the largest organ of our body. One of the main functions of skin is to protect our body from various external factors such as bacteria, chemicals and temperature.
It is natural to be concerned about the health of your skin and seek the best treatment possible. Skin problems are faced by all but are more commonly observed in females as they are more cautious about their skin appearance.
Ghosh Clinic expert homeopathic doctors specialise in treating all types of skin and all skin concerns from the root cause with the help of effective and personalised homeopathic skin treatments, proper diet and lifestyle management.
                    </p> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- item -->
        <div class="hs-item set-bg text-white" data-setbg="{{ asset('images/main/index/ezgif.com-webp-to-png.png')}}">
            <div class="container">
                <div class="row">
                <div class="col-xl-7" style="color: black;">
                        <h2 style="color: red;">Diabetes</h2>
                        <!-- <p style="color:#834fa9;"> 
                        <b>What is Diabetes?</b>
Diabetes mellitus is a disease which is characterised by an increase in blood sugar levels (hyperglycaemia). Diabetes can affect individuals in any age group. Insulin is a hormone produced by the pancreas that digests the sugar present in our food.
Diabetes occurs when either the body is unable to produce enough insulin or the body becomes insulin resistant.
                        </p> -->
                        <a href="https://ghoshclinic.com" class="site-btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="hs-item set-bg text-white" data-setbg="{{ asset('images/main/index/ezgif.com-webp-to-hair.png')}}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7" style="color: black;">
                        <h2 style="color: red;">Hair Loss</h2>
                        <!-- <p style="color:#834fa9;">
Male-pattern baldness is extremely common and begins with a receding hairline or bald spot on the top of the head along with thinning of hair at the crown and temples forming a horseshoe shape.
Female pattern baldness occurs with thinning of hair on the top and crown of the head. It is less common but mostly observed in post-menopausal women.
Major factors that contribute to hair loss include excessive use of harsh chemicals, and colours, changing hair products frequently, and electric hair appliances like curling irons, hair straighteners and hair dryers.
                        </p> -->
                        <a href="https://ghoshclinic.com" class="site-btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- item -->
        <div class="hs-item set-bg text-white" data-setbg="{{ asset('images/main/index/doctor_group.jpg') }}">
            <div class="container">
                <div class="row">
                <div class="col-xl-7" style="color: black;">
                        <h2 style="color: red;">How Does Homeopathy Help?</h2>
                        <p> Available Homeopathic Treatments:
                        <a href="https://ghoshclinic.com" class="site-btn">
                            1. Acne 2. Allergic 3. Allergies 4. Alopecia Areata 5. Spondylitis 6. Asthma 7. (ADHD) 8. Autism 9. Backache 10. Bone Health 11. Bronchitis 12. Childhood Obesity 13. Gallstones 14. Constipation 15. Dandruff 16. Depression 17. Diabetes 18. Eczema 19. (FPB) 20. Dysfunction 21. Hair Loss 22. Hyperthyroidism 23. Hypothyroidism 24. Infertility 25. (IBS) 26. Leucorrhoea 27. Lichen Planus 28. Male Infertility 29. (MPB) 30. Menopause 31. Migraine 32. Osteoarthritis 33. (PCOS) 34. Weight Gain 35. Piles 36. (PMS) 37. Psoriasis 38. Scalp Psoriasis 39. Rheumatoid Arthritis 40. Tonsillitis 41. Trichotillomania 42. Urinary Incontinence 43. Urinary Tract Infections 44. Upper Respiratory Tract Infection (URTI) 45. Vitiligo 46. Warts
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero section end -->


<!-- Banner section -->
<section class="banner-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 banner-text text-white">
                <h4>Register now to make your first appointment.</h4>
                <!-- <p>*Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus.</p> -->
                <a href="/registerp" class="site-btn sb-light">Register</a>
            </div>
            <div class="col-lg-5 text-lg-right">
                <!-- <a href="#" class="site-btn sb-light">Read More</a> -->
            </div>
        </div>
    </div>
</section>
<!-- Banner section end -->



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

                    <p>▲ Orthopaedic / Arthroscopy ▲ Hair Fall Treatment ▲ Constipation ▲ Blood Pressure Test ▲ Medication ▲ Joint Pain Management ▲ Infertility ▲ Skin Treatment ▲ Piles Treatment (Non Surgical) ▲ Urinary Tract Infection ▲ Diabetes ▲ Vertigo Treatment ▲ PCOS/PCOD Treatment ▲ Anxiety ▲ Disorder Treatment ▲ Child Psychologist ▲ Weight Loss/Gain ▲ Infertility Treatment ▲ OPD Services PCOD Gynae Problems ▲ Metabolic Diseases ▲ PCOD & Breast Problems ▲ Urine ▲ Stone ▲ Pediatric ▲ PCOS General Paediatrics ▲ Glaucoma ▲ Personal and Professional Growth ▲ Hair Fall ▲ Acne ▲ Allergy ▲Weight Loss-Gain ▲ Anxiety ▲ Depression ▲ Anger Problems ▲ Weight Loss Treatment ▲ Thyroid ▲ Kidney Stones Treatment ▲ Consultation ▲ General Gynecology ▲ Video Counselling  ▲ Migraine ▲ PCOS/PCOD & women related disorders ▲ Arthritis Treatment ▲ Obstetrics & Gynaecology ▲ Pediatrics Orthopaedics ▲ Tonsillitis Treatment ▲ Health Screening ▲ General Medical Consultation ▲ Gynaecological Care & Counselling ▲ Pregnancy Menstrual Disorders Management ▲ Dermatology ▲Preventive Medicine ▲ Acidity ▲ Skin Disease Treatment ▲ Weight Loss ▲ Sexual Problems ▲ Facial Osteopathy ▲ Spine Problems ▲ Joint Pain</p>
            </div>
        </div>
    </div>
</section>
<!-- About section end -->


<!-- Facts section -->
<section class="facts-section set-bg" data-setbg="{{ asset('images/main/index/facts-bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 fact">
                {{-- <i class="flaticon-017-pill"></i> --}}
                <h2>Exp.3 Years</h2>
                <p>Homeopathy General Physician</p>
            </div>
            <div class="col-md-3 col-sm-6 fact">
                {{-- <i class="flaticon-002-toothbrush-1"></i> --}}
                <h2>14K</h2>
                <p>Products Sold</p>
            </div>
            <div class="col-md-3 col-sm-6 fact">
                {{-- <i class="flaticon-030-tooth"></i> --}}
                <h2>1000+</h2>
                <p>Homeopathic Online Consultation</p>
            </div>
            <div class="col-md-3 col-sm-6 fact">
                {{-- <i class="flaticon-023-tooth-1"></i> --}}
                <h2>5000+</h2>
                <p>Happy Patients and Customers</p>
            </div>
        </div>
    </div>
</section>
<!-- Facts section end -->



<!-- Services section -->
<section class="services-section spad">
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
                    <img src="{{ asset('images/main/index/svg-icons/002-first-aid-kit.svg') }}" style="width: 50px;"
                        alt="">
                </div>
                <div class="service-content">
                    <h4>Classical Homeopathy</h4>
                    <p>The individual is considered as a whole and symptoms from the body, mind, and spirit are
                        considered when choosing a homeopathic remedy.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 service">
                <div class="service-icon">
                    <img src="{{ asset('images/main/index/svg-icons/003-stethoscope.svg') }}" style="width: 50px;"
                        alt="">
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
                    <p>A therapeutic branch which enables deep cleansing of the body tissues, removing old toxins,
                        disease processes and degenerative debris, leaving the fluids clean, fresh and able to
                        function as intended.</p>
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

<!-- Testimonials section -->
<section class="testimonials-section spad">
    <div class="container">
        <div class="section-title text-center">
            <h2>Testimonials</h2>
        </div>
    </div>
    <div class="testimonials-warp">
        <div class="testimonials-slider owl-carousel">
            @if (count($feedbacks)>0)
            @foreach ($feedbacks as $feedback)
            <div class="testimonial-item">
                <div class="ts-content">
                    <div class="quta">“</div>
                    <p>{{ $feedback->message }}</p>
                    <h6>{{ $feedback->name }}</h6>
                    <span>Patient</span>
                </div>
                {{-- <div class="author-pic set-bg" data-setbg="img/review/1.jpg"></div> --}}
            </div>
            @endforeach
            @else
            <div class="testimonial-item">
                <div class="ts-content">
                    <div class="quta">“</div>
                    <p>Tempus orci vel consequat. Nullam lorem sem, viverra a rutrum sed, gravida mattis magna.
                        Suspendisse vitae commodo quam. Quisque a enim et ante vulputate finibus.</p>
                    <h6>Jessica Brown</h6>
                    <span>Patient</span>
                </div>
                {{-- <div class="author-pic set-bg" data-setbg="img/review/1.jpg"></div> --}}
            </div>
            <div class="testimonial-item">
                <div class="ts-content">
                    <div class="quta">“</div>
                    <p>Nullam lorem sem, viverra a rutrum sed, gravida mattis magna. Suspendisse vitae commodo quam.
                        Quisque a enim et ante vulputate finibus.</p>
                    <h6>Jessica Brown</h6>
                    <span>Patient</span>
                </div>
                {{-- <div class="author-pic set-bg" data-setbg="img/review/2.jpg"></div> --}}
            </div>
            <div class="testimonial-item">
                <div class="ts-content">
                    <div class="quta">“</div>
                    <p>Phasellus vehicula tempus orci vel consequat. Nullam lorem sem, viverra a rutrum sed, gravida
                        mattis magna. Suspendisse vitae commodo quam. Quisque a enim et ante vulputate finibus nec
                        laoreet ipsum.</p>
                    <h6>Jessica Brown</h6>
                    <span>Patient</span>
                </div>
                {{-- <div class="author-pic set-bg" data-setbg="img/review/3.jpg"></div> --}}
            </div>
            <div class="testimonial-item">
                <div class="ts-content">
                    <div class="quta">“</div>
                    <p>Tempus orci vel consequat. Nullam lorem sem, viverra a rutrum sed, gravida mattis magna.
                        Suspendisse vitae commodo quam. Quisque a enim et ante vulputate finibus.</p>
                    <h6>Jessica Brown</h6>
                    <span>Patient</span>
                </div>
                {{-- <div class="author-pic set-bg" data-setbg="img/review/2.jpg"></div> --}}
            </div>
            @endif
        </div>
    </div>
</section>
<!-- Testimonials section end -->

<!-- Newsletter section -->
<section class="newsletter-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 banner-text text-white">
                <h4>Subscribe to our newsletter</h4>
                <p>Be the first to be notified of our offers...</p>
            </div>
            <div class="col-lg-5 text-lg-right">
                <form class="newsletter-form">
                    <input type="text" placeholder="Your E-mail">
                    <button class="site-btn sb-dark">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Newsletter section end -->
@endsection