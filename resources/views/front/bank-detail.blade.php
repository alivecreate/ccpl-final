@extends('front.layout.front-index')

@section('custom-js')
<script>
$(document).ready(function () {
	$(".about a").addClass( "activeTab");
});
</script>
@endsection

@section('content')

<div class="parallax-layout parallax overlay header-bank-detail">
        <div class="breadcrumb-section" >
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <div class="page-title d-block">
                            <div class="title1 ">
                                <h2 class="title-inner1">Bank Details</h2>
                            </div>
                        </div>
                        <nav aria-label="breadcrumb" class="theme-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Bank Details</li>
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
                <div class="banner-section"><img src="{{url('website')}}/ccpl-banner-bank-detail.png" class="img-fluid blur-up lazyload" alt=""></div>
            </div>

            <div class="col-sm-6   bank-detail">

            <h4 class="title-style1">Our Bank Details</h4>
            <table class="table">
                <tr>
                    <th>BENEFICIARY NAME</th>
                    <td>CHARUTAR COSMETICS PRIVATE LIMITED</td>
                </tr>
                <tr>
                    <th>BANK NAME</th>
                    <td>STATE BANK OF INDIA</td>
                </tr>
                <tr>
                    <th>ACCOUNT NO</th>
                    <td>38294273583</td>
                </tr>
                <tr>
                    <th>IFSC NO</th>
                    <td>SBIN0011025</td>
                </tr>
                <tr>
                    <th>HEAD OFFICE</th>
                    <td>PARIVAR CHAR RASTA, VADODARA, GUJARAT</td>
                </tr>
            </table>

            </div>
        </div>
    </div>
</section>


@endsection