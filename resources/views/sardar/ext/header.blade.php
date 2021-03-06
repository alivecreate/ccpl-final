
	<header id="head"> 
		<div class="top_header">
			<div class="left-aligns">  
			  <div class="logo">
			  	<a class="navbar-brand" href="{{url('')}}">
				  <img src="{{url('sardar')}}/img/{{getWebsiteOptions()['website_logo']->option_value}}" class="img-fluid"> </a>
			  </div>	
			  <div class="search-bar">
			  	<!-- <input type="text" placeholder="enhanced by" name=""> -->
				  
				<div class="gcse-search"></div>
				
			  	<!-- <button class="btn find-btn">Find</button> -->
			  </div>	
			</div>	

		  <div class="dreamandbuild">
		  	<h3>YOU <span>DREAM</span> IT... WE'LL <span>BUILD</span> IT</h3>
		  	<ul> 
		  		<li><a href="tel:{{getSocialMedia()->phone}}"> <i  style="" class="fa fa-mobile"></i> {{getSocialMedia()->phone}} </a> </li>
		  		<li><a href="mailto:{{getSocialMedia()->email}}"> <i class="far fa-envelope"></i>{{getSocialMedia()->email}}</a> </li>
		  	</ul>
		  </div>	
		</div>  
		<nav class="navbar navbar-expand-lg navbar-design p-lg-0 ">
		  <button class="navbar-toggler p-0" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    	<i class="fas fa-bars"></i>
		  </button>
		  <div class="collapse navbar-collapse align-items-center" id="navbarNav">
		    <ul class="navbar-nav">
		      <li class="nav-item home">
		        <a class="nav-link" href="{{url('')}}">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item product">
		        <a class="nav-link" href="{{url('products')}}">our products</a>
		      </li>
		      <li class="nav-item about">
		        <a class="nav-link" href="{{url('about')}}">about</a>
		      </li>
		      <li class="nav-item testimonial">
		        <a class="nav-link" href="{{url('testimonials')}}">testimonials</a>
		      </li>
		      <li class="nav-item video">
		        <a class="nav-link" href="{{url('videos')}}">videos</a>
		      </li>
		      <li class="nav-item blog">
		        <a class="nav-link" href="{{url('blog')}}">blog</a>
		      </li>
		      <li class="nav-item contact">
		        <a class="nav-link" href="{{url('contact-us')}}">contact us</a>
		      </li>
			  <div class="two_controls">    
			      <li class="nav-item eneveloper_menu">
			        <a class="nav-link"><img src="{{url('sardar')}}/img/envlp.png" class="img-fluid"> </a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link"> send us your enquiry </a>
			      </li>
			  </div>    
		    </ul>
		  </div>
		  
		<div class="top-form">
			@include('sardar.widget.contact-form-header')
		</div>	
		</nav>
	</header>