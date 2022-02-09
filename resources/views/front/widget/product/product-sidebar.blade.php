
                    <div class="col-sm-3 collection-filter">
                        <div class="collection-filter-block">
                            <div class="collection-mobile-back"><span class="filter-back"><i class="fa fa-angle-left" aria-hidden="true"></i> back</span></div>
                            <div class="collection-collapse-block open">
                                <h3 class="collapse-block-title">Manufacturing</h3>
                                <div class="collection-collapse-block-content product_list">
                                    <ul>
                                        @foreach(getMainCategories(0, 15, 'item_no', 'asc', globalSlug()['led']) as $category)
                                            <a href="{{url('')}}/{{$category->slug}}"><li>{{$category->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="collection-sidebar-banner">
                            <a href="@if(imageBlockList()['leftSidebar']->url){{imageBlockList()['leftSidebar']->image}}@endif">
                            <img src="{{url('web')}}/media/lg/{{imageBlockList()['leftSidebar']->image}}" class="img-fluid blur-up lazyload" alt=""></a>
                        </div>
                    </div>