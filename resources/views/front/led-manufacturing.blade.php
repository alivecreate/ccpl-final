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

<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">

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
<script>
    $(document).ready(function () {
       
    // $('body').addClass('dark'); 
    });
</script>

<style>
   
   .led.bg-size.blur-up.lazyloaded {
    height: 80vh;
}

</style>
@endsection

    <!-- Home slider -->
    <section class="p-0 height-100 sm-responsive">
        <div class="slider-animate led-slider">
            @foreach($sliders as $slider)
            <div>
                <div class="led">
                    <img src="{{url('web')}}/media/lg/{{$slider->image}}" alt="" class="bg-img blur-up lazyload">
                    <div class="container">
                        <div class="row">
                            <div class="col-6">
                                <div class="slider-contain">
                                    <div>
                                        
                                    @if($slider->title)<h4>{{$slider->title}}</h4>@endif
                                        @if($slider->description)<h1 class="font-fraunces" >{{$slider->description}}</h1>@endif
                                        
                                        @if($slider->url)<a href="{{$slider->url}}" class="btn btn-solid animated">Read More</a>@endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            
        </div>
    </section>
    

    <section class="section-b-space pt-0 ratio_square bg-light-color">
    <div class="title1 section-t-space pt-4">
        <h2 class="title-inner1 m-2">LED Manufacturing</h2>

            <h4 class="p-4   text-center text-style1">
                CHARUTAR COSMETICS PVT. LTD. began as a promise to provide superior quality products in cosmetics and toiletries to the leading marketing and distribution conglomerates 
                in the country.
            </h4>
    </div>

                

        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="theme-tab">
                        <ul class="tabs tab-title">
                            @foreach($subCategories as $i => $subCategory)
                            <li class="@if($i == 0) current @endif">
                                <a href="{{$subCategory->id}}">{{$subCategory->name}}</a>
                            </li>
                            @endforeach

                        </ul>
                        
                        <div class="tab-content-cls j-box style-box row">

                        @foreach($subCategories as $index => $subCategory)
                                <div id="{{$subCategory->id}}" 
                                class="row d-content tab-content @if($index == 0) active default @endif">

                                @if(count(getProductsFromSubCategory($subCategory->id, 3, 'asc')) > 0)
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-3 pull-left">
                                        <div class="product-wrap">
                                            <div class="product-detail">
                                                <div>
                                                    <a href="{{url('')}}/{{$subCategory->slug}}/{{$subCategory->slug}}">
                                                        <h5 class="product_title">{{$subCategory->name}}</h5>
                                                    </a>
                                                </div>
                                            </div>
                                            
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="{{url('')}}/{{$subCategory->slug}}/{{$subCategory->slug}}">
                                                    @if($subCategory->image)

                                                        @if(checkIsFileExist(public_path('web').'/media/sm/'.$subCategory->image) == true)
                                                        <img src="{{url('web')}}/media/md/{{$subCategory->image}}" 
                                                        class="img-fluid blur-up lazyload product-thumb" 
                                                        title="{{$subCategory->image_alt}}"
                                                        alt="{{$subCategory->image_title}}">

                                                        @else

                                                        <img class="rounded img-block m-1"  width="120" 
                                                            src="{{url('adm')}}/img/no-item.jpeg">
                                                        @endif
                                                        
                                                    @else
                                                        <img src="{{url('front')}}/images/no-product-image.png" 
                                                        class="img-fluid blur-up lazyload product-thumb">                                                    
                                                    @endif

                                                    </a>
                                                </div>
                                            </div>

                                            <div class="product-list-home">
                                                <ul>
                                                    @foreach(getProductsFromSubCategory($subCategory->id, 3, 'asc') as $product)
                                                        <li>
                                                            <a href="{{url('')}}/{{$subCategory->slug}}/{{$product->slug}}/{{$product->slug}}">
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
                                                        class="btn btn-solid animated mb-3 py-1 px-2">
                                                        <i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp; View All</a>
                                             
                                             

                                        <a class="btn btn-dark animated mb-3 py-1 px-2 btn-inquiry"
                                            href="#" data-bs-toggle="modal"
                                            data-bs-target="#quick-view" title="Quick View"
                                            
                                            data-id="{{$subCategory->id}}" 
                                            data-title="{{$subCategory->name}}" 
                                            data-image-path="{{url('web')}}/media/md/{{$subCategory->image}}" 
                                            data-image="{{$subCategory->image}}" 
                                            data-page-url="{{url('')}}/{{$subCategory->slug}}" 
                                            data-product-url="{{url('')}}/{{$subCategory->slug}}" 
                                            >
                                                <i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp; Inquiry</a>
                                            </div>

                                            </div>
                                            
                                        </div>
                                    </div>

                                    @endif

                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



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
    

    <div class="tap-top">
        <div><i class="fa fa-angle-double-up"></i></div>
    </div>
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