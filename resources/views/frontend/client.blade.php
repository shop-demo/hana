
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.design/demo/furnish/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Sep 2023 03:59:20 GMT -->
<head>
  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <title>HanaShop</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- site icons -->
  <link rel="icon" href="{{url('public/frontend')}}/images/fevicon/fevicon.png" type="image/gif" />
  <!-- bootstrap css -->
  <link rel="stylesheet" href="{{url('public/frontend')}}/css/bootstrap.min.css" />
  <!-- Site css -->
  <link rel="stylesheet" href="{{url('public/frontend')}}/css/style.css" />
  <!-- responsive css -->
  <link rel="stylesheet" href="{{url('public/frontend')}}/css/responsive.css" />
  <!-- colors css -->
  <link rel="stylesheet" href="{{url('public/frontend')}}/css/colors1.css" />
  <!-- custom css -->
  <link rel="stylesheet" href="{{url('public/frontend')}}/css/custom.css" />
  <!-- wow Animation css -->
  <link rel="stylesheet" href="{{url('public/frontend')}}/css/animate.css" />
  <!-- revolution slider css -->
  <link rel="stylesheet" type="text/css" href="{{url('public/frontend')}}/revolution/css/settings.css" />
  <link rel="stylesheet" type="text/css" href="{{url('public/frontend')}}/revolution/css/layers.css" />
  <link rel="stylesheet" type="text/css" href="{{url('public/frontend')}}/revolution/css/navigation.css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      @yield('css')
    </head>
    <body id="default_theme" class="home_1 ">
      <!-- loader -->
      <!--  <div class="bg_load"> <img class="loader_animation" src="{{url('public/frontend')}}/images/loaders/loader_1.png" alt="#" /> </div> -->
      <!-- end loader -->
      <!-- header -->
      <header id="default_header" class="header_style_1 " > 

       <!-- header top -->
       <div class="header_top">
        <div class="container">
         <div class="row">
          <div class="col-md-9 col-lg-9">
           <div class="full">
            <div class="topbar-left">
             <ul class="list-inline">
              <li><span class="topbar-label"><i class="fa  fa-home"></i></span>
                <a href="" class="topbar-hightlight fs-md-3 text-white">Đăng ký</a> </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-lg-3 right_section_header_top">
        <div class="float-right">
         <ul class="list-inline" style="margin:1.2rem 0; ">
          @if(auth()->guard('cus')->check())
           <li><span class="topbar-hightlight ">Chào bạn : {{Auth::guard('cus')->user()->name}}</span></li>
           <li>
           <form action="" method="POST" id="form_logout">
            @csrf
           <input type="hidden" value="{{route('logout')}}" name='rou_logout' class="rou_logout" />
           <span class="topbar-label"><i class="fa fa-sign-out" style="margin-right:0;"></i></span>
               <a href="{{route('logout')}}" class="topbar-hightlight fs-md-3 text-white" id="logoutName">Logout</a>
           </form>
          </li>
          @endif
         </ul>
         
      </div>
    </div>
  </div>
</div>
</div>
<!-- end header top -->
<!-- header bottom -->


@include('frontend.pages.block.header')

<!-- header bottom end -->
</header>
<!-- end header -->

@yield('main')

<!-- footer -->
<footer class="footer_style_2 footer_blog">
 <div class="container">
  <div class="row">
   <div class="col-md-4">
    <div class="main-heading left_text">

     <h2>Furnish Theme</h2>
   </div>
   <p>Sed ut perspiciatis unde omnis iste natus error sit volu ptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.</p>
   <ul class="social_icons">
     <li class="social-icon fb"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
     <li class="social-icon tw"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
     <li class="social-icon gp"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
   </ul>
 </div>
 <div class="col-md-8">
  <div class="row">
   <div class="col-md-4">
    <div class="main-heading left_text">
     <h2>Additional links</h2>
   </div>
   <ul class="footer-menu">
     <li><a href="about.html"><i class="fa fa-angle-right"></i> About us</a></li>
     <li><a href="term_condition.html"><i class="fa fa-angle-right"></i> Terms and conditions</a></li>
     <li><a href="privacy_policy.html"><i class="fa fa-angle-right"></i> Privacy policy</a></li>
     <li><a href="blog.html"><i class="fa fa-angle-right"></i> News</a></li>
     <li><a href="contact.html"><i class="fa fa-angle-right"></i> Contact us</a></li>
   </ul>
 </div>
 <div class="col-md-4">
  <div class="main-heading left_text">
   <h2>Services</h2>
 </div>
 <ul class="footer-menu">
   <li><a href="#"><i class="fa fa-angle-right"></i> Lighting</a></li>
   <li><a href="#"><i class="fa fa-angle-right"></i> Interior Design</a></li>
   <li><a href="#"><i class="fa fa-angle-right"></i> Floor Planning</a></li>
   <li><a href="#"><i class="fa fa-angle-right"></i> Decoration</a></li>
   <li><a href="#"><i class="fa fa-angle-right"></i> Furniture</a></li>
 </ul>
