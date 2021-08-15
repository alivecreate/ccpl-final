@extends('sardar.layout.front-index')
@section('title','WELCOME TO CCPL WORLD An ISO 9001 : 2008 certified company')

@section('custom-js')

@endsection
@section('content')





<section class="leading_area">
		<div class="banner-part">
			<img src="{{url('web')}}/media/lg/{{$sliders->image}}" class="img-fluid absolute_img">
			<div class="content_banners">
				<h3>{{$sliders->title}}</h3>
				<a href="{{$sliders->url}}" class="view_now">View Now </a>
			</div>	
		</div>	
	</section>

	<section class="collection-slider bg-white">
		<div class="container-fluid">
			<div class="col-12">

				<div class="header-t">
					<h1>TOP INFLATABLES</h1>
					<p>Home to a huge collection of in-stock and custom</p>
				</div>	
				
				<div class="inflatables_slider">

					@foreach($topInflatables as $topInflatable)
						<div class="inflatables">
							<div class="top-buttons infa_bg"><a href="{{url('product-detail')}}/{{$topInflatable->slug}}">{{$topInflatable->name}}</a></div>
							<div class="img_thumbnail m-auto">
								<img class="img-fluid" src="{{url('web')}}/media/md/{{$topInflatable->image}}">
							</div>
							<div class="bottom_links d-flex justify-content-between">
								<div class="bottom_links1">
									<a href="{{$topInflatable->url}}"> <img class="eye-icon" src="{{url('sardar')}}/images/view_icon.png" class="img-fluid"> View All </a>
								</div>
								<div class="bottom_links1">
									<a href="{{url('contact-us')}}"> <img class="eye-icon" src="{{url('sardar')}}/images/email_icon.png" class="img-fluid"> Enquire Now </a>
								</div>
							</div>	
						</div>
					@endforeach


				</div>
			</div>	
		</div>	
	</section>

	<section class="clickANDexplore bg-white">
		<div class="container-fluid">
			<div class="col-12 p-0 px-lg-3">

				<div class="header-t mb-3">
					<h1>Click & Explore</h1>
				</div>	

				<div class="ParentclickExplore">


				@foreach($topCategories as $key => $topCategory)
					<div class="c_explores">
					
							@if($key == 0)
								<a href="{{$topCategory->url}}" class="btn clickExplore active">
							@else 							
								<a href="{{$topCategory->url}}" class="btn clickExplore">
							@endif
					
					<img class="noHvr" src="{{url('sardar')}}/images/link_hand_icon.png"><img src="{{url('sardar')}}/images/active_link_icon.png" class="InHvr">{{$topCategory->name}} </a></div>
				@endforeach

					<!-- @foreach($homeUrls1 as $key  => $homeUrl1 )

							<div class="c_explores col-md-2">
							@if($key == 0)
								<a href="{{$homeUrl1->url}}" class="btn clickExplore active">
							@else 							
								<a href="{{$homeUrl1->url}}" class="btn clickExplore">
							@endif

							<img class="noHvr" src="{{url('sardar')}}/images/link_hand_icon.png"><img src="{{url('sardar')}}/images/active_link_icon.png" class="InHvr"> {{$homeUrl1->title}} </a></div>
					@endforeach
				</div> -->


			</div>	
		</div>	
	</section>	

	<section class="about_giant pb-5">
		<div class="container-fluid">
			<div class="col-12">

				<div class="header-t mb-3">
					<h1>About Giant Inflatable</h1>
				</div>	

				<div class="many_partition">
					<div class="about_part bg-white">
						<div class="ab_logo text-center">	
							<img src="{{url('sardar')}}/images/logo.png" class="img-fluid">
						</div>
						<div class="text-left">	
							<p><span class="GreaT"> Greetings ! </span></p>	
							{!! html_entity_decode($homeAbout->description, ENT_QUOTES, 'UTF-8') !!}
						</div>	
						<div class="col-12 text-center d-block mt-xl-3 pt-xl-3">	
							<a href="{{$homeAbout->url}}" class="red_btn d-inline-block">Read More</a>
						</div>	
					</div>	


					<div class="our_clients bg-white">	
						<h2>our clients</h2>
							@foreach($clients as $client)
								<div class="w-100 d-block">							
									<img src="{{url('web')}}/media/sm/{{$client->logo}}" class="img-fluid mb-4">
								</div>	
							@endforeach
					</div>	



					@include('sardar.widget.contact-form1')

					
				</div>	

			</div>	
		</div>	
	</section>

		

@endsection