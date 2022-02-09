


    <section class="p-0 layout-7">
        <div class="slide-1 home-slider">

        @foreach($sliders as $slider)
            <div>
                <div class="home">
                    <img src="{{url('web')}}/media/lg/{{$slider->image}}" alt="{{$slider->title}}" class="bg-img blur-up">
                    <div class="container">
                        <div class="row">
                            <div class="col">
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
