@extends('layouts.app')
@section('content')
	
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div id="preloader"><div class="preloader"><span></span><span></span></div></div>
		
		
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
		
            <!-- ============================================================== -->
            <!-- Top header  -->
            <!-- ============================================================== -->
            <!-- Start Navigation -->
			<!-- End Navigation -->
			<div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->
			
			<!-- =========================== Breadcrumbs =================================== -->
			<div class="breadcrumbs_wrap dark">
				<div class="container">
					<div class="row align-items-center">
						
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="text-center">
								<h2 class="breadcrumbs_title">تنظیمات حساب</h2>
								<nav aria-label="breadcrumb">
								  <ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="ti-home"></i></a></li>
									<li class="breadcrumb-item"><a href="#">حساب کاربری</a></li>
									<li class="breadcrumb-item active" aria-current="page">تنظیمات حساب</li>
								  </ol>
								</nav>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<!-- =========================== Breadcrumbs =================================== -->
			
			
			<!-- =========================== Account Settings =================================== -->
			<section class="gray">
				<div class="container">
					<div class="row">
					
						<div class="col-lg-8 col-md-9">
							<!-- Total Items -->
							<div class="card style-2">
								<div class="card-header">
									<h4 class="mb-0">جزئیات حساب</h4>
								</div>
								<div class="card-body">
									<form class="submit-page">
										<div class="row">
										
											<div class="col-12 col-md-6">
											  <!-- Email -->
											  <div class="form-group">
												<label>نام *</label>
												<input class="form-control" type="text" placeholder="نام *" value="بهمن" required="">
											  </div>

											</div>
										
											<div class="col-12 col-md-6">
											  <!-- Last Name -->
											  <div class="form-group">
												<label>نام خانوادگی *</label>
												<input class="form-control" type="text" placeholder="نام خانوادگی *" value="سیدی" required="">
											  </div>

											</div>
										
											<div class="col-12">
												<!-- Email -->
												<div class="form-group">
													<label> آدرس ایمیل *</label>
													<input class="form-control" type="email" placeholder="آدرس ایمیل *" value="demo@gmail.com" required="">
												</div>
											</div>
																																
											<div class="col-12">
											  <button class="btn btn-dark" type="submit">ذخیره تغییرات</button>
											</div>
										
										</div>
									</form>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- =========================== Account Settings =================================== -->

		</div>

@endsection