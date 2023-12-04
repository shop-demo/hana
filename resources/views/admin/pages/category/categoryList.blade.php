@extends('admin.master')
@section('css')
  <style>

  </style>
@endsection
@section('content')
<main id="main" class="main">
	
	<div class="pagetitle p-2">
		<h2 class="pt-3">{{$title}}</h2>
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
			<div class="col-12">

				<div class="card">
					<div class="card-body">
						<h5 class="card-title"></h5>
						<div class="d-flex flex-column">
						<!-- thongbao-->
						  <div class="p-2">
						  	@if(session('success'))
							<div class="alert alert-success text-center delete">
								<strong >{{session('success')}}</strong> 
							</div>
							@else
							<div class="alert alert-light text-center">
								<p>Chưa có dữ liệu nào được thêm vào.</p> 
							</div>
							@endif
						  </div>
						  <!-- seach-->
						  <div class="p-2 ">
						 	<div class="d-flex justify-content-between ">
							  <div class="p-2 ">
							  	<a href="{{route('admin.categoryAdd')}}"  class="btn btn-success">Thêm mới</a>
							  	<a href="{{route('admin.categoryDeleteAll')}}"  class="btn btn-danger allDelete">Delete-All</a>

							  </div>
							  <div class=" p-2">
							  	<form class="d-flex mb-3 ">
								@csrf
								<input class="form-control me-2" type="text" placeholder="Search">
								<button class="btn btn-primary" type="button">Search</button>
							</form>
							  </div>
							</div>
						  </div>

						</div>
						
						<div class="col-12">
							
							<!-- Table with stripped rows -->
							<form action="" method="POST" id="deleteAll">
								@csrf @method('delete')
								<table class="table">
									<thead>
										<tr>
											<th style="width:2px;height:auto;">#</th>
											<th><input class="form-check-input" type="checkbox" id="check1" name="check-all" value="something" ></th>
											<th scope="col">Name</th>
											<th scope="col">Code</th>
											<th scope="col">Parent_id</th>
											<th scope="col">Status</th>
											<th scope="col">Created_at</th>
											<th scope="col">Updated_at</th>
											<th scope="col">Action</th>
										</tr>
									</thead>
									<tbody>
										@foreach($categoryList as $key=>$list)
										<tr>
											<td>{{$key+1}}</td>
											<td ><input class="form-check-input" type="checkbox" id="check1" name="option[]" value="{{$list->id}}" ></td>
											<td>{{$list->name}}</td>
											<td>{{$list->code}}</td>
											<td>{{$list->id_cha}}</td>
											<td>
											
											@if($list->status == 0)
												<span class="badge bg-danger" >Ẩn</span>
											@else
												<span class="badge bg-success">Hiện</span>
											@endif	
											
											</td>
											<td>{{$list->created_at}}</td>
											<td>{{$list->updated_at}}</td>
											<td>
												<div class="d-flex">
													<a href="{{route('admin.categoryEdit',['id'=> $list->id])}}" class="btn btn-info btn-sm">Edit</a>
													<form method="post" action="" id="form-delete">
													 @csrf @method('delete')
														<a href="{{route('admin.categoryDelete',['id'=> $list->id])}}" class="btn btn-secondary btn-sm ms-1 categoryDelete"><i class="fa fa-trash-o"></i>
														</a>
													</form>

												</div>
											</td>
											
										</tr>
										@endforeach
										

									</tbody>
								</table>
							</form>
							<!-- End Table with stripped rows -->
						</div>
						<div class="row">
						
							<div class="col-lg-12 mt-3">
							

								<ul class="pagination">
									<li class="page-item"><a class="page-link" href="#">Previous</a></li>
									<li class="page-item"><a class="page-link" href="#">1</a></li>
									<li class="page-item active"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#">Next</a></li>
								</ul>
							</div>
						</div>

					</div>
				</div>

			</div>
		</div>
	</section>

</main><!-- End #main -->

@endsection
@section('js')

<script type="text/javascript">
	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});

</script>
 <script src="{{url('public/admins')}}/jquery/deleteCategory.js"></script>

@endsection