@extends('layout.layout')

@php
    $css = '<link rel="stylesheet" href="' . asset('assets/css/variables/variable4.css') . '"/>';
    $header='flase';
    $footer='flase';
@endphp

@section('content')    

    <!-- ..::Header Section Start Here::.. -->
    <header id="rtsHeader">
        <div class="header-topbar header-topbar3 header-topbar4">
            <div class="container header-container">
                <div class="header-top-inner">
                    <h3 class="welcome-text"><i class="rt-truck"></i> Free shipping for all orders of <span
                            class="value">150$</span></h3>
                    <div class="topbar-action">
                        <a href="#" class="action-item mr--40"><i class="rt-store"></i> Store Location<span
                                class="separator"></span></a>
                        <a href="#" class="action-item"><i class="rt-location-dot"></i> Track Order</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-wrapper">
            <div class="navbar-part navbar-part3 navbar-part4">
                <div class="container">
                    <div class="navbar-inner navbar-inner5">
                        <div class="navbar-search-area">
                            <div class="search-input-inner">
                                <select class="custom-select">
                                    <option value="hide">All Catagory</option>
                                    <option value="all">All</option>
                                    <option value="men">Men</option>
                                    <option value="women">Women</option>
                                    <option value="shoes">Shoes</option>
                                    <option value="shoes">Glasses</option>
                                    <option value="shoes">Bags</option>
                                    <option value="shoes">Assesories</option>
                                </select>
                                <div class="input-div">
                                    <div class="search-input-icon"><i class="rt-search mr--10"></i>Search</div>
                                    <input class="search-input input5" type="text" placeholder="Keyword here...">
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('index') }}" class="logo"><img src="{{ asset('assets/images/logo2.png') }}" alt="weiboo-logo"></a>
                        <div class="navbar-select-area">
                            <select class="topbar-select custom-select">
                                <option value="eng">Eng</option>
                                <option value="esp">esp</option>
                                <option value="ban">Ban</option>
                            </select>
                            <select class="topbar-select custom-select last-child">
                                <option value="usd">USD</option>
                                <option value="eur">Euro</option>
                                <option value="tk">Taka</option>
                            </select>
                        </div>
                        <div class="header-action-items header-action-items1">
                            <div class="search-part">
                                <div class="search-icon action-item icon"><i class="rt-search"></i></div>
                                <div class="search-input-area">
                                    <div class="container">
                                        <div class="search-input-inner inner-2">
                                            <div class="input-div">
                                                <input class="search-input input4" type="text"
                                                    placeholder="Search by keyword or #">
                                            </div>
                                            <div class="search-close-icon"><i class="rt-xmark"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cart action-item">
                                <div class="cart-nav">
                                    <div class="cart-icon icon"><i class="rt-cart"></i><span
                                            class="wishlist-dot icon-dot">3</span></div>
                                </div>
                            </div>
                            <div class="wishlist action-item">
                                <div class="favourite-icon icon"><a href="{{ route('wishlist') }}"><i class="rt-heart"></i></a>
                                </div>
                            </div>
                            <a href="{{ route('login') }}" class="account"><i class="rt-user-2"></i></a>
                        </div>
                        <div class="hamburger"><span></span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-sticky lower-navbar-sticky lower-navbar-sticky4">
            <div class="navbar-part navbar-part2 lower-navbar lower-navbar4">
                <div class="container">
                    <div class="navbar-inner">
                        <a href="{{ route('index') }}" class="logo"><img src="{{ asset('assets/images/logo4.svg') }}" alt="umart-logo"></a>
                        <div class="navbar-coupon-code">
                            <div class="icon"><img src="{{ asset('assets/images/icons/percent-tag.png') }}" alt="tag-icon"></div>
                            <div class="content">
                                <span class="title">COUPON CODE</span>
                                <span class="code">WEIBOO45%</span>
                            </div>
                        </div>
                        <div class="rts-menu">
                            <nav class="menus menu-toggle">
                                <ul class="nav__menu">
                                    <li class="has-dropdown"><a class="menu-item active1" href="#">Home <i
                                                class="rt-plus"></i></a>
                                     
                                    </li>
                                    <li class="has-dropdown"><a class="menu-item" href="#">Shop <i
                                                class="rt-plus"></i></a>
                                        
                                    </li>
                                    <li class="has-dropdown"><a class="menu-item" href="#">Pages <i
                                                class="rt-plus"></i></a>
                                      
                                    </li>

                                    <li class="has-dropdown"><a class="menu-item" href="#">Blog <i
                                                class="rt-plus"></i></a>
                                      
                                    </li>
                                    <li><a class="menu-item" href="{{ route('contact') }}">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="contact-info ml-auto">
                            <span class="title">Get Support</span>
                            <a href="mailto:pixcelsthemes@gmail.com" class="email-address info">info@webexample.com</a>
                        </div>
                        <div class="hamburger"><span></span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cart-bar">
            <div class="cart-header">
                <h3 class="cart-heading">MY CART (3 ITEMS)</h3>
                <div class="close-cart"><i class="fal fa-times"></i></div>
            </div>
            <div class="product-area">
                <div class="product-item">
                    <div class="product-detail">
                        <div class="product-thumb"><img src="{{ asset('assets/images/slider/image1.jpg') }}" alt="product-thumb"></div>
                        <div class="item-wrapper">
                            <span class="product-name">Parachute Jacket</span>
                            <div class="item-wrapper">
                                <span class="product-variation"><span class="color">Green /</span>
                                    <span class="size">XL</span></span>
                            </div>
                            <div class="item-wrapper">
                                <span class="product-qnty">3 ×</span>
                                <span class="product-price">$198.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="cart-edit">
                        <div class="quantity-edit">
                            <button class="button"><i class="fal fa-minus minus"></i></button>
                            <input type="text" class="input" value="3" />
                            <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                        </div>
                        <div class="item-wrapper d-flex mr--5 align-items-center">
                            <a href="#" class="product-edit"><i class="fal fa-edit"></i></a>
                            <a href="#" class="delete-cart"><i class="fal fa-times"></i></a>
                        </div>
                    </div>
                </div>
                <div class="product-item">
                    <div class="product-detail">
                        <div class="product-thumb"><img src="{{ asset('assets/images/slider/image2.jpg') }}" alt="product-thumb"></div>
                        <div class="item-wrapper">
                            <span class="product-name">Narrow Trouser</span>
                            <div class="item-wrapper">
                                <span class="product-variation"><span class="color">Green /</span>
                                    <span class="size">XL</span></span>
                            </div>
                            <div class="item-wrapper">
                                <span class="product-qnty">2 ×</span>
                                <span class="product-price">$88.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="cart-edit">
                        <div class="quantity-edit">
                            <button class="button"><i class="fal fa-minus minus"></i></button>
                            <input type="text" class="input" value="2" />
                            <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                        </div>
                        <div class="item-wrapper d-flex mr--5 align-items-center">
                            <a href="#" class="product-edit"><i class="fal fa-edit"></i></a>
                            <a href="#" class="delete-cart"><i class="fal fa-times"></i></a>
                        </div>
                    </div>
                </div>
                <div class="product-item last-child">
                    <div class="product-detail">
                        <div class="product-thumb"><img src="{{ asset('assets/images/slider/image5.jpg') }}" alt="product-thumb"></div>
                        <div class="item-wrapper">
                            <span class="product-name">Bellyless Hoodie</span>
                            <div class="item-wrapper">
                                <span class="product-variation"><span class="color">Green /</span>
                                    <span class="size">XL</span></span>
                            </div>
                            <div class="item-wrapper">
                                <span class="product-qnty">1 ×</span>
                                <span class="product-price">$289.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="cart-edit">
                        <div class="quantity-edit">
                            <button class="button"><i class="fal fa-minus minus"></i></button>
                            <input type="text" class="input" value="2" />
                            <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                        </div>
                        <div class="item-wrapper d-flex mr--5 align-items-center">
                            <a href="#" class="product-edit"><i class="fal fa-edit"></i></a>
                            <a href="#" class="delete-cart"><i class="fal fa-times"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cart-bottom-area">
                <span class="spend-shipping"><i class="fal fa-truck"></i> SPENT <span class="amount">$199.00</span> MORE
                    FOR FREE SHIPPING</span>
                <span class="total-price">TOTAL: <span class="price">$556</span></span>
                <a href="{{ route('checkOut') }}" class="checkout-btn cart-btn">PROCEED TO CHECKOUT</a>
                <a href="{{ route('cart') }}" class="view-btn cart-btn">VIEW CART</a>
            </div>
        </div>
        <!-- slide-bar start -->
        <aside class="slide-bar">
            <div class="offset-sidebar">
                <a class="hamburger-1 mobile-hamburger-1 mobile-hamburger-2 ml--30" href="#"><span><i class="rt-xmark"></i></span></a>
            </div>
            <!-- offset-sidebar start -->
            <div class="offset-sidebar-main">
                <div class="offset-widget mb-40">
                    <div class="info-widget">
                        <img src="{{ asset('assets/images/logo1.svg') }}" alt="">
                        <p class="mb-30">
                            We must explain to you how all seds this mistakens idea denouncing pleasures and praising
                            account.
                        </p>
                    </div>
                    <div class="info-widget info-widget2">
                        <h4 class="offset-title mb-20">Get In Touch </h4>
                        <ul>
                            <li class="info phone"><a href="tel:78090790890208806803">780 907 908 90, 208 806 803</a>
                            </li>
                            <li class="info email"><a href="email:pixcelsthemes@gmail.com">pixcelsthemes@gmail.com</a></li>
                            <li class="info web"><a href="www.webexample.com">www.webexample.com</a></li>
                            <li class="info location">13/A, New Pro State, NYC</li>
                        </ul>
                        <div class="offset-social-link">
                            <h4 class="offset-title mb-20">Follow Us </h4>
                            <ul class="social-icon">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- offset-sidebar end -->
            <!-- side-mobile-menu start -->
            <nav class="side-mobile-menu side-mobile-menu1 side-mobile-menu2">
                <ul id="mobile-menu-active">
                    <li class="has-dropdown firstlvl">
                        <a class="mm-link" href="{{ route('index') }}">Home <i class="rt-angle-down"></i></a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('index') }}">Main Home</a></li>
                            <li><a href="{{ route('indexTwo') }}">Fashion Home</a></li>
                            <li><a href="{{ route('indexNine') }}">Fashion Home Two</a></li>
                            <li><a href="{{ route('indexThree') }}">Furniture Home</a></li>
                            <li><a href="{{ route('indexFour') }}">Decor Home</a></li>
                            <li><a href="{{ route('indexFive') }}">Electronics Home</a></li>
                            <li><a href="{{ route('indexSix') }}">Grocery Home</a></li>
                            <li><a href="{{ route('indexSeven') }}">Footwear Home</a></li>
                            <li><a href="{{ route('indexEight') }}">Gaming Home</a></li>
                            <li><a href="{{ route('indexTen') }}">Sunglass Home</a></li>
                        </ul>
                    </li>
                    <li class="has-dropdown firstlvl">
                        <a class="mm-link" href="{{ route('shop') }}">Shop <i class="rt-angle-down"></i></a>
                        <ul class="sub-menu mega-dropdown-mobile">
                            <li class="mega-dropdown-li">
                                <ul class="mega-dropdown-ul mm-show">
                                    <li class="dropdown-li"><a class="dropdown-link" href="{{ route('shop') }}">Shop</a>
                                    </li>
                                    <li class="dropdown-li"><a class="dropdown-link" href="{{ route('sidebarLeft') }}">Left
                                            Sidebar
                                            Shop</a>
                                    </li>
                                    <li class="dropdown-li"><a class="dropdown-link" href="{{ route('sidebarRight') }}">Right
                                            Sidebar
                                            Shop</a>
                                    </li>
                                    <li class="dropdown-li"><a class="dropdown-link" href="{{ route('fullWidthShop') }}">Full
                                            Width Shop</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="mega-dropdown-li">
                                <ul class="mega-dropdown-ul mm-show">
                                    <li class="dropdown-li"><a class="dropdown-link" href="{{ route('productDetails') }}">Single
                                            Product
                                            Layout
                                            One</a>
                                    </li>
                                    <li class="dropdown-li"><a class="dropdown-link" href="{{ route('productDetails2') }}">Single
                                            Product Layout
                                            Two</a>
                                    </li>
                                    <li class="dropdown-li"><a class="dropdown-link"
                                            href="{{ route('variableProducts') }}">Variable Product</a>
                                    </li>
                                    <li class="dropdown-li"><a class="dropdown-link"
                                            href="{{ route('groupedProducts') }}">Grouped Product</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="mega-dropdown-li">
                                <ul class="mega-dropdown-ul mm-show">
                                    <li class="dropdown-li"><a class="dropdown-link" href="{{ route('cart') }}">Cart
                                        </a>
                                    </li>
                                    <li class="dropdown-li"><a class="dropdown-link" href="{{ route('checkOut') }}">Checkout</a>
                                    </li>
                                    <li class="dropdown-li"><a class="dropdown-link" href="{{ route('account') }}">My
                                            Account</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="has-dropdown firstlvl">
                        <a class="mm-link" href="{{ route('index') }}">Pages <i class="rt-angle-down"></i></a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('about') }}">About</a></li>
                            <li><a href="{{ route('faq') }}">FAQ's</a></li>
                            <li><a href="{{ route('errorPage') }}">Error 404</a></li>
                        </ul>
                    </li>
                    <li class="has-dropdown firstlvl">
                        <a class="mm-link" href="{{ route('news') }}">Blog <i class="rt-angle-down"></i></a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('news') }}">Blog</a></li>
                            <li><a href="{{ route('newsGrid') }}">Blog Grid</a></li>
                            <li><a href="{{ route('newsDetails') }}">Blog Details</a></li>
                        </ul>
                    </li>
                    <li><a class="mm-link" href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </nav>
            <div class="header-action-items header-action-items1 header-action-items-side">
                <div class="search-part">
                    <div class="search-icon action-item icon"><i class="rt-search"></i></div>
                    <div class="search-input-area">
                        <div class="container">
                            <div class="search-input-inner">
                                <select id="custom-select">
                                    <option value="hide">All Catagory</option>
                                    <option value="all">All</option>
                                    <option value="men">Men</option>
                                    <option value="women">Women</option>
                                    <option value="shoes">Shoes</option>
                                    <option value="shoes">Glasses</option>
                                    <option value="shoes">Bags</option>
                                    <option value="shoes">Assesories</option>
                                </select>
                                <div class="input-div">
                                    <div class="search-input-icon"><i class="rt-search mr--10"></i></div>
                                    <input class="search-input" type="text" placeholder="Search by keyword or #">
                                </div>
                                <div class="search-close-icon"><i class="rt-xmark"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cart action-item">
                    <div class="cart-nav">
                        <div class="cart-icon icon"><i class="rt-cart"></i><span class="wishlist-dot icon-dot">3</span>
                        </div>
                    </div>
                </div>
                <div class="wishlist action-item">
                    <div class="favourite-icon icon"><i class="rt-heart"></i><span class="cart-dot icon-dot">0</span>
                    </div>
                </div>
                <a href="{{ route('login') }}" class="account"><i class="rt-user-2"></i></a>
            </div>
            <!-- side-mobile-menu end -->
        </aside>
    </header>
    <!-- ..::Header Section End Here::.. -->

    <!-- ..::Banner Section Start Here::.. -->
    <div class="banner banner-1 banner-8 bg-image">
        <div class="container">
            <div class="banner-inner">
                <div class="row">
                    <div class="col-xl-2 col-md-4 col-sm-12 gutter-1">
                        <div class="catagory-sidebar">
                            <div class="widget-bg">
                                <h2 class="widget-title">All Categories <i class="rt-angle-down"></i></h2>
                                <nav>
                                    <ul>
                                        <li><a href="{{ route('shop') }}">Action <i class="rt rt-arrow-right-long"></i></a></li>
                                        <li><a href="{{ route('shop') }}">Adventure <i class="rt rt-arrow-right-long"></i></a></li>
                                        <li><a href="{{ route('shop') }}">Ghost Story <i class="rt rt-arrow-right-long"></i></a></li>
                                        <li><a href="{{ route('shop') }}">Racing <i class="rt rt-arrow-right-long"></i></a></li>
                                        <li><a href="{{ route('shop') }}">Cell Phones <i class="rt rt-arrow-right-long"></i></a></li>
                                        <li><a href="{{ route('shop') }}">Electronics <i class="rt rt-arrow-right-long"></i></a></li>
                                        <li><a href="{{ route('shop') }}">Gaming <i class="rt rt-arrow-right-long"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-10 col-md-8 col-sm-12 gutter-2">
                        <div class="swiper bannerSlide2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="banner-single bg-image bg-image-3-1 bg-image-8-1">
                                        <div class="container">
                                            <div class="single-inner">
                                                <div class="content-box">
                                                    <h2 class="slider-title"> CALL OF <br> DUTY GAMES</h2>
                                                    <a href="{{ route('shop') }}" class="slider-btn2">View Collections</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="banner-single bg-image bg-image-3-3 bg-image-8-2">
                                        <div class="container">
                                            <div class="single-inner">
                                                <div class="content-box">
                                                    <h2 class="slider-title"> BLADEPOINT MORUS <br> CUP SEASON 2</h2>
                                                    <a href="{{ route('shop') }}" class="slider-btn2">View Collections</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="banner-single bg-image bg-image-3-4 bg-image-8-3">
                                        <div class="container">
                                            <div class="single-inner">
                                                <div class="content-box">
                                                    <h2 class="slider-title"> NEW GAMES <br> FOR RANDOM CLICK</h2>
                                                    <a href="{{ route('shop') }}" class="slider-btn2">View Collections</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-navigation">
                                <div class="swiper-button-prev slider-btn prev"><i
                                        class="rt rt-arrow-left-long"></i></div>
                                <div class="swiper-button-next slider-btn next"><i
                                        class="rt rt-arrow-right-long"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..::Banner Section End Here::.. -->

    <!-- ..::Offer Section Start Here::.. -->
    <div class="rts-offer-section section-8">
        <div class="container">
            <div class="section-inner">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="product-item7">
                            <div class="product-image">
                                <img src="{{ asset('assets/images/products/home8/game01.webp') }}" alt="">
                            </div>
                            <div class="bottom-text">
                                <a href="{{ route('shop') }}" class="sub-title">New Collections</a>
                                <h3 class="title">X24 Remote Game</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="product-item7">
                            <div class="product-image">
                                <img src="{{ asset('assets/images/products/home8/fifa.webp') }}" alt="">
                            </div>
                            <div class="bottom-text">
                                <a href="{{ route('shop') }}" class="sub-title">New Collections</a>
                                <h3 class="title">Fifa World Cup 2023</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="product-item7">
                            <div class="product-image">
                                <img src="{{ asset('assets/images/products/home8/samuri.webp') }}" alt="">
                            </div>
                            <div class="bottom-text">
                                <a href="{{ route('shop') }}" class="sub-title">New Collections</a>
                                <h3 class="title">Samurai Boost Game</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..::Offer Section End Here::.. -->

    <!-- ..::Featured Product Section Start Here::.. -->
    <div class="rts-featured-product-section1 featured-product7 featured-product8">
        <div class="container">
            <div class="rts-featured-product-section-inner">
                <div class="section-header section-header3">
                    <div class="wrapper">
                        <h2 class="title">Latest Games</h2>
                        <a href="{{ route('shop') }}" class="section-button">Veiw All</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                        <div class="product-item element-item1">
                            <a href="{{ route('productDetails') }}" class="product-image">
                                <div class="image-vari1 image-vari"><img
                                        src="{{ asset('assets/images/products/home8/gun-410x410.webp') }}" alt="product-image">
                                </div>
                            </a>
                            <div class="bottom-content">
                                <a href="{{ route('productDetails') }}" class="product-name">Online Action Game</a>
                                <div class="action-wrap">
                                    <span class="price">$39.00</span>
                                    <a href="{{ route('cart') }}" class="addto-cart"><i class="fal fa-shopping-cart"></i> Add to Cart</a>
                                </div>
                            </div>
                            <div class="quick-action-button">
                                <div class="cta-single cta-quickview">
                                    <button class="product-details-popup-btn"><i class="far fa-eye"></i></button>
                                </div>
                                <div class="cta-single cta-wishlist">
                                    <a href="{{ route('wishlist') }}"><i class="far fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                        <div class="product-item element-item1">
                            <a href="{{ route('productDetails') }}" class="product-image">
                                <div class="image-vari1 image-vari"><img
                                        src="{{ asset('assets/images/products/home8/action-410x410.webp') }}" alt="product-image">
                                </div>
                            </a>
                            <div class="bottom-content">
                                <a href="{{ route('productDetails') }}" class="product-name">Life Of Gun</a>
                                <div class="action-wrap">
                                    <span class="price">$220.00</span>
                                    <a href="{{ route('cart') }}" class="addto-cart"><i class="fal fa-shopping-cart"></i> Add to Cart</a>
                                </div>
                            </div>
                            <div class="quick-action-button">
                                <div class="cta-single cta-quickview">
                                    <button class="product-details-popup-btn"><i class="far fa-eye"></i></button>
                                </div>
                                <div class="cta-single cta-wishlist">
                                    <a href="{{ route('wishlist') }}"><i class="far fa-heart"></i></a>
                                </div>
                            </div>
                            <div class="product-features">
                                <div class="discount-tag product-tag tag-2">-38%</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                        <div class="product-item element-item1">
                            <a href="{{ route('productDetails') }}" class="product-image">
                                <div class="image-vari1 image-vari"><img
                                        src="{{ asset('assets/images/products/home8/racing-410x410.webp') }}" alt="product-image">
                                </div>
                            </a>
                            <div class="bottom-content">
                                <a href="{{ route('productDetails') }}" class="product-name">Speed Racing Game</a>
                                <div class="action-wrap">
                                    <span class="price">$220.00</span>
                                    <a href="{{ route('cart') }}" class="addto-cart"><i class="fal fa-shopping-cart"></i> Add to Cart</a>
                                </div>
                            </div>
                            <div class="quick-action-button">
                                <div class="cta-single cta-quickview">
                                    <button class="product-details-popup-btn"><i class="far fa-eye"></i></button>
                                </div>
                                <div class="cta-single cta-wishlist">
                                    <a href="{{ route('wishlist') }}"><i class="far fa-heart"></i></a>
                                </div>
                            </div>
                            <div class="product-features">
                                <div class="new-tag product-tag tag-2">HOT</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                        <div class="product-item element-item1">
                            <a href="{{ route('productDetails') }}" class="product-image">
                                <div class="image-vari1 image-vari"><img
                                        src="{{ asset('assets/images/products/home8/Carmaker-410x410.webp') }}" alt="product-image">
                                </div>
                            </a>
                            <div class="bottom-content">
                                <a href="{{ route('productDetails') }}" class="product-name">Action With Jailer</a>
                                <div class="action-wrap">
                                    <span class="price">$250.00</span>
                                    <a href="{{ route('cart') }}" class="addto-cart"><i class="fal fa-shopping-cart"></i> Add to Cart</a>
                                </div>
                            </div>
                            <div class="quick-action-button">
                                <div class="cta-single cta-quickview">
                                    <button class="product-details-popup-btn"><i class="far fa-eye"></i></button>
                                </div>
                                <div class="cta-single cta-wishlist">
                                    <a href="{{ route('wishlist') }}"><i class="far fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                        <div class="product-item element-item1">
                            <a href="{{ route('productDetails') }}" class="product-image">
                                <div class="image-vari1 image-vari"><img
                                        src="{{ asset('assets/images/products/home8/game2-410x410.webp') }}" alt="product-image">
                                </div>
                            </a>
                            <div class="bottom-content">
                                <a href="{{ route('productDetails') }}" class="product-name">Legends Of Runeterra</a>
                                <div class="action-wrap">
                                    <span class="price">$100.00</span>
                                    <a href="{{ route('cart') }}" class="addto-cart"><i class="fal fa-shopping-cart"></i> Add to Cart</a>
                                </div>
                            </div>
                            <div class="quick-action-button">
                                <div class="cta-single cta-quickview">
                                    <button class="product-details-popup-btn"><i class="far fa-eye"></i></button>
                                </div>
                                <div class="cta-single cta-wishlist">
                                    <a href="{{ route('wishlist') }}"><i class="far fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                        <div class="product-item element-item1">
                            <a href="{{ route('productDetails') }}" class="product-image">
                                <div class="image-vari1 image-vari"><img
                                        src="{{ asset('assets/images/products/home8/gaming-410x410.webp') }}" alt="product-image">
                                </div>
                            </a>
                            <div class="bottom-content">
                                <a href="{{ route('productDetails') }}" class="product-name">Genchin Impact</a>
                                <div class="action-wrap">
                                    <span class="price">$220.00</span>
                                    <a href="{{ route('cart') }}" class="addto-cart"><i class="fal fa-shopping-cart"></i> Add to Cart</a>
                                </div>
                            </div>
                            <div class="quick-action-button">
                                <div class="cta-single cta-quickview">
                                    <button class="product-details-popup-btn"><i class="far fa-eye"></i></button>
                                </div>
                                <div class="cta-single cta-wishlist">
                                    <a href="{{ route('wishlist') }}"><i class="far fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                        <div class="product-item element-item1">
                            <a href="{{ route('productDetails') }}" class="product-image">
                                <div class="image-vari1 image-vari"><img
                                        src="{{ asset('assets/images/products/home8/ghost-410x410.webp') }}" alt="product-image">
                                </div>
                            </a>
                            <div class="bottom-content">
                                <a href="{{ route('productDetails') }}" class="product-name">Royale Ghost Story</a>
                                <div class="action-wrap">
                                    <span class="price">$220.00</span>
                                    <a href="{{ route('cart') }}" class="addto-cart"><i class="fal fa-shopping-cart"></i> Add to Cart</a>
                                </div>
                            </div>
                            <div class="quick-action-button">
                                <div class="cta-single cta-quickview">
                                    <button class="product-details-popup-btn"><i class="far fa-eye"></i></button>
                                </div>
                                <div class="cta-single cta-wishlist">
                                    <a href="{{ route('wishlist') }}"><i class="far fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                        <div class="product-item element-item1">
                            <a href="{{ route('productDetails') }}" class="product-image">
                                <div class="image-vari1 image-vari"><img
                                        src="{{ asset('assets/images/products/home8/cod-410x410.jpg') }}" alt="product-image">
                                </div>
                            </a>
                            <div class="bottom-content">
                                <a href="{{ route('productDetails') }}" class="product-name">Call Of Duty</a>
                                <div class="action-wrap">
                                    <span class="price">$220.00</span>
                                    <a href="{{ route('cart') }}" class="addto-cart"><i class="fal fa-shopping-cart"></i> Add to Cart</a>
                                </div>
                            </div>
                            <div class="quick-action-button">
                                <div class="cta-single cta-quickview">
                                    <button class="product-details-popup-btn"><i class="far fa-eye"></i></button>
                                </div>
                                <div class="cta-single cta-wishlist">
                                    <a href="{{ route('wishlist') }}"><i class="far fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..::Featured Product Section End Here::.. -->

    <!-- ..::Brand Section Start Here::.. -->
    <div class="rts-brands-section2 brand-bg3 brand-bg8">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="brands-section-inner">
                        <div class="slider-div">
                            <div class="swiper rts-brandSlide1">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a class="brand-front" href="#"><img src="{{ asset('assets/images/brands/panther4.webp') }}"
                                                alt="Brand Logo"></a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a class="brand-front" href="#"><img src="{{ asset('assets/images/brands/231.webp') }}"
                                                alt="Brand Logo"></a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a class="brand-front" href="#"><img src="{{ asset('assets/images/brands/531.webp') }}"
                                                alt="Brand Logo"></a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a class="brand-front" href="#"><img src="{{ asset('assets/images/brands/5466967.webp') }}"
                                                alt="Brand Logo"></a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a class="brand-front" href="#"><img src="{{ asset('assets/images/brands/5485618.webp') }}"
                                                alt="Brand Logo"></a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a class="brand-front" href="#"><img src="{{ asset('assets/images/brands/5572905.webp') }}"
                                                alt="Brand Logo"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..::Brand Section End Here::.. -->

    <!-- ..::Newsletter Section Start Here::.. -->
    <div class="newsletter-banner newsletter-banner2 newsletter-banner8">
        <div class="container">
            <div class="newsletter-contents">
                <span class="section-pretitle">Newsletter</span>
                <span class="section-title-2">Join Our Newsletter</span>
                <p class="mb--30">Hey you, sign up it only takes a second to be the first to find out about <br>
                    our latest news and promotions…</p>

                <div class="newsletter-input">
                    <input type="email" placeholder="Your email address">
                    <button type="submit" class="subscribe-btn"><i class="rt-envelope mr--10"></i>
                        Subscribe</button>
                </div>
            </div>
        </div>
    </div>
    <!-- ..::Newsletter Section End Here::.. -->

    <!-- ..::Newsletter Section Start Here::.. -->
    <div class="rts-services-section section-gap services-section8">
        <div class="container">
            <div class="row">
                <div class="col-lg-15 col-md-4 col-sm-6">
                    <a href="{{ route('shop') }}" class="service-item">
                        <div class="service-icon"><img src="{{ asset('assets/images/products/home8/cat-action.jpg') }}" alt="service-icon"></div>
                        <div class="contents">
                            <h3 class="service-title">Action</h3>
                            <p>3 Items</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-15 col-md-4 col-sm-6">
                    <a href="{{ route('shop') }}" class="service-item">
                        <div class="service-icon"><img src="{{ asset('assets/images/products/home8/game2.webp') }}" alt="service-icon">
                        </div>
                        <div class="contents">
                            <h3 class="service-title">Adventure</h3>
                            <p>3 Items</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-15 col-md-4 col-sm-6">
                    <a href="{{ route('shop') }}" class="service-item">
                        <div class="service-icon"><img src="{{ asset('assets/images/products/home8/modern-cars.jpg') }}" alt="service-icon">
                        </div>
                        <div class="contents">
                            <h3 class="service-title">Ghost Story</h3>
                            <p>3 Items</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-15 col-md-4 col-sm-6">
                    <a href="{{ route('shop') }}" class="service-item">
                        <div class="service-icon"><img src="{{ asset('assets/images/products/home8/120.jpg') }}" alt="service-icon"></div>
                        <div class="contents">
                            <h3 class="service-title">Racing</h3>
                            <p>3 Items</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-15 col-md-4 col-sm-6">
                    <a href="{{ route('shop') }}" class="service-item">
                        <div class="service-icon"><img src="{{ asset('assets/images/products/home8/samuri.webp') }}" alt="service-icon"></div>
                        <div class="contents">
                            <h3 class="service-title">Gaming</h3>
                            <p>3 Items</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- ..::Newsletter Section End Here::.. -->

    <!-- ..::Feeds Section Start Here::.. -->
    <div class="rts-feeds-section rts-feeds-section2 rts-feeds-section8 section-gap">
        <div class="container">
            <div class="section-header section-header4 section-header8">
                <span class="section-pretitle">News</span>
                <span class="section-title-2">Latest News</span>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-4 col-md-6">
                    <div class="feed-item">
                        <a href="{{ route('newsDetails') }}" class="feed-image"><img src="{{ asset('assets/images/products/home8/modern-gamepads.webp') }}"
                                alt="feed-image"></a>
                        <div class="contents">
                            <p class="date"> June 11, 2024 </p>
                            <h2 class="feed-title"><a href="{{ route('newsDetails') }}">Online Game Competition</a></h2>
                            <a href="{{ route('newsDetails') }}" class="content-button">Read More <i class="fa fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="feed-item">
                        <a href="{{ route('newsDetails') }}" class="feed-image"><img src="{{ asset('assets/images/products/home8/e-sport-arena.webp') }}"
                                alt="feed-image"></a>
                        <div class="contents">
                            <p class="date"> June 7, 2024 </p>
                            <h2 class="feed-title"><a href="{{ route('newsDetails') }}">Pubg News 2023</a></h2>
                            <a href="{{ route('newsDetails') }}" class="content-button">Read More <i class="fa fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="feed-item last-child">
                        <a href="{{ route('newsDetails') }}" class="feed-image"><img src="{{ asset('assets/images/products/home8/202k-768x512.webp') }}"
                                alt="feed-image"></a>
                        <div class="contents">
                            <p class="date"> June 3, 2024 </p>
                            <h2 class="feed-title"><a href="{{ route('newsDetails') }}">WWE 2k22 Review</a></h2>
                            <a href="{{ route('newsDetails') }}" class="content-button">Read More <i class="fa fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..::Feeds Section End Here::.. -->

    <!-- ..::Newsletter Popup Start Here::.. -->
    <div class="rts-newsletter-popup">
        <div class="newsletter-close-btn"><i class="fal fa-times"></i></div>
        <div class="newsletter-inner">
            <h3 class="newsletter-heading">Get Weekly Newsletter</h3>
            <p>Priyoshop has brought to you the Hijab 3 Pieces Combo Pack
                PS23. It is a completely modern design</p>
            <form>
                <div class="input-area">
                    <div class="input-div"><input type="text" placeholder="Your name">
                        <div class="input-icon"><i class="far fa-user"></i></div>
                    </div>
                    <div class="input-div"><input type="email" placeholder="Email address" required>
                        <div class="input-icon"><i class="far fa-envelope"></i></div>
                    </div>
                </div>
                <button type="submit" class="subscribe-btn">Subscribe Now <i
                        class="fal fa-long-arrow-right ml--5"></i></button>
            </form>
        </div>
    </div>
    <!-- ..::Newsletter Popup End Here::.. -->

    <!-- ..::Product-details Section Start Here::.. -->
    <div class="product-details-popup-wrapper">
        <div class="rts-product-details-section rts-product-details-section2 product-details-popup-section">
            <div class="product-details-popup">
                <button class="product-details-close-btn"><i class="fal fa-times"></i></button>
                <div class="details-product-area">
                    <div class="product-thumb-area">
                        <div class="cursor"></div>
                        <div class="thumb-wrapper one filterd-items figure">
                            <div class="product-thumb zoom" onmousemove="zoom(event)"
                                style="background-image: url('{{ asset('assets/images/products/product-details.jpg') }}"><img
                                    src="{{ asset('assets/images/products/product-details.jpg') }}" alt="product-thumb">
                            </div>
                        </div>
                        <div class="thumb-wrapper two filterd-items hide">
                            <div class="product-thumb zoom" onmousemove="zoom(event)"
                                style="background-image: url('{{ asset('assets/images/products/product-filt2.jpg') }}"><img
                                    src="{{ asset('assets/images/products/product-filt2.jpg') }}" alt="product-thumb">
                            </div>
                        </div>
                        <div class="thumb-wrapper three filterd-items hide">
                            <div class="product-thumb zoom" onmousemove="zoom(event)"
                                style="background-image: url('{{ asset('assets/images/products/product-filt3.jpg') }}"><img
                                    src="{{ asset('assets/images/products/product-filt3.jpg') }}" alt="product-thumb">
                            </div>
                        </div>
                        <div class="product-thumb-filter-group">
                            <div class="thumb-filter filter-btn active" data-show=".one"><img
                                    src="{{ asset('assets/images/products/product-filt1.jpg') }}" alt="product-thumb-filter"></div>
                            <div class="thumb-filter filter-btn" data-show=".two"><img
                                    src="{{ asset('assets/images/products/product-filt2.jpg') }}" alt="product-thumb-filter"></div>
                            <div class="thumb-filter filter-btn" data-show=".three"><img
                                    src="{{ asset('assets/images/products/product-filt3.jpg') }}" alt="product-thumb-filter"></div>
                        </div>
                    </div>
                    <div class="contents">
                        <div class="product-status">
                            <span class="product-catagory">Dress</span>
                            <div class="rating-stars-group">
                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                <div class="rating-star"><i class="fas fa-star-half-alt"></i></div>
                                <span>10 Reviews</span>
                            </div>
                        </div>
                        <h2 class="product-title">Wide Cotton Tunic Dress <span class="stock">In Stock</span></h2>
                        <span class="product-price"><span class="old-price">$9.35</span> $7.25</span>
                        <p>
                            Priyoshop has brought to you the Hijab 3 Pieces Combo Pack PS23. It is a
                            completely modern design and you feel comfortable to put on this hijab.
                            Buy it at the best price.
                        </p>
                        <div class="product-bottom-action">
                            <div class="cart-edit">
                                <div class="quantity-edit action-item">
                                    <button class="button minus"><i class="fal fa-minus minus"></i></button>
                                    <input type="text" class="input" value="01" />
                                    <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                                </div>
                            </div>
                            <a href="{{ route('cart') }}" class="addto-cart-btn action-item"><i class="rt-basket-shopping"></i>
                                Add To
                                Cart</a>
                            <a href="{{ route('wishlist') }}" class="wishlist-btn action-item"><i class="rt-heart"></i></a>
                        </div>
                        <div class="product-uniques">
                            <span class="sku product-unipue"><span>SKU: </span> BO1D0MX8SJ</span>
                            <span class="catagorys product-unipue"><span>Categories: </span> T-Shirts, Tops, Mens</span>
                            <span class="tags product-unipue"><span>Tags: </span> fashion, t-shirts, Men</span>
                        </div>
                        <div class="share-social">
                            <span>Share:</span>
                            <a class="platform" href="http://facebook.com" target="_blank"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="platform" href="http://twitter.com" target="_blank"><i
                                    class="fab fa-twitter"></i></a>
                            <a class="platform" href="http://behance.com" target="_blank"><i
                                    class="fab fa-behance"></i></a>
                            <a class="platform" href="http://youtube.com" target="_blank"><i
                                    class="fab fa-youtube"></i></a>
                            <a class="platform" href="http://linkedin.com" target="_blank"><i
                                    class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..::Product-details Section End Here::.. -->

    <!-- ..::Footer Start Here::.. -->
    <div class="footer footer-3 footer-4">
        <div class="container">
            <div class="footer-inner">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-sm-6 box-widget-col">
                        <div class="footer-widget footer-box-widget">
                            <div class="footer-logo"><img src="{{ asset('assets/images/logo2.png') }}" alt="footer-logo"></div>
                            <p>Solid is the information & experience
                                directed at an end-user</p>
                            <div class="quick-contact">
                                <div class="phone contact-item">
                                    <div class="icon"><img src="{{ asset('assets/images/icons/24clock2.png') }}" alt="chat-icon">
                                    </div>
                                    <div class="contact-info">
                                        <a href="tel:0020500" class="service-time info">0020 500 - CALL - 000</a>
                                        <span class="title">Mon - Fri: 9:00-20:00</span>
                                    </div>
                                </div>
                                <div class="email contact-item">
                                    <div class="icon"><img src="{{ asset('assets/images/icons/mail2.png') }}" alt="phone-icon">
                                    </div>
                                    <div class="contact-info">
                                        <a href="mailto:pixcelsthemes@gmail.com"
                                            class="email-address info">pixcelsthemes@gmail.com</a>
                                        <span class="title">Get Support</span>
                                    </div>
                                </div>
                            </div>
                            <ul class="social-links-footer2">
                                <li><a class="platform fb" target="_blank" href="http://facebook.com"><i
                                            class="fab fa-facebook"></i></a>
                                </li>
                                <li><a class="platform yt" target="_blank" href="http://youtube.com"><i
                                            class="fab fa-youtube"></i></a>
                                </li>
                                <li><a class="platform ttr" target="_blank" href="http://twitter.com"><i
                                            class="fab fa-twitter"></i></a>
                                </li>
                                <li><a class="platform lkd" target="_blank" href="http://linkedin.com"><i
                                            class="fab fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <h3 class="footer-widget-title">About Us</h3>
                            <p class="widget-text">Elegant pink origami design three type
                                of dimensional view and decoration co
                                Great for adding a decorative touch to
                                any room’s decor.</p>
                            <a href="#0" class="getin-touch">Get In Touch <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-13 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <h3 class="footer-widget-title">Information</h3>
                            <ul class="widget-items cata-widget">
                                <li class="widget-list-item"><a href="#0">Custom Service</a></li>
                                <li class="widget-list-item"><a href="#0">FAQs</a></li>
                                <li class="widget-list-item"><a href="#0">Ordering Tracking</a></li>
                                <li class="widget-list-item"><a href="#0">Contacts</a></li>
                                <li class="widget-list-item"><a href="#0">Events</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-13 col-md-6 col-sm-6">
                        <h3 class="footer-widget-title">My Account</h3>
                        <ul class="footer-widget">
                            <li class="widget-list-item"><a href="#0">Delivery Infomation</a></li>
                            <li class="widget-list-item"><a href="#0">Privacy Policy</a></li>
                            <li class="widget-list-item"><a href="#0">Discount</a></li>
                            <li class="widget-list-item"><a href="#0">Custom Service</a></li>
                            <li class="widget-list-item"><a href="#0">Terms & Condition</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-25 col-md-6 col-sm-6">
                        <h3 class="footer-widget-title">Get Newsletter</h3>
                        <div class="footer-widget newsletter-widget">
                            <p class="widget-text">Get 10% off your first order! Hurry up</p>
                            <div class="input-div">
                                <input type="email" placeholder="Enter email address">
                            </div>
                            <a href="#0" class="subscribe-btn">Subscribe Now <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="footer-bottombar">
                    <div class="app-download">
                        <span class="download-text">Order faster with our App!</span>
                        <a href="http://appstore.com" target="_blank" class="download-store"><img
                                src="{{ asset('assets/images/items/appstore.jpg') }}" alt=""></a>
                        <a href="https://play.google.com/store/apps" target="_blank" class="download-store"><img
                                src="{{ asset('assets/images/items/playstore.jpg') }}" alt=""></a>
                    </div>
                    <div class="payment-methods"><img src="{{ asset('assets/images/footer/payment2.svg') }}" alt="payment-methods">
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-bottom-inner">
                    <span class="copyright">Copyright & Design By <a href="http://PixcelsThemes.com" class="brand"
                            target="_blank">PixcelsThemes</a> -2024</span>
                </div>
            </div>
        </div>
    </div>
    <!-- ..::Footer End Here::.. -->

@endsection