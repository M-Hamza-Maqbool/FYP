<div class="header bg-white">
    <!-- Top Bar -->
    <div class="top-navbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col">

                </div>

                <div class="text-right col-6 d-none d-lg-block">
                    <ul class=" inline-links">
                            <li>
                                <a style="font-size: 1rem"  class="top-bar-item">{{__('Login')}}</a>
                            </li>
                            <li>
                                <a style="font-size: 1rem"  class="top-bar-item">{{__('Registration')}}</a>
                            </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END Top Bar -->

    <!-- mobile menu -->
    <div class="mobile-side-menu d-lg-none">
        <div class="side-menu-overlay opacity-0" onclick="sideMenuClose()"></div>
        <div class="side-menu-wrap opacity-0">
            <div class="side-menu closed">
                <div class="side-menu-header bg-red">
                    <div class="side-menu-close" onclick="sideMenuClose()">
                        <i class="la la-close" ></i>
                </div>


                        <div class="widget-profile-box px-3 py-4 d-flex align-items-center">

                                <div class="image " style="background-image:url('{{ asset('frontend/images/user.png') }}')"></div>


                            <div class="name"  >Awab</div>
                        </div>
                        <div class="side-login px-3 pb-3">
                            <center><a class="btn btn-outline-light">{{__('Sign Out')}}</a></center>
                        </div>



                </div>
                <div class="side-menu-list px-3">
                    <ul class="side-user-menu">
                        <li>
                            <a href="#">
                                <i class="la la-home"></i>
                                <span>{{__('Home')}}</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="la la-dashboard"></i>
                                <span>{{__('For Home')}}</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="la la-file-text"></i>
                                <span>{{__('For Business')}}</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="la la-user"></i>
                                <span>{{__('Contact Us')}}</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="la la-user"></i>
                                <span>{{__('About Us')}}</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="la la-user"></i>
                                <span>{{__('Manage Profile')}}</span>
                            </a>
                        </li>


                    </ul>

                </div>
            </div>
        </div>
    </div>
    <!-- end mobile menu -->

    <div class="position-relative logo-bar-area ">
        <div class="">
            <div class="container ">
                <div class="row no-gutters align-items-center" >
                    <div class="col-lg-3 col-8">
                        <div class="d-flex">
                            <div class="d-block d-lg-none mobile-menu-icon-box">
                                <!-- Navbar toggler  -->
                                <a href="" onclick="sideMenuOpen(this)">
                                    <div class="hamburger-icon">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                            </div>
                            <!-- Brand/Logo -->
                            <a class="navbar-brand" href="#">
                                    <img src="{{ asset('frontend/images/logo.png') }}" alt="WM">
                            </a>
                           {{-- @if(Route::currentRouteName() != 'home' && Route::currentRouteName() != 'categories.all')
                                <div class="d-none d-xl-block category-menu-icon-box">
                                    <div class="dropdown-toggle navbar-light category-menu-icon" id="category-menu-icon">
                                        <span class="navbar-toggler-icon"></span>
                                    </div>
                                </div>
                            @endif--}}
                        </div>
                    </div>
                    <div class="col-lg-9 col-4 position-static">
                        <div class="d-flex w-100">
                            <div class="search-box flex-grow-1 px-4">
                                <form action="#" method="GET">
                                    <div class="d-flex position-relative">
                                        <div class="d-lg-none search-box-back">
                                            <button class="" type="button"><i class="la la-long-arrow-left"></i></button>
                                        </div>
                                        <div class="w-100">
                                            <input type="text" aria-label="Search" id="search" name="q" class="w-100" placeholder="{{__('Search...')}}" autocomplete="off">
                                        </div>

                                        <button class="d-none d-lg-block" type="submit">
                                            <i class="la la-search la-flip-horizontal"></i>
                                        </button>
                                        <div class="typed-search-box d-none">
                                            <div class="search-preloader">
                                                <div class="loader"><div></div><div></div><div></div></div>
                                            </div>
                                            <div class="search-nothing d-none">

                                            </div>
                                            <div id="search-content">

                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="logo-bar-icons d-inline-block ml-auto" >
                                <div class="d-inline-block d-lg-none">
                                    <div class="nav-search-box">
                                        <a   class="nav-box-link">
                                            <i class="la la-search la-flip-horizontal d-inline-block nav-box-icon"></i>
                                        </a>
                                    </div>
                                </div>
                                {{-- <div class="d-none d-lg-inline-block">
                                    <div class="nav-compare-box" id="compare">
                                        <a  class="nav-box-link">
                                            <i class="la la-refresh d-inline-block nav-box-icon"></i>
                                            <span class="nav-box-text d-none d-xl-inline-block">{{__('Compare')}}</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="d-none d-lg-inline-block">
                                    <div class="nav-wishlist-box" id="wishlist">
                                        <a  class="nav-box-link">
                                            <i class="la la-heart-o d-inline-block nav-box-icon"></i>
                                            <span class="nav-box-text d-none d-xl-inline-block">{{__('Wishlist')}}</span>

                                        </a>
                                    </div>
                                </div> --}}




                                <div class="d-inline-block" data-hover="dropdown">
                                    <div class="nav-cart-box dropdown" id="cart_items">
                                        {{-- <a   class="nav-box-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="la la-shopping-cart d-inline-block nav-box-icon"></i>
                                            <span class="nav-box-text d-none d-xl-inline-block">{{__('Cart')}}</span>

                                        </a> --}}
                       {{--                 <ul class="dropdown-menu dropdown-menu-right px-0">
                                            <li>
                                                <div class="dropdown-cart px-0">
                                                    @if(Session::has('cart'))
                                                        @if(count($cart = Session::get('cart')) > 0)
                                                            <div class="dc-header">
                                                                <h3 class="heading heading-6 strong-700">{{__('Cart Items')}}</h3>
                                                            </div>
                                                            <div class="dropdown-cart-items c-scrollbar">
                                                                @php
                                                                    $total = 0;
                                                                @endphp
                                                                @foreach($cart as $key => $cartItem)
                                                                    @php
                                                                        $product = \App\Product::find($cartItem['id']);
                                                                        $total = $total + $cartItem['price']*$cartItem['quantity'];
                                                                    @endphp
                                                                    <div class="dc-item">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="dc-image">
                                                                                <a href="{{ route('product', $product->slug) }}">
                                                                                    <img src="{{ asset('frontend/images/placeholder.jpg') }}" data-src="{{ asset($product->thumbnail_img) }}" class="img-fluid lazyload" alt="{{ __($product->name) }}">
                                                                                </a>
                                                                            </div>
                                                                            <div class="dc-content">
                                                                                <span class="d-block dc-product-name text-capitalize strong-600 mb-1">
                                                                                    <a href="{{ route('product', $product->slug) }}">
                                                                                        {{ __($product->name) }}
                                                                                    </a>
                                                                                </span>

                                                                                <span class="dc-quantity">x{{ $cartItem['quantity'] }}</span>
                                                                                <span class="dc-price">{{ single_price($cartItem['price']*$cartItem['quantity']) }}</span>
                                                                            </div>
                                                                            <div class="dc-actions">
                                                                                <button onclick="removeFromCart({{ $key }})">
                                                                                    <i class="la la-close"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                            <div class="dc-item py-3">
                                                                <span class="subtotal-text">{{__('Subtotal')}}</span>
                                                                <span class="subtotal-amount">{{ single_price($total) }}</span>
                                                            </div>
                                                            <div class="py-2 text-center dc-btn">
                                                                <ul class="inline-links inline-links--style-3">
                                                                    <li class="px-1">
                                                                        <a href="{{ route('cart') }}" class="link link--style-1 text-capitalize btn btn-base-1 px-3 py-1">
                                                                            <i class="la la-shopping-cart"></i> {{__('View cart')}}
                                                                        </a>
                                                                    </li>
                                                                    @if (Auth::check())
                                                                        <li class="px-1">
                                                                            <a href="{{ route('checkout.shipping_info') }}" class="link link--style-1 text-capitalize btn btn-base-1 px-3 py-1 light-text">
                                                                                <i class="la la-mail-forward"></i> {{__('Checkout')}}
                                                                            </a>
                                                                        </li>
                                                                    @endif
                                                                </ul>
                                                            </div>
                                                        @else
                                                            <div class="dc-header">
                                                                <h3 class="heading heading-6 strong-700">{{__('Your Cart is empty')}}</h3>
                                                            </div>
                                                        @endif
                                                    @else
                                                        <div class="dc-header">
                                                            <h3 class="heading heading-6 strong-700">{{__('Your Cart is empty')}}</h3>
                                                        </div>
                                                    @endif
                                                </div>
                                            </li>
                                        </ul>--}}
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Navbar -->
    <div class="top-navbar">
        <div class="container">
            <div class="row">


                <div class="text-right  d-none d-lg-block">
                    <center><ul class=" inline-links">
                        <li>
                            <a style="font-size: 1rem"  class="top-bar-item">{{__('Home')}}</a>
                        </li>
                        <li>
                            <a style="font-size: 1rem"  class="top-bar-item">{{__('For Home')}}</a>
                        </li>
                        <li>
                            <a style="font-size: 1rem"  class="top-bar-item">{{__('For Business')}}</a>
                        </li>
                        <li>
                            <a style="font-size: 1rem"  class="top-bar-item">{{__('About Us')}}</a>
                        </li>
                        <li>
                            <a style="font-size: 1rem"  class="top-bar-item">{{__('Contact Us')}}</a>
                        </li>

                    </ul></center>
                </div>
            </div>
        </div>
    </div>
    <!-- END Nav Bar -->







</div>
<script>
    function sideMenuOpen(e) {
        event.preventDefault();
        $(e).find(".hamburger-icon").toggleClass("open");
        if ($(e).find(".hamburger-icon").hasClass("open")) {
            $(".side-menu-wrap,.side-menu-overlay")
                .removeClass("opacity-0")
                .addClass("opacity-1");
            $(".side-menu").removeClass("closed").addClass("open");
            $("body").addClass("side-menu-open");
        } else {
            $(".side-menu-wrap,.side-menu-overlay")
                .removeClass("opacity-1")
                .addClass("opacity-0");
            $(".side-menu").removeClass("open").addClass("closed");
            $("body").removeClass("side-menu-open");
        }
    }
    function sideMenuClose() {
        $(".side-menu-wrap,.side-menu-overlay")
            .removeClass("opacity-1")
            .addClass("opacity-0");
        $(".side-menu").removeClass("open").addClass("closed");
        if ($(".hamburger-icon").hasClass("open")) {
            $(".hamburger-icon").removeClass("open");
            $("body").removeClass("side-menu-open");
        }
    }
</script>
