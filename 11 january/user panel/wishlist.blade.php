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

			

@endsection