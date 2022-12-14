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
                        <img src="assets/img/grocery-logo.png" class="logo" alt="" />
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
                                        <li><a href="#">دسته بندی 1<span class="submenu-indicator"></span></a>
                                            <ul class="nav-dropdown nav-submenu">
                                                <li><a href="search-full-width.html">بنر تمام عرض</a></li>
                                                <li><a href="search-list-layout.html">چیدمان لیستی</a></li>
                                                <li><a href="4-column.html">محصول 4 ستونی</a></li>
                                                <li><a href="5-column.html">محصول 5 ستونی</a></li>
                                                <li><a href="6-column.html">محصول 6 ستونی</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">دسته بندی 2<span class="submenu-indicator"></span></a>
                                            <ul class="nav-dropdown nav-submenu">
                                                <li><a href="grocery.html">سبک هدر 1</a></li>
                                                <li><a href="grocery-2.html">سبک هدر 2</a></li>
                                                <li><a href="grocery-3.html">سبک هدر 3</a></li>
                                                <li><a href="#">محصول 7 ستونی</a></li>
                                                <li><a href="#">محصول 9 ستونی</a></li>
                                                <li><a href="#">محصول 10 ستونی</a></li>
                                            </ul>
                                        </li>
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