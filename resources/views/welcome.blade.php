@extends('frontend.client')

 
@section('main')
<?php ?>

<!-- section slider -->
<!-- end slider -->
      <!-- end section -->
      @include('frontend.pages.block.slide')
      <!-- section -->
      <div class="section padding_layout_1">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <div class="main_heading text_align_center">
                        <h2><span>Tại Sao lại chọn chúng tôi</span></h2>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="row">
                     <div class="col-md-4">
                        <div class="full">
                           <div class="Services_blog_inner">
                              <div class="icon"><img src="{{url('public/frontend')}}/images/layout_img/si1.png" alt="#" /></div>
                              <h4 class="Services-heading">Best Quality</h4>
                              <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="full">
                           <div class="Services_blog_inner">
                              <div class="icon"><img src="{{url('public/frontend')}}/images/layout_img/si2.png" alt="#" /></div>
                              <h4 class="Services-heading">Experienced</h4>
                              <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="full">
                           <div class="Services_blog_inner">
                              <div class="icon"><img src="{{url('public/frontend')}}/images/layout_img/si3.png" alt="#" /></div>
                              <h4 class="Services-heading">Expert team</h4>
                              <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="full">
                           <div class="Services_blog_inner">
                              <div class="icon"><img src="{{url('public/frontend')}}/images/layout_img/si4.png" alt="#" /></div>
                              <h4 class="Services-heading">Affordable Services</h4>
                              <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="full">
                           <div class="Services_blog_inner">
                              <div class="icon"><img src="{{url('public/frontend')}}/images/layout_img/si5.png" alt="#" /></div>
                              <h4 class="Services-heading">90 Days warranty</h4>
                              <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="full">
                           <div class="Services_blog_inner">
                              <div class="icon"><img src="{{url('public/frontend')}}/images/layout_img/si6.png" alt="#" /></div>
                              <h4 class="Services-heading">Award winning</h4>
                              <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end section -->
      <!-- section -->
      <div class="section padding_layout_1 section_information">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="full">
                     <h4>Let us make the differences<br>Interior Design</h4>
                  </div>
                  <div class="full">
                     <a class="read-btn" href="contact.html">Discover Now</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end section -->
      <!-- section -->
      <div class="section padding_layout_1 portfolio_section">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <div class="main_heading text_align_center">
                        <h2><span>Sản Phẩm Mới</span></h2>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <div class="gallery_tab">
                        <div class="center">
                           <div class="tab_buttons">
                              <button class="cuts_bt filter-button" data-filter="all">All Projects</button>
                              <button class="cuts_bt filter-button" data-filter="houses">Houses</button>
                              <button class="cuts_bt filter-button" data-filter="decoration">Decoration</button>
                              <button class="cuts_bt filter-button" data-filter="furniture">Furniture</button>
                              <button class="cuts_bt filter-button" data-filter="office">Office</button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter houses furniture">
                  <img src="{{url('public/frontend')}}/images/layout_img/pr1.png" alt="#" class="img-responsive" />
               </div>
               <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter decoration furniture">
                  <img src="{{url('public/frontend')}}/images/layout_img/pr2.png" alt="#" class="img-responsive" />
               </div>
               <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter houses furniture">
                  <img src="{{url('public/frontend')}}/images/layout_img/pr3.png" alt="#" class="img-responsive" />
               </div>
               <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter decoration office">
                  <img src="{{url('public/frontend')}}/images/layout_img/pr4.png" alt="#" class="img-responsive" />
               </div>
               <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter houses office">
                  <img src="{{url('public/frontend')}}/images/layout_img/pr5.png" alt="#" class="img-responsive" />
               </div>
               <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter decoration office">
                  <img src="{{url('public/frontend')}}/images/layout_img/pr6.png" alt="#" class="img-responsive" />
               </div>
            </div>
         </div>
      </div>
      <!-- end section -->
      <!-- section -->
      <div class="section padding_layout_1 light_silver gross_layout">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <div class="main_heading text_align_left">
                        <h2>Ch</h2>
                        <p class="large">Sed ut perspiciatis unde omnis iste natus error sit..</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12 col-lg-8 text-align_left">
                  <div class="full large_cont_p">
                     <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore 
                        veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit<br><br>sed
                        quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur, 
                        adip isci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis 
                        nostr um exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea 
                        volupt ate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?<br>beginning of sentences are capitalized
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end section -->
      <!-- section -->
      <div class="section padding_layout_1">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <div class="main_heading text_align_center heading_with_subtitle">
                        <h2><span>Sản phẩm giá tốt</span></h2>
                        <p class="large">Chúng tôi có sản phẩm giá cả phải chăng với dịch vụ tốt để giúp bạn trở thành  <br>Khách hàng hạnh phúc.</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">

               @foreach($productList as $key=>$product)

               <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
                  <div class="product_list">
                     <div class="product_img">
                        <a href=""><img class="img-responsive" src="{{url('public')}}/uploads/Products/{{$product->avatar}}" alt="{{$product->avatar}}" /></a>
                     </div>

                     <div class="product_detail_btm">
                        <div class="center">
                           <h4><a href="{{route('productDetail',
                              ['category'=>$product->cat->code,

                              'slug' =>$product->code

                              ])}}">{{$product->name}}</a></h4>
                           </div>
                           <div class="starratin">
                              <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                           </div>
                           <div class="product_price">
                              <p><span class="old_price">{{number_format($product->price)}}vnđ</span> <span class="new_price">{{number_format($product->sale)}}vnđ</span></p>
                           </div>
                        </div>
                     </div>
                  </div>
                  @endforeach  



               </div>
            </div>
         </div>
         <!-- end section -->
         <!-- section -->
         <div class="section padding_layout_1 section_information">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="full">
                        <div id="counter">
                           <div class="counter_blog">
                              <div class="icon"><img src="{{url('public/frontend')}}/images/layout_img/pr-compl.png" alt="#" /></div>
                              <div class="inform_count">
                                 <div class="counter-value" data-count="2800">0</div>
                                 <h3>Project Complete</h3>
                              </div>
                           </div>
                           <div class="counter_blog">
                              <div class="icon"><img src="{{url('public/frontend')}}/images/layout_img/happy_client.png" alt="#" /></div>
                              <div class="inform_count">
                                 <div class="counter-value" data-count="1020">0</div>
                                 <h3>Happy Clients</h3>
                              </div>
                           </div>
                           <div class="counter_blog">
                              <div class="icon"><img src="{{url('public/frontend')}}/images/layout_img/award.png" alt="#" /></div>
                              <div class="inform_count">
                                 <div class="counter-value" data-count="650">0</div>
                                 <h3>Awards Won</h3>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end section -->
         <!-- section -->
         <div class="section padding_layout_1">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="full">
                        <div class="main_heading text_align_center heading_with_subtitle">
                           <h2><span>Latest from Our Blog</span></h2>
                           <p class="large">We package the products with best Services to make you a<br>happy customer.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-4">
                     <div class="full blog_colum">
                        <div class="blog_feature_img"> <img src="{{url('public/frontend')}}/images/layout_img/post-03.jpg" alt="#" /> </div>
                        <div class="post_time">
                           <p><i class="fa fa-clock-o"></i> April 16, 2018 ( In Maintenance )</p>
                        </div>
                        <div class="blog_feature_head">
                           <h4>Itaque earum rerum hic tenetur</h4>
                        </div>
                        <div class="blog_feature_cont">
                           <p>Lorem ipsum dolor sit amet, consectetur quam justo, pretium adipiscing elit. Vestibulum quam justo, pretium eu tempus ut, ...</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="full blog_colum">
                        <div class="blog_feature_img"> <img src="{{url('public/frontend')}}/images/layout_img/post-04.jpg" alt="#" /> </div>
                        <div class="post_time">
                           <p><i class="fa fa-clock-o"></i> April 16, 2018 ( In Maintenance )</p>
                        </div>
                        <div class="blog_feature_head">
                           <h4>Praesentium  Tips To Computer Repair</h4>
                        </div>
                        <div class="blog_feature_cont">
                           <p>Lorem ipsum dolor sit amet, consectetur quam justo, pretium adipiscing elit. Vestibulum quam justo, pretium eu tempus ut, ...</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="full blog_colum">
                        <div class="blog_feature_img"> <img src="{{url('public/frontend')}}/images/layout_img/post-06.jpg" alt="#" /> </div>
                        <div class="post_time">
                           <p><i class="fa fa-clock-o"></i> April 16, 2018 ( In Maintenance )</p>
                        </div>
                        <div class="blog_feature_head">
                           <h4>sapiente earum rerum hic tenetur</h4>
                        </div>
                        <div class="blog_feature_cont">
                           <p>Lorem ipsum dolor sit amet, consectetur quam justo, pretium adipiscing elit. Vestibulum quam justo, pretium eu tempus ut, ...</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end section -->
         <!-- section -->>
         <!-- end section -->
         <!-- Modal seach-->
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
         <!-- Modal login-->
         
@endsection

