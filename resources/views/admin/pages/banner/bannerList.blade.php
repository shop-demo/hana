@extends('admin.master')
@section('css')
  <style>

  </style>
@endsection

@section('content')
<main id="main" class="main">

  <div class="pagetitle">
    <h2 class="fw-bold pt-3 ">Quản lý banner</h2>

    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="">Home</a></li>
        <li class="breadcrumb-item">Tables</li>
        <li class="breadcrumb-item active">Data</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <section class="section dashboard">
    <div class="row">
     <div class="col-12">
      <div class="card top-selling overflow-auto">

        <div class="filter"><!--bộ lọc -->
          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <li class="dropdown-header text-start">
              <h6>Filter</h6>
            </li>

            <li><a class="dropdown-item" href="#">Today</a></li>
            <li><a class="dropdown-item" href="#">This Month</a></li>
            <li><a class="dropdown-item" href="#">This Year</a></li>
          </ul>
        </div>

        <div class="card-body pb-0">
          <h5 class="card-title">{{$title}}</h5>
          <div class="p-2">
            @if(session('success'))
            <div class="alert alert-success text-center">
              <strong >{{session('success')}}</strong> 
            </div>
            @else
            <div class="alert alert-light text-center">
              <p>Chưa có dữ liệu nào được thêm vào.</p> 
            </div>
            @endif
          </div>
          <!-- btn -->
          <div class="d-flex bg-light mt-1 mb-5 p-3">
            <a href="{{route('admin.bannerAdd')}}" class="btn btn-success">Add Banner</a>
            <a href="{{route('admin.banner_DeleteAll')}}" class="btn btn-danger ms-3 banner_DeleteAll">Delete-all</a>

          </div><!-- End btn -->
          
          <form action="" method="POST" id="main_formBanner">
            @csrf @method('DELETE')     
            <table class="table">
              <thead>
                <tr>
                  <th><input class="form-check-input" type="checkbox" value="" name="checkName" /></th>
                  <th scope="col">Ảnh Slide</th>
                  <th scope="col">Tên </th>
                   <th scope="col">Mô tả</th>
                  <th scope="col">Link</th>
                  <th scope="col">Status</th>
                  <th scope="col">created_at</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
               @foreach($bannerList as $key=>$item)
                <tr>
                  <td><input class="form-check-input" type="checkbox" value="{{ $item->id }}" name="checkName[]" /></td>
                  <td><a href="#"><img src="{{url('public')}}/uploads/slides/{{$item->image}}" alt="{{$item->image}}"></a></td>
                  <td><a href="#" class="text-primary fw-bold"></a>{{$item->name}}</td>
                  <td><a href="#" class="text-primary fw-bold"></a>{{$item->description}}</td>
                  <td><a href="#" class="text-primary fw-bold"></a>{{$item->link}}</td>
                 
                  <td>
                  <form action="" method="POST" id="form_active">
                    @csrf @method('PUT')
                    @if($item->status == 0)
                    <span ><a class="badge bg-danger act" href="{{route('admin.active',['id'=>$item])}}">Private</a></span>
                    @else
                    <span><a class="badge bg-success notActive" href="{{route('admin.notActive',['id'=>$item])}}">Public</a></span>
                    @endif
                  </form>  
                  </td>
                  <td>{{$item->created_at == null ? '' : $item->created_at->format('m-d-Y')}}</td>
                  <td>
                    <div class="d-flex">
                      <a href="{{route('admin.bannerEdit',['id'=>$item->id])}}" class="btn btn-info btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                      <form action="" method="post" id="formBanner">
                        @csrf 
                        @method('DELETE')
                        <a href="{{route('admin.bannerDelete',['id'=>$item->id])}}" class="btn btn-warning btn-sm ms-1 DeleteBanner"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                      </form>
                    </div>
                  </td>
                </tr>
               @endforeach   
              </tbody>
            </table>
          </form>
          
        </div>

      </div>
    </div><!-- End Top Selling -->
    {{ $bannerList->appends(request()->all())->links() }}
    

    <!--phân trang -->
  
  </div>
</section>
</main>

@endsection
@section('js')
  <script type="text/javascript" charset="utf-8" async defer>
    $(document).ready(function(){
          $('.DeleteBanner').on('click',function(e){
            e.preventDefault();
            var banner_href = $(this).attr('href');
            $('form#formBanner').attr('action',banner_href);


            if(confirm('bạn có muốn xóa không')==false){
             window.location = "{{route('admin.bannerList')}}";
             alert('Chưa có dữ liệu nào được xóa');
           }else{
            $('form#formBanner').submit();
          }
          

        });


        //deleteAll
       $('.banner_DeleteAll').on('click',function(e){
       e.preventDefault();
       var _button = $(this).attr('href');
       var sub = $('form#main_formBanner').attr('action',_button);
       
       if(confirm('bạn có muốn xóa không')==false){
             window.location = "{{route('admin.bannerList')}}";
             alert('Chưa có dữ liệu nào được xóa');
          }else{
            $('form#main_formBanner').submit();
          }
      
    })
       //active
       $('.act').on('click',function(e){
        
         e.preventDefault();
        
        var _href = $(this).attr('href');
        var action = $('form#form_active').attr('action',_href);
        
        $('form#form_active').submit();

       });

      //notActive
       $('.notActive').on('click',function(e){
        
         e.preventDefault();
        
        var _href = $(this).attr('href');
        var notAction = $('form#form_active').attr('action',_href);
        
        $('form#form_active').submit();

       });



    });
  </script>
@endsection