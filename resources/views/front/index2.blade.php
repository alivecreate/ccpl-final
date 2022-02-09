<!DOCTYPE html>
<html lang="en">

<head>
   @include('front.ext.head')
</head>

<body class="{{getWebsiteOptions()['theme_color']}}">


    @include('front.ext.header')
    @include('front.widget.slider')
    

<section class="about-page section-b-space banner-primary-color pt-0">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center text-style1">
                <div class="title1 section-t-space">
                    <h2 class="title-inner1">About CCPL</h2>
                </div>

                <h4>
                CHARUTAR COSMETICS PVT. LTD. began as a promise to provide superior quality products in cosmetics and toiletries to the leading marketing and distribution conglomerates 
                in the country.
                </h4>
                
                <p>Charutar Cosmetics is started in 1993 with a vision to serve the market with quality Products at 
                reasonable price. Our management team consists of experienced persons in the cosmetics field as well 
                as energetic, enthusiastic, young persons. This gives a perfect combination of prompt action balanced 
                with experience. The core group consists of most experienced skill person like engineers, pharmacists, 
                chemists, foreign trade management executives etc.</p>
                </div>
        </div>
    </div>
</section>



    <section class="section-b-space pt-0 ratio_square bg-light-color">
    <div class="title1 section-t-space pt-4">
        <h2 class="title-inner1">Manufacturing Unit</h2>
    </div>

        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="theme-tab">
                        <ul class="tabs tab-title">
                            @foreach($categories as $i => $category)
                            <li class="@if($i == 0) current @endif">
                                <a href="{{$category->id}}">{{$category->name}}</a>
                            </li>
                            @endforeach

                        </ul>
                        
                        <div class="tab-content-cls j-box style-box row">

                        @foreach($categories as $index => $category)
                                <div id="{{$category->id}}" 
                                class="row d-content tab-content @if($index == 0) active default @endif">
                            @foreach(getSubCategories($category->id, 50) as $subCategory)

                                @if(count(getProductsFromSubCategory($subCategory->id, 3, 'asc')) > 0)
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-3 pull-left">
                                        <div class="product-wrap">
                                            <div class="product-detail">
                                                <div>
                                                    <a href="{{url('')}}/{{$category->slug}}/{{$subCategory->slug}}">
                                                        <h5 class="product_title">{{$subCategory->name}}</h5>
                                                    </a>
                                                </div>
                                            </div>
                                            
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="{{url('')}}/{{$category->slug}}/{{$subCategory->slug}}">
                                                    @if($subCategory->image)

                                                        @if(checkIsFileExist(public_path('web').'/media/sm/'.$sub_category->image) == true)

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
                                                            <a href="{{url('')}}/{{$category->slug}}/{{$product->slug}}/{{$product->slug}}">
                                                            <i class="fa fa-arrow-right">&nbsp;&nbsp;</i>{{$product->name}}</a>
                                                        </li>
                                                    @endforeach

                                                    <li>
                                                        <a href="{{url('')}}/{{$category->slug}}/{{$subCategory->slug}}">
                                                        <i class="fa fa-arrow-right">&nbsp;&nbsp;</i>& More</a>
                                                    </li>
                                                </ul>

                                                <div class="text-center">
                                                    <a href="{{url('')}}/{{$category->slug}}/{{$subCategory->slug}}" 
                                                        class="btn btn-solid animated mb-3 py-1 px-2">
                                                        <i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp; View All</a>
                                             
                                             

                                        <a class="btn btn-dark animated mb-3 py-1 px-2 btn-inquiry"
                                            href="#" data-bs-toggle="modal"
                                            data-bs-target="#quick-view" title="Quick View"
                                            
                                            data-id="{{$subCategory->id}}" 
                                            data-title="{{$subCategory->name}}" 
                                            data-image-path="{{url('web')}}/media/md/{{$subCategory->image}}" 
                                            data-image="{{$subCategory->image}}" 
                                            data-page-url="{{url('')}}/{{$category->slug}}" 
                                            data-product-url="{{url('')}}/{{$category->slug}}" 
                                            >
                                                <i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp; Inquiry</a>
                                            </div>

                                            </div>
                                            
                                        </div>
                                    </div>

                                    @endif

                                @endforeach
                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- product section end -->


    <!-- collection banner -->
    <section class="banner-padding banner-furniture ratio_40 pt-0">
        <div class="container-fluid">
            <div class="row partition3">
                <div class="col-md-6">
                    <a href="@if($homeBanner1->url){{$homeBanner1->url}}@else#@endif">
                        <div class="collection-banner p-left text-start">
                            <div class="img-part">
                            
                                @if($homeBanner1->image)
                                    <img src="{{url('web')}}/media/lg/{{$homeBanner1->image}}" alt="" class="img-fluid blur-up lazyload bg-img">
                                @else
                                    <img src="{{url('front')}}/images/medicine/banner/15.jpg" alt="" class="img-fluid blur-up lazyload bg-img">
                                @endif
                            </div>
                            <div class="contain-banner">
                                <div>
                                    @if($homeBanner1->description)
                                        <h4>{{$homeBanner1->description}}</h4>
                                    @endif
                                    @if($homeBanner1->title)
                                        <h2 class="font-cormorant">{{$homeBanner1->title}}</h2>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="#">
                        <div class="collection-banner p-left text-start">
                            <div class="img-part">
                                @if($homeBanner2->image)
                                    <img src="{{url('web')}}/media/lg/{{$homeBanner2->image}}" alt="" class="img-fluid blur-up lazyload bg-img">
                                @else
                                    <img src="{{url('front')}}/images/medicine/banner/15.jpg" alt="" class="img-fluid blur-up lazyload bg-img">
                                @endif
                             </div>

                            <div class="contain-banner">
                                <div>
                                    @if($homeBanner2->description)
                                        <h4>$homeBanner2->description</h4>
                                    @endif
                                    @if($homeBanner2->title)
                                        <h2 class="font-cormorant">{{$homeBanner2->title}}</h2>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- collection banner end -->


    <!-- collection banner -->
    <section class="banner-padding banner-furniture ratio2_1">
        <div class="container-fluid">
            <div class="row partition3">
                <div class="col-md-4">
                    <a href="#">
                        <div class="collection-banner p-left text-start">

                            <div class="img-part">
                                @if($homeBanner3->image)
                                    <img src="{{url('web')}}/media/lg/{{$homeBanner3->image}}" alt="" class="img-fluid blur-up lazyload bg-img">
                                @else
                                    <img src="{{url('front')}}/images/medicine/banner/15.jpg" alt="" class="img-fluid blur-up lazyload bg-img">
                                @endif
                            </div>

                            <div class="contain-banner banner-3">
                                <div>
                                    @if($homeBanner3->description)
                                        <h4>$homeBanner3->description</h4>
                                    @endif
                                    @if($homeBanner3->title)
                                        <h2 class="font-cormorant">{{$homeBanner3->title}}</h2>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#">
                        <div class="collection-banner p-left text-start">
                            <div class="img-part">
                            
                                @if($homeBanner4->image)
                                    <img src="{{url('web')}}/media/lg/{{$homeBanner4->image}}" alt="" class="img-fluid blur-up lazyload bg-img">
                                @else
                                    <img src="{{url('front')}}/images/medicine/banner/15.jpg" alt="" class="img-fluid blur-up lazyload bg-img">
                                @endif
                            
                            </div>
                            <div class="contain-banner banner-3">
                                <div>
                                    @if($homeBanner4->description)
                                        <h4>$homeBanner4->description</h4>
                                    @endif
                                    @if($homeBanner4->title)
                                        <h2 class="font-cormorant">{{$homeBanner4->title}}</h2>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#">
                        <div class="collection-banner p-left text-start">
                            <div class="img-part">
                            
                                @if($homeBanner5->image)
                                    <img src="{{url('web')}}/media/lg/{{$homeBanner5->image}}" alt="" class="img-fluid blur-up lazyload bg-img">
                                @else
                                    <img src="{{url('front')}}/images/medicine/banner/15.jpg" alt="" class="img-fluid blur-up lazyload bg-img">
                                @endif
                            
                            </div>
                            <div class="contain-banner banner-3">
                                <div>
                                    @if($homeBanner5->description)
                                        <h4>$homeBanner5->description</h4>
                                    @endif
                                    @if($homeBanner5->title)
                                        <h2 class="font-cormorant">{{$homeBanner5->title}}</h2>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- collection banner end -->

    @include('front.widget.block.work-flow-strip')

    @include('front.ext.footer')

    <!--modal popup start-->
    <!-- <div class="modal fade bd-example-modal-lg theme-modal" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body modal1">
                    <div class="container-fluid p-0">
                        <div class="row">
                            <div class="col-12">
                                <div class="modal-bg">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <div class="offer-content"> <img src="{{url('front')}}/images/Offer-banner.png" class="img-fluid blur-up lazyload" alt="">
                                        <h2>newsletter</h2>
                                        <form action="https://pixelstrap.us19.list-manage.com/subscribe/post?u=5a128856334b598b395f1fc9b&amp;id=082f74cbda" class="auth-form needs-validation" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank">
                                            <div class="form-group mx-sm-3">
                                                <input type="email" class="form-control" name="EMAIL" id="mce-EMAIL" placeholder="Enter your email" required="required">
                                                <button type="submit" class="btn btn-solid" id="mc-submit">subscribe</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!--modal popup end-->

