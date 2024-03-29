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
								<h2 class="breadcrumbs_title">ارتباط با ما</h2>
								<nav aria-label="breadcrumb">
								  <ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="ti-home"></i></a></li>
									<li class="breadcrumb-item"><a href="#">فروشگاه</a></li>
									<li class="breadcrumb-item active" aria-current="page">تماس</li>
								  </ol>
								</nav>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<!-- =========================== Breadcrumbs =================================== -->
			
			
			<!-- =========================== Contact Us =================================== -->
			<section class="gray">
				<div class="container">
				
					<div class="row mb-4">
						
						<div class="col-lg-4 col-md-4">
							<div class="contact-box">
								<img src="assets/img/us-marker.png" class="mx-auto" alt="">
								<h4>دفتر مرکزی</h4>
								ایران ، فارس ، شیراز ,<br>
								خیابان پاسداران ، ساختمان آیهان
							</div>
						</div>
						
						<div class="col-lg-4 col-md-4">
							<div class="contact-box">
								<img src="assets/img/india-marker.png" class="mx-auto" alt="">
								<h4> ایمیل </h4>
								greenshiraz@info.com<br>
								
							</div>
						</div>
						
						<div class="col-lg-4 col-md-4">
							<div class="contact-box">
								<img src="assets/img/uk-marker.png" class="mx-auto" alt="">
								<h4> تماس </h4>
								09<br>
								07
							</div>
						</div>
						
					</div>
					
					<div class="row mt-5 align-items-center">
						
						<div class="col-lg-5 col-md-12 hide-91">
							<img src="assets/img/preet-o.png" class="img-fluid rounded" alt="" />
						</div>
						
						<div class="col-lg-7 col-md-12">
							<div class="contact-form">
								<form>
								
									<div class="form-row">
									
										<div class="form-group col-md-6">
										  <label>نام</label>
										  <input type="email" class="form-control" placeholder="نام">
										</div>
										
										<div class="form-group col-md-6">
										  <label>ایمیل</label>
										  <input type="email" class="form-control" placeholder="ایمیل">
										</div>
									</div>
									
									<div class="form-group col-lg-12 col-md-12">
										<label>موضوع</label>
										<input type="text" class="form-control" placeholder="موضوع">
									</div>
									
									<div class="form-group col-lg-12 col-md-12">
										<label>پیام</label>
										<textarea class="form-control" placeholder="پیام..."></textarea>
									</div>
									
									<div class="form-group col-lg-12 col-md-12">
									<button type="submit" class="btn btn-primary">ارسال پیام</button>
									</div>
									
								</form>
							</div>
						</div>
						
					</div>
					
				</div>
			</section>
			<!-- =========================== Contact Us =================================== -->
			@endsection