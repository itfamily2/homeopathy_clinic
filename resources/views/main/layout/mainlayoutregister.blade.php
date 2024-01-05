<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="description" content="Dr. Swati Ghosh offers healing through homeopathy at Dhunela, Sohna. Discover holistic care with a trusted homeopathy doctor near Sohna specializing in natural remedies for your well-being. Call 8478019973 for enquiry to Ghosh CLinic">
    <meta name="keywords" content="Orthopaedic / Arthroscopy -- Hair Fall Treatment -- Constipation -- High blood pressure Medication -- Joint Pain Management -- Infertility -- Skin Treatment -- Piles Treatment (Non Surgical) -- Urinary Tract Infection -- Diabetes -- Vertigo Treatment -- Anxiety Disorder Treatment -- Child Psychology -- Weight Loss/Gain -- Infertility Treatment PCOD Gynae Problems -- Metabolic Diseases -- Breast tumor --Renal Stone -- Pediatric -- Glaucoma -- Personal and Professional Growth -- Hair Fall -- Acne -- Allergy -- Depression & Anger Problems -- Thyroid disorder -- General Gynecology -- Mouth -- Migraine -- Arthritis Treatment & Orthopaedics -- Tonsillitis Treatment -- Health Screening -- General Medical Consultation -- Menstrual Disorders Management -- Dermatology -- Preventive Medicine -- Acidity -- Allegic rhinitis & sinusitis -- Sexual Problems -- Warts -- Spine Problems -- Joint Pain">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="shortcut icon" />
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/main/mainlayout/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main/mainlayout/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main/mainlayout/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main/mainlayout/owl.carousel.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main/mainlayout/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main/mainlayout/animate.css') }}" />

    <link href="{{ asset('css/registerCSS/style.css') }}" rel="stylesheet" type="text/css" >


    @if (isset($styles))

    @foreach ($styles as $style)
    <link rel="stylesheet" href='{{ asset("$style") }}' />
    @endforeach

    @endif

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header section -->
    <header class="header-section">
        {{-- navigation bar --}}
        @include('main.layout.includes.header')
    </header>

    <main class="py-4">
            {{-- container for showing the error and success messages --}}
            <div class="container">
                @if(count($errors)>0)
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">
                            {{ $error }}
                        </div>
                    @endforeach
                @endif
    
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
    
                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
             </div>
    {{-- main content --}}
    @yield('content')

    </main>
    {{-- footer --}}
    @include('main.layout.includes.footer')


    <!--====== Javascripts & Jquery ======-->
    <script defer src="{{ asset('js/main/mainlayout/jquery-3.2.1.min.js') }}"></script>
    <script defer src="{{ asset('js/main/mainlayout/bootstrap.min.js') }}"></script>
    <script defer src="{{ asset('js/main/mainlayout/owl.carousel.min.js') }}"></script>
    <script defer src="{{ asset('js/main/mainlayout/circle-progress.min.js') }}"></script>
    <script defer src="{{ asset('js/main/mainlayout/main.js') }}"></script>

</body>

</html>