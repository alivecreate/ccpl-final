@extends('front.layout.front-index')

@section('custom-js')
<script>
$(document).ready(function () {
	$(".contact a").addClass( "activeTab");
});
</script>
@endsection

@section('content')


<div class="parallax-layout parallax overlay header-contactus"
>
        <div class="breadcrumb-section" >
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <div class="page-title d-block">
                            <div class="title1 ">
                                <h2 class="title-inner1">CONTACT US</h2>
                            </div>
                        </div>
                        <nav aria-label="breadcrumb" class="theme-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">CONTACT US</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
</div>


<section class="p-4 contact-page section-b-space">
    <div class="container">
        <div class="row section-b-space">
            <div class="col-lg-7 map">
                
                {!! html_entity_decode(getSocialMedia()['map_embed']) !!}
            
            </div>
            <div class="col-lg-5">
                <div class="contact-right">
                    <ul>
                        <li>
                            <div class="contact-icon"><i class="fa fa-phone" aria-hidden="true"></i>
                                <h6>Contact Us</h6>
                            </div>
                            <div class="media-body">
                                <p><a href="tel:{{getSocialMedia()['phone']}}">{{getSocialMedia()['phone']}}</a></p>
                                <p>{{getSocialMedia()['whatsapp']}}</p>
                            </div>
                        </li>

                        <li>
                            <div class="contact-icon"><i class="fa fa-envelope" aria-hidden="true"></i>
                                <h6>Email</h6>
                            </div>
                            <div class="media-body">
                                <p><a href="mailto:{{getSocialMedia()['email']}}">{{getSocialMedia()['email']}}</a></p>
                            </div>
                        </li>
                        
                        <li>
                            <div class="contact-icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                <h6>Address</h6>
                            </div>
                            <div class="media-body">
                                {{getSocialMedia()['address']}}
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <form class="theme-form" method="post" action="{{route('contactus.store')}}">
                    @csrf
                    <div class="form-row row">
                        <div class="col-md-6">
                            <label for="name">Full Name</label>
                            <input type="text" class="form-control" name="full_name" id="name" placeholder="Enter Your name" required="">
                        </div>
                        <div class="col-md-6">
                            <label for="email">Conutry</label>
                            <input type="text" class="form-control" name="country" id="last-name" placeholder="Country" required="">
                        </div>
                        <div class="col-md-6">
                            <label for="review">Phone number</label>
                            <input type="text" class="form-control" name="phone_no" id="review" placeholder="Enter your number" required="">
                        </div>
                        <div class="col-md-6">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="Email" required="">
                        </div>
                        <div class="col-md-12">
                            <label for="review">Write Your Message</label>
                            <textarea class="form-control" name="message" placeholder="Write Your Message" id="exampleFormControlTextarea1" rows="6"></textarea>
                        </div>
                        <div class="col-md-12">
                            <button class="btn btn-solid" type="submit">Send Your Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--Section ends-->
@endsection