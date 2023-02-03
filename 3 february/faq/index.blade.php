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
			<div class="image-bg pt-5 pb-5" style="background:url(assets/img/farmer.png) no-repeat" data-overlay="6">
				<div class="container">
					<div class="row justify-content-center">
						
						<div class="col-lg-9 col-md-12 col-sm-12">
							<div class="text-center">
								<h2 class="mb-3">سوالات متداول</h2>
							</div>
							<div class="faqs_search">
								<div class="blocks search_blocks">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="جستجو در فروشگاه ...">
										<div class="input-group-append">
										<button class="btn search_btn" type="button"><i class="ti-search"></i></button>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<!-- =========================== Breadcrumbs =================================== -->
			
			
			<!-- =========================== FAQ's =================================== -->
			<section>
				<div class="container">
					<div class="row">
					
						<div class="col-lg-3 col-md-4">
							<div class="nav flex-column nav-pills verticle_tab" id="v-pills-tab" role="tablist" aria-orientation="vertical">
								<a class="nav-link active" id="delivery-tab" data-toggle="pill" href="#delivery" role="tab" aria-controls="delivery-tab" aria-selected="true"><i class="ti-truck ml-2"></i>ارسال</a>
								<a class="nav-link" id="order-tab" data-toggle="pill" href="#order" role="tab" aria-controls="order-tab" aria-selected="false"><i class="ti-package ml-2"></i>سفارشات</a>
								<a class="nav-link" id="refunds-tab" data-toggle="pill" href="#refunds" role="tab" aria-controls="refunds-tab" aria-selected="false"><i class="ti-share-alt ml-2"></i>بازپرداخت و بازگشت</a>
								<a class="nav-link" id="stocks-tab" data-toggle="pill" href="#stocks" role="tab" aria-controls="stocks-tab" aria-selected="false"><i class="ti-shopping-cart ml-2"></i>سهام و محصولات</a>
								<a class="nav-link" id="payments-tab" data-toggle="pill" href="#payments" role="tab" aria-controls="payments-tab" aria-selected="false"><i class="ti-credit-card ml-2"></i>روش های پرداخت</a>
								<a class="nav-link" id="technical-tab" data-toggle="pill" href="#technical" role="tab" aria-controls="technical-tab" aria-selected="false"><i class="ti-settings ml-2"></i>مسائل فنی</a>
							</div>
						</div>
						
						<div class="col-lg-9 col-md-8">
							<div class="tab-content" id="v-pills-tabContent">
                                

                                {{--@if--}}


                            </div>
						</div>
						
					</div>
				</div>
			</section>
		@endsection