</div>
<div class="col-md-4">
  <div class="main-heading left_text">
   <h2>Contact us</h2>
 </div>
 <p>123 Second Street Fifth Avenue,<br>
   Manhattan, New York<br>
   <span style="font-size:18px;"><a href="tel:+9876543210">+987 654 3210</a></span>
 </p>
 <div class="footer_mail-section">
   <form>
    <fieldset>
     <div class="field">
      <input placeholder="Email" type="text">
      <button class="button_custom"><i class="fa fa-envelope" aria-hidden="true"></i></button>
    </div>
  </fieldset>
</form>
</div>
</div>
</div>
</div>
<div class="cprt">
  <p>Furnish by <a href="https://html.design/">html.design.</a> All rights reserved.</p>
</div>

</div>
</div>
</footer>
<!-- end footer -->
<!-- js section -->
<script data-cfasync="false" src="https://cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{url('public/frontend')}}/js/jquery.min.js"></script>
<script src="{{url('public/frontend')}}/js/bootstrap.min.js"></script>
<!-- menu js -->
<script src="{{url('public/frontend')}}/js/menumaker.js"></script>
<!-- wow animation -->
<script src="{{url('public/frontend')}}/js/wow.js"></script>
<!-- custom js -->
<script src="{{url('public/frontend')}}/js/custom.js"></script>
<!-- revolution js files -->
<script src="{{url('public/frontend')}}/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="{{url('public/frontend')}}/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="{{url('public/frontend')}}/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="{{url('public/frontend')}}/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="{{url('public/frontend')}}/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="{{url('public/frontend')}}/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="{{url('public/frontend')}}/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="{{url('public/frontend')}}/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="{{url('public/frontend')}}/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="{{url('public/frontend')}}/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="{{url('public/frontend')}}/revolution/js/extensions/revolution.extension.video.min.js"></script>
<!-- map js -->
<script>
         // This example adds a marker to indicate the position of Bondi Beach in Sydney,
         // Australia.
         function initMap() {
           var map = new google.maps.Map(document.getElementById('map'), {
             zoom: 11,
             center: {lat: 40.645037, lng: -73.880224},
             styles: [
             {
              elementType: 'geometry',
              stylers: [{color: '#fefefe'}]
            },
            {
              elementType: 'labels.icon',
              stylers: [{visibility: 'off'}]
            },
            {
              elementType: 'labels.text.fill',
              stylers: [{color: '#616161'}]
            },
            {
              elementType: 'labels.text.stroke',
              stylers: [{color: '#f5f5f5'}]
            },
            {
              featureType: 'administrative.land_parcel',
              elementType: 'labels.text.fill',
              stylers: [{color: '#bdbdbd'}]
            },
            {
              featureType: 'poi',
              elementType: 'geometry',
              stylers: [{color: '#eeeeee'}]
            },
            {
              featureType: 'poi',
              elementType: 'labels.text.fill',
              stylers: [{color: '#757575'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'geometry',
              stylers: [{color: '#e5e5e5'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'labels.text.fill',
              stylers: [{color: '#9e9e9e'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry',
              stylers: [{color: '#eee'}]
            },
            {
              featureType: 'road.arterial',
              elementType: 'labels.text.fill',
              stylers: [{color: '#3d3523'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'geometry',
              stylers: [{color: '#eee'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'labels.text.fill',
              stylers: [{color: '#616161'}]
            },
            {
              featureType: 'road.local',
              elementType: 'labels.text.fill',
              stylers: [{color: '#9e9e9e'}]
            },
            {
              featureType: 'transit.line',
              elementType: 'geometry',
              stylers: [{color: '#e5e5e5'}]
            },
            {
              featureType: 'transit.station',
              elementType: 'geometry',
              stylers: [{color: '#000'}]
            },
            {
              featureType: 'water',
              elementType: 'geometry',
              stylers: [{color: '#c8d7d4'}]
            },
            {
              featureType: 'water',
              elementType: 'labels.text.fill',
              stylers: [{color: '#b1a481'}]
            }
            ]
          });

           var image = 'public/frontend/images/layout_img/location_icon_map_cont.png';
           var beachMarker = new google.maps.Marker({
             position: {lat: 40.645037, lng: -73.880224},
             map: map,
             icon: image
           });
         }
</script>
 
       <!-- navbar fixed -->
<script  type="text/javascript" charset="utf-8" async defer>

        document.addEventListener("DOMContentLoaded", function(){
          window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
              document.getElementById('nav').classList.add('fixed-top');
                  // add padding top to show content behind navbar
                  navbar_height = document.querySelector('.header_bottom').offsetHeight;
                  document.body.style.paddingTop = navbar_height + 'px';
                } else {
                  document.getElementById('nav').classList.remove('fixed-top');
                   // remove padding top from body
                   document.body.style.paddingTop = '0';
                 } 
               });
        }); 
          // DOMContentLoaded  end

</script>
<script src="{{url('public/frontend')}}/access/login.js" type="text/javascript" charset="utf-8" async defer></script>


@yield('js')

</body>

<!-- Mirrored from html.design/demo/furnish/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Sep 2023 03:59:37 GMT -->
</html>