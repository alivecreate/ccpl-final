@extends('front.layout.front-index')

<?php 
    $meta_title = ($productdetails->meta_title) ? $productdetails->meta_title : $productdetails->name;
    $meta_description = ($productdetails->meta_description) ? $productdetails->meta_description : $productdetails->short_description;
    $meta_keyword = ($productdetails->meta_keyword) ? $productdetails->productdetails : $productdetails->short_description;
    
?>
@section('meta_title', $meta_title)
@section('meta_description', $meta_description)
@section('meta_keyword', $meta_keyword)

@section('custom-js')
<script>
$(document).ready(function () {
	$(".manufacturing a").addClass( "activeTab");
});
</script>
@endsection

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
<title>@if(isset($productdetails->meta_title)){{$productdetails->meta_title}}@else{{$productdetails->name}} @endif</title>



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
<link rel="stylesheet" type="text/css" href="{{url('front')}}/css/custom.css">

@endsection

<body class="{{getWebsiteOptions()['theme_color']}}">


<div class="parallax-layout parallax overlay"
style="
 background-size: cover; background: #ffe7d291;  display: block;"
>
        <div class="breadcrumb-section" >
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <div class="page-title d-block">
                            <div class="title1 ">
                                <h2 class="title-inner1">{{$productdetails->name}}</h2>
                            </div>
                        </div>
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <a href="{{url('')}}/{{getMainCategoryFromProduct($productdetails->category_id)->slug}}">{{getMainCategoryFromProduct($productdetails->category_id)->name}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                              <a href="{{url('')}}/{{getMainCategoryFromProduct($productdetails->category_id)->slug}}/{{getSubCategoryFromProduct($productdetails->category_id)->slug}}">{{getSubCategoryFromProduct($productdetails->category_id)->name}}</a></li>  
                            <li class="breadcrumb-item active" aria-current="page">  &nbsp;  {{$productdetails->name}}</li>
                        </ol>
                    </nav>
                    </div>
                </div>
            </div>
        </div>
</div>


    <section class="pt-3">
        <div class="collection-wrapper">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6">

                        <div class="product-slick">
                            @if(count(getProductImages($productdetails->id, 0)) > 0)
                                @foreach(getProductImages($productdetails->id, 0) as $media)
                                    @if($media->image)
                                        <div><img src="{{url('web')}}/media/lg/{{$media->image}}" 
                                        title="{{$media->image_title}}"
                                        alt="{{$media->image_alt}}" class="img-fluid blur-up lazyload image_zoom_cls-0 product-big-slider"></div>
                                    @endif
                                @endforeach
                                @else
                                    <div><img src="{{url('web')}}/media/lg/{{$productdetails->image}}" class="img-fluid blur-up lazyload"></div>
                                @endif
                        </div>

                        <div class="row">
                            <div class="col-12 p-0">
                                <div class="slider-nav">
                                    @if(count(getProductImages($productdetails->id, 0)) > 0)
                                        @foreach(getProductImages($productdetails->id, 0) as $mediaThumb)
                                            @if($mediaThumb->image)
                                            <div>
                                                <img src="{{url('web')}}/media/lg/{{$mediaThumb->image}}" 
                                                class="img-fluid bg-size blur-up lazyload"></div>
                                            @endif
                                        @endforeach
                                   @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 rtl-text">
                        <div class="product-right p-3">
                            
                            <h2 class="product-detail-title">{{$productdetails->name}}</h2>
                                <div class="border-product">
                                    <h6 class="product-title">Info:</h6>
										{!! html_entity_decode($productdetails->short_description) !!}
                                </div>

                                @include('front.widget.cart.social-share')
                            <div class="product-buttons"><a href="#" id="cartEffect" class="btn btn-solid hover-solid btn-animation">
                                <i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp; Send Inquiry</a>
                               
                        </div>
                    </div>
                </div>
            </div>
    </section>


    <!-- product-tab starts -->
    <section class="tab-product m-0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                        <li class="nav-item"><a class="nav-link active" id="top-home-tab" data-bs-toggle="tab" href="#top-home" role="tab" aria-selected="true"><i class="icofont icofont-ui-home"></i>Details</a>
                            <div class="material-border"></div>
                        </li>
                        
                        @if(count(getYoutubeEmbedData($productdetails->id, 5)) > 0)
                        <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-bs-toggle="tab" 
                            href="#top-contact" role="tab" aria-selected="false">
                            <i class="icofont icofont-contacts"></i>Video</a>
                            <div class="material-border"></div>
                        </li>
                        @endif
                    </ul>
                    <div class="tab-content nav-material" id="top-tabContent">
                        <div class="tab-pane fade show active" id="top-home" role="tabpanel" aria-labelledby="top-home-tab">
                            <div class="product-tab-discription">
                                <div class="part">
                                    {!! html_entity_decode($productdetails->full_description) !!}
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="top-profile" role="tabpanel" aria-labelledby="profile-top-tab">
                            <p>{{$productdetails->short_description}}</p>
                            <div class="single-product-tables">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>Sleeve Length</td>
                                            <td>Sleevless</td>
                                        </tr>
                                        <tr>
                                            <td>Neck</td>
                                            <td>Round Neck</td>
                                        </tr>
                                        <tr>
                                            <td>Occasion</td>
                                            <td>Sports</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>Fabric</td>
                                            <td>Polyester</td>
                                        </tr>
                                        <tr>
                                            <td>Fit</td>
                                            <td>Regular Fit</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                        @if(count(getYoutubeEmbedData($productdetails->id, 5)) > 0)
                        <div class="tab-pane fade" id="top-contact" role="tabpanel" aria-labelledby="contact-top-tab">
                            
                        <div class="row">
                        @foreach(getYoutubeEmbedData($productdetails->id, 5) as $youtubeMedia)
                                    <iframe height="315" style="width:50%; margin-bottom:12px;"
                                    src="{{getYoutubeEmbed($youtubeMedia->youtube_embed)}}" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                
                          @endforeach  
                          </div>    
                            </div>            
                        @endif
                        
                        <div class="tab-pane fade" id="top-review" role="tabpanel" aria-labelledby="review-top-tab">
                            <form class="theme-form">
                                <div class="form-row row">
                                    <div class="col-md-12">
                                        <div class="media">
                                            <label>Rating</label>
                                            <div class="media-body ms-3">
                                                <div class="rating three-star"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Enter Your name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" id="email" placeholder="Email" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="review">Review Title</label>
                                        <input type="text" class="form-control" id="review" placeholder="Enter your Review Subjects" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="review">Review Title</label>
                                        <textarea class="form-control" placeholder="Wrire Your Testimonial Here" id="exampleFormControlTextarea1" rows="6"></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn btn-solid" type="submit">Submit YOur
                                            Review</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product-tab ends -->


    <!-- product section start -->
    <section class="section-b-space ratio_asos">
        <div class="container">
            <div class="row">
                <div class="col-12 product-related">
                    <h2>related products</h2>
                </div>
            </div>

            <div class="row search-product">

            @foreach($products as $product)
                    @if($product->id != $productdetails->id)
                    <div
                    class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-3 pull-left col-grid-box">
                        <div class="product-box product-wrap">

                            <div class="product-detail">
                                
                            <a  href="{{url('')}}/{{getMainCategoryFromProduct($productdetails->category_id)->slug}}/{{getSubCategoryFromProduct($productdetails->category_id)->slug}}/{{$product->slug}}" 
                            >
                                <h5 class="product_title">{{$product->name}}</h5>
                            </a>

                            </div>
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="{{url('')}}/{{$currentCategory->slug}}/{{$subCategory->slug}}">
                                    <img src="{{url('web')}}/media/md/{{$product->image}}" 
                                    class="img-fluid blur-up lazyload" alt=""></a>
                                </div>
                            </div>
                            <h5 class="p-3">{{$product->short_description}}</h5>


                            <div class="text-center">
                                <a href="{{url('')}}/{{getMainCategoryFromProduct($productdetails->category_id)->slug}}/{{getSubCategoryFromProduct($productdetails->category_id)->slug}}/{{$product->slug}}" 
                                    class="btn btn-solid animated mb-3 py-1 px-2">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp; Read More</a>

                                    
                                    <a class="btn btn-dark animated mb-3 py-1 px-2 btn-inquiry"
                                            href="#" data-bs-toggle="modal"
                                            data-bs-target="#quick-view" title="Quick View"
                                            
                                            data-id="{{$product->id}}" 
                                            data-title="{{$product->name}}" 
                                            data-image-path="{{url('web')}}/media/md/{{$product->image}}" 
                                            data-image="{{$product->image}}" 
                                            data-page-url="{{url('')}}/{{$currentCategory->slug}}/{{$subCategory->slug}}{{$category->slug}}" 
                                            data-product-url="{{url('')}}/{{$product->slug}}" 
                                            >
                                                <i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp; Inquiry</a>

                            </div>

                        </div>
                    </div>
                    @endif

                @endforeach




            </div>
        </div>
    </section>
    <!-- product section end -->


    <!-- footer start -->
    <?php
    include("footer.php");
    ?>

@include('front.widget.inquiry-form-modal')

   

    <!-- tap to top start -->
    <div class="tap-top">
        <div><i class="fa fa-angle-double-up"></i></div>
    </div>
    <!-- tap to top end -->


    <!-- added to cart notification -->
    <div class="added-notification">
        <img src="{{url('front')}}/images/fashion/pro/1.jpg" class="img-fluid" alt="">
        <h3>added to cart</h3>
    </div>
    <!-- added to cart notification -->

    @section('script')
    <!-- latest jquery-->
    <script src="{{url('front')}}/js/jquery-3.3.1.min.js"></script>

    <!-- menu js-->
    <script src="{{url('front')}}/js/menu.js"></script>

    <!-- lazyload js-->
    <script src="{{url('front')}}/js/lazysizes.min.js"></script>

    <!-- sticky cart bottom js-->
    <script src="{{url('front')}}/js/sticky-cart-bottom.js"></script>

    <!-- slick js-->
    <script src="{{url('front')}}/js/slick.js"></script>

    <!-- timer js-->
    <script src="{{url('front')}}/js/timer.js"></script>

    <!-- Bootstrap js-->
    <script src="{{url('front')}}/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap Notification js-->
    <script src="{{url('front')}}/js/bootstrap-notify.min.js"></script>

    <!-- Zoom js-->
    <script src="{{url('front')}}/js/jquery.elevatezoom.js"></script>

    <!-- Theme js-->
    <script src="{{url('front')}}/js/theme-setting.js"></script>
    <script src="{{url('front')}}/js/script.js"></script>

    <script>
        
$('.btn-inquiry').click(function (e) { 

$('.res-title').text($(this).attr('data-title'));
$('.form-id').val($(this).attr('data-id'));
$('.form-title').val($(this).attr('data-title'));
$('.form-product-image').val($(this).attr('data-image'));
$('.form-product-image-path').val($(this).attr('data-image-path'));

$('.form-product-url').val($(this).attr('data-product-url'));

$('.res-image').attr('src', $(this).attr('data-image-path'));
// alert($(this).attr('data-image'));

});

        function openSearch() {
            document.getElementById("search-overlay").style.display = "block";
        }

        function closeSearch() {
            document.getElementById("search-overlay").style.display = "none";
        }
    </script>


    @endsection

    @endsection