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
							<div class="top-buttons infa_bg">{{$topInflatable->title}} </div>
							<div class="img_thumbnail m-auto">
								<img class="img-fluid" src="{{url('web')}}/media/md/{{$topInflatable->image}}">
							</div>
							<div class="bottom_links d-flex justify-content-between">
								<div class="bottom_links1">
									<a href="{{$topInflatable->url}}"> <img class="eye-icon" src="{{url('sardar')}}/images/view_icon.png" class="img-fluid"> View All </a>
								</div>
								<div class="bottom_links1">
									<a href="#;"> <img class="eye-icon" src="{{url('sardar')}}/images/email_icon.png" class="img-fluid"> Enquire Now </a>
								</div>
							</div>	
						</div>
					@endforeach

				</div>	ð
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
					<div class="c_explores"><a href="#;" class="btn clickExplore active"><img class="noHvr" src="{{url('sardar')}}/images/link_hand_icon.png"><img src="{{url('sardar')}}/images/active_link_icon.png" class="InHvr"> Trade Shows </a></div>
					<div class="c_explores"><a href="#;" class="btn clickExplore"><img class="noHvr" src="{{url('sardar')}}/images/link_hand_icon.png"><img src="{{url('sardar')}}/images/active_link_icon.png" class="InHvr "> High Visibility & Events </a></div>
					<div class="c_explores"><a href="#;" class="btn clickExplore"><img class="noHvr" src="{{url('sardar')}}/images/link_hand_icon.png"><img src="{{url('sardar')}}/images/active_link_icon.png" class="InHvr "> Trade Shows </a></div>
					<div class="c_explores"><a href="#;" class="btn clickExplore"><img class="noHvr" src="{{url('sardar')}}/images/link_hand_icon.png"><img src="{{url('sardar')}}/images/active_link_icon.png" class="InHvr "> Trade Shows </a></div>
					<div class="c_explores"><a href="#;" class="btn clickExplore"><img class="noHvr" src="{{url('sardar')}}/images/link_hand_icon.png"><img src="{{url('sardar')}}/images/active_link_icon.png" class="InHvr "> Trade Shows </a></div>
				</div>
				<div class="ParentclickExplore">
					<div class="c_explores"><a href="#;" class="btn clickExplore"><img class="noHvr" src="{{url('sardar')}}/images/link_hand_icon.png"><img src="{{url('sardar')}}/images/active_link_icon.png" class="InHvr"> Trade Shows </a></div>
					<div class="c_explores"><a href="#;" class="btn clickExplore"><img class="noHvr" src="{{url('sardar')}}/images/link_hand_icon.png"><img src="{{url('sardar')}}/images/active_link_icon.png" class="InHvr "> Trade Shows </a></div>
					<div class="c_explores"><a href="#;" class="btn clickExplore"><img class="noHvr" src="{{url('sardar')}}/images/link_hand_icon.png"><img src="{{url('sardar')}}/images/active_link_icon.png" class="InHvr "> Trade Shows </a></div>
					<div class="c_explores"><a href="#;" class="btn clickExplore"><img class="noHvr" src="{{url('sardar')}}/images/link_hand_icon.png"><img src="{{url('sardar')}}/images/active_link_icon.png" class="InHvr "> Trade Shows </a></div>
					<div class="c_explores"><a href="#;" class="btn clickExplore"><img class="noHvr" src="{{url('sardar')}}/images/link_hand_icon.png"><img src="{{url('sardar')}}/images/active_link_icon.png" class="InHvr "> Trade Shows </a></div>
				</div>		
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
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
							<p> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
							<p> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
						</div>	
						<div class="col-12 text-center d-block mt-xl-3 pt-xl-3">	
							<a href="#;" class="red_btn d-inline-block">Read More</a>
						</div>	
					</div>	


					<div class="our_clients bg-white">	
						<h2>our clients</h2>
							<div class="w-100 d-block">							
								<img src="{{url('sardar')}}/images/client_logo_1.png" class="img-fluid mb-4">
							</div>	
							<div class="w-100 d-block">									
								<img src="{{url('sardar')}}/images/client_logo_2.jpg" class="img-fluid">
							</div>	
					</div>	

					<div class="enquiry_form bg-white">
						<div class="form_header">
							<img src="{{url('sardar')}}/images/email_icon.png" class="img-fluid">
							<h2>SEND US YOUR ENQUIRY</h2>
						</div>	
						<form class="m-0">
							<div class="form-group">
								<div class="frm_dv"><img width="20" src="{{url('sardar')}}/images/name_icon.png" class="img-fluid"></div> 
								<input type="text" placeholder="Name" name=""> 
							</div>
							<div class="form-group">
								<div class="frm_dv"><img width="15" src="{{url('sardar')}}/images/mobile_icon.png" class="img-fluid"></div> 
								<input type="number" placeholder="Phone Number" name=""> 
							</div>
							<div class="form-group">
								<div class="frm_dv"><img width="25" src="{{url('sardar')}}/images/email_icon_b.png" class="img-fluid"></div> 
								<input type="text" placeholder="Email" name=""> 
							</div>
							<div class="form-group">
								<div class="frm_dv"><img width="20" src="{{url('sardar')}}/images/gbl.png" class="img-fluid"></div> 
								<select>
									<option selected="">Select Country</option>
									<option>India</option>
									<option>India</option>
									<option>India</option>
								</select>
							</div>
							<div class="form-group">
								<div class="frm_dv"><img width="20" src="{{url('sardar')}}/images/share_icon.png" class="img-fluid"></div> 
								<textarea name="textarea-326" placeholder="Share Your Inflatables Requirement"></textarea>
							</div>
							<div class="text-center"> 
								<a href="#;" class="term_Link d-block mb-4"> Your information is sage with us. We do not sell or rent emails. </a> 
								<a href="#;" class="red_btn">Submit</a>
							</div>

						</form>
					</div>		
				</div>	

			</div>	
		</div>	
	</section>

		

@endsection