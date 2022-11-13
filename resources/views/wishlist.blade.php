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
								<h2 class="breadcrumbs_title">مورد علاقه</h2>
								<nav aria-label="breadcrumb">
								  <ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="ti-home"></i></a></li>
									<li class="breadcrumb-item"><a href="#">حساب کاربری</a></li>
									<li class="breadcrumb-item active" aria-current="page">مورد علاقه</li>
								  </ol>
								</nav>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<!-- =========================== Breadcrumbs =================================== -->
			
			
			<!-- =========================== My Wishlist =================================== -->
			<section class="gray">
				<div class="container">
					<div class="row">
					
						<div class="col-lg-4 col-md-3">
							<nav class="dashboard-nav mb-10 mb-md-0">
							  <div class="list-group list-group-sm list-group-strong list-group-flush-x">
								<a class="list-group-item list-group-item-action dropright-toggle" href="order.html">
								  سفارشات من
								</a>
								<a class="list-group-item list-group-item-action dropright-toggle" href="order-history.html">
								  تاریخچه سفارشات
								</a>
								<a class="list-group-item list-group-item-action dropright-toggle" href="order-tracking.html">
								  رهگیری سفارشات
								</a>
								<a class="list-group-item list-group-item-action dropright-toggle active" href="wishlist.html">
								  مورد علاقه
								</a>
								<a class="list-group-item list-group-item-action dropright-toggle" href="account-info.html">
								  تنظیمات حساب
								</a>
								<a class="list-group-item list-group-item-action dropright-toggle" href="payment-methode.html">
								  روش های پرداخت
								</a>
								<a class="list-group-item list-group-item-action dropright-toggle" href="login-signup.html">
								  خروج
								</a>
							  </div>
							</nav>
						</div>
						
						<div class="col-lg-8 col-md-9">
							<div class="row">
							
								<!-- Single Item -->
								<div class="col-lg-6 col-md-6 col-sm-6">
									<div class="woo_product_grid no-hover">
										
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
									</div>
								</div>
								
								<!-- Single Item -->
								<div class="col-lg-6 col-md-6 col-sm-6">
									<div class="woo_product_grid no-hover">
										
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
									</div>
								</div>
								
								<!-- Single Item -->
								<div class="col-lg-6 col-md-6 col-sm-6">
									<div class="woo_product_grid no-hover">
										
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
									</div>
								</div>
								
								<!-- Single Item -->
								<div class="col-lg-6 col-md-6 col-sm-6">
									<div class="woo_product_grid no-hover">
										
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
									</div>
								</div>
								
								<!-- Single Item -->
								<div class="col-lg-6 col-md-6 col-sm-6">
									<div class="woo_product_grid no-hover">
										
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
									</div>
								</div>
								
								<!-- Single Item -->
								<div class="col-lg-6 col-md-6 col-sm-6">
									<div class="woo_product_grid no-hover">
										
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
									</div>
								</div>
							
							</div>
							
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
			<!-- =========================== My Wishlist =================================== -->

			
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