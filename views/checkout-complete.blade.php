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
			<div class="breadcrumbs_wrap gray">
				<div class="container">
					<div class="row align-items-center">
						
						<div class="col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="text-center">
								<h2 class="breadcrumbs_title">پرداخت کامل شد</h2>
								<nav aria-label="breadcrumb">
								  <ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="ti-home"></i></a></li>
									<li class="breadcrumb-item"><a href="#">فروشگاه</a></li>
									<li class="breadcrumb-item active" aria-current="page">پرداخت کامل شد</li>
								  </ol>
								</nav>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<!-- =========================== Breadcrumbs =================================== -->
			
			<!-- =========================== Add To Cart =================================== -->
			<section>
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-10 col-md-12 col-sm-12">
						
							<div class="card py-3 mt-sm-3">
							  <div class="card-body text-center">
								<h2 class="pb-2">بابت سفارش شما متشکرم!</h2>
								<p class="font-size-sm mb-2">سفارش شما ثبت شده است و در اسرع وقت رسیدگی می شود.</p>
								<p class="font-size-sm mb-2">حتماً شماره سفارش خود را یادداشت کنید <span class="font-weight-medium">857DFR5478124.</span></p>
								<p class="font-size-sm">به زودی ایمیلی با تأیید سفارش خود دریافت خواهید کرد. <u>اکنون می توانید:</u></p><a class="btn btn-secondary mt-3 ml-3" href="search-sidebar.html">برگشت به خرید</a><a class="btn btn-primary mt-3" href="order-tracking.html"><i class="czi-location"></i>&nbsp;پیگیری سفارش</a>
							  </div>
							</div>
						
						</div>
					</div>
				</div>
			</section>
			<!-- =========================== Add To Cart =================================== -->
			
			<!-- ============================ Call To Action ================================== --> 
			<section class="theme-bg call_action_wrap-wrap">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							
							<div class="call_action_wrap">
								<div class="call_action_wrap-head">
									<h3>اشتراک در خبر نامه</h3>
									<span>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</span>
								</div>
								<div class="newsletter_box">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="ایمیل خود را وارد کنید">
										<div class="input-group-append">
										<button class="btn search_btn" type="button"><i class="fas fa-arrow-alt-circle-left"></i></button>
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</section>
			<!-- ============================ Call To Action End ================================== -->
			
			<!-- ============================ Footer Start ================================== -->
		@endsection