@include('front.widget.inquiry-form-modal')


    <!-- tap to top -->
    <div class="tap-top top-cls">
        <div>
            <i class="fa fa-angle-double-up"></i>
        </div>
    </div>
    <!-- tap to top end -->


    <!-- latest jquery-->
    <script src="{{url('front')}}/js/jquery-3.3.1.min.js"></script>

    <!-- slick js-->
    <script src="{{url('front')}}/js/slick.js"></script>
    <script src="{{url('front')}}/js/slick-animation.min.js"></script>

    <!-- menu js-->
    <script src="{{url('front')}}/js/menu.js"></script>

    <!-- lazyload js-->
    <script src="{{url('front')}}/js/lazysizes.min.js"></script>

    <!-- feather icon js-->
    <script src="{{url('front')}}/js/feather.min.js "></script>

    <!-- Bootstrap js-->
    <script src="{{url('front')}}/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap Notification js-->
    <script src="{{url('front')}}/js/bootstrap-notify.min.js"></script>

    <!-- Theme js-->
    <script src="{{url('front')}}/js/theme-setting.js"></script>
    <script src="{{url('front')}}/js/script.js"></script>

    <script src="{{url('front')}}/js/custom-slick-animated.js"></script>


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

$('#quick-view').on('shown.bs.modal', function () {
        // $('.quick-slide-1').slick({
        //     infinite: false,
        //     slidesToShow: 1,
        //     slidesToScroll: 1,
        //     fade: true,
        //     dots: true,
        // });
    });
    
        $(window).on('load', function() {
            setTimeout(function() {
                // $('#exampleModal').modal('show');
            }, 2500);
        });
        feather.replace();

        function openSearch() {
            document.getElementById("search-overlay").style.display = "block";
        }

        function closeSearch() {
            document.getElementById("search-overlay").style.display = "none";
        }
    </script>

<script>
$(document).ready(function () {
	$(".home a").addClass( "activeTab");
});
</script>
</body>

</html>