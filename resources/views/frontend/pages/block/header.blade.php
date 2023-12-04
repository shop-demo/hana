@section('css')
   <style type="text/css" media="screen">
      
   </style>
  
@endsection
 <div class="header_bottom " style="background: #f8f8f8;" id="nav">
    
            <div class="container">
               <div class="row sticky-top">
                  <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 ">
                     <!-- logo start -->
                     <div class="logo"><a href="{{route('home.index')}}"><img src="{{url('public/frontend')}}/images/logos/logo.png" alt="logo" /></a></div>
                     <!-- logo end -->
                  </div>
         
                  <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 ">
                     <!-- menu start -->
                     <div class="menu_side">
                        <div id="navbar_menu">
                           <ul class="first-ul">
                              <li>
                                 <a class="active" href="{{route('home.index')}}">Trang chủ</a>
                              </li>
                              <li>
                                 <a href="#">Cửa hàng</a>
                             
                                 <ul>
                                <?php echo menu_Dequy($categoryList);?>
                            
                                 </ul>
                              </li>
                              <li>
                                 <a href="service.html">Dịch vụ</a>
                                 <ul>
                                    <li><a href="">Services Detail</a></li>
                                 </ul>
                              </li>
                              <li>
                                 <a href="">Blog</a>
                                 <ul>
                                    <li><a href="">Blog Detail</a></li>
                                 </ul>
                              </li>
                              
                              <li>
                              <a href="{{route('login')}}">Login</a>
                              <!-- Modal -->
                                
                              </li>
                           </ul>
                        </div>
                        <div class="search_icon">
                           <ul>
                              <li><a href="#" data-toggle="modal" data-target="#search_bar"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                           </ul>
                        </div>
                     </div>
                     <!-- menu end -->
                  </div>
               </div>
            </div>
         </div>
 
