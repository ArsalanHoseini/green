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
								<h2 class="breadcrumbs_title">سفارش من</h2>
								<nav aria-label="breadcrumb">
								  <ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="ti-home"></i></a></li>
									<li class="breadcrumb-item"><a href="#">حساب کاربری</a></li>
									<li class="breadcrumb-item active" aria-current="page">سفارش من</li>
								  </ol>
								</nav>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<!-- =========================== Breadcrumbs =================================== -->
			
			
			<!-- =========================== My Order =================================== -->
			<section class="gray">
				<div class="container">
					<div class="row">
						
						<div class="col-lg-4 col-md-3">
							<nav class="dashboard-nav mb-10 mb-md-0">
							  <div class="list-group list-group-sm list-group-strong list-group-flush-x">
								<a class="list-group-item list-group-item-action dropright-toggle active" href="order.html">
								  سفارشات من
								</a>
								<a class="list-group-item list-group-item-action dropright-toggle" href="order-history.html">
								  تاریخچه سفارشات
								</a>
								<a class="list-group-item list-group-item-action dropright-toggle" href="order-tracking.html">
								  رهگیری سفارشات
								</a>
								<a class="list-group-item list-group-item-action dropright-toggle" href="wishlist.html">
								  مورد علاقه
								</a>
								<a class="list-group-item list-group-item-action dropright-toggle" href="account-info.html">
								  تنظیمات حساب
								</a>
								<a class="list-group-item list-group-item-action dropright-toggle" href="payment-methode.html">
								  روش های پرداخت
								</a>
								<a class="list-group-item list-group-item-action dropright-toggle" href="login-signup.html">
								  خروج
								</a>
							  </div>
							</nav>
						</div>
						
						<div class="col-lg-8 col-md-9">
						
							<div class="card-body bg-white mb-4">
								<div class="row">
									<div class="col-6 col-lg-3">
										<!-- Heading -->
										<h6 class="text-muted mb-1">شماره سفارش:</h6>
										<!-- Text -->
										<p class="mb-lg-0 font-size-sm font-weight-bold">65874589</p>
									</div>
									
									<div class="col-6 col-lg-3">
										<!-- Heading -->
										<h6 class="text-muted mb-1">زمان ارسال:</h6>
										<!-- Text -->
										<p class="mb-lg-0 font-size-sm font-weight-bold">
											<span>10 فروردین 1400</span>
										</p>
									</div>
									
									<div class="col-6 col-lg-3">
										<!-- Heading -->
										<h6 class="text-muted mb-1">وضعیت:</h6>
										<!-- Text -->
										<p class="mb-0 font-size-sm font-weight-bold">در انتظار تحویل</p>
									</div>
									
									<div class="col-6 col-lg-3">
										<!-- Heading -->
										<h6 class="text-muted mb-1">هزینه سفارش:</h6>
										<!-- Text -->
										<p class="mb-0 font-size-sm font-weight-bold">259000 تومان</p>
									</div>
									
								</div>
							</div>
							
							<!-- Order Items -->
							<div class="card style-2 mb-4">
								<div class="card-header">
									<h4 class="mb-0">3 مورد سفارش</h4>
								</div>
								<div class="card-body">
									<ul class="item-groups">
									
										<!-- Single Items -->
										<li>
											<div class="row align-items-center">
												<div class="col-4 col-md-3 col-xl-2">
													<a href="#"><img src="assets/img/fruits/2.png" alt="..." class="img-fluid"></a>
												</div>
												
												<div class="col">
													<!-- Title -->
													<p class="mb-2 font-size-sm font-weight-bold">
														<a class="text-body" href="product.html">آناناس تازه اوکیو</a> <br>
														<span class="theme-cl">80000 تومان</span>
													</p>

													<!-- Text -->
													<div class="font-size-sm text-muted">
														وزن: 2 کیلوگرم <br>
														مزرعه: مزرعه مواد غذایی
													</div>

												</div>
											</div>
										</li>
										
										<!-- Single Items -->
										<li>
											<div class="row align-items-center">
												<div class="col-4 col-md-3 col-xl-2">
													<a href="#"><img src="assets/img/fruits/3.png" alt="..." class="img-fluid"></a>
												</div>
												
												<div class="col">
													<!-- Title -->
													<p class="mb-2 font-size-sm font-weight-bold">
														<a class="text-body" href="product.html">آناناس تازه اوکیو</a> <br>
														<span class="theme-cl">80000 تومان</span>
													</p>

													<!-- Text -->
													<div class="font-size-sm text-muted">
														وزن: 2 کیلوگرم <br>
														مزرعه: مزرعه مواد غذایی
													</div>

												</div>
											</div>
										</li>
										
										<!-- Single Items -->
										<li>
											<div class="row align-items-center">
												<div class="col-4 col-md-3 col-xl-2">
													<a href="#"><img src="assets/img/fruits/4.png" alt="..." class="img-fluid"></a>
												</div>
												
												<div class="col">
													<!-- Title -->
													<p class="mb-2 font-size-sm font-weight-bold">
														<a class="text-body" href="product.html">آناناس تازه اوکیو</a> <br>
														<span class="theme-cl">80000 تومان</span>
													</p>

													<!-- Text -->
													<div class="font-size-sm text-muted">
														وزن: 2 کیلوگرم <br>
														مزرعه: مزرعه مواد غذایی
													</div>

												</div>
											</div>
										</li>
										
									</ul>
								</div>
							</div>
							
							<!-- Total Items -->
							<div class="card style-2 mb-4">
								<div class="card-header">
									<h4 class="mb-0">سفارش کل</h4>
								</div>
								<div class="card-body">
									<ul class="list-group list-group-sm list-group-flush-y list-group-flush-x">
										<li class="list-group-item d-flex">
											<span>جمع کل</span>
											<span class="mr-auto">140000 تومان</span>
										</li>
									
										<li class="list-group-item d-flex">
											<span>مالیات</span>
											<span class="mr-auto">20000 تومان</span>
										</li>
										
										<li class="list-group-item d-flex">
											<span>ارسال</span>
											<span class="mr-auto">15000 تومان</span>
										</li>
										
										<li class="list-group-item d-flex font-size-lg font-weight-bold">
											<span>جمع</span>
											<span class="mr-auto">177000 تومان</span>
										</li>
									</ul>
								</div>
							</div>
							
							<!-- Shipping & Billing -->
							<div class="card style-2">
								<div class="card-header">
									<h4 class="mb-0">جزئیات ارسال و صورتحساب</h4>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-12 col-md-4">
											<!-- Heading -->
											<p class="mb-2 font-weight-bold">
											  آدرس قبض:
											</p>

											<p class="mb-7 mb-md-0">
											  ایران ، تهران ، <br>
											  زعفرانیه ، <br>
											  خیابان هستی ، <br>
											  ساختمان مهر, <br>
											  پلاک 856
											</p>

										</div>
									  
										<div class="col-12 col-md-4">
											<!-- Heading -->
											<p class="mb-2 font-weight-bold">
											  آدرس ارسال:
											</p>

											<p class="mb-7 mb-md-0">
											  ایران ، تهران ، <br>
											  زعفرانیه ، <br>
											  خیابان هستی ، <br>
											  ساختمان مهر, <br>
											  پلاک 856
											</p>
										</div>
										
										<div class="col-12 col-md-4">

											<!-- Heading -->
											<p class="mb-2 font-weight-bold">
											  روش ارسال:
											</p>

											<p class="mb-4 text-gray-500">
											  ارسال استاندارد <br>
											  (5 - 7 روز)
											</p>

											<!-- Heading -->
											<p class="mb-2 font-weight-bold">
											  روش پرداخت:
											</p>

											<p class="mb-0">
											  کارت بانکی
											</p>

										</div>
									</div>
								</div>
							</div>
							
						</div>
						
					</div>
				</div>
			</section>
			<!-- =========================== My Order =================================== -->

			
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