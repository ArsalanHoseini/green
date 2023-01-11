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
			<section class="gray bt-mid">
				<div class="container">
					<div class="row">
											
						<div class="col-lg-8 col-md-9">
							<div class="row">
								
								<!-- Single card -->
								<div class="col-lg-6 col-md-6">
									<div class="add-payment-card">
										
										<div class="ap-card-header mb-2">
											<div class="card-header-thumb">
												<img src="assets/img/card.png" class="img-fluid" alt="">
											</div>
											<div class="mr-auto">
												<label>نام آدرس </label>
												<div class="card-caption">
													02/22	
												</div>
											</div>
										</div>
										
										<div class="ap-card-body">
											<div class="ml-auto mb-3">
												<label>محله</label>
												<div class="card-caption">
													------
												</div>
											</div>
											
											<div class="ap-card-body">
											<div class="ml-auto mb-3">
												<label>آدرس</label>
												<div class="card-caption">
													------
												</div>
											</div>
											
											<div class="ap-card-footer">
												<div class="row">
													<div class="col-9">
														<div class="mr-auto">
															<label>کد پسنی </label>
															<div class="card-caption">
																1111111111
															</div>
														</div>
													</div>													
												</div>
											</div>
											
										</div>
										
									</div>
								</div>
								
								<!-- Single Card -->
								
								
								<!-- Single card -->
								<div class="col-lg-6 col-md-6">
									<div class="add-payment-card center">
										
										<div class="add-pay-card">
											<a href="javascript:void(0);" data-toggle="modal" data-target="#add-payment" class="btn btn-pay"><i class="ti-credit-card"></i></a>
										</div>
										<span>افزودن آدرس</span>
										
									</div>
								</div>
								
							</div>
						</div>
						
					</div>
				</div>
			</section>
@endsection