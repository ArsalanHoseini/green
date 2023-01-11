@extends('layouts.app')
@section('content')
	

        <div id="preloader"><div class="preloader"><span></span><span></span></div></div>
		
        <div id="main-wrapper">
		

			<div class="clearfix"></div>

				<div class="breadcrumbs_wrap dark">
					<div class="container">
						<div class="row align-items-center">
							
							<div class="col-lg-12 col-md-12 col-sm-12">
								<div class="text-center">
									<h2 class="breadcrumbs_title">جستجوی محصولات در دسته بندی {{ category->nameinpersian </h2>
									<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="/"><i class="ti-home"></i></a></li>
										<li class="breadcrumb-item"><a href="{{-- route('') --}}">فروشگاه</a></li>
										<li class="breadcrumb-item active" aria-current="page">{{ category->nameinpersian </li>
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
																							
										
										
									</div>
								</div>
							</div>
							
							<!-- row -->
							<div class="row">
								{{--@foreach ($products as $item)--}}
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
								{{--@endforeach--}}
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
@endsection