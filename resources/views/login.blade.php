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
								<h2 class="breadcrumbs_title">ورود / ثبت نام</h2>
								<nav aria-label="breadcrumb">
								  <ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="ti-home"></i></a></li>
									<li class="breadcrumb-item"><a href="#">حساب کاربری</a></li>
									<li class="breadcrumb-item active" aria-current="page">ورود / ثبت نام</li>
								  </ol>
								</nav>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<!-- =========================== Breadcrumbs =================================== -->
			
			
			<!-- =========================== Login/Signup =================================== -->
			<section>
				<div class="container">
					
					<div class="row">
						
						<div class="col-lg-6 col-md-12 col-sm-12">
							<div class="login_signup">
								<h3 class="login_sec_title">ورود</h3>
								<form action="#" method="post">
								
									<div class="form-group">
										<label>شماره مبایل</label>
										<input type="text" class="form-control">
									</div>
									
									<div class="form-group">
										<label>کلمه عبور</label>
										<input type="password" class="form-control">
									</div>
									
									<div class="login_flex">
										<div class="login_flex_1">
											<a href="#" class="text-bold">فراموشی کلمه عبور؟</a>
										</div>
										<div class="login_flex_2">
											<div class="form-group mb-0">
												<button type="submit" class="btn btn-md btn-theme">ورود</button>
											</div>
										</div>
									</div>
								
								</form>
							</div>
						</div>
						
						<div class="col-lg-6 col-md-12 col-sm-12">
							<div class="login_signup">
								<h3 class="login_sec_title">ایجاد حساب کاربری</h3>
								<form action="#" method="post">
									
									<div class="row">
									
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label>نام</label>
												<input type="text" class="form-control">
											</div>
										</div>
										
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label>نام خانوادگی</label>
												<input type="text" class="form-control">
											</div>
										</div>
										
										<div class="col-lg-12 col-md-12">
											<div class="form-group">
												<label>شماره مبایل</label>
												<input type="text" class="form-control">
											</div>
										</div>
										
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label>کلمه عبور</label>
												<input type="password" class="form-control">
											</div>
										</div>
										
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label>تکرار کلمه عبور</label>
												<input type="password" class="form-control">
											</div>
										</div>
										
										<div class="col-lg-12 col-md-12">
											<div class="login_flex">
												<div class="login_flex_1">
													<input id="news" class="checkbox-custom" name="news" type="checkbox">
													<label for="news" class="checkbox-custom-label">برای خبرنامه ثبت نام کنید</label>
												</div>
												<div class="login_flex_2">
													<div class="form-group mb-0">
														<button type="submit" class="btn btn-md btn-theme">ثبت نام</button>
													</div>
												</div>
											</div>
										</div>
										
									</div>
						
								
								</form>
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- =========================== Login/Signup =================================== -->

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
		
		<script>
			function openFilterSearch() {
				document.getElementById("filter_search").style.display = "block";
			}
			function closeFilterSearch() {
				document.getElementById("filter_search").style.display = "none";
			}
		</script>

		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->

	</body>

</html>