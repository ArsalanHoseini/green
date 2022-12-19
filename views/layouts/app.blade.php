<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="{{asset('assets/css/styles.css')}}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="grocery-theme">
    <div class="header">
    <!-- Topbar -->
    <div class="header_topbar dark">
        <div class="container">
            <div class="row">
                @auth
                <div class="col-lg-6 col-md-6 col-sm-6 col-8">
                    <div class="topbar_menu">
                        <ul>
                            <li><a href="order.html"><i class="ti-bag"></i>حساب کاربری</a></li>
                            <li><a href="order-tracking.html"><i class="ti-location-pin"></i>پیگیری سفارش</a></li>
                            <li class="hide-m"><a href="wishlist.html"><i class="ti-heart"></i>مورد علاقه</a></li>
                        </ul>
                    </div>
                </div>
                @else
                <div class="col-lg-6 col-md-6 col-sm-6 col-4">
                    <ul class="tp-list nbr mr-2">
                        <li class="dropdown dropdown-currency hidden-xs hidden-sm">
                            <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ورود به حساب کابری<i class="mr-1 fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu mlix-wrap">
                                <li><a href="login-signup.html">ثبت نام</a></li>
                                <li><a href="login-signup.html">ورودم</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                @endauth
            </div>
        </div>
    </div>

    <!-- Main header -->
    <div class="general_header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2 col-md-2 col-sm-3 col-4">
                    <a class="nav-brand" href="#">
                        <img src="{{asset('assets/img/grocery-logo.png')}}" class="logo" alt="" style="width: auto; height: 80px" />آ
                    </a>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-4 col-3">
                    <nav id="navigation" class="navigation navigation-landscape">
                        <div class="nav-header">
                            <div class="nav-toggle"></div>
                        </div>
                        <div class="nav-menus-wrapper" style="transition-property: none;">
                            <ul class="nav-menu">
                            
                                <li class="active"><a href="#">خانه<span class="submenu-indicator"></span></a>
                                    <ul class="nav-dropdown nav-submenu">
                                        <li><a href="#">مواد غذایی<span class="submenu-indicator"></span></a>
                                            <ul class="nav-dropdown nav-submenu">
                                                <li><a href="grocery.html">مواد غذایی 1</a></li>
                                                <li><a href="grocery-2.html">مواد غذایی 2</a></li>
                                                <li><a href="grocery-3.html">مواد غذایی 3</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">فروشگاه<span class="submenu-indicator"></span></a>
                                            <ul class="nav-dropdown nav-submenu">
                                                <li><a href="woocommerce.html">فروشگاه 1</a></li>
                                                <li><a href="woocommerce-2.html">فروشگاه 2</a></li>
                                                <li><a href="beauty.html">لوازم آرایشی</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="organic.html">ارگانیک</a></li>
                                        <li><a href="electronics.html">الکترونیکی</a></li>
                                        <li><a href="digital.html">دیجیتالی</a></li>
                                        <li><a href="furniture.html">مبلمان</a></li>
                                    </ul>
                                </li>
                                
                                <li><a href="#">دسته بندی<span class="submenu-indicator"></span></a>
                                    <ul class="nav-dropdown nav-submenu">
                                        {{-- @foreach($cat as $item)
                                            <li><a href="/category/{{$item->en}}">{{$item->fa}}</a></li>
                                        @endforeach --}}
                                    </ul>
                                </li>
                                
                                <li><a href="#">محصولات<span class="submenu-indicator"></span></a>
                                    <ul class="nav-dropdown nav-submenu">
                                        <li><a href="#">محصولات 1<span class="submenu-indicator"></span></a>
                                            <ul class="nav-dropdown nav-submenu">
                                                <li><a href="search-sidebar.html">با نوار کناری 1</a></li>
                                                <li><a href="search-sidebar-2.html">با نوار کناری 2</a></li>
                                                <li><a href="search-sidebar-3.html">با نوار کناری 3</a></li>
                                                <li><a href="search-sidebar-4.html">با نوار کناری 4</a></li>
                                                <li><a href="search-sidebar-5.html">با نوار کناری 5</a></li>
                                                <li><a href="search-sidebar-6.html">با نوار کناری 6</a></li>
                                                <li><a href="search-sidebar-7.html">با نوار کناری 7</a></li>
                                                <li><a href="search-sidebar-8.html">با نوار کناری 8</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">محصولات 2<span class="submenu-indicator"></span></a>
                                            <ul class="nav-dropdown nav-submenu">
                                                <li><a href="detail-1.html">محصول پیش فرض 1</a></li>
                                                <li><a href="detail-2.html">محصول پیش فرض 2</a></li>
                                                <li><a href="detail-3.html">محصولات گروهی</a></li>
                                                <li><a href="detail-4.html">محصول ساده</a></li>
                                                <li><a href="detail-5.html">محصولات گروهی</a></li>
                                                <li><a href="detail-6.html">محصول دیجیتالی</a></li>
                                                <li><a href="vendor.html">جزئیات فروشنده</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                
                                <li><a href="#">صفحات فروشگاه<span class="submenu-indicator"></span></a>
                                    <ul class="nav-dropdown nav-submenu">
                                        <li><a href="#">داشبورد کاربری<span class="submenu-indicator"></span></a>
                                            <ul class="nav-dropdown nav-submenu">
                                                <li><a href="order.html">سفارشات من</a></li>
                                                <li><a href="order-history.html">تاریخچه سفارشات</a></li>
                                                <li><a href="order-tracking.html">رهگیری سفارش</a></li>
                                                <li><a href="wishlist.html">محصولات مورد علاقه</a></li>
                                                <li><a href="account-info.html">تنظیمات حساب</a></li>
                                                <li><a href="payment-methode.html">روش های پرداخت</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="add-to-cart.html">افزودن به سبد خرید</a></li>
                                        <li><a href="billing.html">صفحه صورتحساب</a></li>
                                        <li><a href="checkout-complete.html">تأیید تسویه حساب</a></li>
                                        <li><a href="admin-login.html">ورود ادمین</a></li>
                                    </ul>
                                </li>
                                
                                <li><a href="#">صفحات<span class="submenu-indicator"></span></a>
                                    <ul class="nav-dropdown nav-submenu">
                                        <li><a href="blog.html">صفحه وبلاگ</a></li>
                                        <li><a href="blog-detail.html">جزئیات وبلاگ</a></li>
                                        <li><a href="about.html">درباره ما</a></li>
                                        <li><a href="contact.html">تماس</a></li>
                                        <li><a href="login-signup.html">ورود / ثبت نام</a></li>
                                        <li><a href="faq.html">سوالات متداول</a></li>
                                        <li><a href="404.html">404</a></li>
                                    </ul>
                                </li>
                                
                            </ul>

                        </div>
                    </nav>
                </div>
                
                <div class="col-lg-3 col-md-3 col-sm-5 col-5">
                    <div class="general_head_right">
                        <ul>
                            <li><a data-toggle="collapse" href="#mySearch" role="button" aria-expanded="false" aria-controls="mySearch"><i class="ti-search"></i></a></li>
                            @auth
                                <li><a href="javascript:void(0);" onclick="openRightMenu()"><i class="ti-shopping-cart"></i><span class="cart_counter">0</span></a></li>
                            @endauth
                        </ul>
                    </div>
                    <div class="collapse" id="mySearch">
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

    </div>    
        @yield('content')
    <footer class="dark-footer skin-dark-footer style-2">
        <div class="before-footer">
            <div class="container">
                <div class="row">
            
                    <div class="col-lg-4 col-md-4">
                        <div class="single_facts">
                            <div class="facts_icon">
                                <i class="ti-shopping-cart"></i>
                            </div>
                            <div class="facts_caption">
                                <h4>ارسال رایگان</h4>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-4">
                        <div class="single_facts">
                            <div class="facts_icon">
                                <i class="ti-money"></i>
                            </div>
                            <div class="facts_caption">
                                <h4>تضمین بازگشت هزینه</h4>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-4">
                        <div class="single_facts last">
                            <div class="facts_icon">
                                <i class="ti-headphone-alt"></i>
                            </div>
                            <div class="facts_caption">
                                <h4>پشتیبانی آنلاین 24 ساعته</h4>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    
                    <div class="col-lg-4 col-md-4">
                        <div class="footer_widget">
                            <h4 class="extream">تماس با ما</h4>
                            <p>لورم ایپسوم متن <a href="#" class="theme-cl">دریافت کنید</a></p>
                            
                            <div class="address_infos">
                                <ul>
                                    <li><i class="ti-home theme-cl"></i>ایران ، تهران ، زعفرانیه ، خیابان هستی ،<br> ساختمان مهر پلاک  856</li>
                                    <li><i class="ti-headphone-alt theme-cl"></i>02112345678</li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                            
                    <div class="col-lg-2 col-md-2">
                        <div class="footer_widget">
                            <h4 class="widget_title">دسته بندی ها</h4>
                            <ul class="footer-menu">
                                <li><a href="#">ارگانیک</a></li>
                                <li><a href="#">مواد غذایی</a></li>
                                <li><a href="#">دیجیتالی</a></li>
                                <li><a href="#">مبلمان</a></li>
                            </ul>
                        </div>
                    </div>
                            
                    <div class="col-lg-2 col-md-2">
                        <div class="footer_widget">
                            <h4 class="widget_title">کارخانه ی ما</h4>
                            <ul class="footer-menu">
                                <li><a href="#">درباره ما</a></li>
                                <li><a href="#">شرکت ما</a></li>
                                <li><a href="#">استودیوی ما</a></li>
                                <li><a href="#">فروشگاه</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-lg-2 col-md-2">
                        <div class="footer_widget">
                            <h4 class="widget_title">آخرین خبرها</h4>
                            <ul class="footer-menu">
                                <li><a href="#">پیشنهادات ویژه</a></li>
                                <li><a href="#">حساب من</a></li>
                                <li><a href="#">محصولات من</a></li>
                                <li><a href="#">موارد دلخواه</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-lg-2 col-md-2">
                        <div class="footer_widget">
                            <h4 class="widget_title">پشتیبانی مشتری</h4>
                            <ul class="footer-menu">
                                <li><a href="#">شرایط</a></li>
                                <li><a href="#">حریم خصوصی</a></li>
                                <li><a href="#">وبلاگ</a></li>
                                <li><a href="#">سوالات متداول</a></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    
                    <div class="col-lg-6 col-md-8">
                        <p class="mb-0">© کپی رایت 2020 اودکس. راستچین شده توسط <a href="https://www.rtl-theme.com/author/davod_taheri/">داود</a>.</p>
                    </div>
                    
                    <div class="col-lg-6 col-md-6 text-left">
                        <ul class="footer_social_links">
                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                            <li><a href="#"><i class="ti-twitter"></i></a></li>
                            <li><a href="#"><i class="ti-instagram"></i></a></li>
                            <li><a href="#"><i class="ti-linkedin"></i></a></li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    </footer>
