<!DOCTYPE html>
<html lang="en" class="color-two">
    @include('layouts.front.css')
    <body>
        <!--==================== Preloader Start ====================-->
        @include('layouts.front.preloader')
        <!--==================== Preloader End ====================-->
        <!--==================== Overlay Start ====================-->
        <div class="overlay"></div>
        <!--==================== Overlay End ====================-->
        <!--==================== Sidebar Overlay End ====================-->
        <div class="side-overlay"></div>
        <!--==================== Sidebar Overlay End ====================-->
        <!-- ==================== Scroll to Top End Here ==================== -->
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
        <!-- ==================== Scroll to Top End Here ==================== -->
        <!-- ==================== Search Box Start Here ==================== -->
        <form action="#" class="search-box">
            <button type="button" class="search-box__close position-absolute inset-block-start-0 inset-inline-end-0 m-16 w-48 h-48 border border-gray-100 rounded-circle flex-center text-white hover-text-gray-800 hover-bg-white text-2xl transition-1">
            <i class="ph ph-x"></i>
            </button>
            <div class="container">
                <div class="position-relative">
                    <input type="text" class="form-control py-16 px-24 text-xl rounded-pill pe-64" placeholder="Search for a product or brand">
                    <button type="submit" class="w-48 h-48 bg-main-600 rounded-circle flex-center text-xl text-white position-absolute top-50 translate-middle-y inset-inline-end-0 me-8">
                    <i class="ph ph-magnifying-glass"></i>
                    </button>
                </div>
            </div>
        </form>
        <!-- ==================== Search Box End Here ==================== -->
        <!-- ==================== Mobile Menu Start Here ==================== -->
        <div class="mobile-menu scroll-sm d-lg-none d-block">
            <button type="button" class="close-button"> <i class="ph ph-x"></i> </button>
            <div class="mobile-menu__inner">
                <a href="index.html" class="mobile-menu__logo">
                <img src="{{ asset('assets/images/logo/logo2.png')}}" alt="Logo">
                </a>
                <div class="mobile-menu__menu">
                    <!-- Nav Menu Start -->
                    <ul class="nav-menu flex-align nav-menu--mobile">
                        <li class="on-hover-item nav-menu__item has-submenu">
                            <a href="javascript:void(0)" class="nav-menu__link">Home</a>
                            <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
                                <li class="common-dropdown__item nav-submenu__item">
                                    <a href="index.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Home One</a>
                                </li>
                                <li class="common-dropdown__item nav-submenu__item">
                                    <a href="index-two.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Home Two</a>
                                </li>
                            </ul>
                        </li>
                        <li class="on-hover-item nav-menu__item has-submenu">
                            <a href="javascript:void(0)" class="nav-menu__link">Shop</a>
                            <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
                                <li class="common-dropdown__item nav-submenu__item">
                                    <a href="shop.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Shop</a>
                                </li>
                                <li class="common-dropdown__item nav-submenu__item">
                                    <a href="/supermarket/product-details" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Shop Details</a>
                                </li>
                                <li class="common-dropdown__item nav-submenu__item">
                                    <a href="/supermarket/product-details" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Shop Details Two</a>
                                </li>
                            </ul>
                        </li>
                        <li class="on-hover-item nav-menu__item has-submenu">
                            <span class="badge-notification bg-warning-600 text-white text-sm py-2 px-8 rounded-4">New</span>
                            <a href="javascript:void(0)" class="nav-menu__link">Pages</a>
                            <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
                                <li class="common-dropdown__item nav-submenu__item">
                                    <a href="/#" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Cart</a>
                                </li>
                                <li class="common-dropdown__item nav-submenu__item">
                                    <a href="checkout.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Checkout </a>
                                </li>
                                <li class="common-dropdown__item nav-submenu__item">
                                    <a href="account.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Account</a>
                                </li>
                            </ul>
                        </li>
                        <li class="on-hover-item nav-menu__item has-submenu">
                            <a href="javascript:void(0)" class="nav-menu__link">Blog</a>
                            <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
                                <li class="common-dropdown__item nav-submenu__item">
                                    <a href="blog.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Blog</a>
                                </li>
                                <li class="common-dropdown__item nav-submenu__item">
                                    <a href="blog-details.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Blog Details</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-menu__item">
                            <a href="contact.html" class="nav-menu__link">Contact Us</a>
                        </li>
                    </ul>
                    <!-- Nav Menu End -->
                </div>
            </div>
        </div>
        <!-- ==================== Mobile Menu End Here ==================== -->
        <!-- ======================= Middle Header Two Start ========================= -->
        <header class="header-middle style-two bg-color-one border-bottom border-gray-100">
            <div class="container container-lg">
                <nav class="header-inner flex-between">
                    <!-- Logo Start -->
                    <div class="logo">
                        <a href="index.html" class="link">
                        <img src="{{ asset('assets/images/logo/logo2.png')}}" style="width:80px; height:80px; margin-left:40px;" alt="Logo">
                        </a>
                    </div>
                    <!-- Logo End  -->
                    <!-- form Category Start -->
                    <div class="flex-align gap-16">
                        <div class="select-dropdown-for-home-two d-lg-none d-block">
                            <!-- Dropdown Select Start -->
                            <ul class="header-top__right style-two flex-align flex-wrap">
                                <li class="on-hover-item border-right-item border-right-item-sm-space has-submenu arrow-white">
                                    <a href="javascript:void(0)" class="selected-text text-heading text-sm py-8">Eng</a>
                                    <ul class="selectable-text-list on-hover-dropdown common-dropdown common-dropdown--sm max-h-200 scroll-sm px-0 py-8">
                                        <li>
                                            <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                            <img src="{{ asset('assets/images/flag1.png')}}" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                                            English
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                            <img src="{{ asset('assets/images/flag2.png')}}" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                                            Japan
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                            <img src="{{ asset('assets/images/flag3.png')}}" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                                            French
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                            <img src="{{ asset('assets/images/flag4.png')}}" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                                            Germany
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                            <img src="{{ asset('assets/images/flag6.png')}}" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                                            Bangladesh
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                            <img src="{{ asset('assets/images/flag5.png')}}" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                                            South Korea
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="on-hover-item border-right-item border-right-item-sm-space has-submenu arrow-white">
                                    <a href="javascript:void(0)" class="selected-text text-heading text-sm py-8">USD</a>
                                    <ul class="selectable-text-list on-hover-dropdown common-dropdown common-dropdown--sm max-h-200 scroll-sm px-0 py-8">
                                        <li>
                                            <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                            <img src="{{ asset('assets/images/flag1.png')}}" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                                            USD
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                            <img src="{{ asset('assets/images/flag2.png')}}" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                                            Yen
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                            <img src="{{ asset('assets/images/flag3.png')}}" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                                            Franc 
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                            <img src="{{ asset('assets/images/flag4.png')}}" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                                            EURO
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                            <img src="{{ asset('assets/images/flag6.png')}}" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                                            BDT
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                            <img src="{{ asset('assets/images/flag5.png')}}" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                                            WON
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <!-- Dropdown Select End -->
                        </div>
                        <form action="#" class="flex-align flex-wrap form-location-wrapper">
                            <div class="search-category style-two d-flex h-48 search-form d-sm-flex d-none">
                                <select class="js-example-basic-single border border-gray-200 border-end-0 rounded-0 border-0" name="state">
                                    <option value="1" selected disabled>All Categories</option>
                                    <option value="1">Grocery</option>
                                    <option value="1">Breakfast & Dairy</option>
                                    <option value="1">Vegetables</option>
                                    <option value="1">Milks and Dairies</option>
                                    <option value="1">Pet Foods & Toy</option>
                                    <option value="1">Breads & Bakery</option>
                                    <option value="1">Fresh Seafood</option>
                                    <option value="1">Fronzen Foods</option>
                                    <option value="1">Noodles & Rice</option>
                                    <option value="1">Ice Cream</option>
                                </select>
                                <div class="search-form__wrapper position-relative">
                                    <input type="text" class="search-form__input common-input py-13 ps-16 pe-18 rounded-0 border-0" placeholder="Search for a product or brand">
                                </div>
                                <button type="submit" class="bg-main-two-600 flex-center text-xl text-white flex-shrink-0 w-48 hover-bg-main-two-700 d-lg-flex d-none"><i class="ph ph-magnifying-glass"></i></button>
                            </div>
                        </form>
                    </div>
                    <!-- form Category start -->
                    <!-- Header Middle Right start -->
                    <div class="header-right flex-align d-lg-block d-none">
                        <div class="header-two-activities flex-align flex-wrap gap-32">
                            <button type="button" class="flex-align search-icon d-lg-none d-flex gap-4 item-hover-two">
                            <span class="text-2xl text-black d-flex position-relative item-hover__text">
                            <i class="ph ph-magnifying-glass"></i>
                            </span>
                            </button>
                            <a href="account.html" class="flex-align flex-column gap-8 item-hover-two">
                            <span class="text-2xl text-black d-flex position-relative item-hover__text">
                            <i class="ph ph-user"></i>
                            </span>
                            <span class="text-md text-black item-hover__text d-none d-lg-flex">Profile</span>
                            </a>
                            <a href="/#" class="flex-align flex-column gap-8 item-hover-two">
                            <span class="text-2xl text-black d-flex position-relative me-6 mt-6 item-hover__text">
                            <i class="ph ph-heart"></i>
                            <span class="w-16 h-16 flex-center rounded-circle bg-main-two-600 text-white text-xs position-absolute top-n6 end-n4">2</span>
                            </span>
                            <span class="text-md text-black item-hover__text d-none d-lg-flex">Wishlist</span>
                            </a>
                            <a href="/#" class="flex-align flex-column gap-8 item-hover-two">
                            <span class="text-2xl text-black d-flex position-relative me-6 mt-6 item-hover__text">
                            <i class="ph-fill ph-shuffle"></i>
                            <span class="w-16 h-16 flex-center rounded-circle bg-main-two-600 text-white text-xs position-absolute top-n6 end-n4">2</span>
                            </span>
                            <span class="text-md text-black item-hover__text d-none d-lg-flex">Compare</span>
                            </a>
                            <a href="/#" class="flex-align flex-column gap-8 item-hover-two">
                            <span class="text-2xl text-black d-flex position-relative me-6 mt-6 item-hover__text">
                            <i class="ph ph-shopping-cart-simple"></i>
                            <span class="w-16 h-16 flex-center rounded-circle bg-main-two-600 text-white text-xs position-absolute top-n6 end-n4">2</span>
                            </span>
                            <span class="text-md text-black item-hover__text d-none d-lg-flex">Cart</span>
                            </a>
                        </div>
                    </div>
                    <!-- Header Middle Right End  -->
                </nav>
            </div>
        </header>
        <!-- ======================= Middle Header Two End ========================= -->
        <!-- ==================== Header Two Start Here ==================== -->
        <header class="header bg-white border-bottom border-gray-100">
            <div class="container container-lg">
                <nav class="header-inner d-flex justify-content-between gap-8">
                    <div class="flex-align menu-category-wrapper">
                        <!-- Category Dropdown Start -->
                        <div class="category-two d-none">
                            <button type="button" class="category__button flex-align gap-8 fw-medium bg-main-two-600 p-16 text-white">
                            <span class="icon text-2xl d-xs-flex d-none"><i class="ph ph-dots-nine"></i></span>
                            <span class="d-sm-flex d-none">All</span>  Categories
                            <span class="arrow-icon text-xl d-flex"><i class="ph ph-caret-down"></i></span>
                            </button>
                            <div class="responsive-dropdown common-dropdown d-lg-none d-block nav-submenu p-0 submenus-submenu-wrapper shadow-none border border-gray-100">
                                <button type="button" class="close-responsive-dropdown rounded-circle text-xl position-absolute inset-inline-end-0 inset-block-start-0 mt-4 me-8 d-lg-none d-flex"> <i class="ph ph-x"></i> </button>
                                <div class="logo px-16 d-lg-none d-block">
                                    <a href="index.html" class="link">
                                    <img src="{{ asset('assets/images/logo/logo2.png')}}" style="width:80px; height:80px; margin-left:40px;" alt="Logo">
                                    </a>
                                </div>
                                <ul class="scroll-sm p-0 py-8 overflow-y-auto">
                                    <li class="has-submenus-submenu">
                                        <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                        <span>Cell Phone</span>
                                        <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                        </a>
                                        <div class="submenus-submenu py-16">
                                            <h6 class="text-lg px-16 submenus-submenu__title">Cell Phone</h6>
                                            <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                                <li>
                                                    <a href="shop.html">Samsung</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Iphone</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Vivo</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Oppo</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Itel</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Realme</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-submenus-submenu">
                                        <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                        <span>Wear</span>
                                        <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                        </a>
                                        <div class="submenus-submenu py-16">
                                            <h6 class="text-lg px-16 submenus-submenu__title">Wear</h6>
                                            <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                                <li>
                                                    <a href="shop.html">Samsung</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Iphone</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Vivo</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Oppo</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Itel</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Realme</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-submenus-submenu">
                                        <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                        <span>Computer</span>
                                        <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                        </a>
                                        <div class="submenus-submenu py-16">
                                            <h6 class="text-lg px-16 submenus-submenu__title">Computer</h6>
                                            <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                                <li>
                                                    <a href="shop.html">Samsung</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Iphone</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Vivo</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Oppo</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Itel</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Realme</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-submenus-submenu">
                                        <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                        <span>Headphone</span>
                                        <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                        </a>
                                        <div class="submenus-submenu py-16">
                                            <h6 class="text-lg px-16 submenus-submenu__title">Headphone</h6>
                                            <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                                <li>
                                                    <a href="shop.html">Samsung</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Iphone</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Vivo</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Oppo</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Itel</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Realme</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-submenus-submenu">
                                        <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                        <span>Smart Screen</span>
                                        <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                        </a>
                                        <div class="submenus-submenu py-16">
                                            <h6 class="text-lg px-16 submenus-submenu__title">Smart Screen</h6>
                                            <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                                <li>
                                                    <a href="shop.html">Samsung</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Iphone</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Vivo</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Oppo</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Itel</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Realme</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-submenus-submenu">
                                        <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                        <span>Smart Home</span>
                                        <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                        </a>
                                        <div class="submenus-submenu py-16">
                                            <h6 class="text-lg px-16 submenus-submenu__title">Smart Home</h6>
                                            <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                                <li>
                                                    <a href="shop.html">Samsung</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Iphone</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Vivo</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Oppo</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Itel</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Realme</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-submenus-submenu">
                                        <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                        <span>Digital Accessories</span>
                                        <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                        </a>
                                        <div class="submenus-submenu py-16">
                                            <h6 class="text-lg px-16 submenus-submenu__title">Digital Accessories</h6>
                                            <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                                <li>
                                                    <a href="shop.html">Samsung</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Iphone</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Vivo</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Oppo</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Itel</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Realme</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-submenus-submenu">
                                        <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                        <span> Value Added Services</span>
                                        <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                        </a>
                                        <div class="submenus-submenu py-16">
                                            <h6 class="text-lg px-16 submenus-submenu__title"> Value Added Services</h6>
                                            <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                                <li>
                                                    <a href="shop.html">Samsung</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Iphone</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Vivo</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Oppo</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Itel</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Realme</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-submenus-submenu">
                                        <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                        <span>Car Products</span>
                                        <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                        </a>
                                        <div class="submenus-submenu py-16">
                                            <h6 class="text-lg px-16 submenus-submenu__title">Car Products</h6>
                                            <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                                <li>
                                                    <a href="shop.html">Samsung</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Iphone</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Vivo</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Oppo</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Itel</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Realme</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-submenus-submenu">
                                        <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                        <span>Ecological Products</span>
                                        <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                        </a>
                                        <div class="submenus-submenu py-16">
                                            <h6 class="text-lg px-16 submenus-submenu__title">Ecological Products</h6>
                                            <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                                <li>
                                                    <a href="shop.html">Samsung</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Iphone</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Vivo</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Oppo</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Itel</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Realme</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-submenus-submenu">
                                        <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                        <span>Flat</span>
                                        <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                        </a>
                                        <div class="submenus-submenu py-16">
                                            <h6 class="text-lg px-16 submenus-submenu__title">Flat</h6>
                                            <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                                <li>
                                                    <a href="shop.html">Samsung</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Iphone</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Vivo</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Oppo</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Itel</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Realme</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-submenus-submenu">
                                        <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                        <span>Commercial Terminal</span>
                                        <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                        </a>
                                        <div class="submenus-submenu py-16">
                                            <h6 class="text-lg px-16 submenus-submenu__title">Commercial Terminal</h6>
                                            <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                                <li>
                                                    <a href="shop.html">Samsung</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Iphone</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Vivo</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Oppo</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Itel</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Realme</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-submenus-submenu">
                                        <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                        <span>Headphone</span>
                                        <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                        </a>
                                        <div class="submenus-submenu py-16">
                                            <h6 class="text-lg px-16 submenus-submenu__title">Headphone</h6>
                                            <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                                <li>
                                                    <a href="shop.html">Samsung</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Iphone</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Vivo</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Oppo</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Itel</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Realme</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-submenus-submenu">
                                        <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                        <span>Smart Screen</span>
                                        <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                        </a>
                                        <div class="submenus-submenu py-16">
                                            <h6 class="text-lg px-16 submenus-submenu__title">Smart Screen</h6>
                                            <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                                <li>
                                                    <a href="shop.html">Samsung</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Iphone</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Vivo</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Oppo</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Itel</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Realme</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="category d-block on-hover-item bg-white text-black">
                            <button type="button" class="category__button flex-align gap-8 fw-medium p-16 border-end border-start border-gray-100">
                            <span class="icon text-2xl d-xs-flex d-none"><i class="ph ph-dots-nine"></i></span>
                            <span class="d-sm-flex d-none">All</span>  Categories
                            <span class="arrow-icon text-xl d-flex"><i class="ph ph-caret-down"></i></span>
                            </button>
                            <div class="responsive-dropdown on-hover-dropdown common-dropdown nav-submenu p-0 submenus-submenu-wrapper">
                                <button type="button" class="close-responsive-dropdown rounded-circle text-xl position-absolute inset-inline-end-0 inset-block-start-0 mt-4 me-8 d-lg-none d-flex"> <i class="ph ph-x"></i> </button>
                                <div class="logo px-16 d-lg-none d-block">
                                    <a href="index.html" class="link">
                                    <img src="{{ asset('assets/images/logo/logo2.png')}}" alt="Logo">
                                    </a>
                                </div>
                                <ul class="scroll-sm p-0 py-8 w-300 max-h-400 overflow-y-auto">
                                    <li class="has-submenus-submenu">
                                        <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                        <span class="text-xl d-flex"><i class="ph ph-carrot"></i></span>
                                        <span>Vegetables &amp; Fruit</span>
                                        <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                        </a>
                                        <div class="submenus-submenu py-16">
                                            <h6 class="text-lg px-16 submenus-submenu__title">Vegetables &amp; Fruit</h6>
                                            <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                                <li>
                                                    <a href="shop.html">Potato &amp; Tomato</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Cucumber &amp; Capsicum</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Leafy Vegetables</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Root Vegetables</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Beans &amp; Okra</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Cabbage &amp; Cauliflower</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Gourd &amp; Drumstick</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Specialty</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-submenus-submenu">
                                        <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                        <span class="text-xl d-flex"><i class="ph ph-brandy"></i></span>
                                        <span>Beverages</span>
                                        <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                        </a>
                                        <div class="submenus-submenu py-16">
                                            <h6 class="text-lg px-16 submenus-submenu__title">Beverages</h6>
                                            <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                                <li>
                                                    <a href="shop.html">Soda &amp; Cocktail Mix </a>
                                                </li>
                                                <li>
                                                    <a href="shop.html"> Sports &amp; Energy Drinks</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html"> Non Alcoholic Drinks</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html"> Packaged Water </a>
                                                </li>
                                                <li>
                                                    <a href="shop.html"> Spring Water</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html"> Flavoured Water    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-submenus-submenu">
                                        <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                        <span class="text-xl d-flex"><i class="ph ph-brandy"></i></span>
                                        <span>Meats &amp; Seafood</span>
                                        <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                        </a>
                                        <div class="submenus-submenu py-16">
                                            <h6 class="text-lg px-16 submenus-submenu__title">Meats &amp; Seafood</h6>
                                            <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                                <li>
                                                    <a href="shop.html"> Fresh Meat </a>
                                                </li>
                                                <li>
                                                    <a href="shop.html"> Frozen Meat</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html"> Marinated Meat</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html"> Fresh &amp; Frozen Meat</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-submenus-submenu">
                                        <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                        <span class="text-xl d-flex"><i class="ph ph-brandy"></i></span>
                                        <span>Breakfast &amp; Dairy</span>
                                        <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                        </a>
                                        <div class="submenus-submenu py-16">
                                            <h6 class="text-lg px-16 submenus-submenu__title">Breakfast &amp; Dairy</h6>
                                            <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                                <li>
                                                    <a href="shop.html"> Oats &amp; Porridge</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html"> Kids Cereal</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html"> Muesli</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html"> Flakes</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html"> Granola &amp; Cereal Bars</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html"> Instant Noodles</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-submenus-submenu">
                                        <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                        <span class="text-xl d-flex"><i class="ph ph-brandy"></i></span>
                                        <span>Frozen Foods</span>
                                        <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                        </a>
                                        <div class="submenus-submenu py-16">
                                            <h6 class="text-lg px-16 submenus-submenu__title">Frozen Foods</h6>
                                            <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                                <li>
                                                    <a href="shop.html"> Instant Noodles </a>
                                                </li>
                                                <li>
                                                    <a href="shop.html"> Hakka Noodles</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html"> Cup Noodles</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html"> Vermicelli</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html"> Instant Pasta</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-submenus-submenu">
                                        <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                        <span class="text-xl d-flex"><i class="ph ph-brandy"></i></span>
                                        <span>Biscuits &amp; Snacks</span>
                                        <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                        </a>
                                        <div class="submenus-submenu py-16">
                                            <h6 class="text-lg px-16 submenus-submenu__title">Biscuits &amp; Snacks</h6>
                                            <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                                <li>
                                                    <a href="shop.html"> Salted Biscuits </a>
                                                </li>
                                                <li>
                                                    <a href="shop.html"> Marie, Health, Digestive</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html"> Cream Biscuits &amp; Wafers </a>
                                                </li>
                                                <li>
                                                    <a href="shop.html"> Glucose &amp; Milk biscuits</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html"> Cookies</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-submenus-submenu">
                                        <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                        <span class="text-xl d-flex"><i class="ph ph-brandy"></i></span>
                                        <span>Grocery &amp; Staples</span>
                                        <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                        </a>
                                        <div class="submenus-submenu py-16">
                                            <h6 class="text-lg px-16 submenus-submenu__title">Grocery &amp; Staples</h6>
                                            <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                                <li>
                                                    <a href="shop.html"> Lemon, Ginger &amp; Garlic </a>
                                                </li>
                                                <li>
                                                    <a href="shop.html"> Indian &amp; Exotic Herbs</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html"> Orangic Vegetables</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Orangic Fruits </a>
                                                </li>
                                                <li>
                                                    <a href="shop.html"> Orangic Dry Fruits</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html"> Orangic Dals &amp; pulses</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html"> Orangic Millet &amp; Flours</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Category Dropdown End  -->
                        <!-- Menu Start  -->
                        <div class="header-menu d-lg-block d-none">
                            <!-- Nav Menu Start -->
                            <ul class="nav-menu flex-align ">
                            <li class="nav-menu__item">
                            <a href="/supermarket" class="nav-menu__link">Supermarket</a>
                        </li>
                        <li class="nav-menu__item">
                            <a href="/restaurant" class="nav-menu__link">Restaurant</a>
                        </li>
                        <li class="nav-menu__item">
                            <a href="/supermarket/new-and-trending" class="nav-menu__link">New & Trending</a>
                        </li>
                        <li class="nav-menu__item">
                            <a href="/supermarket/fashion-and-beauty" class="nav-menu__link">Fashion & Beauty</a>
                        </li>
                        <li class="nav-menu__item">
                            <a href="/supermarket/electronics" class="nav-menu__link">Electronics</a>
                        </li>
                        <li class="nav-menu__item">
                            <a href="/supermarket/toys" class="nav-menu__link">Toy Shop</a>
                        </li>
                        <li class="nav-menu__item">
                            <a href="/contact" class="nav-menu__link">Contact Us</a>
                        </li>
                            </ul>
                            <!-- Nav Menu End -->
                        </div>
                        <!-- Menu End  -->
                    </div>
                    <!-- Header Right start -->
                    <div class="header-right flex-align">
                        <div class="select-dropdown-for-home-two d-lg-block d-none">
                            <!-- Dropdown Select Start -->
                            <ul class="header-top__right style-two flex-align flex-wrap">
                            <li class="nav-menu__item">
                                <a href="/logout" class="nav-menu__link text-success">{{ auth()->user()->name}}</a>
                            </li>
                            <li class="nav-menu__item">
                                <a href="/logout" class="nav-menu__link">Sign Out</a>
                            </li>
                            </ul>
                            <!-- Dropdown Select End -->
                        </div>
                        <div class="me-8 d-lg-none d-block">
                            <div class="header-two-activities flex-align flex-wrap gap-32">
                                <button type="button" class="flex-align search-icon d-lg-none d-flex gap-4 item-hover-two">
                                <span class="text-2xl text-white d-flex position-relative item-hover__text">
                                <i class="ph ph-magnifying-glass"></i>
                                </span>
                                </button>
                                <a href="account.html" class="flex-align flex-column gap-8 item-hover-two">
                                <span class="text-2xl text-white d-flex position-relative item-hover__text">
                                <i class="ph ph-user"></i>
                                </span>
                                <span class="text-md text-black item-hover__text d-none d-lg-flex">Profile</span>
                                </a>
                                <a href="/#" class="flex-align flex-column gap-8 item-hover-two">
                                <span class="text-2xl text-white d-flex position-relative me-6 mt-6 item-hover__text">
                                <i class="ph ph-heart"></i>
                                <span class="w-16 h-16 flex-center rounded-circle bg-main-two-600 text-white text-xs position-absolute top-n6 end-n4">2</span>
                                </span>
                                <span class="text-md text-white item-hover__text d-none d-lg-flex">Wishlist</span>
                                </a>
                                <a href="/#" class="flex-align flex-column gap-8 item-hover-two">
                                <span class="text-2xl text-white d-flex position-relative me-6 mt-6 item-hover__text">
                                <i class="ph-fill ph-shuffle"></i>
                                <span class="w-16 h-16 flex-center rounded-circle bg-main-two-600 text-white text-xs position-absolute top-n6 end-n4">2</span>
                                </span>
                                <span class="text-md text-white item-hover__text d-none d-lg-flex">Compare</span>
                                </a>
                                <a href="/#" class="flex-align flex-column gap-8 item-hover-two">
                                <span class="text-2xl text-white d-flex position-relative me-6 mt-6 item-hover__text">
                                <i class="ph ph-shopping-cart-simple"></i>
                                <span class="w-16 h-16 flex-center rounded-circle bg-main-two-600 text-white text-xs position-absolute top-n6 end-n4">2</span>
                                </span>
                                <span class="text-md text-white item-hover__text d-none d-lg-flex">Cart</span>
                                </a>
                            </div>
                        </div>
                        <button type="button" class="toggle-mobileMenu d-lg-none ms-3n text-gray-800 text-4xl d-flex"> <i class="ph ph-list"></i> </button>
                    </div>
                    <!-- Header Right End  -->
                </nav>
            </div>
        </header>
        <!-- ==================== Header End Here ==================== -->
        <!-- ========================= Breadcrumb Start =============================== -->
        <div class="breadcrumb py-26 bg-main-two-50">
            <div class="container container-lg">
                <div class="breadcrumb-wrapper flex-between flex-wrap gap-16">
                    <h6 class="mb-0">Shop</h6>
                    <ul class="flex-align gap-8 flex-wrap">
                        <li class="text-sm">
                            <a href="index.html" class="text-gray-900 flex-align gap-8 hover-text-main-600">
                            <i class="ph ph-house"></i>
                            Home
                            </a>
                        </li>
                        <li class="flex-align">
                            <i class="ph ph-caret-right"></i>
                        </li>
                        <li class="text-sm text-main-600"> Product Shop </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- ========================= Breadcrumb End =============================== -->
        <!-- =============================== Shop Section Start ======================================== -->
        <section class="shop py-80">
            <div class="container container-lg">
                <div class="row">
                    <!-- Sidebar Start -->
                    <div class="col-lg-3">
                        <div class="shop-sidebar">
                            <button type="button" class="shop-sidebar__close d-lg-none d-flex w-32 h-32 flex-center border border-gray-100 rounded-circle hover-bg-main-600 position-absolute inset-inline-end-0 me-10 mt-8 hover-text-white hover-border-main-600">
                            <i class="ph ph-x"></i>
                            </button>
                            <div class="shop-sidebar__box border border-gray-100 rounded-8 p-32 mb-32">
                                <h6 class="text-xl border-bottom border-gray-100 pb-24 mb-24">Dashboard</h6>
                                <ul class="max-h-540 overflow-y-auto scroll-sm">
                                    <li class="mb-24">
                                        <a href="/supermarket/product-details" class="text-gray-900 hover-text-main-600">Place Order</a>
                                    </li>
                                    <li class="mb-24">
                                        <a href="/supermarket/product-details" class="text-gray-900 hover-text-main-600">Previous Order</a>
                                    </li>
                                    <li class="mb-24">
                                        <a href="/supermarket/product-details" class="text-gray-900 hover-text-main-600">Wishlist</a>
                                    </li>
                                    <li class="mb-24">
                                        <a href="/supermarket/product-details" class="text-gray-900 hover-text-main-600">Track Order</a>
                                    </li>
                                    <li class="mb-24">
                                        <a href="/supermarket/product-details" class="text-gray-900 hover-text-main-600">Return Order</a>
                                    </li>
                                    <li class="mb-24">
                                        <a href="/supermarket/product-details" class="text-gray-900 hover-text-main-600">Account Details</a>
                                    </li>
                                    <li class="mb-24">
                                        <a href="/supermarket/product-details" class="text-gray-900 hover-text-main-600">Change Password</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Sidebar End -->
                    <!-- Content Start -->
                    <div class="col-lg-9">
                        <section class="cart py-0">
                            <div class="container container-lg">
                                <div class="row gy-4">
                                    <div class="col-xl-12 col-lg-12">
                                        <div class="cart-table border border-gray-100 rounded-8 px-40 py-48">
                                            <div class="overflow-x-auto scroll-sm scroll-sm-horizontal">
                                                <table class="table style-three">
                                                    <thead>
                                                        <tr>
                                                            <th class="h6 mb-0 text-lg fw-bold">Delete</th>
                                                            <th class="h6 mb-0 text-lg fw-bold">Product Name</th>
                                                            <th class="h6 mb-0 text-lg fw-bold">Price</th>
                                                            <th class="h6 mb-0 text-lg fw-bold">Quantity</th>
                                                            <th class="h6 mb-0 text-lg fw-bold">Subtotal</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <button type="button" class="remove-tr-btn flex-align gap-12 hover-text-danger-600">
                                                                <i class="ph ph-x-circle text-2xl d-flex"></i>
                                                                Remove
                                                                </button>
                                                            </td>
                                                            <td>
                                                                <div class="table-product d-flex align-items-center gap-24">
                                                                    <a href="/supermarket/product-details" class="table-product__thumb border border-gray-100 rounded-8 flex-center ">
                                                                    <img src="{{ asset('assets/images/product-two-img1.png')}}" alt="">
                                                                    </a>
                                                                    <div class="table-product__content text-start">
                                                                        <h6 class="title text-lg fw-semibold mb-8">
                                                                            <a href="/supermarket/product-details" class="link text-line-2" tabindex="0">Taylor Farms Broccoli Florets Vegetables</a>
                                                                        </h6>
                                                                        <div class="flex-align gap-16 mb-16">
                                                                            <div class="flex-align gap-6">
                                                                                <span class="text-md fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                                                <span class="text-md fw-semibold text-gray-900">4.8</span>
                                                                            </div>
                                                                            <span class="text-sm fw-medium text-gray-200">|</span>
                                                                            <span class="text-neutral-600 text-sm">128 Reviews</span>
                                                                        </div>
                                                                        <div class="flex-align gap-16">
                                                                            <a href="/#" class="product-card__cart btn bg-gray-50 text-heading text-sm hover-bg-main-600 hover-text-white py-7 px-8 rounded-8 flex-center gap-8 fw-medium">
                                                                            Camera
                                                                            </a>
                                                                            <a href="/#" class="product-card__cart btn bg-gray-50 text-heading text-sm hover-bg-main-600 hover-text-white py-7 px-8 rounded-8 flex-center gap-8 fw-medium">
                                                                            Videos
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="text-lg h6 mb-0 fw-semibold">UGX 125.00</span>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex rounded-4 overflow-hidden">
                                                                    <button type="button" class="quantity__minus border border-end border-gray-100 flex-shrink-0 h-48 w-48 text-neutral-600 flex-center hover-bg-main-600 hover-text-white">
                                                                    <i class="ph ph-minus"></i>
                                                                    </button>
                                                                    <input type="number" class="quantity__input flex-grow-1 border border-gray-100 border-start-0 border-end-0 text-center w-32 px-4" value="1" min="1">
                                                                    <button type="button" class="quantity__plus border border-end border-gray-100 flex-shrink-0 h-48 w-48 text-neutral-600 flex-center hover-bg-main-600 hover-text-white">
                                                                    <i class="ph ph-plus"></i>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="text-lg h6 mb-0 fw-semibold">UGX 125.00</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <button type="button" class="remove-tr-btn flex-align gap-12 hover-text-danger-600">
                                                                <i class="ph ph-x-circle text-2xl d-flex"></i>
                                                                Remove
                                                                </button>
                                                            </td>
                                                            <td>
                                                                <div class="table-product d-flex align-items-center gap-24">
                                                                    <a href="/supermarket/product-details" class="table-product__thumb border border-gray-100 rounded-8 flex-center ">
                                                                    <img src="{{ asset('assets/images/product-two-img2.png')}}" alt="">
                                                                    </a>
                                                                    <div class="table-product__content text-start">
                                                                        <h6 class="title text-lg fw-semibold mb-8">
                                                                            <a href="/supermarket/product-details" class="link text-line-2" tabindex="0">Taylor Farms Broccoli Florets Vegetables</a>
                                                                        </h6>
                                                                        <div class="flex-align gap-16 mb-16">
                                                                            <div class="flex-align gap-6">
                                                                                <span class="text-md fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                                                <span class="text-md fw-semibold text-gray-900">4.8</span>
                                                                            </div>
                                                                            <span class="text-sm fw-medium text-gray-200">|</span>
                                                                            <span class="text-neutral-600 text-sm">128 Reviews</span>
                                                                        </div>
                                                                        <div class="flex-align gap-16">
                                                                            <a href="/#" class="product-card__cart btn bg-gray-50 text-heading text-sm hover-bg-main-600 hover-text-white py-7 px-8 rounded-8 flex-center gap-8 fw-medium">
                                                                            Camera
                                                                            </a>
                                                                            <a href="/#" class="product-card__cart btn bg-gray-50 text-heading text-sm hover-bg-main-600 hover-text-white py-7 px-8 rounded-8 flex-center gap-8 fw-medium">
                                                                            Videos
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="text-lg h6 mb-0 fw-semibold">UGX 125.00</span>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex rounded-4 overflow-hidden">
                                                                    <button type="button" class="quantity__minus border border-end border-gray-100 flex-shrink-0 h-48 w-48 text-neutral-600 flex-center hover-bg-main-600 hover-text-white">
                                                                    <i class="ph ph-minus"></i>
                                                                    </button>
                                                                    <input type="number" class="quantity__input flex-grow-1 border border-gray-100 border-start-0 border-end-0 text-center w-32 px-4" value="1" min="1">
                                                                    <button type="button" class="quantity__plus border border-end border-gray-100 flex-shrink-0 h-48 w-48 text-neutral-600 flex-center hover-bg-main-600 hover-text-white">
                                                                    <i class="ph ph-plus"></i>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="text-lg h6 mb-0 fw-semibold">UGX 125.00</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="flex-between flex-wrap gap-16 mt-16">
                                                <div class="flex-align gap-16">
                                                    {{--<input type="text" class="common-input" placeholder="Coupon Code">
                                                    <button type="submit" class="btn btn-main py-18 w-100 rounded-8">Apply Coupon</button>--}}
                                                </div>
                                                <button type="submit" class="text-lg text-gray-500 pull-right hover-text-main-600">Update Cart</button>
                                            </div>
                                            <div class="col-xl-12 col-lg-12">
                                                <div class="row">
                                                    <div class="col-xl-6 col-lg-6">
                                                        <h6>Payment Methods</h6>
                                                        <div class="mt-2">
                                                            <div class="payment-item">
                                                                <div class="form-check common-check common-radio py-5 mb-0">
                                                                    <input class="form-check-input" type="radio" name="payment" id="payment1" checked>
                                                                    <label class="form-check-label fw-semibold text-neutral-600" for="payment1">Direct Bank transfer</label>
                                                                </div>
                                                                <div class="payment-item__content px-16 py-24 rounded-8 bg-main-50 position-relative">
                                                                    <p class="text-gray-800">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
                                                                </div>
                                                            </div>
                                                            {{--<div class="payment-item">
                                                                <div class="form-check common-check common-radio py-16 mb-0">
                                                                    <input class="form-check-input" type="radio" name="payment" id="payment2">
                                                                    <label class="form-check-label fw-semibold text-neutral-600" for="payment2">Check payments</label>
                                                                </div>
                                                                <div class="payment-item__content px-16 py-24 rounded-8 bg-main-50 position-relative">
                                                                    <p class="text-gray-800">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
                                                                </div>
                                                            </div>--}}
                                                            <div class="payment-item">
                                                                <div class="form-check common-check common-radio py-16 mb-0">
                                                                    <input class="form-check-input" type="radio" name="payment" id="payment3">
                                                                    <label class="form-check-label fw-semibold text-neutral-600" for="payment3">Mobile Money</label>
                                                                </div>
                                                                <div class="payment-item__content px-16 py-24 rounded-8 bg-main-50 position-relative">
                                                                    <p class="text-gray-800">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
                                                                </div>
                                                            </div>
                                                            <h6>How do you want to receive your items ?</h6>
                                                            <div class="mt-0">
                                                                <div class="payment-item">
                                                                    <div class="form-check common-check common-radio py-16 mb-0">
                                                                        <input class="form-check-input" type="radio" name="payment" id="payment1" checked>
                                                                        <label class="form-check-label fw-semibold text-neutral-600" for="payment1">Delivery</label>
                                                                    </div>
                                                                    <div class="payment-item__content px-16 py-24 rounded-8 bg-main-50 position-relative">
                                                                        <p class="text-gray-800">Add Address</p>
                                                                    </div>
                                                                </div>
                                                                <div class="payment-item">
                                                                    <div class="form-check common-check common-radio py-16 mb-0">
                                                                        <input class="form-check-input" type="radio" name="payment" id="payment1" checked>
                                                                        <label class="form-check-label fw-semibold text-neutral-600" for="payment1">Pickup</label>
                                                                    </div>
                                                                    <div class="payment-item__content px-16 py-24 rounded-8 bg-main-50 position-relative">
                                                                            <div class="col-xl-12 col-lg-12">
                                                                                  <div class="row text-center">
                                                                                  <label class="font-weight-bold">Tell Us Your Pickup Date and Time</label>
                                                                                    <div class="col-xl-6 col-lg-6">
                                                                                    <label class="font-weight-bold text-center">Date</label>
                                                                                       <input class="form-control mt-10" type="date" name="payment" id="date">
                                                                                    </div>
                                                                                    <div class="col-xl-6 col-lg-6">
                                                                                       <label class="font-weight-bold text-center">Time</label>
                                                                                       <input class="form-control mt-10" type="time" name="payment" id="time">
                                                                                    </div>
                                                                                  </div>
                                                                            </div>
                                                                            <select class="form-control mt-10">
                                                                                <option>Choose Pick Up Address</option>
                                                                                <option value="1">Aponye Building, Opp. Old Taxi Park</option>
                                                                                <option value="2">Yamaha Building Opp. Old Taxi park</option>
                                                                                <option value="3">Garden City, Yusuf Lule Road-Former Uchumi</option>
                                                                            </select>
                                                                    </div>
                                                                </div>
                                                                <div class="payment-item">
                                                                    <div class="form-check common-check common-radio py-16 mb-0">
                                                                        <input class="form-check-input" type="radio" name="payment" id="payment1" checked>
                                                                        <label class="form-check-label fw-semibold text-neutral-600" for="payment1">Shipping</label>
                                                                    </div>
                                                                    <div class="payment-item__content px-16 py-24 rounded-8 bg-main-50 position-relative">
                                                                        <p class="text-gray-800">Add Address</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6">
                                                        <div class="cart-sidebar border border-gray-100 rounded-8 px-24 py-40">
                                                            <h6 class="text-xl mb-32">Cart Totals</h6>
                                                            <div class="bg-color-three rounded-8 p-24">
                                                                <div class="mb-32 flex-between gap-8">
                                                                    <span class="text-gray-900 font-heading-two">Subtotal</span>
                                                                    <span class="text-gray-900 fw-semibold">UGX 250.00</span>
                                                                </div>
                                                                <div class="mb-32 flex-between gap-8">
                                                                    <span class="text-gray-900 font-heading-two">Extimated Delivery</span>
                                                                    <span class="text-gray-900 fw-semibold">Free</span>
                                                                </div>
                                                                <div class="mb-0 flex-between gap-8">
                                                                    <span class="text-gray-900 font-heading-two">Extimated Taxs</span>
                                                                    <span class="text-gray-900 fw-semibold">UGX 10.00</span>
                                                                </div>
                                                            </div>
                                                            <div class="bg-color-three rounded-8 p-24 mt-24">
                                                                <div class="flex-between gap-8">
                                                                    <span class="text-gray-900 text-xl fw-semibold">Total</span>
                                                                    <span class="text-gray-900 text-xl fw-semibold">UGX 250.00</span>
                                                                </div>
                                                            </div>
                                                            <button type="submit" class="btn btn-main mt-40 py-18 w-100 rounded-8">Place Your Order</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <!-- Content End -->
                </div>
            </div>
        </section>
        <!-- =============================== Shop Section End ======================================== -->
        <!-- ========================== Shipping Section End ============================ -->
        <!-- ==================== Footer Two Start Here ==================== -->
        @include('layouts.front.footer')
        @include('layouts.front.javascript')
    </body>
</html>