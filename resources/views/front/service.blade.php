@extends('front.layout.front-index')

@section('custom-js')
<script>
$(document).ready(function () {
	$(".about a").addClass( "activeTab");
});
</script>
@endsection

@section('content')

<div class="parallax-layout parallax overlay header-service"
>
        <div class="breadcrumb-section" >
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <div class="page-title d-block">
                            <div class="title1 ">
                                <h2 class="title-inner1">Our Services</h2>
                            </div>
                        </div>
                        <nav aria-label="breadcrumb" class="theme-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Our Services</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
</div>

<section class="p-4 about-page section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-section"><img src="{{url('website')}}/ccpl-banner-service1.png" class="img-fluid blur-up lazyload" alt=""></div>
            </div>
            <div class="col-sm-12">
                <h4>
                CHARUTAR COSMETICS PVT. LTD. began as a promise to provide superior quality products in cosmetics and toiletries to the leading marketing and distribution conglomerates 
                in the country.
                </h4>
                
                <p>Charutar Cosmetics is started in 1993 with a vision to serve the market with quality Products at 
                reasonable price. Our management team consists of experienced persons in the cosmetics field as well 
                as energetic, enthusiastic, young persons. This gives a perfect combination of prompt action balanced 
                with experience. The core group consists of most experienced skill person like engineers, pharmacists, 
                chemists, foreign trade management executives etc.</p>
                <p>CCPL is a large group of companies that includes various industries like mould manufacturing company, packaging product manufacturing company, cosmetic product manufacturing company, nutraceutical product manufacturing company, corrugated box manufacturing company and printing unit CCPL have very wide experience in the field of engineering, electrical, house hold product, cosmetic product, food and beverages, dietary supplements, packaging products and agriculture products etc is also added to describe the strength of CCPL.

We believe in building one of the best direct selling companies "of the people" and "for the people" - coz they are not just people but an integral part of CCPL family. With legally approved hybrid unique compensation plans and best industry offers we empower our family members to fulfil their dreams and live a luxurious lifestyle. You dream it, and we make it happen at CCPL.

With in-house strong manufacturing and R&D, the company believes “quality only happens when you care enough to do your best”. With the manufacturing capacity of over 3000+ products our strongest pillar is our mass to class products - "best quality, best price for all".


</p>
            </div>
        </div>
    </div>
</section>
<!-- about section end -->




@endsection