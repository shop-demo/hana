@extends('admin.master')
@section('css')
<style>

</style>
@endsection
@section('content')
<main id="main" class="main">

  <div class="pagetitle">
    <h2>{{$title}}</h2>

    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Tables</li>
        <li class="breadcrumb-item active">Data</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="row">
        <div class="col-lg-4">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Vai trò người dùng</h5>
                <p>This is an examle page with no contrnt. You can use it as a starter for your custom pages.</p>
              </div>
            </div>

          </div>

          <div class="col-lg-8">

            <div class="card">
              <div class="card-body">
                <h2 class="card-title text-center">Thêm vai trò</h2>
                 <!-- Settings Form -->
                  <form>
                    
                    <div class="mb-3 mt-3">
                      <label for="name" class="form-label">Tên nhóm quyền:</label>
                      <input type="text" class="form-control" id="" placeholder="Enter name" name="name">
                    </div>
                    
                    <div class="row mb-3">
                      <div class="col-lg-12">
                        <div class="row">
                          <p>Routes</p>
                          @foreach($rou as $listRou)
                          <div class="col-md-6">
                         
                            <ul class="list-group mb-1">
                              <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                {{$listRou}}
                              </li>
                              
                            </ul>
                           
                           
                          </div>
                          @endforeach

                        </div>
                        
                      </div>
                      
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form><!-- End settings Form -->
                
               
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
  </section>
</main>

@endsection