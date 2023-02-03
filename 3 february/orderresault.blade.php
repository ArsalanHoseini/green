@extends('layouts.app')
@section('content')
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
								<p class="font-size-sm">به زودی پیامی با تأیید سفارش خود دریافت خواهید کرد. <u>اکنون می توانید:</u></p><a class="btn btn-secondary mt-3 ml-3" href="search-sidebar.html">برگشت به خرید</a><a class="btn btn-primary mt-3" href="order-tracking.html"><i class="czi-location"></i>&nbsp;پیگیری سفارش</a>
							  </div>
							</div>
						
						</div>
					</div>
				</div>
			</section>
			
            @endsection