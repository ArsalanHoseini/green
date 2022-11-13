<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="icon" href="assets/img/favicon.png" type="image/gif" sizes="16x16">
		
        <title>شیراز سبز</title>
		 
        <!-- Custom CSS -->
        <link href="assets/css/styles.css" rel="stylesheet">
		
    </head>
	
    <body class="grocery-theme">
	
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
			@include('header')
			<!-- End Navigation -->
			<div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->
			
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
											<img src="assets/img/offer-1.jpg" alt="">
										</div>
										<div class="offer_caption">
											<div class="offer_bottom_caption">
												<p>10% تخفیف</p>
												<div class="offer_title">پیشنهادات خوب در شهر شما</div>
												<span>10٪ تخفیف در همه میوه ها</span>
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
											<img src="assets/img/offer-2.jpg" alt="">
										</div>
										<div class="offer_caption">
											<div class="offer_bottom_caption">
												<p>25% تخفیف</p>
												<div class="offer_title">پیشنهاد ویژه در اولین خرید</div>
												<span>25٪ تخفیف در سبزیجات تازه</span>
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
											<img src="assets/img/offer-3.jpg" alt="">
										</div>
										<div class="offer_caption">
											<div class="offer_bottom_caption">
												<p>30% تخفیف</p>
												<div class="offer_title">تخفیف های سوپر مارکت</div>
												<span>30٪ تخفیف در تخم مرغ و لبنیات</span>
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
											<img src="assets/img/offer-4.jpg" alt="">
										</div>
										<div class="offer_caption">
											<div class="offer_bottom_caption">
												<p>15% تخفیف</p>
												<div class="offer_title">پیشنهاد بهتر برای شما</div>
												<span>پس انداز بیش از 15٪</span>
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
											<img src="assets/img/offer-5.jpg" alt="">
										</div>
										<div class="offer_caption">
											<div class="offer_bottom_caption">
												<p>40% تخفیف</p>
												<div class="offer_title">تخفیف های سوپر مارکت</div>
												<span>40٪ تخفیف در همه غذاهای خشک</span>
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
											<img src="assets/img/offer-6.jpg" alt="">
										</div>
										<div class="offer_caption">
											<div class="offer_bottom_caption">
												<p>15% تخفیف</p>
												<div class="offer_title">پیشنهاد بهتر برای شما</div>
												<span>نوشیدن خوبی برای سلامتی است</span>
											</div>
											<a href="#" class="btn offer_box_btn">خرید کنید</a>
										</div>
									</div>
								</div>
								
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
											<a href="#"><img src="assets/img/c-1.png" class="img-fluid" alt="" /></a>
										</div>
										<div class="woo_cat_caption">
											<h4><a href="#">سبزیجات تازه</a></h4>
										</div>
									</div>
								</div>
								
								<!-- Single Item -->
								<div class="item">
									<div class="woo_category_box border_style rounded">
										<div class="woo_cat_thumb">
											<a href="#"><img src="assets/img/c-3.png" class="img-fluid" alt="" /></a>
										</div>
										<div class="woo_cat_caption">
											<h4><a href="#">لبنیات و تخم مرغ</a></h4>
										</div>
									</div>
								</div>
								
								<!-- Single Item -->
								<div class="item">
									<div class="woo_category_box border_style rounded">
										<div class="woo_cat_thumb">
											<a href="#"><img src="assets/img/c-3.png" class="img-fluid" alt="" /></a>
										</div>
										<div class="woo_cat_caption">
											<h4><a href="#">نوشیدنی</a></h4>
										</div>
									</div>
								</div>
								
								<!-- Single Item -->
								<div class="item">
									<div class="woo_category_box border_style rounded">
										<div class="woo_cat_thumb">
											<a href="#"><img src="assets/img/c-4.png" class="img-fluid" alt="" /></a>
										</div>
										<div class="woo_cat_caption">
											<h4><a href="#">گوشت و غذاهای دریایی</a></h4>
										</div>
									</div>
								</div>
								
								<!-- Single Item -->
								<div class="item">
									<div class="woo_category_box border_style rounded">
										<div class="woo_cat_thumb">
											<a href="#"><img src="assets/img/c-5.png" class="img-fluid" alt="" /></a>
										</div>
										<div class="woo_cat_caption">
											<h4><a href="#">میوه</a></h4>
										</div>
									</div>
								</div>
								
								<!-- Single Item -->
								<div class="item">
									<div class="woo_category_box border_style rounded">
										<div class="woo_cat_thumb">
											<a href="#"><img src="assets/img/c-6.png" class="img-fluid" alt="" /></a>
										</div>
										<div class="woo_cat_caption">
											<h4><a href="#">مواد غذایی</a></h4>
										</div>
									</div>
								</div>
								
								<!-- Single Item -->
								<div class="item">
									<div class="woo_category_box border_style rounded">
										<div class="woo_cat_thumb">
											<a href="#"><img src="assets/img/c-7.png" class="img-fluid" alt="" /></a>
										</div>
										<div class="woo_cat_caption">
											<h4><a href="#">تنقلات</a></h4>
										</div>
									</div>
								</div>
								
								<!-- Single Item -->
								<div class="item">
									<div class="woo_category_box border_style rounded">
										<div class="woo_cat_thumb">
											<a href="#"><img src="assets/img/c-8.png" class="img-fluid" alt="" /></a>
										</div>
										<div class="woo_cat_caption">
											<h4><a href="#">حیوانات اهلی</a></h4>
										</div>
									</div>
								</div>
								
								<!-- Single Item -->
								<div class="item">
									<div class="woo_category_box border_style rounded">
										<div class="woo_cat_thumb">
											<a href="#"><img src="assets/img/c-9.png" class="img-fluid" alt="" /></a>
										</div>
										<div class="woo_cat_caption">
											<h4><a href="#">الکترونیک</a></h4>
										</div>
									</div>
								</div>
								
								<!-- Single Item -->
								<div class="item">
									<div class="woo_category_box border_style rounded">
										<div class="woo_cat_thumb">
											<a href="#"><img src="assets/img/c-10.png" class="img-fluid" alt="" /></a>
										</div>
										<div class="woo_cat_caption">
											<h4><a href="#">مراقبت در منزل</a></h4>
										</div>
									</div>
								</div>
								
								<!-- Single Item -->
								<div class="item">
									<div class="woo_category_box border_style rounded">
										<div class="woo_cat_thumb">
											<a href="#"><img src="assets/img/c-12.png" class="img-fluid" alt="" /></a>
										</div>
										<div class="woo_cat_caption">
											<h4><a href="#">نودل و سس</a></h4>
										</div>
									</div>
								</div>
								
								<!-- Single Item -->
								<div class="item">
									<div class="woo_category_box border_style rounded">
										<div class="woo_cat_thumb">
											<a href="#"><img src="assets/img/c-11.png" class="img-fluid" alt="" /></a>
										</div>
										<div class="woo_cat_caption">
											<h4><a href="#">میان وعده های خشک</a></h4>
										</div>
									</div>
								</div>
							
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
											<img src="assets/img/vegetables/1.png" class="img-fluid" alt="" />
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
												<li><a href="javascript:void(0);" data-toggle="modal" data-target="#viewproduct-over" class="woo_cart_btn btn_cart"><i class="ti-eye"></i></a></li>
												<li><a href="add-to-cart.html" class="woo_cart_btn btn_view"><i class="ti-shopping-cart"></i></a></li>
												<li><a href="wishlist.html" class="woo_cart_btn btn_save"><i class="ti-heart"></i></a></li>
											</ul>
										</div>								
									</div>
								</div>
								
								<!-- Single Item -->
								<div class="item">
									<div class="woo_product_grid">
										<div class="woo_product_thumb">
											<img src="assets/img/vegetables/2.png" class="img-fluid" alt="" />
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
												<li><a href="javascript:void(0);" data-toggle="modal" data-target="#viewproduct-over" class="woo_cart_btn btn_cart"><i class="ti-eye"></i></a></li>
												<li><a href="add-to-cart.html" class="woo_cart_btn btn_view"><i class="ti-shopping-cart"></i></a></li>
												<li><a href="wishlist.html" class="woo_cart_btn btn_save"><i class="ti-heart"></i></a></li>
											</ul>
										</div>								
									</div>
								</div>
								
								<!-- Single Item -->
								<div class="item">
									<div class="woo_product_grid">
										<span class="woo_pr_tag new">جدید</span>
										<div class="woo_product_thumb">
											<img src="assets/img/vegetables/3.png" class="img-fluid" alt="" />
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
												<li><a href="javascript:void(0);" data-toggle="modal" data-target="#viewproduct-over" class="woo_cart_btn btn_cart"><i class="ti-eye"></i></a></li>
												<li><a href="add-to-cart.html" class="woo_cart_btn btn_view"><i class="ti-shopping-cart"></i></a></li>
												<li><a href="wishlist.html" class="woo_cart_btn btn_save"><i class="ti-heart"></i></a></li>
											</ul>
										</div>								
									</div>
								</div>
								
								<!-- Single Item -->
								<div class="item">
									<div class="woo_product_grid">
										<span class="woo_offer_sell">20% تخفیف</span>
										<div class="woo_product_thumb">
											<img src="assets/img/vegetables/4.png" class="img-fluid" alt="" />
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
												<li><a href="javascript:void(0);" data-toggle="modal" data-target="#viewproduct-over" class="woo_cart_btn btn_cart"><i class="ti-eye"></i></a></li>
												<li><a href="add-to-cart.html" class="woo_cart_btn btn_view"><i class="ti-shopping-cart"></i></a></li>
												<li><a href="wishlist.html" class="woo_cart_btn btn_save"><i class="ti-heart"></i></a></li>
											</ul>
										</div>								
									</div>
								</div>
								
								<!-- Single Item -->
								<div class="item">
									<div class="woo_product_grid">
										<span class="woo_pr_tag hot">ویژه</span>
										<div class="woo_product_thumb">
											<img src="assets/img/vegetables/5.png" class="img-fluid" alt="" />
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
												<li><a href="javascript:void(0);" data-toggle="modal" data-target="#viewproduct-over" class="woo_cart_btn btn_cart"><i class="ti-eye"></i></a></li>
												<li><a href="add-to-cart.html" class="woo_cart_btn btn_view"><i class="ti-shopping-cart"></i></a></li>
												<li><a href="wishlist.html" class="woo_cart_btn btn_save"><i class="ti-heart"></i></a></li>
											</ul>
										</div>								
									</div>
								</div>
								
								<!-- Single Item -->
								<div class="item">
									<div class="woo_product_grid">
										<div class="woo_product_thumb">
											<img src="assets/img/vegetables/6.png" class="img-fluid" alt="" />
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
												<li><a href="javascript:void(0);" data-toggle="modal" data-target="#viewproduct-over" class="woo_cart_btn btn_cart"><i class="ti-eye"></i></a></li>
												<li><a href="add-to-cart.html" class="woo_cart_btn btn_view"><i class="ti-shopping-cart"></i></a></li>
												<li><a href="wishlist.html" class="woo_cart_btn btn_save"><i class="ti-heart"></i></a></li>
											</ul>
										</div>								
									</div>
								</div>
								
								<!-- Single Item -->
								<div class="item">
									<div class="woo_product_grid">
										<span class="woo_pr_tag hot">ویژه</span>
										<div class="woo_product_thumb">
											<img src="assets/img/vegetables/7.png" class="img-fluid" alt="" />
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
												<li><a href="javascript:void(0);" data-toggle="modal" data-target="#viewproduct-over" class="woo_cart_btn btn_cart"><i class="ti-eye"></i></a></li>
												<li><a href="add-to-cart.html" class="woo_cart_btn btn_view"><i class="ti-shopping-cart"></i></a></li>
												<li><a href="wishlist.html" class="woo_cart_btn btn_save"><i class="ti-heart"></i></a></li>
											</ul>
										</div>								
									</div>
								</div>
								
								<!-- Single Item -->
								<div class="item">
									<div class="woo_product_grid">
										<span class="woo_pr_tag new">جدید</span>
										<div class="woo_product_thumb">
											<img src="assets/img/vegetables/8.png" class="img-fluid" alt="" />
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
												<li><a href="javascript:void(0);" data-toggle="modal" data-target="#viewproduct-over" class="woo_cart_btn btn_cart"><i class="ti-eye"></i></a></li>
												<li><a href="add-to-cart.html" class="woo_cart_btn btn_view"><i class="ti-shopping-cart"></i></a></li>
												<li><a href="wishlist.html" class="woo_cart_btn btn_save"><i class="ti-heart"></i></a></li>
											</ul>
										</div>								
									</div>
								</div>
							
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
											<img src="assets/img/fruits/1.png" class="img-fluid" alt="" />
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
												<li><a href="javascript:void(0);" data-toggle="modal" data-target="#viewproduct-over" class="woo_cart_btn btn_cart"><i class="ti-eye"></i></a></li>
												<li><a href="add-to-cart.html" class="woo_cart_btn btn_view"><i class="ti-shopping-cart"></i></a></li>
												<li><a href="wishlist.html" class="woo_cart_btn btn_save"><i class="ti-heart"></i></a></li>
											</ul>
										</div>								
									</div>
								</div>
								
								<!-- Single Item -->
								<div class="item">
									<div class="woo_product_grid">
										<span class="woo_pr_tag hot">ویژه</span>
										<div class="woo_product_thumb">
											<img src="assets/img/fruits/2.png" class="img-fluid" alt="" />
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
												<li><a href="javascript:void(0);" data-toggle="modal" data-target="#viewproduct-over" class="woo_cart_btn btn_cart"><i class="ti-eye"></i></a></li>
												<li><a href="add-to-cart.html" class="woo_cart_btn btn_view"><i class="ti-shopping-cart"></i></a></li>
												<li><a href="wishlist.html" class="woo_cart_btn btn_save"><i class="ti-heart"></i></a></li>
											</ul>
										</div>								
									</div>
								</div>
								
								<!-- Single Item -->
								<div class="item">
									<div class="woo_product_grid">
										<div class="woo_product_thumb">
											<img src="assets/img/fruits/3.png" class="img-fluid" alt="" />
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
												<li><a href="javascript:void(0);" data-toggle="modal" data-target="#viewproduct-over" class="woo_cart_btn btn_cart"><i class="ti-eye"></i></a></li>
												<li><a href="add-to-cart.html" class="woo_cart_btn btn_view"><i class="ti-shopping-cart"></i></a></li>
												<li><a href="wishlist.html" class="woo_cart_btn btn_save"><i class="ti-heart"></i></a></li>
											</ul>
										</div>								
									</div>
								</div>
								
								<!-- Single Item -->
								<div class="item">
									<div class="woo_product_grid">
										<span class="woo_pr_tag new">جدید</span>
										<div class="woo_product_thumb">
											<img src="assets/img/fruits/4.png" class="img-fluid" alt="" />
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
												<li><a href="javascript:void(0);" data-toggle="modal" data-target="#viewproduct-over" class="woo_cart_btn btn_cart"><i class="ti-eye"></i></a></li>
												<li><a href="add-to-cart.html" class="woo_cart_btn btn_view"><i class="ti-shopping-cart"></i></a></li>
												<li><a href="wishlist.html" class="woo_cart_btn btn_save"><i class="ti-heart"></i></a></li>
											</ul>
										</div>								
									</div>
								</div>
								
								<!-- Single Item -->
								<div class="item">
									<div class="woo_product_grid">
										<div class="woo_product_thumb">
											<img src="assets/img/fruits/5.png" class="img-fluid" alt="" />
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
												<li><a href="javascript:void(0);" data-toggle="modal" data-target="#viewproduct-over" class="woo_cart_btn btn_cart"><i class="ti-eye"></i></a></li>
												<li><a href="add-to-cart.html" class="woo_cart_btn btn_view"><i class="ti-shopping-cart"></i></a></li>
												<li><a href="wishlist.html" class="woo_cart_btn btn_save"><i class="ti-heart"></i></a></li>
											</ul>
										</div>								
									</div>
								</div>
								
								<!-- Single Item -->
								<div class="item">
									<div class="woo_product_grid">
										<span class="woo_pr_tag hot">ویژه</span>
										<div class="woo_product_thumb">
											<img src="assets/img/fruits/6.png" class="img-fluid" alt="" />
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
												<li><a href="javascript:void(0);" data-toggle="modal" data-target="#viewproduct-over" class="woo_cart_btn btn_cart"><i class="ti-eye"></i></a></li>
												<li><a href="add-to-cart.html" class="woo_cart_btn btn_view"><i class="ti-shopping-cart"></i></a></li>
												<li><a href="wishlist.html" class="woo_cart_btn btn_save"><i class="ti-heart"></i></a></li>
											</ul>
										</div>								
									</div>
								</div>
								
								<!-- Single Item -->
								<div class="item">
									<div class="woo_product_grid">
										<div class="woo_product_thumb">
											<img src="assets/img/fruits/7.png" class="img-fluid" alt="" />
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
												<li><a href="javascript:void(0);" data-toggle="modal" data-target="#viewproduct-over" class="woo_cart_btn btn_cart"><i class="ti-eye"></i></a></li>
												<li><a href="add-to-cart.html" class="woo_cart_btn btn_view"><i class="ti-shopping-cart"></i></a></li>
												<li><a href="wishlist.html" class="woo_cart_btn btn_save"><i class="ti-heart"></i></a></li>
											</ul>
										</div>								
									</div>
								</div>
								
								<!-- Single Item -->
								<div class="item">
									<div class="woo_product_grid">
										<span class="woo_offer_sell">10% تخفیف</span>
										<div class="woo_product_thumb">
											<img src="assets/img/fruits/8.png" class="img-fluid" alt="" />
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
												<li><a href="javascript:void(0);" data-toggle="modal" data-target="#viewproduct-over" class="woo_cart_btn btn_cart"><i class="ti-eye"></i></a></li>
												<li><a href="add-to-cart.html" class="woo_cart_btn btn_view"><i class="ti-shopping-cart"></i></a></li>
												<li><a href="wishlist.html" class="woo_cart_btn btn_save"><i class="ti-heart"></i></a></li>
											</ul>
										</div>								
									</div>
								</div>
							
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
								<img src="assets/img/side-fruit.png" class="img-fluid" alt="" />
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
											<img src="assets/img/grocery/1.png" class="img-fluid" alt="" />
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
												<li><a href="javascript:void(0);" data-toggle="modal" data-target="#viewproduct-over" class="woo_cart_btn btn_cart"><i class="ti-eye"></i></a></li>
												<li><a href="add-to-cart.html" class="woo_cart_btn btn_view"><i class="ti-shopping-cart"></i></a></li>
												<li><a href="wishlist.html" class="woo_cart_btn btn_save"><i class="ti-heart"></i></a></li>
											</ul>
										</div>								
									</div>
								</div>
								
								<!-- Single Item -->
								<div class="item">
									<div class="woo_product_grid">
										<div class="woo_product_thumb">
											<img src="assets/img/grocery/2.png" class="img-fluid" alt="" />
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
												<li><a href="javascript:void(0);" data-toggle="modal" data-target="#viewproduct-over" class="woo_cart_btn btn_cart"><i class="ti-eye"></i></a></li>
												<li><a href="add-to-cart.html" class="woo_cart_btn btn_view"><i class="ti-shopping-cart"></i></a></li>
												<li><a href="wishlist.html" class="woo_cart_btn btn_save"><i class="ti-heart"></i></a></li>
											</ul>
										</div>								
									</div>
								</div>
								
								<!-- Single Item -->
								<div class="item">
									<div class="woo_product_grid">
										<span class="woo_pr_tag new">جدید</span>
										<div class="woo_product_thumb">
											<img src="assets/img/grocery/3.png" class="img-fluid" alt="" />
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
												<li><a href="javascript:void(0);" data-toggle="modal" data-target="#viewproduct-over" class="woo_cart_btn btn_cart"><i class="ti-eye"></i></a></li>
												<li><a href="add-to-cart.html" class="woo_cart_btn btn_view"><i class="ti-shopping-cart"></i></a></li>
												<li><a href="wishlist.html" class="woo_cart_btn btn_save"><i class="ti-heart"></i></a></li>
											</ul>
										</div>								
									</div>
								</div>
								
								<!-- Single Item -->
								<div class="item">
									<div class="woo_product_grid">
										<div class="woo_product_thumb">
											<img src="assets/img/grocery/4.png" class="img-fluid" alt="" />
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
												<li><a href="javascript:void(0);" data-toggle="modal" data-target="#viewproduct-over" class="woo_cart_btn btn_cart"><i class="ti-eye"></i></a></li>
												<li><a href="add-to-cart.html" class="woo_cart_btn btn_view"><i class="ti-shopping-cart"></i></a></li>
												<li><a href="wishlist.html" class="woo_cart_btn btn_save"><i class="ti-heart"></i></a></li>
											</ul>
										</div>								
									</div>
								</div>
								
								<!-- Single Item -->
								<div class="item">
									<div class="woo_product_grid">
										<span class="woo_offer_sell">10% تخفیف</span>
										<div class="woo_product_thumb">
											<img src="assets/img/grocery/5.png" class="img-fluid" alt="" />
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
												<li><a href="javascript:void(0);" data-toggle="modal" data-target="#viewproduct-over" class="woo_cart_btn btn_cart"><i class="ti-eye"></i></a></li>
												<li><a href="add-to-cart.html" class="woo_cart_btn btn_view"><i class="ti-shopping-cart"></i></a></li>
												<li><a href="wishlist.html" class="woo_cart_btn btn_save"><i class="ti-heart"></i></a></li>
											</ul>
										</div>								
									</div>
								</div>
								
								<!-- Single Item -->
								<div class="item">
									<div class="woo_product_grid">
										<span class="woo_pr_tag hot">ویژه</span>
										<div class="woo_product_thumb">
											<img src="assets/img/grocery/6.png" class="img-fluid" alt="" />
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
												<li><a href="javascript:void(0);" data-toggle="modal" data-target="#viewproduct-over" class="woo_cart_btn btn_cart"><i class="ti-eye"></i></a></li>
												<li><a href="add-to-cart.html" class="woo_cart_btn btn_view"><i class="ti-shopping-cart"></i></a></li>
												<li><a href="wishlist.html" class="woo_cart_btn btn_save"><i class="ti-heart"></i></a></li>
											</ul>
										</div>								
									</div>
								</div>
								
								<!-- Single Item -->
								<div class="item">
									<div class="woo_product_grid">
										<div class="woo_product_thumb">
											<img src="assets/img/grocery/7.png" class="img-fluid" alt="" />
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
												<li><a href="javascript:void(0);" data-toggle="modal" data-target="#viewproduct-over" class="woo_cart_btn btn_cart"><i class="ti-eye"></i></a></li>
												<li><a href="add-to-cart.html" class="woo_cart_btn btn_view"><i class="ti-shopping-cart"></i></a></li>
												<li><a href="wishlist.html" class="woo_cart_btn btn_save"><i class="ti-heart"></i></a></li>
											</ul>
										</div>								
									</div>
								</div>
								
								<!-- Single Item -->
								<div class="item">
									<div class="woo_product_grid">
										<span class="woo_pr_tag new">جدید</span>
										<div class="woo_product_thumb">
											<img src="assets/img/grocery/8.png" class="img-fluid" alt="" />
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
												<li><a href="javascript:void(0);" data-toggle="modal" data-target="#viewproduct-over" class="woo_cart_btn btn_cart"><i class="ti-eye"></i></a></li>
												<li><a href="add-to-cart.html" class="woo_cart_btn btn_view"><i class="ti-shopping-cart"></i></a></li>
												<li><a href="wishlist.html" class="woo_cart_btn btn_save"><i class="ti-heart"></i></a></li>
											</ul>
										</div>								
									</div>
								</div>
							
							</div>
						</div>
					</div>
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- ======================== Fresh Vegetables & Fruits End ==================== -->
			
			<!-- ============================ Footer Start ================================== -->
			@include('footer')
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
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/metisMenu.min.js"></script>
		<script src="assets/js/owl-carousel.js"></script>
		<script src="assets/js/ion.rangeSlider.min.js"></script>
		<script src="assets/js/smoothproducts.js"></script>
		<script src="assets/js/jquery-rating.js"></script>
		<script src="assets/js/jQuery.style.switcher.js"></script>
		<script src="assets/js/custom.js"></script>
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->
		
		<script>
			function openRightMenu() {
				document.getElementById("rightMenu").style.display = "block";
			}
			function closeRightMenu() {
				document.getElementById("rightMenu").style.display = "none";
			}
		</script>
		
		<script>
			function openLeftMenu() {
				document.getElementById("leftMenu").style.display = "block";
			}
			function closeLeftMenu() {
				document.getElementById("leftMenu").style.display = "none";
			}
		</script>

	</body>

</html>