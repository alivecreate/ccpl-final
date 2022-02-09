<!-- loader start -->
<div class="loader_skeleton">
    <header class="header-style-5 color-style style-classic">
        <div class="top-header top-header-theme">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header-contact">
                            <ul>
                                <li>Welcome to Our store Multikart</li>
                                <li><i class="fa fa-phone" aria-hidden="true"></i>Call Us: 123 - 456 - 7890</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 text-end">
                        <ul class="header-dropdown">
                            <li class="mobile-wishlist"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                            </li>
                            <li class="onhover-dropdown mobile-account"> <i class="fa fa-user" aria-hidden="true"></i>
                                My Account
                                <ul class="onhover-show-div">
                                    <li><a href="{{route('login')}}">Login</a></li>
                                    <li><a href="{{route('register')}}">register</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="main-menu">
                        <div class="menu-left">
                            <div class="navbar d-block d-xl-none">
                                <a href="javascript:void(0)">
                                    <div class="bar-style" id="toggle-sidebar-res"><i class="fa fa-bars sidebar-bar" aria-hidden="true"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="brand-logo">
                                <a href=""><img src="{{url('front')}}/images/icon/logo/f11.png" class="img-fluid blur-up lazyload" alt=""></a>
                            </div>
                        </div>
                        <div>
                            <form class="form_search" role="form">
                                <input id="query search-autocomplete" type="search" placeholder="Search any Device or Gadgets..." class="nav-search nav-search-field" aria-expanded="true">
                                <button type="submit" name="nav-submit-button" class="btn-search">
                                    <i class="ti-search"></i>
                                </button>
                            </form>
                        </div>
                        <div class="menu-right pull-right">
                            <nav class="text-start">
                                <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                            </nav>
                            <div>
                                <div class="icon-nav d-none d-sm-block">
                                    <ul>
                                        <li class="onhover-div mobile-search d-xl-none d-inline-block">
                                            <div><img src="{{url('front')}}/images/icon/search.png" onclick="openSearch()" class="img-fluid blur-up lazyload" alt=""> <i class="ti-search" onclick="openSearch()"></i></div>
                                        </li>
                                        <li class="onhover-div d-sm-inline-block d-none">
                                            <a href="compare.php"><img src="{{url('front')}}/images/icon/rotate.png" class="img-fluid blur-up lazyload" title="compare" alt=""></a>
                                        </li>
                                        <li class="onhover-div mobile-setting">
                                            <div><img src="{{url('front')}}/images/icon/setting.png" class="img-fluid blur-up lazyload" alt=""> <i class="ti-settings"></i></div>
                                        </li>
                                        <li class="onhover-div mobile-cart">
                                            <div><img src="{{url('front')}}/images/icon/cart.png" class="img-fluid blur-up lazyload" alt=""> <i class="ti-shopping-cart"></i></div>
                                            <span class="cart_qty_cls">2</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-part">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3">
                        <div class="category-menu d-none d-xl-block h-100">
                            <div class="toggle-sidebar">
                                <i class="fa fa-bars sidebar-bar"></i>
                                <h5 class="mb-0">shop by category</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="main-nav-center">
                            <nav class="text-start">
                                <!-- Sample menu definition -->
                                <ul class="sm pixelstrap sm-horizontal">
                                    <li>
                                        <div class="mobile-back text-end">Back<i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                                    </li>
                                    <li><a href="{{route('index')}}">Home</a></li>
                                    <li class="mega"><a href="#">feature <div class="lable-nav">new</div></a></li>
                                    <li><a href="#">shop</a> </li>
                                    <li><a href="#">product</a></li>
                                    <li><a href="#">pages</a></li>
                                    <li><a href="#">blog</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

</div>
<!-- loader end -->


