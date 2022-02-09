<header>
    <div class="mobile-fix-option"></div>
    <div class="top-header top-header-dark2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="header-contact">
                        <ul>
                            <li><i class="fa fa-phone" aria-hidden="true"></i>
                                 <a href="tel:{{getSocialMedia()['phone']}}"> {{getSocialMedia()['phone']}}</a></li>
                                <li><i class="fa fa-envelope" aria-hidden="true"></i>
                                 <a href="mailto:{{getSocialMedia()['email']}}"> {{getSocialMedia()['email']}}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 text-end">
                    <ul class="header-dropdown">

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
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-10" style="">
                <div class="main-menu top-level-menu">
                    @include('front.ext.sidebar')

                    <div class="menu-right pull-right">
                        <div>
                            <nav id="main-nav" class="d-flex">
                                <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                                <ul id="main-menu" class="sm pixelstrap sm-horizontal">
                                    <li>
                                        <div class="mobile-back text-end">Back<i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                                    </li>
                                    <li class="top-link home"><a href="{{url('')}}">
                                        <i class="fa fa-home" aria-hidden="true"></i>&nbsp;&nbsp;Home</a></li>
                                    
                                    <li class="mega top-link manufacturing" id="hover-cls">
                                        <a href="#"><i class="fa fa-cogs" aria-hidden="true"></i>&nbsp;&nbsp;Manufacturing</a>
                                        <ul class="mega-menu full-mega-menu">
                                            <li>
                                                <div class="container">
                                                    <div class="row">
                                                        @foreach(getMainCategories(0, 15, 'item_no', 'asc', globalSlug()['led']) as $mainCategory)
                                                        <div class="col-xl-3 col-lg-12 col-sm-12 mega-box">
                                                            <div class="link-section">
                                                                <h3 class="menu-title">
                                                                    <a class="p-0" href="{{url('')}}/{{$mainCategory->slug}}"><h5>{{$mainCategory->name}}</h5></a>
                                                                </h3>
                                                                <div class="menu-content">
                                                                    <ul>
                                                                        @foreach(getSubCategories($mainCategory->id) as $subCategory)
                                                                        <li><a href="{{url('')}}/{{$mainCategory->slug}}/{{$subCategory->slug}}">{{$subCategory->name}}</a></li>
                                                                        @endforeach
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                               
                                                    </div>

                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="top-link about">
                                        <a href=""><i class="fa fa-users" aria-hidden="true"></i>&nbsp;&nbsp;About Us</a>
                                        <ul>
                                            <li><a href="{{route('about')}}">About Company</a></li>
                                            <li><a href="{{url('service')}}">Services</a></li>
                                            <li><a href="{{route('bank-detail')}}">Bank Detail</a></li>
                                            <li><a href="{{route('infrastructure')}}">Infrastructure</a></li>
                                            <li><a href="{{route('award-recognization')}}">Awards And Recognizations</a></li>
                                            <li><a href="{{route('legal')}}">Legal</a></li>
                                            <li><a href="{{route('video')}}">Videos</a></li>      

                                        </ul>
                                    </li>
                                    <li class="top-link contact"><a href="{{url('contact')}}"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;contact</a></li>
                                </ul>

                            </nav>
                        </div>

                    </div>

                </div>
                </div>

                <div class="col-md-2 d-none d-md-flex d-lg-flex" style="
    display: flex;
    justify-content: center;
    align-items: center;
    float: right;
    /* background: url('{{url('front')}}/images/ccpl/bg-led-image.jpeg'); */
">

<div class="light-bg-block" id="light-bg-block"
                style="
    position: absolute;
    height: 100%;
    width: 100%;
    background: url(http://localhost:8000/front/images/ccpl/spot-light1.png);
    background-size: 29%;
    background-position: 5px -6px;
    background-repeat: no-repeat;
    transform: rotateX(57deg);
    transform: scaleX(1);

">

</div>

<div class="light-bg-block" id="light-bg-block"
                style="
    position: absolute;
    height: 100%;
    width: 100%;
    background: url(http://localhost:8000/front/images/ccpl/spot-light2.png);
    background-size: 29%;
    background-position: 5px -6px;
    background-repeat: no-repeat;
    transform: rotateX(57deg);
    transform: scaleX(-1);

">
</div>
                <div clss="main-menu top-level-menu">
                <ul id="main-menu" class="sm pixelstrap sm-horizontal led-bulb-bg"
                                style="background: #04632f;"> 
                                    <li class="top-link service">
                                        
                                <!-- <img src="{{url('front')}}/images/ccpl/led-bulb.png" 
                                    style="position: absolute; width: 69px; top: -19px; 
                                     left: -28px;"> -->
                                        <a href="{{url('')}}/{{globalSlug()['led']}}" 
                                    style="color: white;padding:6px 22px;">Led & Lights</a>
                                    <!-- <img src="{{url('front')}}/images/ccpl/led-bulb.png" 
                                    style="position: absolute; width: 69px; top: -19px; 
                                     right: -21px;"> -->
                                </li>

                                </ul>
                </div>

            </div>
        </div>
    </div>

</header>
<!-- header end -->