<!-- cart -->
    <div class="w3-ch-sideBar w3-bar-block w3-card-2 w3-animate-right" style="display:none;left:0;" id="rightMenu">
        <div class="rightMenu-scroll">
            <h4 class="cart_heading">سبد خرید شما</h4>
            <button onclick="closeRightMenu()" class="w3-bar-item w3-button w3-large"><i class="ti-close"></i></button>
            <div class="right-ch-sideBar" id="side-scroll">
                
                <div class="cart_select_items">
                    @if(! isset($member))
                    <p>cart shoma khalist</p>
                    @else
                        @foreach($member as $item)
                        <div class="cart_selected_single">
                            <div class="cart_selected_single_thumb">
                                <a href="#"><img src="{{asset($item->pic)}}" class="img-fluid" alt="" /></a>
                            </div>
                            <div class="cart_selected_single_caption">
                                <h4 class="product_title">{{$item->title}}</h4>
                                <span class="numberof_item">{{$item->price}} تومان</span>
                                <a href="#" class="text-danger">حذف</a>
                            </div>
                        </div>
                        @endforeach
                    @endif
                </div>
                
                <div class="cart_subtotal">
                    <h6>جمع کل<span class="theme-cl"> تومان</span></h6>
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
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('assets/js/owl-carousel.js')}}"></script>
    <script src="{{asset('assets/js/ion.rangeSlider.min.js')}}"></script>
    <script src="{{asset('assets/js/smoothproducts.js')}}"></script>
    <script src="{{asset('assets/js/jquery-rating.js')}}"></script>
    <script src="{{asset('assets/js/jQuery.style.switcher.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
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