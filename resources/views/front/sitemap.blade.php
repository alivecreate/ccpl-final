@extends('front.layout.front-index')
@section('content')

<!-- breadcrumb start -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2>site map</h2>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">site map</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->


<!-- section start -->
<section class="section-b-space sitemap_page">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-6">
                <h5 class="title">home demos</h5>
                <ul class="">
                    <li><a href="category-page.php"> New
                            demos</a>
                        <ul>
                            <li><a target="_blank" href="tools.php">tools</a></li>
                            <li><a target="_blank" href="marketplace-demo.php">marketplace</a></li>
                            <li><a target="_blank" href="game.php">game</a></li>
                            <li><a target="_blank" href="gym-product.php">gym</a></li>
                            <li><a target="_blank" href="marijuana.php">marijuana</a></li>
                            <li><a target="_blank" href="left_sidebar-demo.php">left sidebar</a></li>
                            <li><a target="_blank" href="jewellery.php">jewellery</a></li>
                            <li><a target="_blank" href="pets.php">pets</a></li>
                            <li><a target="_blank" href="metro.php">metro</a></li>
                            <li><a target="_blank" href="video-slider.php">video slider</a></li>
                        </ul>
                    </li>
                    <li><a href="category-page.php">
                            Clothing</a>
                        <ul>
                            <li><a target="_blank" href="index.php">fashion 1</a></li>
                            <li><a target="_blank" href="fashion-2.php">fashion 2</a></li>
                            <li><a target="_blank" href="fashion-3.php">fashion 3</a></li>
                            <li><a target="_blank" href="kids.php">kids</a></li>
                        </ul>
                    </li>
                    <li><a href="category-page.php">
                            electronics</a>
                        <ul>
                            <li><a target="_blank" href="electronic-1.php">electronic 1</a></li>
                            <li><a target="_blank" href="electronic-2.php">electronic 2</a></li>
                        </ul>
                    </li>
                    <li><a target="_blank" href="watch.php">
                            watch</a></li>
                    <li><a target="_blank" href="shoes.php">
                            shoes</a></li>
                    <li><a target="_blank" href="bags.php">
                            bags</a></li>
                    <li><a target="_blank" href="nursery.php">nursery</a></li>
                    <li><a target="_blank" href="vegetables.php">vegetable</a></li>
                    <li><a target="_blank" href="beauty.php">
                            beauty</a></li>
                    <li><a target="_blank" href="light.php">
                            light</a></li>
                    <li><a target="_blank" href="furniture.php">furniture</a></li>
                    <li><a target="_blank" href="goggles.php">googles</a></li>
                    <li><a href="category-page.php">
                            basics</a>
                        <ul>
                            <li><a target="_blank" href="lookbook-demo.php">lookbook</a></li>
                            <li><a target="_blank" href="instagram-shop.php">instagram</a></li>
                            <li><a target="_blank" href="video.php">video</a></li>
                            <li><a target="_blank" href="parallax.php">parallax</a></li>
                            <li><a target="_blank" href="full-page.php">full page</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 col-6">
                <h5 class="title">product pages</h5>
                <ul>
                    <li>
                        <a href="#"> sidebar</a>
                        <ul>
                            <li><a href="product-page.php">left sidebar</a></li>
                            <li><a href="product-page(right-sidebar).php">right sidebar</a></li>
                            <li><a href="product-page(no-sidebar).php">no sidebar</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"> thumbnail image</a>
                        <ul>
                            <li><a href="product-page(left-image).php">left image</a></li>
                            <li><a href="product-page(right-image).php">right image</a></li>
                            <li><a href="product-page(image-outside).php">image outside</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"> three column</a>
                        <ul>
                            <li><a href="product-page(left-image).php">thumbnail left</a></li>
                            <li><a href="product-page(right-image).php">thumbnail right</a></li>
                            <li><a href="product-page(image-outside).php">thubnail bottom</a></li>
                        </ul>
                    </li>
                    <li><a href="product-page(4-image).php">
                            four image</a></li>
                    <li><a href="product-page(sticky).php">
                            sticky</a></li>
                    <li><a href="product-page(accordian).php">accordian</a></li>
                    <li><a href="product-page(bundle).php">
                            bundle<span class="new-tag">new</span></a></li>
                    <li><a href="product-page(image-swatch).php">image swatch</a></li>
                    <li><a href="product-page(vertical-tab).php">vertical tab</a></li>
                </ul>
                <h5 class="title">shop pages</h5>
                <ul>
                    <li><a href="category-page.php"> left
                            sidebar</a></li>
                    <li><a href="category-page(right).php">
                            right sidebar</a></li>
                    <li><a href="category-page(no-sidebar).php">no sidebar</a></li>
                    <li><a href="category-page(sidebar-popup).php">sidebar popup</a></li>
                    <li><a href="category-page(metro).php">
                            metro</a></li>
                    <li><a href="category-page(full-width).php">full width</a></li>
                    <li><a href="category-page(infinite-scroll).php">infinite scroll</a></li>
                    <li><a href=category-page(3-grid).php>
                            three grid</a></li>
                    <li><a href="category-page(6-grid).php">
                            six grid</a></li>
                    <li><a href="category-page(list-view).php">list view</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-6">
                <h5 class="title">blog pages</h5>
                <ul>
                    <li><a href="blog-page.php"> left
                            sidebar</a></li>
                    <li><a href="blog(right-sidebar).php">
                            right sidebar</a></li>
                    <li><a href="blog(no-sidebar).php"> no
                            sidebar</a></li>
                    <li><a href="blog-details.php"> blog
                            details</a></li>
                </ul>
                <h5 class="title">inner pages</h5>
                <ul>
                    <li>
                        <a href="#"> account</a>
                        <ul>
                            <li><a href="product-page(left-image).php">account</a></li>
                            <li><a href="product-page(right-image).php">order history</a></li>
                            <li><a href="wishlist.php">wishlist</a></li>
                            <li><a href="cart.php">cart</a></li>
                            <li><a href="dashboard.php">Dashboard</a></li>
                            <li><a href="login.php">login</a></li>
                            <li><a href="register.php">register</a></li>
                            <li><a href="contact.php">contact</a></li>
                            <li><a href="forget_pwd.php">forget password</a></li>
                            <li><a href="profile.php">profile</a></li>
                            <li><a href="checkout.php">checkout</a></li>
                        </ul>
                    </li>
                    <li><a href="about-page.php"> about
                            us</a></li>
                    <li><a href="search.php"> search</a></li>
                    <li><a href="typography.php">
                            typography</a></li>
                    <li><a href="review.php"> review</a></li>
                    <li><a href="order-success.php"> order
                            success</a></li>
                    <li>
                        <a href="#"> compare</a>
                        <ul>
                            <li><a href="compare.php">compare</a></li>
                            <li><a href="compare.php">compare-2</a></li>
                        </ul>
                    </li>
                    <li><a href="collection.php">
                            collection</a></li>
                    <li><a href="lookbook.php"> lookbook</a>
                    </li>
                    <li><a href="search.php"> site map</a>
                    </li>
                    <li><a href="404.php"> 404</a></li>
                    <li><a href="coming-soon.php"> coming
                            soon</a></li>
                    <li><a href="faq.php"> FAQ</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-6">
                <h5 class="title">features</h5>
                <ul>
                    <li>
                        <a href="#"> portfolio</a>
                        <ul>
                            <li><a href="grid-2-col.php">portfolio grid 2</a></li>
                            <li><a href="grid-3-col.php">portfolio grid 3</a></li>
                            <li><a href="grid-4-col.php">portfolio grid 4</a></li>
                            <li><a href="masonary-2-grid.php">masonry grid 2</a></li>
                            <li><a href="masonary-3-grid.php">masonry grid 3</a></li>
                            <li><a href="masonary-4-grid.php">masonry grid 4</a></li>
                            <li><a href="masonary-fullwidth.php">masonry full width</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"> add to cart</a>
                        <ul>
                            <li><a href="nursery.php">cart modal popup</a></li>
                            <li><a href="vegetables.php">qty. counter</a></li>
                            <li><a href="bags.php">cart top</a></li>
                            <li><a href="shoes.php">cart bottom</a></li>
                            <li><a href="watch.php">cart left</a></li>
                            <li><a href="tools.php">cart right</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"> elements</a>
                        <ul>
                            <li><a href="element-title.php">title</a></li>
                            <li><a href="element-banner.php">collection banner</a></li>
                            <li><a href="element-slider.php">home slider</a></li>
                            <li><a href="element-category.php">category</a></li>
                            <li><a href="element-service.php">service</a></li>
                            <li><a href="element-image-ratio.php">image size ratio <i class="fa fa-bolt icon-trend" aria-hidden="true"></i></a></li>
                            <li><a href="element-productbox.php">product box</a></li>
                            <li><a href="element-product-slider.php">product slider</a></li>
                            <li><a href="element-no_slider.php">no slider</a></li>
                            <li><a href="element-mulitiple_slider.php">multi slider</a></li>
                            <li><a href="element-tab.php">tab</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"> email template</a>
                        <ul>
                            <li><a href="email-order-success.php">order success</a></li>
                            <li><a href="email-order-success-two.php">order success 2</a></li>
                            <li><a href="email-template.php">email template</a></li>
                            <li><a href="email-template-two.php">email template 2</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Section ends -->

@endsection