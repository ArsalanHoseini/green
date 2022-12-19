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
								<h2 class="breadcrumbs_title">افزودن به سبد خرید</h2>
								<nav aria-label="breadcrumb">
								  <ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="ti-home"></i></a></li>
									<li class="breadcrumb-item"><a href="#">فروشگاه</a></li>
									<li class="breadcrumb-item active" aria-current="page">افزودن به سبد خرید</li>
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
					<div class="row">
						
						<div class="col-lg-8 col-md-12 col-sm-12 col-12">
							<div class="table-responsive">
								<table class="table">
									<thead>
										<tr>
											<th scope="col">محصول</th>
											<th scope="col">قیمت</th>
											<th scope="col">تعداد</th>
											<th scope="col">جمع</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="tbl_cart_product">
													<div class="tbl_cart_product_thumb">
														<img src="assets/img/vegetables/1.png" class="img-fluid" alt="" />
													</div>
													<div class="tbl_cart_product_caption">
														<h5 class="tbl_pr_title">نام محصول</h5>
														<span class="tbl_pr_quality theme-cl">قهوه ای</span>
													</div>
												</div>
											</td>
											<td><h4 class="tbl_org_price">11000 تومان</h4></td>
											<td><input type="number" class="form-control tbl_quan" value="2" /></td>
											<td>
												<div class="tbl_pr_action">
													<h5 class="tbl_total_price">11000 تومان</h5>
													<a href="#" class="tbl_remove"><i class="ti-close"></i></a>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							
							<!-- Coupon Box -->
							<div class="row align-items-end justify-content-between mb-10 mb-md-0">
								<div class="col-12 col-md-7">

									<!-- Coupon -->
									<form class="mb-7 mb-md-0">
										<div class="col">
											<label class="font-size-sm font-weight-bold">کد کوپن:</label>
										</div>
										<div class="row form-row">
											<div class="col">
												<!-- Input -->
												<input class="form-control form-control-sm" type="text" placeholder="شماره کوپن را وارد کنید*">
											</div>
											<div class="col-auto">
												<!-- Button -->
												<button class="btn btn-dark" type="submit">درخواست</button>
											</div>
										</div>
									</form>

								</div>
								
								<div class="col-12 col-md-auto m-full">
								<!-- Button -->
								<button class="btn btn-outline-dark">آپدیت سبد خرید</button>
								</div>
							</div>
							<!-- Coupon Box -->
							
						</div>
						
						<div class="col-lg-4 col-md-12 col-sm-12 col-12">
							<div class="cart_detail_box mb-4">
								<div class="card-body">
									<ul class="list-group list-group-sm list-group-flush-y list-group-flush-x">
										<li class="list-group-item d-flex">
											<h5 class="mb-0">خلاصه سفارش</h5>
										</li>
										<li class="list-group-item d-flex">
											<span>جمع کل</span> <span class="mr-auto font-size-sm">89000 تومان</span>
										</li>
										<li class="list-group-item d-flex">
											<span>مالیات</span> <span class="mr-auto font-size-sm">0</span>
										</li>
										<li class="list-group-item d-flex font-size-lg font-weight-bold">
											<span>جمع</span> <span class="mr-auto font-size-sm">89000 تومان</span>
										</li>
										<li class="list-group-item font-size-sm text-center text-gray-500">
											هزینه ارسال در بررسی محاسبه می شود *
										</li>
									</ul>
								</div>
							</div>
							<a class="btn btn-block btn-dark mb-2" href="#">ادامه به پرداخت</a>
							<a class="px-0 text-body" href="#"><i class="ti-back-right ml-2"></i> ادامه خرید</a>
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
		
			<!-- ============================ Footer End ================================== -->
			
@endsection