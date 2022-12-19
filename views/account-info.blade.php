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
					
						<div class="col-lg-4 col-md-3">
							<nav class="dashboard-nav mb-10 mb-md-0">
							  <div class="list-group list-group-sm list-group-strong list-group-flush-x">
								<a class="list-group-item list-group-item-action dropright-toggle" href="order.html">
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
								<a class="list-group-item list-group-item-action dropright-toggle active" href="account-info.html">
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
										
											<div class="col-12 col-md-6">
												<!-- Password -->
												<div class="form-group">
													<label>رمز عبور فعلی *</label>
													<input class="form-control" type="password" placeholder="رمز عبور فعلی *" required="">
												</div>
											</div>
										
											<div class="col-12 col-md-6">
												<!-- Password -->
												<div class="form-group">
													<label>رمز عبور جدید *</label>
													<input class="form-control" type="password" placeholder="رمز عبور جدید *" required="">
												</div>
											</div>
										
											<div class="col-12 col-lg-6">
												<!-- Birthday -->
												<div class="form-group">
												
													<label>تاریخ تولد</label>
													<div class="row">
														<div class="col-auto">
															<!-- Date -->
															<label class="sr-only">روز</label>
															<select class="form-control">
															  <option>10</option>
															  <option>11</option>
															  <option selected="">12</option>
															</select>
														</div>
														
														<div class="col">
															<!-- Date -->
															<label class="sr-only">ماه</label>
															<select class="form-control">
															  <option>فروردین</option>
															  <option>اردیبهشت</option>
															  <option selected="">خرداد</option>
															</select>
														</div>
														
														<div class="col-auto">
															<!-- Date -->
															<label class="sr-only">سال</label>
															<select class="form-control">
															  <option>1370</option>
															  <option selected="">1369</option>
															  <option>1368</option>
															</select>
														</div>
												  
													</div>
												</div>

											</div>
										
											<div class="col-12 col-lg-6">
												<!-- Gender -->
												<div class="form-group mb-8">
													<label>جنسیت</label>
													<div class="btn-group-toggle mt-2 d-flex bd-highlight">
														<div class="ml-2">
															<input id="male" class="radio-custom" name="gen" type="radio">
															<label for="male" class="radio-custom-label">مرد</label>
														</div>
														<div class="mr-1">
															<input id="female" class="radio-custom" name="gen" type="radio">
															<label for="female" class="radio-custom-label">زن</label>
														</div>
													</div>
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
		</div>
		<!-- ============================================================== -->
		<!-- End Wrapper -->
		<!-- ============================================================== -->

		<!-- ============================================================== -->
		<!-- All Jquery -->
@endsection