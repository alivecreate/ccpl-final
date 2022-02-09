@extends('front.layout.front-index')
@section('content')
@section('head')
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="description" content="multikart">
<meta name="keywords" content="multikart">
<meta name="author" content="multikart">
<link rel="icon" href="{{url('front')}}/images/favicon/1.png" type="image/x-icon">
<link rel="shortcut icon" href="{{url('front')}}/images/favicon/1.png" type="image/x-icon">
<title>Manufacturing - </title>

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

<!-- Price range icon -->
<link rel="stylesheet" type="text/css" href="{{url('front')}}/css/vendors/price-range.css">

<!-- Themify icon -->
<link rel="stylesheet" type="text/css" href="{{url('front')}}/css/vendors/themify-icons.css">

<!-- Bootstrap css -->
<link rel="stylesheet" type="text/css" href="{{url('front')}}/css/vendors/bootstrap.css">

<!-- Theme css -->
<link rel="stylesheet" type="text/css" href="{{url('front')}}/css/style.css">
@endsection

<body class="{{getWebsiteOptions()['theme_color']}}">

<div class="parallax-layout parallax overlay"
style="background-image: url('{{url('front')}}/images/ccpl/ccpl-2.jpg');
 background-size: cover;  display: block;"
>
        <div class="breadcrumb-section" >
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <div class="page-title d-block">
                            <div class="title1 ">
                                <h2 class="title-inner1">{{$currentCategory->name}}</h2>
                            </div>
                        </div>
                        <nav aria-label="breadcrumb" class="theme-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{$currentCategory->name}}</li>
                            </ol>
                        </nav>
                        <h5>{!! html_entity_decode($currentCategory->description) !!}</h5>
                    </div>
                </div>
            </div>
        </div>
</div>


    <section class="section-b-space ratio_asos pt-2">
        <div class="collection-wrapper">
            <div class="container">
                <div class="row">

                @include('front.widget.product.product-sidebar')
                
                    <div class="col-sm-9 collection-content col">
                        <div class="page-main-content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="top-banner-wrapper">
                                        <a href="#">
                                            @if(isset($currentCategory->image))
                                                <img class="product_banner" src="{{url('web')}}/media/lg/{{$currentCategory->image}}" class="img-fluid blur-up lazyload" alt=""></a>
                                            @endif
                                       
                                            <div class="top-banner-content small-section pb-1 my_top_content">
                                        </div>
                                    </div>
                                    <hr>
                                    
                                    <div class="collection-product-wrapper">
                                        <div class="product-wrapper-grid">
                                        <div class="tab-content-cls j-box style-box">
                                            <div class="row margin-res">

                                                @foreach($subCategories as $subCategory)
                                                    @if(checkIsProductAvailable($subCategory->id) > 0)
                                                    <div class="col-xl-4 col-6 col-grid-box">
                                                        <div class="product-box product-wrap">
                                                            <div class="product-detail">
                                                                <div>
                                                                    <a href="{{url('')}}/{{$currentCategory->slug}}/{{$subCategory->slug}}">
                                                                        <h5 class="product_title text-uppercase">{{$subCategory->name}}</h5>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="img-wrapper">
                                                                <div class="front">
                                                                    <a href="{{url('')}}/{{$currentCategory->slug}}/{{$subCategory->slug}}">
                                                                    <img src="{{url('web')}}/media/md/{{$subCategory->image}}" 
                                                                    class="img-fluid blur-up lazyload" alt=""></a>
                                                                </div>
                                                            </div>

                                                            <div class="product-list-home">
                                                                <ul>
                                                                    @foreach(getProductsFromSubCategory($subCategory->id, 3, 'asc') as $product)
                                                                        <li>
                                                                            <a href="{{url('')}}/{{$subCategory->slug}}/{{$subCategory->slug}}/{{$product->slug}}">
                                                                            <i class="fa fa-arrow-right">&nbsp;&nbsp;</i>{{$product->name}}</a>
                                                                        </li>
                                                                    @endforeach

                                                                    <li>
                                                                        <a href="{{url('')}}/{{$subCategory->slug}}/{{$subCategory->slug}}">
                                                                        <i class="fa fa-arrow-right">&nbsp;&nbsp;</i>& More</a>
                                                                    </li>
                                                                </ul>

                                                                <div class="text-center">
                                                                    <a href="{{url('')}}/{{$subCategory->slug}}/{{$subCategory->slug}}" 
                                                                        class="btn btn-solid animated mb-3 py-1 px-4">View All</a>

<!--                                                                         
                                                                    <a href="{{url('')}}/{{$subCategory->slug}}/{{$subCategory->slug}}" 
                                                                        class="btn btn-dark animated mb-3 py-1 px-2">
                                                                        <i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp; Inquiry</a> -->

                                                                </div>
                                                                
                                                            </div>
                                            

                                                        </div>
                                                    </div>
                                                    @endif

                                                    

                                                @endforeach
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section End -->



    <!-- Quick-view modal popup start-->
    <div class="modal fade bd-example-modal-lg theme-modal" id="quick-view" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content quick-view-modal">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <div class="row">
                        <div class="col-lg-6 col-xs-12">
                            <div class="quick-view-img"><img src="{{url('front')}}/images/pro3/1.jpg" alt="" class="img-fluid blur-up lazyload"></div>
                        </div>
                        <div class="col-lg-6 rtl-text">
                            <div class="product-right">
                                <h2>Women Pink Shirt</h2>
                                <h3>$32.96</h3>
                                <ul class="color-variant">
                                    <li class="bg-light0"></li>
                                    <li class="bg-light1"></li>
                                    <li class="bg-light2"></li>
                                </ul>
                                <div class="border-product">
                                    <h6 class="product-title">product details</h6>
                                    <p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium</p>
                                </div>
                                <div class="product-description border-product">
                                    <div class="size-box">
                                        <ul>
                                            <li class="active"><a href="javascript:void(0)">s</a></li>
                                            <li><a href="javascript:void(0)">m</a></li>
                                            <li><a href="javascript:void(0)">l</a></li>
                                            <li><a href="javascript:void(0)">xl</a></li>
                                        </ul>
                                    </div>
                                    <h6 class="product-title">quantity</h6>
                                    <div class="qty-box">
                                        <div class="input-group"><span class="input-group-prepend"><button type="button" class="btn quantity-left-minus" data-type="minus" data-field=""><i class="ti-angle-left"></i></button> </span>
                                            <input type="text" name="quantity" class="form-control input-number" value="1"> <span class="input-group-prepend"><button type="button" class="btn quantity-right-plus" data-type="plus" data-field=""><i class="ti-angle-right"></i></button></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-buttons"><a href="#" class="btn btn-solid">add to cart</a> <a href="#" class="btn btn-solid">view detail</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


    <!-- tap to top start -->
    <div class="tap-top">
        <div><i class="fa fa-angle-double-up"></i></div>
    </div>
    <!-- tap to top end -->
    @section('script')

    <!-- latest jquery-->
    <script src="{{url('front')}}/js/jquery-3.3.1.min.js"></script>

    <!-- menu js-->
    <script src="{{url('front')}}/js/menu.js"></script>

    <!-- lazyload js-->
    <script src="{{url('front')}}/js/lazysizes.min.js"></script>

    <!-- price range js -->
    <script src="{{url('front')}}/js/price-range.js"></script>

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

<script>
$(document).ready(function () {
	$(".manufacturing a").addClass( "activeTab");
});
</script>

    @endsection
    @endsection