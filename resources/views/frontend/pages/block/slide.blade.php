
@section('css')
<!-- owl stylesheets --> 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css" integrity="sha512-C8Movfk6DU/H5PzarG0+Dv9MA9IZzvmQpO/3cIlGIflmtY3vIud07myMu4M/NTPJl8jmZtt/4mC9bAioMZBBdA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.video.play.png" />

<style type="text/css" media="screen">
/*
  .slideItem{
    display: flex; 
    position: relative;
    width:100%;
    height:40rem;
    background-image: url('https://wowslider.com/sliders/demo-18/data1/images/hongkong1081704.jpg') ;
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    object-fit : cover;
   

  }*/
  .slideItem::before{
    content: "";
    display: block;
    position: absolute;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.6);
  }
  button.owl-prev span {
    
    font-size: 5rem;
    padding:0 1rem;
    color: #fff;
    position: absolute;
    top: 50%;
    left: 0.5rem;
    transform: translateY(-50%);

   
  }
  button.owl-next span {
    
    font-size: 5rem;
    padding:0 1rem;
    color: #fff;
    position: absolute;
    top: 50%;
    right: 0.5rem;
    transform: translateY(-50%);

  }
  .caption{
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    padding-bottom: 5rem;

  }
    
 
  .caption p{
    color: #fff !important;
    margin: 0;
    padding: 0.8rem 0;

  }
  
 /*
  .caption p{
    font-size: 24px !important; 
 }*/

  @media (max-width: 767px){
   
    .caption{
      position: absolute;
      left:0;
      right: 0;
      bottom: 0;
      padding-bottom: 5rem;

    }

    p.display-1.linkBanner{
      font-size:16px; 
      
    }
    p.h1.description_banner{
      font-size:15px; 
      text-transform: capitalize;
      
    }

  
  }

 
</style>

@endsection

<!-- section slider -->
@php  @endphp

<div id="slider" class="section main_slider">
 <div class="container-fuild">
  <div class="row">
    <div class="owl-carousel owl-theme">
    @foreach($data_Slides as $key=>$banner)
      <div class="slideItem"
                              style="display: flex; 
                              position: relative;
                              width:100%;
                              height:40rem;
                              background-image: url('{{url('public/uploads/slides/'.$banner->image.'')}}') ;
                              background-position: center;
                              background-size: cover;
                              background-repeat: no-repeat;
                              object-fit : cover;">
       
        <div class="container caption" >
          
          <p class="display-2 linkBanner">{{$banner->link}}</h2>
          <p class="h4 description_banner">{{$banner->description}}</p>

        </div>
      </div>
    @endforeach 
  
   </div>
 </div>
</div>
<!-- end section -->
<!-- tại sao lựa chọn chúng tôi -->


@section('js')
<!-- javascript --> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script  type="text/javascript" charset="utf-8" async defer>
        $(document).ready(function(){

          $('.owl-carousel').owlCarousel({

            loop:true,
            margin:0,
            nav:true,

            responsive:{
              0:{
                items:1
              },
              600:{
                items:1
              },
              1000:{
                items:1
              }
            }
          })

        });

  
</script>

@endsection
