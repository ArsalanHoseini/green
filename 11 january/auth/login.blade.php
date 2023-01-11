@extends('layouts.app')
@section('content')
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
										<label>شماره موبایل</label>
										<input type="text" class="form-control" placeholder="09123456789">
									</div>
									
									<div class="login_flex">
										<div class="login_flex_2">
											<div class="form-group mb-0">
												<button type="submit" class="btn btn-md btn-theme">دریافت کد</button>
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
@endsection