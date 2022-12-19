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
								<h2 class="breadcrumbs_title">صفحه پرداخت</h2>
								<nav aria-label="breadcrumb">
								  <ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="ti-home"></i></a></li>
									<li class="breadcrumb-item"><a href="#">فروشگاه</a></li>
									<li class="breadcrumb-item active" aria-current="page">صفحه پرداخت</li>
								  </ol>
								</nav>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<!-- =========================== Breadcrumbs =================================== -->
			
			<!-- =========================== Billing Section =================================== -->
			<section>
				<div class="container">
					<div class="row">
						
						<div class="col-lg-8 col-md-12">
							<form>

								<!-- Heading -->
								<h4 class="mb-5">جزئیات صورتحساب</h4>

								<!-- Billing details -->
								<div class="row mb-5">
									<div class="col-12 col-md-6">
										<!-- First Name -->
										<div class="form-group">
										<label for="checkoutBillingFirstName">نام *</label>
										<input class="form-control form-control-sm" id="checkoutBillingFirstName" type="text" placeholder="نام" required="">
										</div>
									</div>
									
									<div class="col-12 col-md-6">
										<!-- Last Name -->
										<div class="form-group">
										<label for="checkoutBillingLastName">نام خانوادگی *</label>
										<input class="form-control form-control-sm" id="checkoutBillingLastName" type="text" placeholder="نام خانوادگی" required="">
										</div>
									</div>
								
									<div class="col-12">
										<!-- Email -->
										<div class="form-group">
										<label for="checkoutBillingEmail">ایمیل *</label>
										<input class="form-control form-control-sm" id="checkoutBillingEmail" type="email" placeholder="ایمیل" required="">
										</div>
									</div>
								
									<div class="col-12">
										<!-- Company Name -->
										<div class="form-group">
										<label for="checkoutBillingCompany">نام شرکت *</label>
										<input class="form-control form-control-sm" id="checkoutBillingCompany" type="text" placeholder="نام شرکت (اختیاری)">
										</div>
									</div>
								
									<div class="col-12">
										<!-- Country -->
										<div class="form-group">
										<label for="checkoutBillingCountry">کشور *</label>
										<input class="form-control form-control-sm" id="checkoutBillingCountry" type="text" placeholder="کشور" required="">
										</div>
									</div>
								
									<div class="col-12">
										<!-- Address Line 1 -->
										<div class="form-group">
										<label for="checkoutBillingAddress">آدرس 1 *</label>
										<input class="form-control form-control-sm" id="checkoutBillingAddress" type="text" placeholder="آدرس 1" required="">
										</div>
									</div>
								
									<div class="col-12">
										<!-- Address Line 2 -->
										<div class="form-group">
										<label for="checkoutBillingAddressTwo">آدرس 2</label>
										<input class="form-control form-control-sm" id="checkoutBillingAddressTwo" type="text" placeholder="آدرس 2 (اختیاری)">
										</div>
									</div>
								
									<div class="col-12 col-md-6">
										<!-- Town / City -->
										<div class="form-group">
										<label for="checkoutBillingTown">شهر *</label>
										<input class="form-control form-control-sm" id="checkoutBillingTown" type="text" placeholder="شهر" required="">
										</div>
									</div>
								
									<div class="col-12 col-md-6">
										<!-- ZIP / Postcode -->
										<div class="form-group">
										<label for="checkoutBillingZIP">کدپستی *</label>
										<input class="form-control form-control-sm" id="checkoutBillingZIP" type="text" placeholder="کدپستی" required="">
										</div>
									</div>
								
									<div class="col-12">
										<!-- Mobile Phone -->
										<div class="form-group mb-0">
										<label for="checkoutBillingPhone">تلفن همراه *</label>
										<input class="form-control form-control-sm" id="checkoutBillingPhone" type="tel" placeholder="تلفن همراه" required="">
										</div>
									</div>
								
								</div>

								<!-- Heading -->
								<h4 class="mb-3">جزئیات ارسال</h4>

								<!-- Shipping details -->
								<div class="table-responsive mb-3">
									<table class="table table-bordered table-sm table-hover mb-0">
										<tbody>
											<tr>
												<td>
													<div class="custom-control custom-radio">
														<input class="custom-control-input" id="checkoutShippingStandard" name="shipping" type="radio">
														<label class="custom-control-label text-body text-nowrap" for="checkoutShippingStandard">ارسال استاندارد</label>
													</div>
												</td>
												<td>تحویل در 5 - 7 روز کاری</td>
												<td>8000 تومان</td>
											</tr>
											
											<tr>
												<td>
													<div class="custom-control custom-radio">
														<input class="custom-control-input" id="checkoutShippingExpress" name="shipping" type="radio">
														<label class="custom-control-label text-body text-nowrap" for="checkoutShippingExpress">ارسال اکسپرس</label>
													</div>
												</td>
												<td>تحویل در 3 - 5 روز کاری</td>
												<td>12000 تومان</td>
											</tr>
											
											<tr>
												<td>
													<div class="custom-control custom-radio">
														<input class="custom-control-input" id="checkoutShippingShort" name="shipping" type="radio">
														<label class="custom-control-label text-body text-nowrap" for="checkoutShippingShort">1 - 2 ارسال</label>
													</div>
												</td>
												<td>تحویل در 1 - 2 روز کاری</td>
												<td>18000 تومان</td>
											</tr>
											
											<tr>
												<td>
													<div class="custom-control custom-radio">
														<input class="custom-control-input" id="checkoutShippingFree" name="shipping" type="radio">
														<label class="custom-control-label text-body text-nowrap" for="checkoutShippingFree">ارسال رایگان</label>
													</div>
												</td>
												<td>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است.</td>
												<td>00</td>
											</tr>
										</tbody>
									</table>
								</div>

								<!-- Address -->
								<div class="mb-5">

									<!-- Checkbox -->
									<div class="customs-control customs-checkbox">
										<input class="customs-control-input" id="checkoutShippingAddress" type="checkbox" />
										<label for="checkoutShippingAddress" class="customs-control-label font-size-sm collapsed" data-toggle="collapse" data-target="#checkoutShippingAddressCollapse">به آدرس دیگری ارسال شود؟</label>
									</div>

									<!-- Collapse -->
									<div class="collapse" id="checkoutShippingAddressCollapse" style="">
									  <div class="row mt-4">
										<div class="col-12">

										  <!-- Country -->
										  <div class="form-group">
											<label for="checkoutShippingAddressCountry">کشور *</label>
											<input class="form-control form-control-sm" id="checkoutShippingAddressCountry" type="text" placeholder="کشور">
										  </div>

										</div>
										<div class="col-12">

										  <!-- Address Line 1 -->
										  <div class="form-group">
											<label for="checkoutShippingAddressLineOne">آدرس 1 *</label>
											<input class="form-control form-control-sm" id="checkoutShippingAddressLineOne" type="text" placeholder="آدرس 1">
										  </div>

										</div>
										<div class="col-12">

										  <!-- Address Line 2 -->
										  <div class="form-group">
											<label for="checkoutShippingAddressLineTwo">آدرس 2</label>
											<input class="form-control form-control-sm" id="checkoutShippingAddressLineTwo" type="text" placeholder="آدرس 2 (اختیاری)">
										  </div>

										</div>
										<div class="col-6">

										  <!-- Town / City -->
										  <div class="form-group">
											<label for="checkoutShippingAddressTown">شهر *</label>
											<input class="form-control form-control-sm" id="checkoutShippingAddressTown" type="text" placeholder="شهر">
										  </div>

										</div>
										<div class="col-6">

										  <!-- Town / City -->
										  <div class="form-group">
											<label for="checkoutShippingAddressZIP">کد پستی *</label>
											<input class="form-control form-control-sm" id="checkoutShippingAddressZIP" type="text" placeholder="کد پستی">
										  </div>

										</div>
										<div class="col-12">

										  <!-- Button -->
										  <button class="btn btn-outline-dark" type="submit">
											ذخیره آدرس
										  </button>

										</div>
									  </div>
									</div>

								</div>


								<!-- Heading -->
								<h4 class="mb-3">پرداخت</h4>

								<!-- List group -->
								<div class="list-group list-group-sm mb-5">
									<div class="list-group-item">
										<!-- Radio -->
										<div class="custom-control custom-radio">
											<!-- Input -->
											<input class="custom-control-input" id="checkoutPaymentCard" name="payment" type="radio" data-toggle="collapse" data-action="show" data-target="#checkoutPaymentCardCollapse" checked>
											<!-- Label -->
											<label class="custom-control-label font-size-sm text-body text-nowrap" for="checkoutPaymentCard">کارت اعتباری <img class="mr-2" src="assets/img/card.png" alt="..."></label>
										</div>
									</div>
									<div class="list-group-item collapse show py-0" id="checkoutPaymentCardCollapse">

										<!-- Form -->
										<div class="form-row py-5">
											<div class="col-12">
												<div class="form-group mb-4">
													<label class="bold-simple">شماره کارت</label>
													<input class="form-control form-control-sm" id="checkoutPaymentCardNumber" type="text" placeholder="شماره کارت *" required="">
												</div>
											</div>
											
											<div class="col-12">
												<div class="form-group mb-4">
													<label class="bold-simple">نام روی کارت</label>
													<input class="form-control form-control-sm" id="checkoutPaymentCardName" type="text" placeholder="نام روی کارت *" required="">
												</div>
											</div>
											
											<div class="col-12 col-md-4">
												<div class="form-group mb-md-0">
													<label class="bold-simple">ماه</label>
													<select class="custom-select form-control" id="checkoutPaymentMonth">
														<option>فروردین</option>
														<option>اردیبهشت</option>
														<option>خرداد</option>
													</select>
												</div>
											</div>
											
											<div class="col-12 col-md-4">
												<div class="form-group mb-md-0">
													<label class="bold-simple">سال</label>
														<select class="custom-select form-control" id="checkoutPaymentCardYear">
														<option>1400</option>
														<option>1399</option>
														<option>1398</option>
													</select>
												</div>
											</div>
											<div class="col-12 col-md-4">
												<div class="form-group mb-md-0">
													<label class="bold-simple">CVV2</label>
													<div class="input-group input-group-merge">
													<input class="form-control form-control-sm" id="checkoutPaymentCardCVV" type="text" placeholder="CVV2 *" required="">
														<div class="input-group-append">
															<span class="input-group-text" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="شماره CVV2 در کارت اعتباری یا کارت نقدی شما یک شماره 3 رقمی در کارت های اعتباری است." data-original-title="" title="">
															<i class="ti-help"></i>
															</span>
														</div>
													</div>
												</div>
											</div>
										</div>

									</div>
								
									<div class="list-group-item">
										<!-- Radio -->
										<div class="custom-control custom-radio">
											<!-- Input -->
											<input class="custom-control-input" id="checkoutPaymentPaypal" name="payment" type="radio" data-toggle="collapse" data-action="hide" data-target="#checkoutPaymentCardCollapse">
											<!-- Label -->
											<label class="custom-control-label font-size-sm text-body text-nowrap" for="checkoutPaymentPaypal"><img src="assets/img/paypal.png" alt="..."></label>
										</div>
									</div>
									
								</div>

								<!-- Notes -->
								<textarea class="form-control form-control-sm mb-9 mb-md-0 font-size-xs" rows="5" placeholder="یادداشت های سفارش (اختیاری)"></textarea>

							</form>
						</div>
						
						<div class="col-12 col-md-12 col-lg-4">
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
											<span>مالیات</span> <span class="mr-auto font-size-sm">00</span>
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
			<!-- =========================== Billing Section =================================== -->
			
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
	@endsection