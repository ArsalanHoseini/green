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
		


			
			<!-- ======================== Offer Banner Start ==================== -->
			<section class="offer-banner-wrap gray pt-4">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="owl-carousel banner-offers owl-theme">
								
								<!-- Single Item -->
								<div class="item">
									<div class="offer_item">
										<div class="offer_item_thumb">
											<div class="offer-overlay"></div>
											<img src="{{asset('assets/img/brand-1.jpg')}}" alt="">
										</div>
										<div class="offer_caption">
											<div class="offer_bottom_caption">
												<p>کشت سبز</p>
												<div class="offer_title">پیشنهادات خوب در شهر شما</div>
												<span>بدون واسطه خرید کنید</span>
											</div>
											<a href="#" class="btn offer_box_btn">خرید کنید</a>
										</div>
									</div>
								</div>
								<!-- Single Item -->
								<div class="item">
									<div class="offer_item">
										<div class="offer_item_thumb">
											<div class="offer-overlay"></div>
											<img src="{{asset('assets/img/brand-3.jpg')}}" alt="">
										</div>
										<div class="offer_caption">
											<div class="offer_bottom_caption">
												<p> بی رقیب </p>
												<div class="offer_title"> پیشنهادات خوب در شهر شما </div>
												<span> بدون واسطه خرید کنید </span>
											</div>
											<a href="#" class="btn offer_box_btn">خرید کنید</a>
										</div>
									</div>
								</div>
								<!-- Single Item -->
								<div class="item">
									<div class="offer_item">
										<div class="offer_item_thumb">
											<div class="offer-overlay"></div>
											<img src="{{asset('assets/img/brand-2.jpg')}}" alt="">
										</div>
										<div class="offer_caption">
											<div class="offer_bottom_caption">
												<p> گلستان </p>
												<div class="offer_title"> پیشنهادات خوب در شهر شما </div>
												<span> بدون واسطه خرید کنید </span>
											</div>
											<a href="#" class="btn offer_box_btn">خرید کنید</a>
										</div>
									</div>
								</div>
								<!-- Single Item -->
								


								<!-- Single Item -->
							</div>
						</div>
					</div>
				</div>
				<div class="ht-25"></div>
			</section>
			<div class="clearfix"></div>
			<!-- ======================== Offer Banner End ==================== -->
			
			<!-- ======================== Choose Category Start ==================== -->
			<section class="pt-0 overlio pb-5">
				<div class="container">
					
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="owl-carousel category-slider owl-theme">
							
								<!-- Single Item -->
								<div class="item">
									<div class="woo_category_box border_style rounded">
										<div class="woo_cat_thumb">
											<a href="#"><img src="{{asset('assets/img/c-1.png')}}" class="img-fluid" alt="" /></a>
										</div>
										<div class="woo_cat_caption">
											<h4><a href="#">سبزیجات </a></h4>
										</div>
									</div>
								</div>
								<!-- Single Item -->
								<div class="item">
									<div class="woo_category_box border_style rounded">
										<div class="woo_cat_thumb">
											<a href="#"><img src="{{asset('assets/img/c-13.png')}}" class="img-fluid" alt="" /></a>
										</div>
										<div class="woo_cat_caption">
											<h4><a href="#"> روغن ها </a></h4>
										</div>
									</div>
								</div>
								<!-- Single Item -->
								<div class="item">
									<div class="woo_category_box border_style rounded">
										<div class="woo_cat_thumb">
											<a href="#"><img src="{{asset('assets/img/c-14.png')}}" class="img-fluid" alt="" /></a>
										</div>
										<div class="woo_cat_caption">
											<h4><a href="#"> عطاری </a></h4>
										</div>
									</div>
								</div>
								<!-- Single Item -->
								<div class="item">
									<div class="woo_category_box border_style rounded">
										<div class="woo_cat_thumb">
											<a href="#"><img src="{{asset('assets/img/c-4.png')}}" class="img-fluid" alt="" /></a>
										</div>
										<div class="woo_cat_caption">
											<h4><a href="#"> پروتئین </a></h4>
										</div>
									</div>
								</div>
								<!-- Single Item -->
								<div class="item">
									<div class="woo_category_box border_style rounded">
										<div class="woo_cat_thumb">
											<a href="#"><img src="{{asset('assets/img/c-15.png')}}" class="img-fluid" alt="" /></a>
										</div>
										<div class="woo_cat_caption">
											<h4><a href="#"> لبنیات </a></h4>
										</div>
									</div>
								</div>
								<!-- Single Item -->
								<div class="item">
									<div class="woo_category_box border_style rounded">
										<div class="woo_cat_thumb">
											<a href="#"><img src="{{asset('assets/img/c-16.png')}}" class="img-fluid" alt="" /></a>
										</div>
										<div class="woo_cat_caption">
											<h4><a href="#"> نان </a></h4>
										</div>
									</div>
								</div>
								<!-- Single Item -->
								<div class="item">
									<div class="woo_category_box border_style rounded">
										<div class="woo_cat_thumb">
											<a href="#"><img src="{{asset('assets/img/c-17.png')}}" class="img-fluid" alt="" /></a>
										</div>
										<div class="woo_cat_caption">
											<h4><a href="#"> محصولات سلولزی </a></h4>
										</div>
									</div>
								</div>
								<!-- Single Item -->
								<div class="item">
									<div class="woo_category_box border_style rounded">
										<div class="woo_cat_thumb">
											<a href="#"><img src="{{asset('assets/img/c-18.png')}}" class="img-fluid" alt="" /></a>
										</div>
										<div class="woo_cat_caption">
											<h4><a href="#"> کنسروها </a></h4>
										</div>
									</div>
								</div>
								<!-- Single Item -->
								<div class="item">
									<div class="woo_category_box border_style rounded">
										<div class="woo_cat_thumb">
											<a href="#"><img src="{{asset('assets/img/c-19.png')}}" class="img-fluid" alt="" /></a>
										</div>
										<div class="woo_cat_caption">
											<h4><a href="#"> قند و شکر </a></h4>
										</div>
									</div>
								</div>
								<!-- Single Item -->
								<div class="item">
									<div class="woo_category_box border_style rounded">
										<div class="woo_cat_thumb">
											<a href="#"><img src="{{asset('assets/img/c-20.png')}}" class="img-fluid" alt="" /></a>
										</div>
										<div class="woo_cat_caption">
											<h4><a href="#">  مغزها  </a></h4>
										</div>
									</div>
								</div>
								<!-- Single Item -->
								<div class="item">
									<div class="woo_category_box border_style rounded">
										<div class="woo_cat_thumb">
											<a href="#"><img src="{{asset('assets/img/c-3.png')}}" class="img-fluid" alt="" /></a>
										</div>
										<div class="woo_cat_caption">
											<h4><a href="#"> نوشیدنی ها </a></h4>
										</div>
									</div>
								</div>
								<!-- Single Item -->
								<div class="item">
									<div class="woo_category_box border_style rounded">
										<div class="woo_cat_thumb">
											<a href="#"><img src="{{asset('assets/img/c-21.png')}}" class="img-fluid" alt="" /></a>
										</div>
										<div class="woo_cat_caption">
											<h4><a href="#"> غلات </a></h4>
										</div>
									</div>
								</div>
								<!-- Single Item -->
								<div class="item">
									<div class="woo_category_box border_style rounded">
										<div class="woo_cat_thumb">
											<a href="#"><img src="{{asset('assets/img/c-22.png')}}" class="img-fluid" alt="" /></a>
										</div>
										<div class="woo_cat_caption">
											<h4><a href="#"> کیک و شیرینی </a></h4>
										</div>
									</div>
								</div>
								<!-- Single Item -->
								<div class="item">
									<div class="woo_category_box border_style rounded">
										<div class="woo_cat_thumb">
											<a href="#"><img src="{{asset('assets/img/c-23.png')}}" class="img-fluid" alt="" /></a>
										</div>
										<div class="woo_cat_caption">
											<h4><a href="#"> نمک </a></h4>
										</div>
									</div>
								</div>
								<!-- Single Item -->
								<div class="item">
									<div class="woo_category_box border_style rounded">
										<div class="woo_cat_thumb">
											<a href="#"><img src="{{asset('assets/img/c-24.png')}}" class="img-fluid" alt="" /></a>
										</div>
										<div class="woo_cat_caption">
											<h4><a href="#"> حبوبات </a></h4>
										</div>
									</div>
								</div>
								<!-- Single Item -->
								<div class="item">
									<div class="woo_category_box border_style rounded">
										<div class="woo_cat_thumb">
											<a href="#"><img src="{{asset('assets/img/c-25.png')}}" class="img-fluid" alt="" /></a>
										</div>
										<div class="woo_cat_caption">
											<h4><a href="#"> ادویه جات </a></h4>
										</div>
									</div>
								</div>
								<!-- Single Item -->
							
							</div>
						</div>
					</div>
					
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- ======================== Choose Category End ==================== -->
			
			<!-- ======================== Fresh Vegetables Start ==================== -->
			<section class="pt-0 pb-5">
				<div class="container">
					
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="sec-heading-flex pl-2 pr-2">
								<div class="sec-heading-flex-one">
									<h2>سبزیجات تازه</h2>
								</div>
								<div class="sec-heading-flex-last">
									<a href="#" class="btn btn-theme">بیشتر<i class="ti-arrow-left mr-2"></i></a>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="owl-carousel products-slider owl-theme">
							
								<!-- Single Item -->
								
									<div class="item">
										<div class="woo_product_grid">
											<span class="woo_pr_tag hot">ویژه</span>
											<div class="woo_product_thumb">
												<img src="{{asset('assets/img/vegetables/1.png')}}" class="img-fluid" alt="" />
											</div>
											<div class="woo_product_caption center">
												<div class="woo_rate">
													<i class="fa fa-star filled"></i>
													<i class="fa fa-star filled"></i>
													<i class="fa fa-star filled"></i>
													<i class="fa fa-star filled"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="woo_title">
													<h4 class="woo_pro_title"><a href="detail-1.html">عنوان محصول</a></h4>
												</div>
												<div class="woo_price">
													<h6>7200 تومان<span class="less_price">11200 تومان</span></h6>
												</div>
											</div>
											<div class="woo_product_cart hover">
												<ul>
													<li><a href="" data-toggle="modal" data-target="#viewproduct-over" class="woo_cart_btn btn_cart"><i class="ti-eye"></i></a></li>
													<li><a href="add-to-cart.html" class="woo_cart_btn btn_view"><i class="ti-shopping-cart"></i></a></li>
													<li><a href="wishlist.html" class="woo_cart_btn btn_save"><i class="ti-heart"></i></a></li>
												</ul>
											</div>								
										</div>
									</div>
								
								<!-- Single Item -->							
							</div>
						</div>
					</div>
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- ======================== Fresh Vegetables End ==================== -->
			
			<!-- ======================== Fresh & Fast Fruits Start ==================== -->
			<section class="pt-0 pb-5">
				<div class="container">
					
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="sec-heading-flex pl-2 pr-2">
								<div class="sec-heading-flex-one">
									<h2>میوه های تازه</h2>
								</div>
								<div class="sec-heading-flex-last">
									<a href="#" class="btn btn-theme">بیشتر<i class="ti-arrow-left mr-2"></i></a>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="owl-carousel products-slider owl-theme">
							
								<!-- Single Item -->
								
									<div class="item">
										<div class="woo_product_grid">
											<div class="woo_product_thumb">
												<img src="{{asset('assets/img/fruits/1.png')}}" class="img-fluid" alt="" />
											</div>
											<div class="woo_product_caption center">
												<div class="woo_rate">
													<i class="fa fa-star filled"></i>
													<i class="fa fa-star filled"></i>
													<i class="fa fa-star filled"></i>
													<i class="fa fa-star filled"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="woo_title">
													<h4 class="woo_pro_title"><a href="detail-1.html">عنوان محصول</a></h4>
												</div>
												<div class="woo_price">
													<h6>7200 تومان<span class="less_price">11200 تومان</span></h6>
												</div>
											</div>
											<div class="woo_product_cart hover">
												<ul>
													<li><a href="" data-toggle="modal" data-target="#viewproduct-over" class="woo_cart_btn btn_cart"><i class="ti-eye"></i></a></li>
													<li><a href="add-to-cart.html" class="woo_cart_btn btn_view"><i class="ti-shopping-cart"></i></a></li>
													<li><a href="wishlist.html" class="woo_cart_btn btn_save"><i class="ti-heart"></i></a></li>
												</ul>
											</div>								
										</div>
									</div>
							
								<!-- Single Item -->							
							</div>
						</div>
					</div>
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- ======================== Fresh & Fast Fruits End ==================== -->
			
			<!-- ======================== Fruits Offers Start ==================== -->
			<section class="pt-0 pb-0">
				<div class="container">
					<div class="row align-items-center offer_flix light-yellow rounded">
					
						<div class="col-lg-7 col-md-7 col-sm-12">
							<div class="offer_block_caption">
								<h2 class="mb-4">محصولات هفته<br>تا 40٪ تخفیف در میوه های تازه</h2>
								<a href="#" class="btn btn-warning">همه محصولات<i class="ti-arrow-left mr-2"></i></a>
							</div>
						</div>
						
						<div class="col-lg-5 col-md-5 col-sm-12">
							<div class="ordering">
								<img src="{{asset('assets/img/side-fruit.png')}}" class="img-fluid" alt="" />
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- ======================== Fruits Offers End ==================== -->
			
			<!-- ======================== Fresh Vegetables & Fruits Start ==================== -->
			<section class="pt-5 pb-5">
				<div class="container">
					
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="sec-heading-flex pl-2 pr-2">
								<div class="sec-heading-flex-one">
									<h2>محصولات جدید اضافه شد</h2>
								</div>
								<div class="sec-heading-flex-last">
									<a href="" class="btn btn-theme">بیشتر<i class="ti-arrow-left mr-2"></i></a>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="owl-carousel products-slider owl-theme">
							
								<!-- Single Item -->
								
									<div class="item">
										<div class="woo_product_grid">
											<span class="woo_pr_tag hot">ویژه</span>
											<div class="woo_product_thumb">
												<img src="{{asset('assets/img/grocery/1.png')}}" class="img-fluid" alt="" />
											</div>
											<div class="woo_product_caption center">
												<div class="woo_rate">
													<i class="fa fa-star filled"></i>
													<i class="fa fa-star filled"></i>
													<i class="fa fa-star filled"></i>
													<i class="fa fa-star filled"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="woo_title">
													<h4 class="woo_pro_title"><a href="detail-1.html">عنوان محصول</a></h4>
												</div>
												<div class="woo_price">
													<h6>7200 تومان<span class="less_price">11200 تومان</span></h6>
												</div>
											</div>
											<div class="woo_product_cart hover">
												<ul>
													<li><a href=""  class="woo_cart_btn btn_cart"><i class="ti-eye"></i></a></li>
													<li><a href="add-to-cart.html" class="woo_cart_btn btn_view"><i class="ti-shopping-cart"></i></a></li>
													<li><a href="wishlist.html" class="woo_cart_btn btn_save"><i class="ti-heart"></i></a></li>
												</ul>
											</div>								
										</div>
									</div>
								
								<!-- Single Item -->							
							</div>
						</div>
					</div>
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- ======================== Fresh Vegetables & Fruits End ==================== -->
			
			<!-- ============================ Footer Start ================================== -->

			<!-- ============================ Footer End ================================== -->
			
			<!-- cart -->
		
			<!-- End Modal -->

		</div>
		<!-- ============================================================== -->
		<!-- End Wrapper -->
		<!-- ============================================================== -->

		<!-- ============================================================== -->
		<!-- All Jquery -->
		<!-- ============================================================== -->
@endsection
