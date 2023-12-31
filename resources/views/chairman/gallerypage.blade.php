<!DOCTYPE html>
<html>
    <head>
       <title>Gallery</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="img/favicon.ico" rel="shortcut icon" />


    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/main/mainlayout/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main/mainlayout/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main/mainlayout/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main/mainlayout/owl.carousel.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main/mainlayout/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main/mainlayout/animate.css') }}" />

    {{-- <link href="{{ asset('css/registerCSS/style.css') }}" rel="stylesheet" type="text/css" > --}}


    


        <link href="{{ asset('css/media/stylegallery.css') }}" rel="stylesheet">
        
	<link rel="stylesheet" href="css/media/bootstrapp.min.css">
        <link rel="stylesheet" href="css/media/bootstrap-themee.min.css">
        
        <link rel="stylesheet" href="css/fontAwesome.css">
	<link rel="stylesheet" href="css/media/light-boxx.css">
        <link rel="stylesheet" href="css/media/templatemoo-style.css">
        


        <script src="js/media/vendorr/modernizr-2.8.3-respond-1.4.2.minn.js"></script>
        
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
                    <li class="{{ (Request::is('about') ? 'active' : '') }}"><a href="/about">About</a></li>
                    <li class="{{ (Request::is('search-product') ? 'active' : '') }}"><a href="/search-product">Shop</a></li>
                    <li class="{{ (Request::is('ServiceTest') ? 'active' : '') }}"><a href="/ServiceTest">Services</a></li>
                    <li class="{{ (Request::is('gallery') ? 'active' : '') }}"><a href="/gallery">Gallery</a></li>
                    <li class="{{ (Request::is('feedback') ? 'active' : '') }}"><a href="/contact">Contact</a></li>
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

    

    <div id="video-container">
        <div class="video-overlay"></div>
        <div class="video-content">
            <div class="inner">
              <h1>Gallery</h1>
              <p>Get to know about our clinic more</p>
              <p>Check out these photos</p>
                <div class="scroll-icon">
                    <a class="scrollTo" data-scrollTo="photo" href="#"><img src="img/scroll-icon.png" alt=""></a>
                </div> 
                @if(!auth::guest())
                    @if(auth::user()->type=="admin")
                <a class="btn btn-primary" href="/gallery/create">Add New Photo</a>
                @endif
        @endif 
            </div>
        </div>
        <video autoplay="" loop="" muted>
        	<source src="img/highway-loop.mp4" type="video/mp4" />
        </video>
    </div>
    <div class="services" id="photo" >
    <div class="container">
        @if (count($articles)>0)
        @foreach ($articles as $article)
            <div class="service left col-lg-6 col-md-12 col-sm-12 p-5">
                    
            <a href="/storage/images/{{$article->image}}" data-lightbox="image-1">
                <img src="/storage/images/{{$article->image}}" >  
            
            <h2>{{ $article->title }}</h2>
            <p>{{ $article->content }}</p>
            
        </a>
       
                @if(!auth::guest())
                    @if(auth::user()->id == $article->doctor_id)
                        <a class="btn btn-primary" href="/gallery/{{ $article->article_id }}/edit">Edit</a>
                        <form class="form" action="/gallery/{{ $article->article_id }}" method="POST">
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
    @if(!auth::guest())
        @if(auth::user()->type=="admin")
    <a class="btn btn-primary" href="/admin">Back to Dashboard</a>
        @endif 
    @endif
    </div>
   

    
              


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js/media/vendorr/bootstrap.miin.js"></script>
    
    <script src="js/media/pluginss.js"></script>
    <script src="js/media/mainn.js"></script>


</body>
</html>