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
											<td><input type="number" class="form-control tbl_quan" min="1" max="10" step="1"></td>
											<td>
												<div class="tbl_pr_action">
													<h5 class="tbl_total_price"> <?php  ?> </h5>
													<a href="#" class="tbl_remove"><i class="ti-close"></i></a>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>

							<div class="table-responsive">
								<form action="">
									<table class="table">
										<thead>
											<tr>
												<th scope="col">نام آدرس</th>
												<th scope="col">منطقه</th>
												<th scope="col">شماره تماس</th>
												<th scope="col">کد پستی</th>
												<th scope="col">انتخاب</th>
											</tr>
										</thead>
										<tbody>

											{{--@foreach--}}

												<tr>
													<td>
														<div class="tbl_cart_product">
															<span class="tbl_pr_quality theme-cl"> خانه </span>													
														</div>
													</td>
													<td><h4 class="tbl_org_price">پاسداران</h4></td>
													
													<td>
														<div class="tbl_pr_action">
															<h5 class="tbl_total_price"> 09123456789 </h5>
														</div>
													</td>
													<td>
														<div class="tbl_pr_action">
															<h5 class="tbl_total_price"> 7111111111 </h5>
														</div>
													</td>
													<td>
														<div> 
															<input type="radio"id="checkadress"	name="adress"	value="">
															<label for="checkadress"></label>
														</div>
													</td>												
												</tr>
											
											{{--@endforeach--}}

										</tbody>
									</table>
									<button class="btn btn-dark" type="submit"> ثبت آدرس</button>
								</form>
							</div>
							<br>
								<form>
									<fieldset>
										<div class="col">
											<label class="font-size-sm font-weight-bold">ساعت تحویل :</label>
										</div>
										<div>
											<input type="radio"id="contactChoice1"	name="time"	value="1"  />
											<label for="contactChoice1"> 15 الی 19 </label>
											<br>
											<input type="radio" id="contactChoice2" name="time" value="2" />
											<label for="contactChoice2"> 9 الی 13 </label>

										</div>
										<div>
											<button type="submit" class="btn btn-dark">ثبت</button>
										</div>
									</fieldset>
								</form> 
							<br>
							<!-- Coupon Box -->
							<div class="row align-items-end justify-content-between mb-10 mb-md-0">
								<div class="col-12 col-md-7">

									<!-- Coupon -->
									<form class="mb-7 mb-md-0">
										<div class="col">
											<label class="font-size-sm font-weight-bold">کد تخفیف:</label>
										</div>
										<div class="row form-row">
											<div class="col">
												<!-- Input -->
												<input class="form-control form-control-sm" type="text" placeholder="کد را وارد کنید*">
											</div>
											<div class="col-auto">
												<!-- Button -->
												<button class="btn btn-dark" type="submit">ثبت</button>
											</div>
										</div>
									</form>

								</div>
								
								<div class="col-12 col-md-auto m-full">
								<!-- Button -->
								<!-- <button class="btn btn-outline-dark"> 9 الی 13 </button>
								<button class="btn btn-outline-dark"> 15 الی 19 </button> -->
								<!-- <form>
									<fieldset>
										<div class="col">
											<label class="font-size-sm font-weight-bold">ساعت تحویل :</label>
										</div>
										<div>
											<input type="radio"id="contactChoice1"	name="time"	value="1"  />
											<label for="contactChoice1"> 15 الی 19 </label>
											
											<input type="radio" id="contactChoice2" name="time" value="2" />
											<label for="contactChoice2"> 9 الی 13 </label>

										</div>
										<div>
											<button type="submit" class="btn btn-dark">ثبت</button>
										</div>
									</fieldset>
								</form> -->
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
						
@endsection