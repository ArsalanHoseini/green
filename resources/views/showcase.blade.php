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
	
    <body class="grocery-theme light">
	
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
			
			<!-- =========================== Breadcrumbs =================================== -->
			<div class="breadcrumbs_wrap dark">
				<div class="container">
					<div class="row align-items-center">
						
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="text-center">
								<h2 class="breadcrumbs_title">محصول 6 ستونه</h2>
								<nav aria-label="breadcrumb">
								  <ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="ti-home"></i></a></li>
									<li class="breadcrumb-item"><a href="#">فروشگاه</a></li>
									<li class="breadcrumb-item active" aria-current="page">محصول 6 ستونه</li>
								  </ol>
								</nav>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<!-- =========================== Breadcrumbs =================================== -->
			
			
			<!-- =========================== Search Products =================================== -->
			<section class="sixcol">
				<div class="container-fluid">
					
					<div class="row">

						<div class="col-lg-12 col-md-12">
							
							<!-- Shorter Toolbar -->
							<div class="row">
								<div class="col-lg-12 col-md-12">
									<div class="toolbar toolbar-products">
										<div class="toolbar-sorter sorter">
											<label class="sorter-label" for="sorter">مرتب سازی</label>
											<select id="sorter" data-role="sorter" class="sorter-options">
												<option value="position" selected="selected">موقعیت</option>
												<option value="name">نام محصول</option>
												<option value="price">قیمت</option>
											</select>
											<a href="#" class="action sorter-action"><i class="ti-arrow-up"></i></a>
										</div>
													
										<div class="modes">
											<a class="modes-mode mode-grid" title="Grid" href="#"><i class="ti-layout-grid3"></i></a>		
											<a class="modes-mode mode-list" title="Grid" href="#"><i class="ti-view-list"></i></a>													
										</div>

										<div class="field limiter">
											<label class="label" for="limiter">
												<span>نمایش</span>
											</label>
											<div class="control">
												<select id="limiter" data-role="limiter" class="limiter-options">
													<option value="5">5</option>
													<option value="10" selected="selected">10</option>
													<option value="15">15</option>
													<option value="20">20</option>
													<option value="25">25</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<!-- row -->
							<div class="row">
							
								<!-- Single Item -->
								<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
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
												<h4 class="woo_pro_title"><a href="detail-1.html">نام محصولات</a></h4>
											</div>
											<div class="woo_price">
												<h6>7200تومان<span class="less_price">11200تومان</span></h6>
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
								<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
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
												<h4 class="woo_pro_title"><a href="detail-1.html">نام محصولات</a></h4>
											</div>
											<div class="woo_price">
												<h6>7200تومان<span class="less_price">11200تومان</span></h6>
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
								<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
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
												<h4 class="woo_pro_title"><a href="detail-1.html">نام محصولات</a></h4>
											</div>
											<div class="woo_price">
												<h6>7200تومان<span class="less_price">11200تومان</span></h6>
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
								<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
									<div class="woo_product_grid">
										<span class="woo_offer_sell">20٪ تخفیف</span>
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
												<h4 class="woo_pro_title"><a href="detail-1.html">نام محصولات</a></h4>
											</div>
											<div class="woo_price">
												<h6>7200تومان<span class="less_price">11200تومان</span></h6>
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
								<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
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
												<h4 class="woo_pro_title"><a href="detail-1.html">نام محصولات</a></h4>
											</div>
											<div class="woo_price">
												<h6>7200تومان<span class="less_price">11200تومان</span></h6>
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
								<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
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
												<h4 class="woo_pro_title"><a href="detail-1.html">نام محصولات</a></h4>
											</div>
											<div class="woo_price">
												<h6>7200تومان<span class="less_price">11200تومان</span></h6>
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
								<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
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
												<h4 class="woo_pro_title"><a href="detail-1.html">نام محصولات</a></h4>
											</div>
											<div class="woo_price">
												<h6>7200تومان<span class="less_price">11200تومان</span></h6>
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
								<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
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
												<h4 class="woo_pro_title"><a href="detail-1.html">نام محصولات</a></h4>
											</div>
											<div class="woo_price">
												<h6>7200تومان<span class="less_price">11200تومان</span></h6>
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
								<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
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
												<h4 class="woo_pro_title"><a href="detail-1.html">نام محصولات</a></h4>
											</div>
											<div class="woo_price">
												<h6>7200تومان<span class="less_price">11200تومان</span></h6>
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
								<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
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
												<h4 class="woo_pro_title"><a href="detail-1.html">نام محصولات</a></h4>
											</div>
											<div class="woo_price">
												<h6>7200تومان<span class="less_price">11200تومان</span></h6>
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
								<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
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
												<h4 class="woo_pro_title"><a href="detail-1.html">نام محصولات</a></h4>
											</div>
											<div class="woo_price">
												<h6>7200تومان<span class="less_price">11200تومان</span></h6>
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
								<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
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
												<h4 class="woo_pro_title"><a href="detail-1.html">نام محصولات</a></h4>
											</div>
											<div class="woo_price">
												<h6>7200تومان<span class="less_price">11200تومان</span></h6>
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
							<!-- row -->
							
							<div class="row">
								<div class="col-lg-12">
									<nav aria-label="Page navigation example">
									  <ul class="pagination">
										<li class="page-item right">
										  <a class="page-link" href="#" aria-label="Previous">
											<span aria-hidden="true"><i class="ti-arrow-right ml-1"></i>قبلی</span>
										  </a>
										</li>
										<li class="page-item"><a class="page-link" href="#">1</a></li>
										<li class="page-item active"><a class="page-link" href="#">2</a></li>
										<li class="page-item"><a class="page-link" href="#">3</a></li>
										<li class="page-item left">
										  <a class="page-link" href="#" aria-label="Next">
											<span aria-hidden="true"><i class="ti-arrow-left ml-1"></i>بعدی</span>
										  </a>
										</li>
									  </ul>
									</nav>
								</div>
							</div>
							
						</div>
						
					</div>
				</div>
			</section>
			<!-- =========================== Search Products =================================== -->

			
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
			@include('footer')
			<!-- ============================ Footer End ================================== -->
			
			<!-- cart -->
			<!-- Switcher Start -->
			<div class="w3-ch-sideBar w3-bar-block w3-card-2 w3-animate-right" style="display:none;left:0;" id="rightMenu">
				<div class="rightMenu-scroll">
					<h4 class="cart_heading">سبد خرید شما</h4>
					<button onclick="closeRightMenu()" class="w3-bar-item w3-button w3-large"><i class="ti-close"></i></button>
					<div class="right-ch-sideBar" id="side-scroll">
						
						<div class="cart_select_items">
							<!-- Single Item -->
							<div class="cart_selected_single">
								<div class="cart_selected_single_thumb">
									<a href="#"><img src="assets/img/product.jpg" class="img-fluid" alt="" /></a>
								</div>
								<div class="cart_selected_single_caption">
									<h4 class="product_title">قورباغه‌ات را قورت بده</h4>
									<span class="numberof_item">25000 تومان</span>
									<a href="#" class="text-danger">حذف</a>
								</div>
							</div>
							<!-- Single Item -->
							<div class="cart_selected_single">
								<div class="cart_selected_single_thumb">
									<a href="#"><img src="assets/img/product.jpg" class="img-fluid" alt="" /></a>
								</div>
								<div class="cart_selected_single_caption">
									<h4 class="product_title">قورباغه‌ات را قورت بده</h4>
									<span class="numberof_item">25000 تومان</span>
									<a href="#" class="text-danger">حذف</a>
								</div>
							</div>
							<!-- Single Item -->
							<div class="cart_selected_single">
								<div class="cart_selected_single_thumb">
									<a href="#"><img src="assets/img/product.jpg" class="img-fluid" alt="" /></a>
								</div>
								<div class="cart_selected_single_caption">
									<h4 class="product_title">قورباغه‌ات را قورت بده</h4>
									<span class="numberof_item">25000 تومان</span>
									<a href="#" class="text-danger">حذف</a>
								</div>
							</div>
						</div>
						
						<div class="cart_subtotal">
							<h6>جمع کل<span class="theme-cl">75000 تومان</span></h6>
						</div>
						
						<div class="cart_action">
							<ul>
								<li><a href="#" class="btn btn-go-cart btn-theme">مشاهده / ویرایش سبد خرید</a></li>
								<li><a href="#" class="btn btn-checkout">اکنون پرداخت کنید</a></li>
							</ul>
						</div>
						
					</div>
				</div>
			</div>
			<!-- cart -->

			<!-- Left Collapse navigation -->
			<div class="w3-ch-sideBar-left w3-bar-block w3-card-2 w3-animate-right"  style="display:none;left:0;" id="leftMenu">
				<div class="rightMenu-scroll">
					<div class="flixel">
						<h4 class="cart_heading">دسته بندی</h4>
						<button onclick="closeLeftMenu()" class="w3-bar-item w3-button w3-large"><i class="ti-close"></i></button>
					</div>
					
					<div class="right-ch-sideBar">
						
						<div class="side_navigation_collapse">
							<div class="d-navigation">
								<ul id="side-menu">
									<li class="dropdown">
										<a href="#">دسته بندی<span class="ti-angle-right"></span></a>
										<ul class="nav nav-second-level">
											<li><a href="#">مواد غذایی</a></li>
											<li><a href="#">ارگانیک</a></li>
											<li><a href="#">الکترونیک</a></li>
											<li><a href="#">مد پوشاک</a></li>
											<li><a href="#">آموزشی</a></li>
											<li><a href="#">زیبایی</a></li>
											
											<li class="dropdown">
												<a href="#">دیجیتال<span class="ti-angle-right"></span></a>
												<ul class="nav nav-second-level">
													<li><a href="#">زیر مجموعه</a></li>
													<li><a href="#">زیر مجموعه</a></li>
													<li><a href="#">زیر مجموعه</a></li>
													<li><a href="#">زیر مجموعه</a></li>
												</ul>
											</li>
										</ul>
									</li>
									
									<li class="dropdown">
										<a href="#">برند<span class="ti-angle-right"></span></a>
										<ul class="nav nav-second-level">
											<li><a href="#">نایک</a></li>
											<li><a href="#">اپل</a></li>
											<li><a href="#">هکرل</a></li>
											<li><a href="#">توفان</a></li>
											<li><a href="#">اوریو</a></li>
											<li><a href="#">کیتی</a></li>
										</ul>
									</li>
									
									<li class="dropdown">
										<a href="#">محصولات<span class="ti-angle-right"></span></a>
										<ul class="nav nav-second-level">
											<li><a href="#">محصولات 3 ستون</a></li>
											<li><a href="#">محصولات 4 ستون</a></li>
											<li><a href="#">محصولات 5 ستون</a></li>
											<li><a href="#">محصولات 6 ستون</a></li>
											<li><a href="#">محصولات 7 ستون</a></li>
											<li><a href="#">محصولات 8 ستون</a></li>
										</ul>
									</li>
									
									<li><a href="#">درباره ما</a></li>
									<li><a href="#">وبلاگ</a></li>
									<li><a href="#">تماس با ما</a></li>
									<li><a href="#">خرید اودکس</a></li>
								</ul>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			<!-- Left Collapse navigation -->
			
			<!-- Product View -->
			<div class="modal fade" id="viewproduct-over" tabindex="-1" role="dialog" aria-labelledby="add-payment" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content" id="view-product">
						<span class="mod-close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
						<div class="modal-body">
							<div class="row align-items-center">
					
						<div class="col-lg-6 col-md-12 col-sm-12">
								<div class="sp-wrap">
									<img src="assets/img/detail/detail-1.png" class="img-fluid rounded" alt="">
								</div>
							</div>
							
							<div class="col-lg-6 col-md-12 col-sm-12">
								<div class="woo_pr_detail">
									
									<div class="woo_cats_wrps">
										<a href="#" class="woo_pr_cats">پیراهن معمولی</a>
										<span class="woo_pr_trending">پرطرفدار</span>
									</div>
									<h2 class="woo_pr_title">پیراهن راه راه حرفه ای</h2>
									
									<div class="woo_pr_reviews">
										<div class="woo_pr_rating">
											<i class="fa fa-star filled"></i>
											<i class="fa fa-star filled"></i>
											<i class="fa fa-star filled"></i>
											<i class="fa fa-star filled"></i>
											<i class="fa fa-star"></i>
											<span class="woo_ave_rat">4.8</span>
										</div>
										<div class="woo_pr_total_reviews">
											<a href="#">(124 بررسی)</a>
										</div>
									</div>
									
									<div class="woo_pr_price">
										<div class="woo_pr_offer_price">
											<h3>149 تومان<span class="org_price">199 تومان</span></h3>
										</div>
									</div>
									
									<div class="woo_pr_short_desc">
										<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.</p>
									</div>
									
									<div class="woo_pr_color flex_inline_center mb-3">
										<div class="woo_pr_varient">
											<h6>سایز:</h6>
										</div>
										<div class="woo_colors_list pr-3">
											<div class="custom-varient custom-size">
												<input type="radio" class="custom-control-input" name="sizeRadio" id="sizeRadioOne" value="5" data-toggle="form-caption" data-target="#sizeCaption">
												<label class="custom-control-label" for="sizeRadioOne">SM</label>
											</div>
											<div class="custom-varient custom-size">
												<input type="radio" class="custom-control-input" name="sizeRadio" id="sizeRadioTwo" value="6" data-toggle="form-caption" data-target="#sizeCaption">
												<label class="custom-control-label" for="sizeRadioTwo">M</label>
											</div>
											<div class="custom-varient custom-size">
												<input type="radio" class="custom-control-input" name="sizeRadio" id="sizeRadioThree" value="6.6" data-toggle="form-caption" data-target="#sizeCaption">
												<label class="custom-control-label" for="sizeRadioThree">L</label>
											</div>
											<div class="custom-varient custom-size">
												<input type="radio" class="custom-control-input" name="sizeRadio" id="sizeRadioFour" value="7" data-toggle="form-caption" data-target="#sizeCaption" checked>
												<label class="custom-control-label" for="sizeRadioFour">XL</label>
											</div>
										</div>
									</div>
									
									<div class="woo_pr_color flex_inline_center mb-3">
										<div class="woo_pr_varient">
											<h6>رنگ:</h6>
										</div>
										<div class="woo_colors_list pr-3">
											<div class="custom-varient custom-color red">
												<input type="radio" class="custom-control-input" name="colorRadio" id="red" value="5" data-toggle="form-caption" data-target="#colorCaption">
												<label class="custom-control-label" for="red">5</label>
											</div>
											<div class="custom-varient custom-color green">
												<input type="radio" class="custom-control-input" name="colorRadio" id="green" value="6" data-toggle="form-caption" data-target="#colorCaption">
												<label class="custom-control-label" for="green">6</label>
											</div>
											<div class="custom-varient custom-color purple">
												<input type="radio" class="custom-control-input" name="colorRadio" id="purple" value="6.6" data-toggle="form-caption" data-target="#colorCaption" checked>
												<label class="custom-control-label" for="purple">6.5</label>
											</div>
											<div class="custom-varient custom-color yellow">
												<input type="radio" class="custom-control-input" name="colorRadio" id="yellow" value="7" data-toggle="form-caption" data-target="#colorCaption">
												<label class="custom-control-label" for="yellow">7</label>
											</div>
											<div class="custom-varient custom-color blue">
												<input type="radio" class="custom-control-input" name="colorRadio" id="blue" value="6" data-toggle="form-caption" data-target="#colorCaption">
												<label class="custom-control-label" for="blue">7.5</label>
											</div>
										</div>
									</div>
									
									<div class="woo_btn_action">
										<div class="col-12 col-lg-auto">
											<input type="number" class="form-control mb-2 full-width" value="1" />
										</div>
									</div>
									
									<div class="woo_btn_action">
										<div class="col-12 col-lg-auto">
											<button type="submit" class="btn btn-block btn-dark mb-2">افزودن به سبد خرید <i class="ti-shopping-cart-full mr-2"></i></button>
										</div>
										<div class="col-12 col-lg-auto">
											<button class="btn btn-gray btn-block mb-2" data-toggle="button">مورد علاقه <i class="ti-heart mr-2"></i></button>
										</div>
									</div>
									
								</div>
							</div>
							
						</div>
						</div>
					</div>
				</div>
			</div>
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

		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->

	</body>

</html>