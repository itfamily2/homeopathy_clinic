<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    
    <link href="{{ asset('css/serv/adminserv.css') }}" rel="stylesheet">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">

     <title>{{ config('app.name', 'Laravel') }}</title>
 
     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>
 
     <!-- Fonts -->
     <link rel="dns-prefetch" href="//fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
 
     <!-- Styles -->
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">

     <link href="img/favicon.ico" rel="shortcut icon" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/main/mainlayout/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main/mainlayout/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main/mainlayout/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main/mainlayout/owl.carousel.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main/mainlayout/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main/mainlayout/animate.css') }}" />

    {{-- <link href="{{ asset('css/registerCSS/style.css') }}" rel="stylesheet" type="text/css" > --}}


    @if (isset($styles))

    @foreach ($styles as $style)
    <link rel="stylesheet" href='{{ asset("$style") }}' />
    @endforeach

    @endif
  </head>
  <body>
    
        <div class="container">
				<!-- Site Logo -->
				<a href="/" class="site-logo">
					<img src="{{ asset('images/main/mainlayout/logo_dark_long.png') }}" alt="">
				</a>
				<!-- responsive -->
				<div class="nav-switch">
					<i class="fa fa-bars"></i>
				</div>
				{{-- <h1>{{ Request::is('/')? "Home":"Not Home" }}</h1> --}}
				<!-- Main Menu -->
				<ul class="main-menu">
					<li class="{{ (Request::is('/') ? 'active' : '') }}"><a href="/">Home</a></li>
					<li class="{{ (Request::is('/about') ? 'active' : '') }}"><a href="/aboutus">About</a></li>
					<li class="{{ (Request::is('/users') ? 'active' : '') }}"><a href="/ServiceTest">Services</a></li>
					<li class="{{ (Request::is('/users') ? 'active' : '') }}"><a href="/gallery">Gallery</a></li>
					<!-- <li><a href="elements.html"><i class="flaticon-020-decay"></i></a></li> -->
					@auth
					<li class="dashboard-style"><a href="/login">Dashboard</a></li>
					<li class="logout-style"><a class="logout-style" href="{{ route('logout') }}" onclick="event.preventDefault();
						document.getElementById('logout-form').submit();">
							{{ __('Logout') }}
						</a></li>
			
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						@csrf
					</form>
					@else
					<li class="login-style"><a href="/login">Sign In</a></li>
					@endauth
				</ul>
			</div>

			
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

<div class="services">
    @if(!auth::guest())
        <a class="btn btn-primary" href="/ServiceTest/create">
            Add new services
    </a>
    @endif
    <h1>Our Services</h1>
</div>  

<div class="services">
<div class="container">
    @if (count($posts)>0)
    @foreach ($posts as $post)
        <div class="service left col-lg-6 col-md-12 col-sm-12 p-5">
        <img src="/storage/images/{{$post->image}}" >
        <h2 class="text-center">{{ $post->title }}</h2>
        <p>{{ $post->description }}</p>
            @if(!auth::guest())
                @if(auth::user()->id == $post->user_id)
                    <a class="btn btn-primary" href="/ServiceTest/{{ $post->id }}/edit">Edit</a>
                    <form class="form" action="/ServiceTest/{{ $post->id }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <input type="submit" class="btn btn-danger" value="Remove">
                    </form>
                @endif
            @endif
        </div>
    @endforeach
    @else
    <p>No posts to show</p>
    @endif    
</div>


</div>
 
<!-- Footer top section -->
<section class="section set-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-widget">
                    <div class="fw-about">
                        <b>About Ghosh Clinic: </b>
                        Ghosh Clinic is a leading homeopathic healthcare center dedicated to providing holistic healing solutions. With a team of experienced homeopathic practitioners and a patient-centric approach, we aim to promote wellness and restore health naturally.<br> 
                        <b>Contact Information: </b><span>Dr. Swati Ghosh, Homeopathy Doctor, Dhunela, Sohna, 8478019973, Near Global Heights, Signature GLobal Park, Ashiȧnȧ Anmol, Central Park Flower Valley, Sohna Road</span>
                        <a style="color:blue;" class="link" href="https://maps.app.goo.gl/oHQSbFPvy1FMaTfP6">Clinic Direction | Google Map</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer top section end -->


	<script defer src="{{ asset('js/main/mainlayout/jquery-3.2.1.min.js') }}"></script>
    <script defer src="{{ asset('js/main/mainlayout/bootstrap.min.js') }}"></script>
    <script defer src="{{ asset('js/main/mainlayout/owl.carousel.min.js') }}"></script>
    <script defer src="{{ asset('js/main/mainlayout/circle-progress.min.js') }}"></script>
    <script defer src="{{ asset('js/main/mainlayout/main.js') }}"></script>


 


  </body>
</html>