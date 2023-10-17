@extends('main.layout.mainlayoutcontact')

@section('content')



<div class="contact-section">
        <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">

  <h1>Contact Us</h1>
  <div class="border"></div>
                <form class="contact-form" action="{{url('contact2')}}" method="post">
                    {{ csrf_field() }}
    <input type="text" class="contact-form-text" placeholder="Your name" name="name" id="name">
    <input type="email" class="contact-form-text" placeholder="Your email" name="email" id="email">
    <input type="text" class="contact-form-text" placeholder="Your phone" name="phone" id="phone">
    <textarea class="contact-form-text" placeholder="Your message" name="message" id="message"></textarea>
    <input type="submit" class="contact-form-btn" value="Send">
  </form></div>


  
  <div class="col-md-4 col-sm-12 col-xs-12">
<div >
        <div class="footer-widget" >
            <div class="fw-timetable" style="left: 20%">
                <div class="fw-title">Location</div>
                <div class="timetable-content">
                    <table>
                        <tr>
                            <td>Address</td>
                            <td>Ghosh Clinic, Berka, Road, Dhunela, Sohna, Haryana 122103</td>
                        </tr>
                        <tr>
                                <td>Phone</td>
                            <td>8478019973</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>clinicghosh@gmail.com</td>
                        </tr>
                       <tr>
                           <td>Follow
                           </td>
                           <td>
                           <div class="fw-social">
                                   
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a onclick="myFunction()"><i class="fa fa-linkedin"></i></a>
                                <div></td>
                        </tr>
                       
                    </table>
                    
                </div>
                <div style="overflow:hidden;resize:none;max-width:100%;width:350px;height:250px;">
                    <div id="google-maps-display" style="height:100%; width:100%;max-width:100%;">
                        <iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Ghosh+Clinic+|+Homeopathy+|+Doctor+|+Clinic,+Road,+Sector+36,+Dhunela,+Sohna,+Haryana,+India&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
                    </div>
                    <a class="embed-map-html" href="https://ghoshclinic.com" id="grab-map-data">Homeopathy Clinic</a><style>#google-maps-display img{max-width:none!important;background:none!important;font-size: inherit;font-weight:inherit;}</style>
                </div>
</div>


</div>
</div>
</div>

<script>
        function myFunction() {
        document.getElementById("name").value = "Gosh Clinic";
        document.getElementById("email").value = "cinicghosh@gmail.com";
        document.getElementById("phone").value = "8478019973";
        document.getElementById("message").value = "Ghosh Clinic, Berka, Road, Sector 36, Dhunela, Sohna, Haryana 122103";
        }
    </script>

@endsection
