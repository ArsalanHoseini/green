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
			<div class="image-bg pt-5 pb-5" style="background:url(assets/img/farmer.png) no-repeat" data-overlay="6">
				<div class="container">
					<div class="row justify-content-center">
						
						<div class="col-lg-9 col-md-12 col-sm-12">
							<div class="text-center">
								<h2 class="mb-3">سوالات متداول</h2>
							</div>
							<div class="faqs_search">
								<div class="blocks search_blocks">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="جستجو در فروشگاه ...">
										<div class="input-group-append">
										<button class="btn search_btn" type="button"><i class="ti-search"></i></button>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<!-- =========================== Breadcrumbs =================================== -->
			
			
			<!-- =========================== FAQ's =================================== -->
			<section>
				<div class="container">
					<div class="row">
					
						<div class="col-lg-3 col-md-4">
							<div class="nav flex-column nav-pills verticle_tab" id="v-pills-tab" role="tablist" aria-orientation="vertical">
								<a class="nav-link active" id="delivery-tab" data-toggle="pill" href="#delivery" role="tab" aria-controls="delivery-tab" aria-selected="true"><i class="ti-truck ml-2"></i>ارسال</a>
								<a class="nav-link" id="order-tab" data-toggle="pill" href="#order" role="tab" aria-controls="order-tab" aria-selected="false"><i class="ti-package ml-2"></i>سفارشات</a>
								<a class="nav-link" id="refunds-tab" data-toggle="pill" href="#refunds" role="tab" aria-controls="refunds-tab" aria-selected="false"><i class="ti-share-alt ml-2"></i>بازپرداخت و بازگشت</a>
								<a class="nav-link" id="stocks-tab" data-toggle="pill" href="#stocks" role="tab" aria-controls="stocks-tab" aria-selected="false"><i class="ti-shopping-cart ml-2"></i>سهام و محصولات</a>
								<a class="nav-link" id="payments-tab" data-toggle="pill" href="#payments" role="tab" aria-controls="payments-tab" aria-selected="false"><i class="ti-credit-card ml-2"></i>روش های پرداخت</a>
								<a class="nav-link" id="technical-tab" data-toggle="pill" href="#technical" role="tab" aria-controls="technical-tab" aria-selected="false"><i class="ti-settings ml-2"></i>مسائل فنی</a>
							</div>
						</div>
						
						<div class="col-lg-9 col-md-8">
							<div class="tab-content" id="v-pills-tabContent">
								
								<!-- Delivery Content -->
								<div class="tab-pane fade show active" id="delivery" role="tabpanel" aria-labelledby="delivery-tab">
									<div class="faqs_description">
										<div class="faqs_single mb-4">
											<h2>روش ارسال</h2>
											<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد.</p>
										</div>
										
										<div class="faqs_single mb-4">
											<h2>فرآیند تحویل</h2>
											<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
											<p><strong>مرحله 1:</strong> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</p>
											<p><strong>مرحله 2:</strong> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</p>
											<p><strong>مرحله 3:</strong> رای شرایط فعلی تکنولوژی مورد نیاز </p>
											<p><strong>مرحله 4:</strong> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان</p>
											<p><strong>مرحله 5:</strong> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
										</div>
										
										<div class="faqs_single mb-4">
											<h2>سفارش من کجاست</h2>
											<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد</p>
										</div>
										
										<div class="faqs_single">
											<h2>زمان تحویل</h2>
											<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد</p>
										</div>
									</div>
								</div>
								
								<!-- Order & Issue Content -->
								<div class="tab-pane fade" id="order" role="tabpanel" aria-labelledby="order-tab">
									<div class="faqs_description">
										<div class="faqs_single mb-4">
											<h2>روش ارسال</h2>
											<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد.</p>
										</div>
										
										<div class="faqs_single mb-4">
											<h2>فرآیند تحویل</h2>
											<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
											<p><strong>مرحله 1:</strong> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</p>
											<p><strong>مرحله 2:</strong> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</p>
											<p><strong>مرحله 3:</strong> رای شرایط فعلی تکنولوژی مورد نیاز </p>
											<p><strong>مرحله 4:</strong> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان</p>
											<p><strong>مرحله 5:</strong> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
										</div>
										
										<div class="faqs_single mb-4">
											<h2>سفارش من کجاست</h2>
											<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد</p>
										</div>
										
										<div class="faqs_single">
											<h2>زمان تحویل</h2>
											<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد</p>
										</div>
									</div>
								</div>
								
								<!-- Refunds Content -->
								<div class="tab-pane fade" id="refunds" role="tabpanel" aria-labelledby="refunds-tab">
									<div class="faqs_description">
										<div class="faqs_single mb-4">
											<h2>روش ارسال</h2>
											<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد.</p>
										</div>
										
										<div class="faqs_single mb-4">
											<h2>فرآیند تحویل</h2>
											<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
											<p><strong>مرحله 1:</strong> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</p>
											<p><strong>مرحله 2:</strong> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</p>
											<p><strong>مرحله 3:</strong> رای شرایط فعلی تکنولوژی مورد نیاز </p>
											<p><strong>مرحله 4:</strong> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان</p>
											<p><strong>مرحله 5:</strong> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
										</div>
										
										<div class="faqs_single mb-4">
											<h2>سفارش من کجاست</h2>
											<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد</p>
										</div>
										
										<div class="faqs_single">
											<h2>زمان تحویل</h2>
											<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد</p>
										</div>
									</div>
								</div>
								
								<!-- Stock & Products Content -->
								<div class="tab-pane fade" id="stocks" role="tabpanel" aria-labelledby="stocks-tab">
									<div class="faqs_description">
										<div class="faqs_single mb-4">
											<h2>روش ارسال</h2>
											<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد.</p>
										</div>
										
										<div class="faqs_single mb-4">
											<h2>فرآیند تحویل</h2>
											<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
											<p><strong>مرحله 1:</strong> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</p>
											<p><strong>مرحله 2:</strong> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</p>
											<p><strong>مرحله 3:</strong> رای شرایط فعلی تکنولوژی مورد نیاز </p>
											<p><strong>مرحله 4:</strong> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان</p>
											<p><strong>مرحله 5:</strong> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
										</div>
										
										<div class="faqs_single mb-4">
											<h2>سفارش من کجاست</h2>
											<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد</p>
										</div>
										
										<div class="faqs_single">
											<h2>زمان تحویل</h2>
											<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد</p>
										</div>
									</div>
								</div>
								
								<!-- Payment Content -->
								<div class="tab-pane fade" id="payments" role="tabpanel" aria-labelledby="payments-tab">
									<div class="faqs_description">
										<div class="faqs_single mb-4">
											<h2>روش ارسال</h2>
											<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد.</p>
										</div>
										
										<div class="faqs_single mb-4">
											<h2>فرآیند تحویل</h2>
											<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
											<p><strong>مرحله 1:</strong> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</p>
											<p><strong>مرحله 2:</strong> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</p>
											<p><strong>مرحله 3:</strong> رای شرایط فعلی تکنولوژی مورد نیاز </p>
											<p><strong>مرحله 4:</strong> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان</p>
											<p><strong>مرحله 5:</strong> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
										</div>
										
										<div class="faqs_single mb-4">
											<h2>سفارش من کجاست</h2>
											<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد</p>
										</div>
										
										<div class="faqs_single">
											<h2>زمان تحویل</h2>
											<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد</p>
										</div>
									</div>
								</div>
								
								<!-- Technical Content -->
								<div class="tab-pane fade" id="technical" role="tabpanel" aria-labelledby="technical-tab">
									<div class="faqs_description">
										<div class="faqs_single mb-4">
											<h2>روش ارسال</h2>
											<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد.</p>
										</div>
										
										<div class="faqs_single mb-4">
											<h2>فرآیند تحویل</h2>
											<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
											<p><strong>مرحله 1:</strong> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</p>
											<p><strong>مرحله 2:</strong> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</p>
											<p><strong>مرحله 3:</strong> رای شرایط فعلی تکنولوژی مورد نیاز </p>
											<p><strong>مرحله 4:</strong> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان</p>
											<p><strong>مرحله 5:</strong> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
										</div>
										
										<div class="faqs_single mb-4">
											<h2>سفارش من کجاست</h2>
											<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد</p>
										</div>
										
										<div class="faqs_single">
											<h2>زمان تحویل</h2>
											<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد</p>
										</div>
									</div>
								</div>
								
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- =========================== FAQ's =================================== -->
			
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