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
								<h2 class="breadcrumbs_title">جزئیات وبلاگ</h2>
								<nav aria-label="breadcrumb">
								  <ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="ti-home"></i></a></li>
									<li class="breadcrumb-item"><a href="#">وبلاگ</a></li>
									<li class="breadcrumb-item active" aria-current="page">جزئیات وبلاگ</li>
								  </ol>
								</nav>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<!-- =========================== Breadcrumbs =================================== -->
			
			
			<!-- =========================== News & Articles =================================== -->
			<section class="gray">
				<div class="container">
					<div class="row">
	
						<div class="col-lg-8 col-md-12 col-sm-12">
							<article class="blog-news big-detail-wrap">
								<div class="blog-detail-wrap">
								
									<!-- Featured Image -->
									<figure class="img-holder">
										<a href="blog-detail.html"><img src="assets/img/el-banner-1.png" class="img-responsive" alt="News"></a>
										<div class="blog-post-date theme-bg">
											12 اسفند 1399
										</div>
									</figure>
									
									<!-- Blog Content -->
									<div class="full blog-content">
										<div class="post-meta">توسط: <a href="#" class="author theme-cl">الناز سیدی</a> | 10 نظر جزئیات </div>
										<a href="blog-detail.html"><h3>کمک به کودکان برای رشد بیشتر</h3></a>
										<div class="blog-text">
											<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی.</p>
											
											<div class="post-meta">تحت مقاله: <span class="category"><a href="#" class="theme-cl">تکنولوژی</a></span></div>
										</div>
										
										<!-- Blog Share Option -->
																				
									</div>
									<!-- Blog Content -->
									
								</div>
							</article>
																													
						</div>
						
						<!-- Sidebar Start -->
						<div class="col-lg-4 col-md-12 col-sm-12">
							<div class="blog-sidebar">
																											
								<div class="side-widget">
									<div class="side-widget-header">
										<h4><i class="ti-briefcase"></i>دسته بندی های برتر</h4>
									</div>
									<div class="side-widget-body p-t-10 p-b-0">
										<div class="side-list">
											<ul class="category-list">
												<li><a href="#">کسب و کار <span>4</span></a></li>
												<li><a href="#">فروشگاه <span>7</span></a></li>
												<li><a href="#">عکاسی <span>10</span></a></li>
												<li><a href="#">سرگرمی <span>55</span></a></li>
												<li><a href="#">تحصیلات <span>8</span></a></li>
												<li><a href="#">تور مسافرتی <span>17</span></a></li>
												<li><a href="#">سلامتی و تناسب اندام <span>9</span></a></li>
											</ul>
										</div>
									</div>
								</div>
								
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- =========================== News & Articles =================================== -->

			
			<!-- ============================ Call To Action ================================== --> 
	
		</div>
@endsection