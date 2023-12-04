@extends('frontend.client')
@section('css')
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
      <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
  <style type="text/css" media="screen">
    .error{
      color: red;
    }
  </style>
@endsection

@section('main')
<div class="container" >
  <div class="row" id="load_div">
    <div class="col-sm-12" style="margin: 4rem auto;" >
      <div class="full">
                     <div class="tab-info login-section">
                        <p class=""><a class="btn btn-primary text-uppercase" data-toggle="collapse" id="btn" role="button" aria-expanded="false" aria-controls="register" style="color:#fff">
                         Đăng ký tài khoản </a></p> 
                     </div>
                        <div class="login-form-checkout">
                          <p class="h3">Khách hàng mới</p>
                           <p>Bằng cách tạo tài khoản bạn có thể mua sắm nhanh hơn, cập nhật tình trạng đơn hàng, theo dõi những đơn hàng đã đặt và đặc biệt là sẽ được hưởng nhiều chương trình ưu đãi!</p>

                            <h4 class="mgs text-success p-2 m-3 text-center" ></h4>
                          
                           <form action="{{route('register')}}" method="POST" id="formRegister">
                            <input type="hidden" name="url" value="{{route('register')}}" id="urlForm"/>
                              <fieldset>
                                 <div class="row">
                                  @csrf
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                       <label for="username">Họ tên <span>*</span></label>
                                       <input class="input-text" name="name" id="username"  type="text" value="{{ old('username') }}">
                                       <p class="err_name error"></p>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                       <label for="password">Email <span>*</span></label>
                                       <input class="input-text" name="email" id="email"  type="email" value="{{ old('email') }}">
                                      <p class="err_email error"></p>
                                      
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                       <label for="password">Password <span>*</span></label>
                                       <input class="input-text" name="password" id="pass"  type="password" value="{{ old('password') }}">
                                      <p class="err_password error"></p>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 btn-login">
                                       <button class="bt_main">Login</button>
                                       <span class="remeber">
                                       <input type="checkbox">Remember me</span> 
                                    </div>
                                 </div>
                              </fieldset>
                           </form>
                        </div>
                     
      </div>
    </div>
  </div>


  <!--Đăng nhập - login -->
  <div class="row">

      <div class="col-md-6" style="margin: 3rem auto;">
          <div class="checkout-form">
            <p class="h2" style="text-align: center;">Đăng nhập</p>
            @if(session('success'))
            <p class="mgs text-center" >{{session('success')}}</p>
            @endif
            <p class="text-center Info" ></p>
              <form action="{{route('loginPost')}}" method="post" id="loginId">
              <input type="hidden" value="{{route('loginPost')}}" name="url" id="urlLogin" />
               @csrf
                    <div class="mb-3 mt-3">
                      <label for="email" class="form-label">Email:</label>
                      <input type="email" class="form-control" id="loginEmail" placeholder="email" name="email" value="{{old('email') }}">
                      <p class="error_email loi" style="color:red;"></p>
                    </div>
                    <div class="mb-3">
                      <label for="pwd" class="form-label">Password:</label>
                      <input type="password" class="form-control" id="login_pwd" placeholder="Mật khẩu" name="password" value="{{old('password') }}">
                      <p class="error_password loi" style="color:red;"></p>
                    </div>
                    <div class="form-check mb-3">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="remember" value=""> Remember me
                      </label>
                    </div>
                <button type="submit" class="btn btn-primary btnLogin">Login</button>
                </form>
          </div>
      </div>

  </div>



</div>

@endsection
@section('js')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="{{url('public/frontend/access/register.js')}}" type="text/javascript" charset="utf-8" async defer>
</script>
<script src="{{url('public/frontend/access/login.js')}}" type="text/javascript" charset="utf-8" async defer></script>

<script type="text/javascript" charset="utf-8" async defer>
  
</script>

@endsection
