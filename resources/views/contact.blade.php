@extends('layouts.master')
@section('title', 'Contact')
@section('content')
<!-- breadcrumbs-area-start -->
<div class="breadcrumbs-area mb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumbs-menu">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#" class="active">contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumbs-area-end -->
<!-- googleMap-area-start -->
<div class="map-area mb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div id="googleMap"></div>
            </div>
        </div>
    </div>
</div>
<!-- googleMap-end -->
<!-- contact-area-start -->
<div class="contact-area mb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="contact-info">
                    <h3>Contact info</h3>
                    <ul>
                        <li>
                            <i class="fa fa-map-marker"></i>
                            <span>Address: </span>
                            1234 Pall Mall Street, England
                        </li>
                        <li>
                            <i class="fa fa-envelope"></i>
                            <span>Phone: </span>
                            (800) 0123 4567 890
                        </li>
                        <li>
                            <i class="fa fa-mobile"></i>
                            <span>Email: </span>
                            <a href="#">info@bootexperts.com</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="contact-form">
                    <h3><i class="fa fa-envelope-o"></i>Leave a Message</h3>
                    <form id="contact-form" action="https://d29u17ylf1ylz9.cloudfront.net/koparion-v1/mail.php" method="post">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="single-form-3">
                                    <input name="name" type="text" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single-form-3">
                                    <input name="email" type="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="single-form-3">
                                    <input name="subject" type="text" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="single-form-3">
                                    <textarea name="message" placeholder="Message"></textarea>
                                    <button class="submit" type="submit">SEND MESSAGE</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <p class="form-messege"></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact-area-end -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBMlLa3XrAmtemtf97Z2YpXwPLlimRK7Pk"></script>
<script>
/* Google Map js */
function initialize() {
              var mapOptions = {
                zoom: 15,
                scrollwheel: false,
                center: new google.maps.LatLng(23.810332, 90.412518)
              };

              var map = new google.maps.Map(document.getElementById('googleMap'),
                  mapOptions);

              var marker = new google.maps.Marker({
                position: map.getCenter(),
                animation:google.maps.Animation.BOUNCE,
                icon: 'img/map.png',
                map: map
              });

            }
            google.maps.event.addDomListener(window, 'load', initialize);
</script>
@endsection
