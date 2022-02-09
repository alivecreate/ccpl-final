<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="multikart">
    <meta name="keywords" content="multikart">
    <meta name="author" content="multikart">
    <link rel="icon" href="{{url('front')}}/images/favicon/1.png" type="image/x-icon">
    <link rel="shortcut icon" href="{{url('front')}}/images/favicon/1.png" type="image/x-icon">
    <title>Multikart - Multi-purpopse E-commerce Html Template</title>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="{{url('front')}}/css/vendors/fontawesome.css">

    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="{{url('front')}}/css/vendors/slick.css">
    <link rel="stylesheet" type="text/css" href="{{url('front')}}/css/vendors/slick-theme.css">

    <!-- Animate icon -->
    <link rel="stylesheet" type="text/css" href="{{url('front')}}/css/vendors/animate.css">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="{{url('front')}}/css/vendors/themify-icons.css">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{url('front')}}/css/vendors/bootstrap.css">

    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="{{url('front')}}/css/style.css">

</head>

<body class="{{getWebsiteOptions()['theme_color']}}"
>


    <!-- header start -->
    <?php
    include("header.php");
    ?>
    <!-- header end -->


    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>compare</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">compare</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!-- section start -->
    <section class="compare-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="compare-page">
                        <div class="table-wrapper table-responsive">
                            <table class="table">
                                <thead>
                                    <tr class="th-compare">
                                        <td>Action</td>
                                        <th class="item-row">
                                            <button type="button" class="remove-compare">Remove</button>
                                        </th>
                                        <th class="item-row">
                                            <button type="button" class="remove-compare">Remove</button>
                                        </th>
                                        <th class="item-row">
                                            <button type="button" class="remove-compare">Remove</button>
                                        </th>
                                        <th class="item-row">
                                            <button type="button" class="remove-compare">Remove</button>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="table-compare">
                                    <tr>
                                        <th class="product-name">Product Name</th>
                                        <td class="grid-link__title">Cut Dress</td>
                                        <td class="grid-link__title">Floral Dress</td>
                                        <td class="grid-link__title">Notched Dresss</td>
                                        <td class="grid-link__title">Notched Dresss</td>
                                    </tr>
                                    <tr>
                                        <th class="product-name">Product Image</th>
                                        <td class="item-row"><img src="{{url('front')}}/images/pro3/1.jpg" alt="" class="featured-image">
                                            <div class="product-price product_price"><strong>On Sale:
                                                </strong><span>$89,00</span></div>
                                            <form class="variants clearfix">
                                                <input type="hidden">
                                                <button title="Add to Cart" class="add-to-cart btn btn-solid">Add to
                                                    Cart</button>
                                            </form>
                                            <p class="grid-link__title hidden">Cut Dress</p>
                                        </td>
                                        <td class="item-row"><img src="{{url('front')}}/images/pro3/33.jpg" alt="" class="featured-image">
                                            <div class="product-price product_price"><strong>On Sale:
                                                </strong><span>$89,00</span></div>
                                            <form class="variants clearfix">
                                                <input type="hidden">
                                                <button title="Add to Cart" class="add-to-cart btn btn-solid">Add to
                                                    Cart</button>
                                            </form>
                                            <p class="grid-link__title hidden">Cut Dress</p>
                                        </td>
                                        <td class="item-row"><img src="{{url('front')}}/images/pro3/35.jpg" alt="" class="featured-image">
                                            <div class="compare-lable"><span class="lable4">on sale</span></div>
                                            <div class="product-price product_price"><strong>On Sale:
                                                </strong><span>$89,00</span></div>
                                            <form class="variants clearfix">
                                                <input type="hidden">
                                                <button title="Add to Cart" class="add-to-cart btn btn-solid">Add to
                                                    Cart</button>
                                            </form>
                                            <p class="grid-link__title hidden">Cut Dress</p>
                                        </td>
                                        <td class="item-row"><img src="{{url('front')}}/images/pro3/27.jpg" alt="" class="featured-image">
                                            <div class="product-price product_price"><strong>On Sale:
                                                </strong><span>$89,00</span></div>
                                            <form class="variants clearfix">
                                                <input type="hidden">
                                                <button title="Add to Cart" class="add-to-cart btn btn-solid">Add to
                                                    Cart</button>
                                            </form>
                                            <p class="grid-link__title hidden">Cut Dress</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="product-name">Product Description</th>
                                        <td class="item-row">
                                            <p class="description-compare">Add an extra dose of style with this raw look
                                                henley t-shirt from the house...</p>
                                        </td>
                                        <td class="item-row">
                                            <p class="description-compare">Add an extra dose of style with this raw look
                                                henley t-shirt from the house...</p>
                                        </td>
                                        <td class="item-row">
                                            <p class="description-compare">Add an extra dose of style with this raw look
                                                henley t-shirt from the house...</p>
                                        </td>
                                        <td class="item-row">
                                            <p class="description-compare">Add an extra dose of style with this raw look
                                                henley t-shirt from the house...</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="product-name">Availability</th>
                                        <td class="available-stock">
                                            <p>Available In stock</p>
                                        </td>
                                        <td class="available-stock">
                                            <p>Available In stock</p>
                                        </td>
                                        <td class="available-stock">
                                            <p>Available In stock</p>
                                        </td>
                                        <td class="available-stock">
                                            <p>Available In stock</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section ends -->


    <!-- footer start -->
    <?php
    include("footer.php");
    ?>
    <!-- footer end -->

    <!-- tap to top start -->
    <div class="tap-top">
        <div><i class="fa fa-angle-double-up"></i></div>
    </div>
    <!-- tap to top end -->

    <!-- latest jquery-->
    <script src="{{url('front')}}/js/jquery-3.3.1.min.js"></script>

    <!-- menu js-->
    <script src="{{url('front')}}/js/menu.js"></script>

    <!-- lazyload js-->
    <script src="{{url('front')}}/js/lazysizes.min.js"></script>

    <!-- slick js-->
    <script src="{{url('front')}}/js/slick.js"></script>

    <!-- Bootstrap js-->
    <script src="{{url('front')}}/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap Notification js-->
    <script src="{{url('front')}}/js/bootstrap-notify.min.js"></script>

    <!-- Theme js-->
    <script src="{{url('front')}}/js/theme-setting.js"></script>
    <script src="{{url('front')}}/js/script.js"></script>

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