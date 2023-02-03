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
</div>			
			
 <!-- ======================== Top category ==================== -->
 <section>
				<div class="container">
					<div class="row justify-content-center">
						
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="category_style_2">
								<div class="category_style_2_thumb">
									<a href="search-sidebar-6.html"><img src="assets/img/table.png" class="img-fluid rounded" alt="" /></a>
								</div>
								<div class="category_style_2_caption">
									<!-- Heading -->
									<h4 class="mb-0"><a href="search-sidebar-6.html">صندلی راحتی</a></h4>
								</div>
							</div>
						</div>					
					</div>
				</div>
			</section>
			<!-- ======================== Top category End ==================== -->
@endsection