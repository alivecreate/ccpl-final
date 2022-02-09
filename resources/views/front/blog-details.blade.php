<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="multikart">
    <meta name="keywords" content="multikart">
    <meta name="author" content="multikart">
    <link rel="icon" href="../assets/images/favicon/1.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon/1.png" type="image/x-icon">
    <title>Multikart - Multi-purpopse E-commerce Html Template</title>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/fontawesome.css">

    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/slick.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/slick-theme.css">

    <!-- Animate icon -->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/animate.css">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/themify-icons.css">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/bootstrap.css">

    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">

</head>

<body class="{{getWebsiteOptions()['theme_color']}}">

    <!-- loader start -->
    <div class="loader_skeleton">
        <header>
            <div class="top-header d-none d-sm-block">
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
                                <li class="mobile-wishlist"><a href="#"><i class="fa fa-heart"
                                            aria-hidden="true"></i></a>
                                </li>
                                <li class="onhover-dropdown mobile-account">
                                    <i class="fa fa-user" aria-hidden="true"></i> My Account
                                    <ul class="onhover-show-div">
                                        <li>
                                            <a href="#" data-lng="en">
                                                Login
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" data-lng="es">
                                                Logout
                                            </a>
                                        </li>
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
                                <div class="navbar">
                                    <a href="javascript:void(0)">
                                        <div class="bar-style"><i class="fa fa-bars sidebar-bar" aria-hidden="true"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="brand-logo">
                                    <a href="index.php"><img src="../assets/images/icon/logo.png"
                                            class="img-fluid blur-up lazyload" alt=""></a>
                                </div>
                            </div>
                            <div class="menu-right pull-right">
                                <div>
                                    <nav>
                                        <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                                        <ul class="sm pixelstrap sm-horizontal">
                                            <li>
                                                <div class="mobile-back text-end">Back<i class="fa fa-angle-right ps-2"
                                                        aria-hidden="true"></i></div>
                                            </li>
                                            <li>
                                                <a href="index.php">Home</a>
                                            </li>
                                            <li>
                                                <a href="#">feature<div class="lable-nav">new</div></a>
                                            </li>
                                            <li>
                                                <a href="#">shop</a>
                                            </li>
                                            <li>
                                                <a href="#">product</a>
                                            </li>
                                            <li>
                                                <a href="#">pages</a>
                                            </li>
                                            <li><a href="#">blog</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div>
                                    <div class="icon-nav d-none d-sm-block">
                                        <ul>
                                            <li class="onhover-div mobile-search">
                                                <div><img src="../assets/images/icon/search.png" onclick="openSearch()"
                                                        class="img-fluid blur-up lazyload" alt=""> <i class="ti-search"
                                                        onclick="openSearch()"></i></div>
                                            </li>
                                            <li class="onhover-div mobile-setting">
                                                <div><img src="../assets/images/icon/setting.png"
                                                        class="img-fluid blur-up lazyload" alt=""> <i
                                                        class="ti-settings"></i></div>
                                            </li>
                                            <li class="onhover-div mobile-cart">
                                                <div><img src="../assets/images/icon/cart.png"
                                                        class="img-fluid blur-up lazyload" alt=""> <i
                                                        class="ti-shopping-cart"></i></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="breadcrumb-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="page-title">
                            <h2>blog details</h2>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <nav aria-label="breadcrumb" class="theme-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="index.php">blog</a></li>
                                <li class="breadcrumb-item active" aria-current="page">blog deatils</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <section class="section-b-space">
            <div class="collection-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="collection-content col">
                            <div class="page-main-content">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="top-banner-wrapper">
                                            <div class="img-ldr-top"></div>
                                            <div class="top-banner-content small-section">
                                                <h4></h4>
                                                <h5></h5>
                                                <p></p>
                                                <p></p>
                                                <br>
                                                <p></p>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row section-b-space blog-advance">
                                    <div class="col-lg-6">
                                        <div class="ldr-img"></div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="ldr-img"></div>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- loader end -->


    <!-- header start -->
    <?php
        include("header.php");
    ?>
    <!-- header end -->

    <!-- breadcrumb start-->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>blog details</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="index.php">blog</a></li>
                            <li class="breadcrumb-item active" aria-current="page">blog deatils</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end-->


    <!--section start-->
    <section class="blog-detail-page section-b-space ratio2_3">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 blog-detail"><img src="../assets/images/about/about%20us.jpg"
                        class="img-fluid blur-up lazyload" alt="">
                    <h3>Also the leap into electronic typesetting, remaining essentially unchanged.</h3>
                    <ul class="post-social">
                        <li>25 January 2018</li>
                        <li>Posted By : Admin Admin</li>
                        <li><i class="fa fa-heart"></i> 5 Hits</li>
                        <li><i class="fa fa-comments"></i> 10 Comment</li>
                    </ul>
                    <p>Fusce scelerisque augue a viverra semper. Etiam nisi nibh, vestibulum quis augue id, imperdiet
                        fringilla dolor. Nulla sed nisl vel nisi cursus finibus. Vivamus ut augue nec justo viverra
                        laoreet. Nunc efficitur, arcu ac cursus gravida, lorem elit commodo urna, id viverra libero
                        tellus non ipsum. Fusce molestie ultrices nibh feugiat pretium. Donec pulvinar arcu metus, et
                        dapibus odio condimentum id. Quisque malesuada mauris sit amet dui feugiat, ut pretium mauris
                        luctus. Ut aliquam, tellus nec molestie condimentum, tellus arcu dignissim quam, a gravida nunc
                        nulla vel magna. Sed pulvinar tortor et euismod blandit. Proin accumsan orci ac nunc fermentum
                        vehicula.</p>
                    <p>Cras quis neque urna. Pellentesque mollis, dui nec elementum elementum, ipsum quam suscipit
                        ligula, sit amet lobortis dolor sem sed neque. Vivamus consequat est non sodales efficitur.
                        Aliquam sodales eleifend sodales. Aliquam auctor ipsum quis nisl facilisis, at convallis mauris
                        iaculis. Duis eleifend, magna ac convallis blandit, dui dui auctor leo, sed tincidunt nisi
                        mauris ut nulla. Praesent porttitor dui ac turpis commodo porttitor. Integer ligula nisi,
                        bibendum non sem at, porta condimentum dui.</p>
                    <p>Proin id eleifend diam, euismod dictum nibh. Ut ullamcorper in purus at tempor. Nullam mattis
                        risus nec velit semper lobortis. Donec accumsan ligula fermentum, ultricies massa eget, cursus
                        leo. Suspendisse placerat elit et lacus aliquam, ut elementum leo aliquet. Integer ornare, ipsum
                        eu lacinia viverra, lectus ipsum scelerisque nisl, nec iaculis leo elit id arcu. Aliquam id ante
                        elit. Donec commodo purus eget lacus pharetra, et egestas metus blandit. Quisque pellentesque
                        porta urna, sed dictum enim viverra a.</p>
                </div>
            </div>
            <div class="row section-b-space blog-advance">
                <div class="col-lg-6">
                    <div><img src="../assets/images/blog/1.jpg" class="img-fluid blur-up lazyload bg-img" alt=""></div>
                </div>
                <div class="col-lg-6">
                    <div><img src="../assets/images/blog/2.jpg" class="img-fluid blur-up lazyload bg-img" alt=""></div>
                </div>
                <div class="col-lg-6">
                    <ul>
                        <li>Donec ut metus sit amet elit consectetur facilisis id vel turpis.</li>
                        <li>Aenean in mi eu elit mollis tincidunt.</li>
                        <li>Etiam blandit metus vitae purus lacinia ultricies.</li>
                        <li>Nunc quis nulla sagittis, faucibus neque a, tempus metus.</li>
                        <li>In scelerisque libero ut mi ornare, a porttitor neque pulvinar.</li>
                        <li>Morbi molestie lacus blandit interdum sodales.</li>
                        <li>Curabitur eleifend velit molestie eleifend interdum.</li>
                        <li>Vestibulum fringilla tortor et lorem sagittis,</li>
                        <li>In scelerisque libero ut mi ornare, a porttitor neque pulvinar.</li>
                        <li>Morbi molestie lacus blandit interdum sodales.</li>
                        <li>Curabitur eleifend velit molestie eleifend interdum.</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <p>Nulla quam turpis, commodo et placerat eu, mollis ut odio. Donec pellentesque egestas consequat.
                        Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc at
                        urna dolor. Mauris odio nisi, rhoncus ac justo eget, lacinia iaculis lectus. Pellentesque id
                        dapibus justo. Nunc venenatis non odio sed luctus. Etiam sit amet elit massa.</p>
                    <p>Phasellus quis lorem eros. Aliquam non tincidunt nibh. Nulla quis interdum neque. Mauris volutpat
                        neque eu nunc ornare ullamcorper. Sed neque velit, lobortis eget tellus in, pellentesque ornare
                        nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                        Maecenas rutrum nisi non nibh egestas lacinia. Cras ut tellus sit amet lacus consequat dictum
                        nec id sapien. Ut pellentesque ac ex ut elementum. Morbi mollis volutpat neque eu volutpat.</p>
                    <p>Donec rhoncus massa quis nibh imperdiet dictum. Vestibulum id est sit amet felis fringilla
                        bibendum at at leo. Proin molestie ac nisi eu laoreet. Integer faucibus enim nec ullamcorper
                        tempor. Aenean nec felis dui. Integer tristique odio mi, in volutpat metus posuere eu. Aenean
                        suscipit ipsum nunc, id volutpat lorem hendrerit ac. Sed id elit quam. In ac mauris arcu.
                        Praesent eget lectus sit amet diam vestibulum varius. Suspendisse dignissim mattis leo, nec
                        facilisis erat tempor quis. Vestibulum eu vestibulum ex. Maecenas luctus orci sed blandit
                        fermentum. In vulputate eu metus a faucibus. Suspendisse feugiat condimentum congue.</p>
                </div>
            </div>
            <div class="row section-b-space">
                <div class="col-sm-12">
                    <ul class="comment-section">
                        <li>
                            <div class="media"><img src="../assets/images/avtar.jpg" alt="Generic placeholder image">
                                <div class="media-body">
                                    <h6>Mark Jecno <span>( 12 Jannuary 2018 at 1:30AM )</span></h6>
                                    <p>Donec rhoncus massa quis nibh imperdiet dictum. Vestibulum id est sit amet felis
                                        fringilla bibendum at at leo. Proin molestie ac nisi eu laoreet. Integer
                                        faucibus enim nec ullamcorper tempor. Aenean nec felis dui. Integer tristique
                                        odio mi, in volutpat metus posuere eu. Aenean suscipit ipsum nunc, id volutpat
                                        lorem hendrerit ac. Sed id elit quam. In ac mauris arcu. Praesent eget lectus
                                        sit amet diam vestibulum varius. Suspendisse dignissim mattis leo, nec facilisis
                                        erat tempor quis. Vestibulum eu vestibulum ex.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="media"><img src="../assets/images/2.jpg" alt="Generic placeholder image">
                                <div class="media-body">
                                    <h6>Mark Jecno <span>( 12 Jannuary 2018 at 1:30AM )</span></h6>
                                    <p>Donec rhoncus massa quis nibh imperdiet dictum. Vestibulum id est sit amet felis
                                        fringilla bibendum at at leo. Proin molestie ac nisi eu laoreet. Integer
                                        faucibus enim nec ullamcorper tempor. Aenean nec felis dui. Integer tristique
                                        odio mi, in volutpat metus posuere eu. Aenean suscipit ipsum nunc, id volutpat
                                        lorem hendrerit ac. Sed id elit quam. In ac mauris arcu. Praesent eget lectus
                                        sit amet diam vestibulum varius. Suspendisse dignissim mattis leo, nec facilisis
                                        erat tempor quis. Vestibulum eu vestibulum ex.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="media"><img src="../assets/images/20.jpg" alt="Generic placeholder image">
                                <div class="media-body">
                                    <h6>Mark Jecno <span>( 12 Jannuary 2018 at 1:30AM )</span></h6>
                                    <p>Donec rhoncus massa quis nibh imperdiet dictum. Vestibulum id est sit amet felis
                                        fringilla bibendum at at leo. Proin molestie ac nisi eu laoreet. Integer
                                        faucibus enim nec ullamcorper tempor. Aenean nec felis dui. Integer tristique
                                        odio mi, in volutpat metus posuere eu. Aenean suscipit ipsum nunc, id volutpat
                                        lorem hendrerit ac. Sed id elit quam. In ac mauris arcu. Praesent eget lectus
                                        sit amet diam vestibulum varius. Suspendisse dignissim mattis leo, nec facilisis
                                        erat tempor quis. Vestibulum eu vestibulum ex.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row blog-contact">
                <div class="col-sm-12">
                    <h2>Leave Your Comment</h2>
                    <form class="theme-form">
                        <div class="form-row row">
                            <div class="col-md-12">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter Your name"
                                    required="">
                            </div>
                            <div class="col-md-12">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" placeholder="Email" required="">
                            </div>
                            <div class="col-md-12">
                                <label for="exampleFormControlTextarea1">Comment</label>
                                <textarea class="form-control" placeholder="Write Your Comment"
                                    id="exampleFormControlTextarea1" rows="6"></textarea>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-solid" type="submit">Post Comment</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--Section ends-->


    <!-- footer start -->
    <?php
        include("footer.php");
    ?>
    <!-- footer end -->

    <!-- tap to top -->
    <div class="tap-top">
        <div><i class="fa fa-angle-double-up"></i></div>
    </div>
    <!-- tap to top End -->


    <!-- latest jquery-->
    <script src="../assets/js/jquery-3.3.1.min.js"></script>

    <!-- slick js-->
    <script src="../assets/js/slick.js"></script>

    <!-- menu js-->
    <script src="../assets/js/menu.js"></script>

    <!-- lazyload js-->
    <script src="../assets/js/lazysizes.min.js"></script>

    <!-- Bootstrap js-->
    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap Notification js-->
    <script src="../assets/js/bootstrap-notify.min.js"></script>

    <!-- Theme js-->
    <script src="../assets/js/theme-setting.js"></script>
    <script src="../assets/js/script.js"></script>

    <script>
        function openSearch() {
            document.getElementById("search-overlay").style.display = "block";
        }

        function closeSearch() {
            document.getElementById("search-overlay").style.display = "none";
        }
    </script>
</body>

</html>