<!-- header start -->
<header class="header-style-5 color-style style-classic" id="sticky-header">
    <div class="mobile-fix-option"></div>
    <div class="top-header top-header-theme">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="header-contact">
                        <ul>
                            <li>Welcome to Our store Multikart</li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i>Call Us: 123 - 456 - 7890</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 text-end">
                    <ul class="header-dropdown">
                        <li class="mobile-wishlist"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                        </li>
                        <li class="onhover-dropdown mobile-account"> <i class="fa fa-user" aria-hidden="true"></i>
                            My Account
                            <ul class="onhover-show-div">
                                <li><a href="{{route('login')}}">Login</a></li>
                                <li><a href="{{route('register')}}">register</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="main-menu">
                    <div class="menu-left">
                        <div class="navbar d-block d-xl-none">
                            <a href="javascript:void(0)">
                                <div class="bar-style" id="toggle-sidebar-res"><i class="fa fa-bars sidebar-bar" aria-hidden="true"></i>
                                </div>
                            </a>
                        </div>
                        <div class="brand-logo">
                            <a href="{{route('index')}}"><img src="{{url('front')}}/images/icon/logo/f11.png" class="img-fluid blur-up lazyload" alt=""></a>
                        </div>
                    </div>
                    <div>
                        <form class="form_search" role="form">
                            <input id="query search-autocomplete" type="search" placeholder="Search any Device or Gadgets..." class="nav-search nav-search-field" aria-expanded="true">
                            <button type="submit" name="nav-submit-button" class="btn-search">
                                <i class="ti-search"></i>
                            </button>
                        </form>
                    </div>
                    <div class="menu-right pull-right">
                        <nav class="text-start">
                            <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                        </nav>
                        <div>
                            <div class="icon-nav">
                                <ul>
                                    <li class="onhover-div mobile-search d-xl-none d-inline-block">
                                        <div><img src="{{url('front')}}/images/icon/search.png" onclick="openSearch()" class="img-fluid blur-up lazyload" alt=""> <i class="ti-search" onclick="openSearch()"></i></div>
                                        <div id="search-overlay" class="search-overlay">
                                            <div> <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
                                                <div class="overlay-content">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <form>
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Search a Product">
                                                                    </div>
                                                                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="onhover-div d-sm-inline-block d-none">
                                        <a href="compare.php"><img src="{{url('front')}}/images/icon/rotate.png" class="img-fluid blur-up lazyload" title="compare" alt=""></a>
                                    </li>
                                    <li class="onhover-div mobile-setting">
                                        <div><img src="{{url('front')}}/images/icon/setting.png" class="img-fluid blur-up lazyload" alt=""> <i class="ti-settings"></i></div>
                                        <div class="show-div setting">
                                            <h6>language</h6>
                                            <ul>
                                                <li><a href="#">english</a></li>
                                                <li><a href="#">french</a></li>
                                            </ul>
                                            <h6>currency</h6>
                                            <ul class="list-inline">
                                                <li><a href="#">euro</a></li>
                                                <li><a href="#">rupees</a></li>
                                                <li><a href="#">pound</a></li>
                                                <li><a href="#">doller</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="onhover-div mobile-cart">
                                        <div><img src="{{url('front')}}/images/icon/cart.png" class="img-fluid blur-up lazyload" alt=""> <i class="ti-shopping-cart"></i></div>
                                        <span class="cart_qty_cls">2</span>
                                        <ul class="show-div shopping-cart">
                                            <li>
                                                <div class="media">
                                                    <a href="#"><img alt="" class="me-3" src="{{url('front')}}/images/fashion/product/1.jpg"></a>
                                                    <div class="media-body">
                                                        <a href="#">
                                                            <h4>item name</h4>
                                                        </a>
                                                        <h4><span>1 x $ 299.00</span></h4>
                                                    </div>
                                                </div>
                                                <div class="close-circle"><a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></div>
                                            </li>
                                            <li>
                                                <div class="media">
                                                    <a href="#"><img alt="" class="me-3" src="{{url('front')}}/images/fashion/product/2.jpg"></a>
                                                    <div class="media-body">
                                                        <a href="#">
                                                            <h4>item name</h4>
                                                        </a>
                                                        <h4><span>1 x $ 299.00</span></h4>
                                                    </div>
                                                </div>
                                                <div class="close-circle"><a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></div>
                                            </li>
                                            <li>
                                                <div class="total">
                                                    <h5>subtotal : <span>$299.00</span></h5>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="buttons"><a href="cart.php" class="view-cart">view
                                                        cart</a> <a href="#" class="checkout">checkout</a></div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-part">
        <div class="container">
            <div class="row">
                <div class="col-xl-3">
                    <div class="category-menu d-none d-xl-block h-100">
                        <div id="toggle-sidebar" class="toggle-sidebar">
                            <i class="fa fa-bars sidebar-bar"></i>
                            <h5 class="mb-0">shop by category</h5>
                        </div>
                    </div>
                    <div class="sidenav fixed-sidebar marketplace-sidebar">
                        <nav>
                            <div>
                                <div class="sidebar-back text-start d-xl-none d-block"><i class="fa fa-angle-left pe-2" aria-hidden="true"></i> Back</div>
                            </div>
                            <ul id="sub-menu" class="sm pixelstrap sm-vertical">
                                <li> <a href="#">Clothing</a>
                                    <ul class="mega-menu clothing-menu">
                                        <li>
                                            <div class="row m-0">
                                                <div class="col-xl-4">
                                                    <div class="link-section">
                                                        <h5>women's fashion</h5>
                                                        <ul>
                                                            <li><a href="#">dresses</a></li>
                                                            <li><a href="#">skirts</a></li>
                                                            <li><a href="#">westarn wear</a></li>
                                                            <li><a href="#">ethic wear</a></li>
                                                            <li><a href="#">sport wear</a></li>
                                                        </ul>
                                                        <h5>men's fashion</h5>
                                                        <ul>
                                                            <li><a href="#">sports wear</a></li>
                                                            <li><a href="#">western wear</a></li>
                                                            <li><a href="#">ethic wear</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="link-section">
                                                        <h5>Accessories</h5>
                                                        <ul>
                                                            <li><a href="#">fashion jewellery</a></li>
                                                            <li><a href="#">caps and hats</a></li>
                                                            <li><a href="#">precious jewellery</a></li>
                                                            <li><a href="#">necklaces</a></li>
                                                            <li><a href="#">earrings</a></li>
                                                            <li><a href="#">wrist wear</a></li>
                                                            <li><a href="#">ties</a></li>
                                                            <li><a href="#">cufflinks</a></li>
                                                            <li><a href="#">pockets squares</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <a href="#" class="mega-menu-banner"><img src="{{url('front')}}/images/mega-menu/fashion.jpg" alt="" class="img-fluid blur-up lazyload"></a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li> <a href="#">Beauty & Personal Care</a>
                                    <ul>
                                        <li><a href="#">makeup</a></li>
                                        <li><a href="#">skincare</a></li>
                                        <li><a href="#">premium beaty</a></li>
                                        <li> <a href="#">more</a>
                                            <ul>
                                                <li><a href="#">fragrances</a></li>
                                                <li><a href="#">luxury beauty</a></li>
                                                <li><a href="#">hair care</a></li>
                                                <li><a href="#">tools & brushes</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li> <a href="#">Bags</a>
                                    <ul>
                                        <li><a href="#">shopper bags</a></li>
                                        <li><a href="#">laptop bags</a></li>
                                        <li><a href="#">clutches</a></li>
                                        <li> <a href="#">purses</a>
                                            <ul>
                                                <li><a href="#">purses</a></li>
                                                <li><a href="#">wallets</a></li>
                                                <li><a href="#">leathers</a></li>
                                                <li><a href="#">satchels</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li> <a href="#">Footwear</a>
                                    <ul>
                                        <li><a href="#">sport shoes</a></li>
                                        <li><a href="#">formal shoes</a></li>
                                        <li><a href="#">casual shoes</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Kitchen & Home</a></li>
                                <li><a href="#">Gaming Consoles</a></li>
                                <li> <a href="#">Accessories</a>
                                    <ul>
                                        <li><a href="#">fashion jewellery</a></li>
                                        <li><a href="#">caps and hats</a></li>
                                        <li><a href="#">precious jewellery</a></li>
                                        <li> <a href="#">more..</a>
                                            <ul>
                                                <li><a href="#">necklaces</a></li>
                                                <li><a href="#">earrings</a></li>
                                                <li><a href="#">wrist wear</a></li>
                                                <li> <a href="#">accessories</a>
                                                    <ul>
                                                        <li><a href="#">ties</a></li>
                                                        <li><a href="#">cufflinks</a></li>
                                                        <li><a href="#">pockets squares</a></li>
                                                        <li><a href="#">helmets</a></li>
                                                        <li><a href="#">scarves</a></li>
                                                        <li> <a href="#">more...</a>
                                                            <ul>
                                                                <li><a href="#">accessory gift sets</a></li>
                                                                <li><a href="#">travel accessories</a></li>
                                                                <li><a href="#">phone cases</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">belts & more</a></li>
                                                <li><a href="#">wearable</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#">Heating & Cooling</a></li>
                                <li><a href="#">All accessories </a></li>
                                <li><a href="#">All Electronics </a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-9">
                    <div class="main-nav-center">
                        <nav class="text-start">
                            <!-- Sample menu definition -->
                            <ul id="main-menu" class="sm pixelstrap sm-horizontal">
                                <li>
                                    <div class="mobile-back text-end">Back<i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                                </li>
                                <li><a href="{{route('index')}}">Home</a></li>
                                <li class="mega" id="hover-cls">
                                    <a href="#">feature <div class="lable-nav">new</div></a>
                                    <ul class="mega-menu full-mega-menu">
                                        <li>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col mega-box">
                                                        <div class="link-section">
                                                            <div class="menu-title">
                                                                <h5>add to cart</h5>
                                                            </div>
                                                            <div class="menu-content">
                                                                <ul>
                                                                    <li><a href="nursery.php">cart modal
                                                                            popup</a></li>
                                                                    <li><a href="vegetables.php">qty.
                                                                            counter
                                                                            <i class="fa fa-bolt icon-trend" aria-hidden="true"></i></a>
                                                                    </li>
                                                                    <li><a href="bags.php">cart top</a>
                                                                    </li>
                                                                    <li><a href="shoes.php">cart bottom</a>
                                                                    </li>
                                                                    <li><a href="watch.php">cart left</a>
                                                                    </li>
                                                                    <li><a href="tools.php">cart right</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col mega-box">
                                                        <div class="link-section">
                                                            <div class="menu-title">
                                                                <h5>model</h5>
                                                            </div>
                                                            <div class="menu-content">
                                                                <ul>
                                                                    <li><a href="{{route('index')}}">Newsletter</a>
                                                                    </li>
                                                                    <li><a href="{{route('index')}}">exit<i class="ms-2 fa fa-bolt icon-trend" aria-hidden="true"></i></a>
                                                                    </li>
                                                                    <li><a href="christmas.php">christmas</a>
                                                                    </li>
                                                                    <li><a href="furniture-3.php">black
                                                                            friday</a></li>
                                                                    <li><a href="fashion-4.php">cyber
                                                                            monday</a></li>
                                                                    <li><a href="marketplace-demo-3.php">new
                                                                            year</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col mega-box">
                                                        <div class="link-section">
                                                            <div class="menu-title">
                                                                <h5>cookie bar</h5>
                                                            </div>
                                                            <div class="menu-content">
                                                                <ul>
                                                                    <li><a href="{{route('index')}}">bottom<i class="ms-2 fa fa-bolt icon-trend" aria-hidden="true"></i></a>
                                                                    </li>
                                                                    <li><a href="fashion-4.php">bottom
                                                                            left</a></li>
                                                                    <li><a href="bicycle.php">bottom
                                                                            right</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="menu-title mt-2">
                                                                <h5>search</h5>
                                                            </div>
                                                            <div class="menu-content">
                                                                <ul>
                                                                    <li><a href="marketplace-demo-2.php">ajax
                                                                            search<i class="ms-2 fa fa-bolt icon-trend" aria-hidden="true"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col mega-box">
                                                        <div class="link-section">
                                                            <div class="menu-title">
                                                                <h5>invoice template</h5>
                                                            </div>
                                                            <div class="menu-content">
                                                                <ul>
                                                                    <li><a target="_blank" href="{{route('invoice-1')}}">invoice
                                                                            1</a></li>
                                                                    <li><a target="_blank" href="{{route('invoice-2')}}">invoice
                                                                            2</a></li>
                                                                    <li><a target="_blank" href="{{route('invoice-3')}}">invoice
                                                                            3</a></li>
                                                                    <li><a target="_blank" href="{{route('invoice-4')}}">invoice
                                                                            4</a></li>
                                                                    <li><a target="_blank" href="{{route('invoice-5')}}">invoice
                                                                            5</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col mega-box">
                                                        <div class="link-section">
                                                            <div class="menu-title">
                                                                <h5>email template</h5>
                                                            </div>
                                                            <div class="menu-content">
                                                                <ul>
                                                                    <li><a target="_blank" href="../email-template/email-order-success.php">order
                                                                            success</a></li>
                                                                    <li><a target="_blank" href="../email-template/email-order-success-two.php">order
                                                                            success 2</a></li>
                                                                    <li><a target="_blank" href="../email-template/email-template.php">email
                                                                            template</a></li>
                                                                    <li><a target="_blank" href="../email-template/email-template-two.php">email
                                                                            template 2</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="menu-title mt-2">
                                                                <h5>elements</h5>
                                                            </div>
                                                            <div class="menu-content">
                                                                <ul>
                                                                    <li><a href="elements.php">
                                                                            elements page<i class="ms-2 fa fa-bolt icon-trend" aria-hidden="true"></i>
                                                                        </a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <img src="{{url('front')}}/images/menu-banner.jpg" class="img-fluid mega-img">
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">shop</a>
                                    <ul>
                                        <li><a href="category-page(top-filter).php">top filter<span class="new-tag">new</span></a></li>
                                        <li><a href="category-page(modern).php">modern<span class="new-tag">new</span></a></li>
                                        <li><a href="category-page.php">left sidebar</a></li>
                                        <li><a href="category-page(right).php">right sidebar</a></li>
                                        <li><a href="category-page(no-sidebar).php">no sidebar</a></li>
                                        <li><a href="category-page(sidebar-popup).php">sidebar popup</a>
                                        </li>
                                        <li><a href="category-page(metro).php">metro</a></li>
                                        <li><a href="category-page(full-width).php">full width</a></li>
                                        <li><a href="category-page(infinite-scroll).php">infinite
                                                scroll</a></li>
                                        <li><a href=category-page(3-grid).php>three grid</a></li>
                                        <li><a href="category-page(6-grid).php">six grid</a></li>
                                        <li><a href="category-page(list-view).php">list view</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">product</a>
                                    <ul>
                                        <li><a href="product-page(360-view).php">360 view <span class="new-tag">new</span></a></li>
                                        <li><a href="product-page(video-thumbnail).php">video
                                                thumbnail<span class="new-tag">new</span></a></li>
                                        <li>
                                            <a href="#">sidebar</a>
                                            <ul>
                                                <li><a href="product-page.php">left sidebar</a></li>
                                                <li><a href="product-page(right-sidebar).php">right
                                                        sidebar</a>
                                                </li>
                                                <li><a href="product-page(no-sidebar).php">no sidebar</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">thumbnail image</a>
                                            <ul>
                                                <li><a href="product-page(left-image).php">left image</a>
                                                </li>
                                                <li><a href="product-page(right-image).php">right image</a>
                                                </li>
                                                <li><a href="product-page(image-outside).php">image
                                                        outside</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">three column</a>
                                            <ul>
                                                <li><a href="product-page(3-col-left).php">thumbnail
                                                        left</a>
                                                </li>
                                                <li><a href="product-page(3-col-right).php">thumbnail
                                                        right</a>
                                                </li>
                                                <li><a href="product-page(3-column).php">thubnail
                                                        bottom</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="product-page(4-image).php">four image</a></li>
                                        <li><a href="product-page(sticky).php">sticky</a></li>
                                        <li><a href="product-page(accordian).php">accordian</a></li>
                                        <li><a href="product-page(bundle).php">bundle</a></li>
                                        <li><a href="product-page(image-swatch).php">image swatch </a></li>
                                        <li><a href="product-page(vertical-tab).php">vertical tab</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">pages</a>
                                    <ul>
                                        <li>
                                            <a href="#">vendor</a>
                                            <ul>
                                                <li><a href="{{route('vendordashboard')}}">vendor dashboard</a>
                                                </li>
                                                <li><a href="{{route('vendorprofile')}}">vendor profile</a></li>
                                                <li><a href="become-vendor.php">become vendor</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">account</a>
                                            <ul>
                                                <li><a href="{{route('wishlist')}}">wishlist</a></li>
                                                <li><a href="{{route('cart')}}">Cart</a></li>
                                                <li><a href="dashboard.php">Dashboard</a></li>
                                                <li><a href="{{route('login')}}">login</a></li>
                                                <li><a href="{{route('register')}}">register</a></li>
                                                <li><a href="{{route('contact')}}">contact</a></li>
                                                <li><a href="{{route('forgetpsw')}}">forget password</a></li>
                                                <li><a href="{{route('profile')}}">profile</a></li>
                                                <li><a href="checkout.php">checkout</a></li>
                                                <li><a href="{{route('ordersuccess')}}">order success</a></li>
                                                <li><a href="{{route('ordertrack')}}">order tracking<span class="new-tag">new</span></a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">portfolio</a>
                                            <ul>
                                                <li><a href="">grid</a>
                                                    <ul>
                                                        <li><a href="grid-2-col.php">grid
                                                                2</a></li>
                                                        <li><a href="grid-3-col.php">grid
                                                                3</a></li>
                                                        <li><a href="grid-4-col.php">grid
                                                                4</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="">masonry</a>
                                                    <ul>
                                                        <li><a href="masonary-2-grid.php">grid 2</a></li>
                                                        <li><a href="masonary-3-grid.php">grid 3</a></li>
                                                        <li><a href="masonary-4-grid.php">grid 4</a></li>
                                                        <li><a href="masonary-fullwidth.php">full width</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="{{route('about')}}">about us</a></li>
                                        <li><a href="{{route('search')}}">search</a></li>
                                        <li><a href="{{route('review')}}">review</a>
                                        </li>
                                        <li>
                                            <a href="#">compare</a>
                                            <ul>
                                                <li><a href="compare.php">compare</a></li>
                                                <li><a href="compare-2.php">compare-2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="collection.php">collection</a></li>
                                        <li><a href="{{url('lookbook')}}">lookbook</a></li>
                                        <li><a href="{{url('sitemap')}}">site map</a>
                                        </li>
                                        <li><a href="404.php">404</a></li>
                                        <li><a href="{{url('commingsoon')}}">coming soon</a></li>
                                        <li><a href="{{url('faq')}}">FAQ</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">blog</a>
                                    <ul>
                                        <li><a href="blog-page.php">left sidebar</a></li>
                                        <li><a href="blog(right-sidebar).php">right sidebar</a></li>
                                        <li><a href="blog(no-sidebar).php">no sidebar</a></li>
                                        <li><a href="blog-details.php">blog details</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
</div>