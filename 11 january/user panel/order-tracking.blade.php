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
								<h2 class="breadcrumbs_title">همه سفارشات من</h2>
								<nav aria-label="breadcrumb">
								  <ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="ti-home"></i></a></li>
									<li class="breadcrumb-item"><a href="#">حساب کاربری</a></li>
									<li class="breadcrumb-item active" aria-current="page">همه سفارشات من</li>
								  </ol>
								</nav>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<!-- =========================== Breadcrumbs =================================== -->
			
			
			<!-- =========================== My All Orders =================================== -->
			<section class="gray">
				<div class="container">
					<div class="row">					
						
						<div class="col-lg-8 col-md-9">
						
							<!-- Order Items -->
							<div class="card style-2">
								<div class="card-header">
									<h4 class="mb-0">کل سفارش</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table">
											<thead>
												<tr>
													<th scope="col">محصول</th>
													<th scope="col">شماره سفارش</th>
													<th scope="col">تاریخ ارسال</th>
													<th scope="col">قیمت</th>
													<th scope="col">وضعیت</th>
													<th scope="col">پیگیری</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<th scope="row">
														<div class="tbl_cart_product">
															<div class="tbl_cart_product_thumb m-0">
																<img src="assets/img/vegetables/1.png" class="img-fluid" alt="">
															</div>
														</div>
													</th>
													<td>8910563</td>
													<td>10 فروردین 1400</td>
													<td>89000 تومان</td>
													<td>در حال پردازش</td>
													<td><a href="#" class="btn btn-sm btn-theme">پیگیری سفارش</a></td>
												</tr>												
											</tbody>
										</table>
									</div>
								</div>
							</div>
							
						</div>						
						
					</div>
				</div>
			</section>

			@endsection