<footer class="footer-light">

    <section class="section-b-space light-layout">
        <div class="container">
            <div class="row footer-theme partition-f">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-title footer-mobile-title">
                        <h4>about</h4>
                    </div>
                    <div class="footer-contant">
                        <div class="footer-logo">
                            <img width="204" src="{{url('sardar')}}/img/{{getWebsiteOptions()['website_logo']['option_value']}}" alt=""></div>
                        
                            <p>Charutar Cosmetics is started in 1993 with a vision to serve the market with quality Products at reasonable price. Our management team consists of experienced persons in the cosmetics field as well as energetic, enthusiastic, young persons. This gives a perfect combination of prompt action balanced with experience. The core group consists of most experienced skill person like engineers, pharmacists, chemists, foreign trade management executives etc.</p>
                        <div class="footer-social">
                            <ul>
                                @if(isset(getSocialMedia()['facebook']))
                                    <li><a href="{{getSocialMedia()['facebook']}}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                @endif
                                
                                @if(isset(getSocialMedia()['twitter']))
                                <li><a href="{{getSocialMedia()['twitter']}}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                @endif
                                
                                @if(isset(getSocialMedia()['instagram']))
                                <li><a href="{{getSocialMedia()['instagram']}}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                @endif
                                
                                @if(isset(getSocialMedia()['linkedin']))
                                <li><a href="{{getSocialMedia()['linkedin']}}"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                @endif

                                @if(isset(getSocialMedia()['youtube']))
                                <li><a href="{{getSocialMedia()['youtube']}}"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                @endif

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col offset-xl-1">
                    <div class="sub-title">
                        <div class="footer-title">
                            <h4>Information</h4>
                        </div>
                        <div class="footer-contant">
                            <ul>
                                <li><a href="{{url('')}}">Home</a></li>
                                <li><a href="{{url('about')}}">About Company</a></li>
                                <li><a href="{{url('bank-detail')}}">Bank Detail</a></li>
                                <li><a href="{{url('legal')}}">Legal</a></li>
                                <li><a href="{{url('infrastructure')}}">Infrastructure</a></li>
                                <li><a href="{{url('award-recognization')}}">Awards & Recognization</a></li>
                                <li><a href="{{url('contact-us')}}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="sub-title">
                        <div class="footer-title">
                            <h4>Manufacturing Units</h4>
                        </div>
                        <div class="footer-contant">
                            <ul>
                                @foreach(getMainCategories(0, 15) as $category)
                                    <li><a href="{{url('')}}/{{$category->slug}}">{{$category->name}}</a></li>
                                @endforeach
                                

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="sub-title">
                        <div class="footer-title">
                            <h4>store information</h4>
                        </div>
                        <div class="footer-contant">
                            <ul class="contact-list">
                            
                                <li><i class="fa fa-phone"></i>Call Us: <a href="tel:{{getSocialMedia()['phone']}}">{{getSocialMedia()['phone']}}</a></li>
                                <li><i class="fa fa-envelope-o"></i>Email Us: <a href="mailto:{{getSocialMedia()['email']}}">{{getSocialMedia()['email']}}</a></li>
                                <li><i class="fa fa-map-marker"></i>Address: {{getSocialMedia()['address']}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-6 col-sm-12">
                    <div class="footer-end">
                        <p><i class="fa fa-copyright" aria-hidden="true"></i> 2017-18 themeforest powered by
                            pixelstrap</p>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 col-sm-12">
                    <div class="payment-card-bottom">
                        <ul>
                            <li>
                                <a href="#"><img src="{{url('front')}}/images/icon/visa.png" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{url('front')}}/images/icon/mastercard.png" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{url('front')}}/images/icon/paypal.png" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{url('front')}}/images/icon/american-express.png" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{url('front')}}/images/icon/discover.png" alt=""></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>