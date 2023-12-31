<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment Card</title>
    <link rel="stylesheet" href="{{ asset('css/css_p/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('css/css_p/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/css_p/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/css_p/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/css_p/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/css_p/responsive.css') }}">
</head>
<body>
        <div class="wrapper">
                <header class="header">
                    <div class="blue">
                        <img src="{{ asset('img/header-shepe-blue.png') }}" alt="">
                    </div>
                    <div class="white">
                        <img src="{{ asset('img/header-shepe-white.png') }}" alt="">
                    </div>
                    <div class="container">
                        <img class="shepe1" src="{{ asset('img/shepe1.png') }}" alt="">
                        <img class="shepe2" src="img/shepe2.png" alt="">
                        <img class="shepe3" src="img/shepe2.png" alt="">
                        <img class="shepe4" src="img/shepe2.png" alt="">
                        <img class="shepe5" src="img/shepe1.png" alt="">
                        <img class="shepe6" src="img/shepe2.png" alt="">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="logo">
                                    <h2><a href="#">GHOSH CLINIC</a></h2>
                                </div>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <div class="menu">
                                    <ul class="nav navbar-nav">
                                            <li class="active"><a href="{{ url('paymentHome')}}">HOME</a></li>
                                        <li><a href="#">Features</a></li>
                                        <li><a href="#">Pricing</a></li>
                                        <li><a href="#">Team</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="header-text">
                                        <h1>Make online payment</h1>
                                        <p>You are able make online payments for your medicines, medical consume items and doctor appoinments.
                                             As GHOSH CLINIC we have made your operations more simple<br> Thank you!</p>
                                        <button>Terms & condition</button>
                                        <button>About Refund</button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="another-text">
                                        <h3>Three Different Options</h3>
                                        <p>As GHOSH CLINIC, we provide you to pay by card or bank slip <br> on special circumstances you may raise request to refund it </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <section class="contact">
                    <div class="blue">
                        <img src="img/contact-shepe-blue.png" alt="">
                    </div>
                    <div class="white">
                        <img src="img/contact-shepe-white.png" alt="">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <div class="contact-text">
                                    <h2>Bank slip details!</h2>
                                    <p>Please enter bank slip details in order to proceed further with your payment!</p>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-12">
                                <div class="contact-form">
                                    <form action="{{ route('slip.store')}}" method="post">
                                        @csrf
                                        <div class="first">
                                            <input type="text" name="patientID" placeholder="Patient ID" pattern="(P)[0-9]{3}" title = "Patient id should start from P and with 3 digits number" required >
                                        </div>
                                        <div class="last">
                                            <input type="text" name="orderID" placeholder="Order or Appointment ID" required>
                                        </div>
                                        <div class="first">
                                            <input type="text" name="bankName" placeholder="Bank Name" required>
                                        </div>
                                        <div class="last">
                                            <input type="text" name="bankBranch" placeholder="Bank Branch" required>
                                        </div>
                                        <br>
                                        <br>
                                        <br>
                                        <div class="first">
                                            Payment date:
                                            <input type="date" name="date" required>
                                        </div>
                                       
                                        
                                        <button class="btn btn-primary" name = "">Attach slip</button>
                                        <br>
                                        <br>
                                        <br>
                                        <div class="checkbox-submit">
                                            <div class="checkbox">
                                                <label><input type="checkbox" name="" required> Agree for terms & condition</label>
                                            </div>
                                            <div class="submit">
                                                <input type="submit" value="PAY">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
    
</body>
</html>