@extends('frontend.client')

@section('css')
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

@endsection 


@section('main')

	<!-- inner page banner -->
    @include('frontend.pages.block.banner_page') 
      <!-- section -->
      <div class="section padding_layout_1 product_list_main" style="margin-top: 12rem;">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="row">
                  @foreach($dataProduct as $key=>$value)
                     <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
                        <div class="product_list">
                           <div class="product_img"><a href="{{route('productDetail',[
                           	'category'=>$category->code,
                           	'slug'=>$value->code
                           ])}}" ><img class="img-responsive" src="{{url('public')}}/uploads/Products/{{$value->avatar}}" alt="{{$value->avatar}}"></a> </div>
                           <div class="product_detail_btm">
                              <div class="center">
                                 <h4><a href="{{route('productDetail',[
                                 'category'=>$category->code,
                                 'slug'    =>$value->code

                                 ])}}">{{$value->name}}</a></h4>
                              </div>
                              <div class="starratin">
                                 <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                              </div>
                              <div class="product_price">
                                 <p>Giá: <span class="old_price">{{number_format($value->price)}}vnđ</span></p>
                                 <p>Giá KM: <span class="new_price">{{number_format($value->sale)}}vnđ</span></p>
                              </div>
                           </div>
                        </div>
                     </div>
                   @endforeach
                  
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end section -->
      <!-- Modal -->
      <div class="modal fade" id="search_bar" role="dialog">
         <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
               </div>
               <div class="modal-body">
                  <div class="row">
                     <div class="col-lg-8 col-md-8 col-sm-8 offset-lg-2 offset-md-2 offset-sm-2 col-xs-10 col-xs-offset-1">
                        <div class="navbar-search">
                           <form action="#" method="get" id="search-global-form" class="search-global">
                              <input type="text" placeholder="Type to search" autocomplete="off" name="s" id="search" value="" class="search-global__input">
                              <button class="search-global__btn"><i class="fa fa-search"></i></button>
                              <div class="search-global__note">Begin typing your search above and press return to search.</div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- End Model search bar -->


@endsection

@section('js')
<!-- js section -->
      <script src="{{url('public/frontend')}}/js/jquery.min.js"></script>
      <script src="{{url('public/frontend')}}/js/bootstrap.min.js"></script>
      <!-- menu js -->
      <script src="{{url('public/frontend')}}/js/menumaker.js"></script>
      <!-- wow animation -->
      <script src="{{url('public/frontend')}}/js/wow.js"></script>
      <!-- custom js -->
      <script src="{{url('public/frontend')}}/js/custom.js"></script>

@endsection