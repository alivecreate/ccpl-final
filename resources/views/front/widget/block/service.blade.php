
    <section class="section-b-space ratio3_2">
        <div class="container">
            <div class="row multiple-slider">

                <div class="col-lg-3 col-sm-6">
                    <a href="{{url('')}}/{{$topCategory1->slug}}">
                        <div class="collection-banner h-100 tl-content">
                            <div class="img-part h-100">
                                <img src="{{url('web')}}/media/md/{{$topCategory1->image}}" class="img-fluid bg-img" alt="">
                            </div>
                            <div class="contain-banner banner-3">
                                <div>
                                    <h2 class="font-cormorant text-dark">{{$topCategory1->name}}</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="theme-card">
                        <h5 class="title-border pt-cls-slider">Top Bottles</h5>
                        <div class="offer-slider slide-1">

                            @foreach(array_chunk(getSubCategories($topCategory1->id)->toArray(), 3) as $subCategories)
                            <div>

                                @foreach($subCategories as $subCategory)
                                @if(checkIsProductAvailable($subCategory->id) > 0)

                                <div class="media">
                                    <a href="{{url('')}}/{{getParent($subCategory->parent_id)['slug']}}/{{$subCategory->slug}}"><img class="img-fluid blur-up lazyload" src="{{url('web')}}/media/md/{{$subCategory->image}}" alt=""></a>
                                    <div class="media-body align-self-center">
                                        <!-- <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div> -->
                                        <a href="{{url('')}}/{{getParent($subCategory->parent_id)['slug']}}/{{$subCategory->slug}}">
                                            <h6>{{$subCategory->name}}</h6>
                                        </a>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <a href="{{url('')}}/{{$category->slug}}">
                        <div class="collection-banner h-100 tl-content">
                            <div class="img-part h-100">
                                <img src="{{url('web')}}/media/md/{{$topCategory2->image}}" class="img-fluid bg-img" alt="">
                            </div>
                            <div class="contain-banner banner-3">
                                <div>
                                    <h2 class="font-cormorant text-dark">{{$topCategory2->name}}</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="theme-card">
                        <h5 class="title-border pt-cls-slider">TOP BOTTLES</h5>
                        <div class="offer-slider slide-1">
                            @foreach(array_chunk(getSubCategories($topCategory2->id)->toArray(), 3) as $subCategories)
                            <div>
                                @foreach($subCategories as $subCategory)
                                @if(checkIsProductAvailable($subCategory->id) > 0)
                                <div class="media">
                                    <a href="{{url('')}}/{{getParent($subCategory->parent_id)['slug']}}/{{$subCategory->slug}}"><img class="img-fluid blur-up lazyload" src="{{url('web')}}/media/md/{{$subCategory->image}}" alt=""></a>
                                    <div class="media-body align-self-center">
                                        <!-- <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div> -->
                                        <a href="{{url('')}}/{{getParent($subCategory->parent_id)['slug']}}/{{$subCategory->slug}}">
                                            <h6>{{$subCategory->name}}</h6>
                                        </a>

                                    </div>
                                </div>
                                @endif
                                @endforeach
                            </div>
                            @endforeach
                        </div>
                    </div>
    </section>
    