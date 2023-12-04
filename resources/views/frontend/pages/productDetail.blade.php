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
      <!-- zoom effect -->
      <link rel='stylesheet' href="{{url('public/frontend')}}/css/hizoom.css">

@endsection 

@section('main')

<!-- inner page banner -->
      <div id="inner_banner" class="section inner_banner_section">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <div class="title-holder">
                        <div class="title-holder-cell text-left">
                           <h1 class="page-title">Shop Detail</h1>
                           <ol class="breadcrumb">
                              <li><a href="{{route('home.index')}}">Home</a></li>
                              <li><a href="">{{$show_ProductDetail->cat->name}}</a></li>
                              <li class="active">{{$show_ProductDetail->name}}</li>
                           </ol>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div> 
      <!-- end inner page banner -->
      <!-- section -->
      <div class="section padding_layout_1 product_detail">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="row">
                     <div class="col-lg-6 col-md-12">
                        <div class="product_detail_feature_img hizoom hi2">
                           <div class="hizoom hi2"><img src="{{url('public')}}/uploads/Products/{{$show_ProductDetail->avatar}}" alt="{{$show_ProductDetail}}" /></div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-12 product_detail_side detail_style1">
                        <div class="product-heading">
                           <h2>{{$show_ProductDetail->name}}</h2>
                        </div>
                        <div class="product-detail-side">
                        <p>Giá: <span>{{number_format($show_ProductDetail->price)}}</span></p>
                        <p>Giá KM: <span class="new-price">{{number_format($show_ProductDetail->sale)}}</span></p>
                        <span class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </span> <span class="review">(5 customer review)</span> </div>
                        <div class="detail-contant">
                           <p>{{$show_ProductDetail->description}}</p>
                           
                           <form class="cart" method="post" action="https://html.design/demo/furnish/cart.html">
                              <div class="quantity">
                                 <input step="1" min="1" max="5" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" type="number">
                              </div>
                              <button type="submit" class="btn sqaure_bt">Mua ngay</button>
                           </form>
                        </div>
                        <div class="share-post">
                           <a href="#" class="share-text">Share</a>
                           <ul class="social_icons">
                              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <div class="full">
                           <div class="tab_bar_section">
                              <ul class="nav nav-tabs" role="tablist">
                                 <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#description">Mô tả sản phẩm</a> </li>
                                 <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#reviews">Nhận xét (2)</a> </li>
                              </ul>
                              <!-- Tab panes -->
                              <div class="tab-content">
                                 <div id="description" class="tab-pane active border-bottom">
                                    <div class="product_desc">
                                       <p>{!! $show_ProductDetail->product_details !!}</p>
                                       
                                    </div>
                                 </div>

                                 <!-- NHận xet -->
                                 <div id="reviews" class="tab-pane fade">
                                    <div class="product_review">
                                       <h3>Reviews (2)</h3>
                                       <div class="commant-text row">
                                          <div class="col-lg-2 col-md-2 col-sm-4">
                                             <div class="profile"> <img class="img-responsive" src="{{url('public/frontend')}}/images/layout_img/client1.png" alt="#"> </div>
                                          </div>
                                          <div class="col-lg-10 col-md-10 col-sm-8">
                                             <h5>Lara jack</h5>
                                             <p><span class="c_date">March 2, 2018</span> | <span><a rel="nofollow" class="comment-reply-link" href="#">Reply</a></span></p>
                                             <span class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </span>
                                             <p class="msg">ThisThis book is a treatise on the theory of ethics, very popular during the Renaissance. 
                                                The first line of Lorem Ipsum, “Lorem ipsum dolor sit amet.. 
                                             </p>
                                          </div>
                                       </div>
                                       <div class="commant-text row">
                                          <div class="col-lg-2 col-md-2 col-sm-4">
                                             <div class="profile"> <img class="img-responsive" src="{{url('public/frontend')}}/images/layout_img/client2.png" alt="#"> </div>
                                          </div>
                                          <div class="col-lg-10 col-md-10 col-sm-8">
                                             <h5>Liana hussy</h5>
                                             <p><span class="c_date">March 2, 2018</span> | <span><a rel="nofollow" class="comment-reply-link" href="#">Reply</a></span></p>
                                             <span class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </span>
                                             <p class="msg">Nunc augue purus, posuere in accumsan sodales ac, euismod at est. Nunc faccumsan ermentum consectetur metus placerat mattis. Praesent mollis justo felis, accumsan faucibus mi maximus et. Nam hendrerit mauris id scelerisque placerat. Nam vitae imperdiet turpis</p>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-sm-12">
                                             <div class="full review_bt_section">
                                                <div class="float-right"> <a class="btn sqaure_bt" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Leave a Review</a> </div>
                                             </div>
                                             <div class="full">
                                                <div id="collapseExample" class="full collapse commant_box">
                                                   <form accept-charset="UTF-8" action="https://html.design/demo/furnish/index.html" method="post">
                                                      <input id="ratings-hidden" name="rating" type="hidden">
                                                      <textarea class="form-control animated" cols="50" id="new-review" name="comment" placeholder="Enter your review here..." required=""></textarea>
                                                      <div class="full_bt center">
                                                         <button class="btn sqaure_bt" type="submit">Save</button>
                                                      </div>
                                                   </form>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <div class="full">
                           <div class="main_heading text_align_left" style="margin-bottom: 25px;">
                              <h3>Sản phẩm cùng loại</h3>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
                        <div class="product_list">
                           <div class="product_img"> <img class="img-responsive" src="{{url('public/frontend')}}/images/layout_img/1.jpg" alt=""> </div>
                           <div class="product_detail_btm">
                              <div class="center">
                                 <h4><a href="shop_detail.html">Product 1</a></h4>
                              </div>
                              <div class="starratin">
                                 <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                              </div>
                              <div class="product_price">
                                 <p><span class="old_price">$1800</span> <span class="new_price">$1500</span></p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
                        <div class="product_list">
                           <div class="product_img"> <img class="img-responsive" src="{{url('public/frontend')}}/images/layout_img/2.jpg" alt=""> </div>
                           <div class="product_detail_btm">
                              <div class="center">
                                 <h4><a href="shop_detail.html">Product 2</a></h4>
                              </div>
                              <div class="starratin">
                                 <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                              </div>
                              <div class="product_price">
                                 <p><span class="old_price">$1800</span> <span class="new_price">$1500</span></p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
                        <div class="product_list">
                           <div class="product_img"> <img class="img-responsive" src="{{url('public/frontend')}}/images/layout_img/3.jpg" alt=""> </div>
                           <div class="product_detail_btm">
                              <div class="center">
                                 <h4><a href="shop_detail.html">Product 3</a></h4>
                              </div>
                              <div class="starratin">
                                 <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                              </div>
                              <div class="product_price">
                                 <p><span class="old_price">$1800</span> <span class="new_price">$1500</span></p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
                        <div class="product_list">
                           <div class="product_img"> <img class="img-responsive" src="{{url('public/frontend')}}/images/layout_img/4.jpg" alt=""> </div>
                           <div class="product_detail_btm">
                              <div class="center">
                                 <h4><a href="shop_detail.html">Product 4</a></h4>
                              </div>
                              <div class="starratin">
                                 <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                              </div>
                              <div class="product_price">
                                 <p><span class="old_price">$1800</span> <span class="new_price">$1500</span></p>
                              </div>
                           </div>
                        </div>
                     </div>
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
      <!-- zoom effect -->
      <script src="{{url('public/frontend')}}/js/hizoom.js"></script>
      <script>
         $('.hi1').hiZoom({
             width: 500,
             position: 'right'
         });
         $('.hi2').hiZoom({
             width: 550,
             position: 'right'
         });
      </script>

@endsection