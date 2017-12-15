@extends('layouts.welcome')

@section('header')
@endsection
@section('content')
<div class="revolution-slider-container">
				<div class="revolution-slider">
					<ul style="display: none;">
						<!-- SLIDE 1 -->
						<li data-transition="fade" data-masterspeed="500" data-slotamount="1" data-delay="6000">
							<!-- MAIN IMAGE -->
							<img src="{{Request::root()}}/design/images/slider/image_01.jpg" alt="slidebg1" data-bgfit="cover">
							<!-- LAYERS -->
							<!-- LAYER 01 -->
							<div class="tp-caption"
								data-frames='[{"delay":500,"speed":1200,"from":"x:40;o:0;","ease":"easeInOutExpo"},{"delay":"wait","speed":500,"to":"o:0;","ease":"easeInOutExpo"}]'
								data-x="0"
								data-y="140"
								>
								<!--data-start="500"
								data-transform_in="x:40;y:0;o:0;s:1200;e:easeInOutExpo;"
								data-transform_out="x:0;y:0;o:0;s:500;e:easeInOutExpo;"-->
								
								<div class="slider-content-box">
									<h2><a href="service_interior_renovation.html" title="INTERIOR RENOVATION">HOME IMPROVEMENTS AND REMODELING</a></h2>
									<p>With over 15 years experience and real focus on customer satisfaction, you can rely on us for your next renovation, remodeling or driveway sett.</p>
									<a target="_top" class="more simple" href="https://themeforest.net/cart/add_items?item_ids=11313006&amp;ref=QuanticaLabs" title="BUY THIS TEMPLATE">BUY THIS TEMPLATE</a>
								</div>
							</div>
						</li>

						<!-- SLIDE 2 -->
						<li data-transition="fade" data-masterspeed="500" data-slotamount="1" data-delay="6000">
							<!-- MAIN IMAGE -->
							<img src="{{Request::root()}}/design/images/slider/image_02.jpg" alt="slidebg2" data-bgfit="cover">
							<!-- LAYERS -->
							<!-- LAYER 01 -->
							<div class="tp-caption"
								data-frames='[{"delay":500,"speed":1200,"from":"x:40;o:0;","ease":"easeInOutExpo"},{"delay":"wait","speed":500,"to":"o:0;","ease":"easeInOutExpo"}]'
								data-x="0"
								data-y="140"
								>
								<!--data-start="500"
								data-transform_in="x:40;y:0;o:0;s:1200;e:easeInOutExpo;"
								data-transform_out="x:0;y:0;o:0;s:500;e:easeInOutExpo;"-->
								
								<div class="slider-content-box">
									<h2><a href="service_tiling_painting.html" title="TILING AND PAINTING">PROFESSIONAL TILING AND PAINTING SERVICES</a></h2>
									<p>We combine quality workmanship, superior knowledge and low prices to provide you with service unmatched by our competitors.</p>
									<a target="_top" class="more simple" href="https://themeforest.net/cart/add_items?item_ids=11313006&amp;ref=QuanticaLabs" title="BUY THIS TEMPLATE">BUY THIS TEMPLATE</a>
								</div>
							</div>
						</li>
						
						<!-- SLIDE 3 -->
						<li data-transition="fade" data-masterspeed="500" data-slotamount="1" data-delay="6000">
							<!-- MAIN IMAGE -->
							<img src="{{Request::root()}}/design/images/slider/image_03.jpg" alt="slidebg3" data-bgfit="cover">
							<!-- LAYERS -->
							<!-- LAYER 01 -->
							<div class="tp-caption"
								data-frames='[{"delay":500,"speed":1200,"from":"x:40;o:0;","ease":"easeInOutExpo"},{"delay":"wait","speed":500,"to":"o:0;","ease":"easeInOutExpo"}]'
								data-x="0"
								data-y="140"
								>
								<!--data-start="500"
								data-transform_in="x:40;y:0;o:0;s:1200;e:easeInOutExpo;"
								data-transform_out="x:0;y:0;o:0;s:500;e:easeInOutExpo;"-->
								
								<div class="slider-content-box">
									<h2><a href="service_household_repairs.html" title="HOUSEHOLD REPAIRS">YOUR MOST AFFORDABLE CONTRACTORS</a></h2>
									<p>We have the experience, personel and resources to make the project run smoothly. We can ensure a job is done on time.</p>
									<a target="_top" class="more simple" href="https://themeforest.net/cart/add_items?item_ids=11313006&amp;ref=QuanticaLabs" title="BUY THIS TEMPLATE">BUY THIS TEMPLATE</a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
            <div class="theme-page">
				<div class="clearfix">
					<div class="row full-width">
						<div class="announcement clearfix">
							<ul class="columns no-width">
								<li class="column column-3-4">
									<div class="vertical-align">
										<div class="vertical-align-cell sl-small-wallet">
											<h3>COST OF RENOVATION</h3>
											<p class="description">Use our form to estimate the initial cost of renovation or installation.</p>
										</div>
									</div>
								</li>
								<li class="column-right column-1-4">
									<div class="vertical-align">
										<div class="vertical-align-cell">
											<a class="more" href="cost_calculator.html" title="REQUEST A QUOTE">REQUEST A QUOTE</a>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="row full-width gray page-padding-top-section">
						<div class="row">
							<h2 class="box-header">OUR SERVICES</h2>
							<p class="description align-center">With over 15 years experience and real focus on customer satisfaction, you can rely on us for your next renovation,<br>driveway sett or home repair. We provide a professional service for private and commercial customers.</p>
							<ul class="services-list clearfix page-margin-top">
								<li>
									<a href="service_interior_renovation.html" title="Interior Renovation">
										<img src="{{Request::root()}}/design/images/samples/390x260/image_01.jpg" alt="">
									</a>
									<h4 class="box-header"><a href="service_interior_renovation.html" title="Interior Renovation">INTERIOR RENOVATION</a></h4>
									<p>We can help you bring new life to existing rooms and develop unused spaces.</p>
								</li>
								<li>
									<a href="service_design_build.html" title="Design and Build">
										<img src="{{Request::root()}}/design/images/samples/390x260/image_02.jpg" alt="">
									</a>
									<h4 class="box-header"><a href="service_design_build.html" title="Design and Build">DESIGN AND BUILD</a></h4>
									<p>From initial design and project specification to archieving a high end finish.</p>
								</li>
								<li>
									<a href="service_tiling_painting.html" title="Tiling and Painting">
										<img src="{{Request::root()}}/design/images/samples/390x260/image_03.jpg" alt="">
									</a>
									<h4 class="box-header"><a href="service_tiling_painting.html" title="Tiling and Painting">TILING AND PAINTING</a></h4>
									<p>We offer quality tiling and painting solutions for interior and exterior.</p>
								</li>
							</ul>
							<div class="align-center margin-top-67 padding-bottom-87">
								<a class="more" href="services.html" title="VIEW ALL SERVICES">VIEW ALL SERVICES</a>
							</div>
						</div>
					</div>
					<div class="row full-width page-margin-top-section">
						<div class="row">
							<h2 class="box-header">RECENT PROJECTS</h2>
							<p class="description align-center">Here are a few of many projects we have completed for our customers. We provide a professional service<br>which includes consultation, free estimate, design, supply of materials and installation.</p>
						</div>	
						<ul class="projects-list clearfix page-margin-top">
							<li>
								<a href="project_design_build.html" title="Design and Build">
									<img src="{{Request::root()}}/design/images/samples/480x320/image_07.jpg" alt="">
								</a>
								<div class="view align-center">
									<div class="vertical-align-table">
										<div class="vertical-align-cell">
											<p class="description">Design and Build</p>
											<a class="more simple" href="project_design_build.html" title="VIEW PROJECT">VIEW PROJECT</a>
										</div>
									</div>
								</div>
							</li>
							<li>
								<a href="project_garden_renovation.html" title="Garden Renovation">
									<img src="{{Request::root()}}/design/images/samples/480x320/image_04.jpg" alt="">
								</a>
								<div class="view align-center">
									<div class="vertical-align-table">
										<div class="vertical-align-cell">
											<p class="description">Garden Renovation</p>
											<a class="more simple" href="project_garden_renovation.html" title="VIEW PROJECT">VIEW PROJECT</a>
										</div>
									</div>
								</div>
							</li>
							<li>
								<a href="project_interior_renovation.html" title="Interior Renovation">
									<img src="{{Request::root()}}/design/images/samples/480x320/image_05.jpg" alt="">
								</a>
								<div class="view align-center">
									<div class="vertical-align-table">
										<div class="vertical-align-cell">
											<p class="description">Interior Renovation</p>
											<a class="more simple" href="project_interior_renovation.html" title="VIEW PROJECT">VIEW PROJECT</a>
										</div>
									</div>
								</div>
							</li>
							<li>
								<a href="project_solar_systems.html" title="Solar Systems">
									<img src="{{Request::root()}}/design/images/samples/480x320/image_06.jpg" alt="">
								</a>
								<div class="view align-center">
									<div class="vertical-align-table">
										<div class="vertical-align-cell">
											<p class="description">Solar Systems</p>
											<a class="more simple" href="project_solar_systems.html" title="VIEW PROJECT">VIEW PROJECT</a>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<div class="row gray full-width padding-top-54 padding-bottom-61 align-center">
						<h3><span class="button-label">EXPLORE OUR PROJECTS</span> <a class="more" href="projects.html" title="VIEW ALL PROJECTS">VIEW ALL PROJECTS</a></h3>
					</div>
					<!--<div class="row gray full-width padding-top-bottom-50">
						<div class="row">
							<div class="column column-1-2 align-right padding-top-7">
								<h3>EXPLORE OUR PROJECTS</h3>
							</div>
							<div class="column column-1-2">
								<a class="more float" href="projects.html" title="VIEW ALL PROJECTS">VIEW ALL PROJECTS</a>
							</div>
						</div>
					</div>-->
					<div class="row page-margin-top-section">
						<div class="row">
							<h2 class="box-header">ABOUT US</h2>
							<p class="description align-center">We provide a professional renovation and installation services with a real focus on customer satisfaction.<br>Our installations are carried out by fully trained staff to the highest professional standards.</p>
						</div>
						<div class="row page-margin-top">
							<div class="column column-1-2 align-center re-preload">
								<div class="image-wrapper">
									<img src="{{Request::root()}}/design/images/samples/480x480/image_10.jpg" alt="" class="radius">
								</div>
							</div>
							<div class="column column-1-2">
								<ul class="features-list">
									<li class="sl-small-helmet margin-top-40">
										<h4>OVER 15 YEARS EXPERIENCE</h4>
										<p>We combine quality workmanship, superior knowledge and low prices to provide you with service unmatched by our competitors.</p>
									</li>
									<li class="sl-small-roller">
										<h4>BEST MATERIALS</h4>
										<p>We have the experience, personel and resources to make the project run smoothly. We can ensure a job is done on time.</p>
									</li>
									<li class="sl-small-driller">
										<h4>PROFESSIONAL STANDARDS</h4>
										<p>Work with us involve a carefully planned series of steps, centered around a schedule we stick to and daily communication.</p>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row gray full-width page-margin-top-section page-padding-top-section padding-bottom-66">
						<div class="row">
							<div class="tabs no-scroll clearfix">
								<ul class="tabs-navigation clearfix">
									<li>
										<a href="#we-offer" title="We Offer" class="sl-small-bubble-check">
											We Offer
										</a>
										<span></span>
									</li>
									<li>
										<a href="#we-guarantee" title="We Guarantee" class="sl-small-shield">
											We Guarantee
										</a>
										<span></span>
									</li>
									<li>
										<a href="#we-provide" title="We Provide" class="sl-small-truck">
											We Provide
										</a>
										<span></span>
									</li>
								</ul>
								<div id="we-offer">
									<h4 class="box-header">OUR OFFER</h4>
									<p>Paetos dignissim at cursus elefeind norma arcu. Pellentesque accumsan est in tempus etos ullamcorper, sem quam suscipit lacus maecenas tortor. Erates vitae node metus. Suspendisse gravida ornare non mattis velit rutrum modest. Morbi suspendisse a tortor velim pellentesque uter justo magna gravida.</p>
								</div>
								<div id="we-guarantee">
									<h4 class="box-header">OUR WARRANTY COVERS</h4>
									<p>Paetos dignissim at cursus elefeind norma arcu. Pellentesque accumsan est in tempus etos ullamcorper, sem quam suscipit lacus maecenas tortor. Erates vitae node metus. Suspendisse gravida ornare non mattis velit rutrum modest. Morbi suspendisse a tortor velim pellentesque uter justo magna gravida.</p>
								
								</div>
								<div id="we-provide">
									<h4 class="box-header">OUR SERVICES</h4>
									<p>Paetos dignissim at cursus elefeind norma arcu. Pellentesque accumsan est in tempus etos ullamcorper, sem quam suscipit lacus maecenas tortor. Erates vitae node metus. Suspendisse gravida ornare non mattis velit rutrum modest. Morbi suspendisse a tortor velim pellentesque uter justo magna gravida.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row page-margin-top-section padding-bottom-66">
						<h2 class="box-header">WHY CHOOSE RENOVATE</h2>
						<p class="description align-center">Founded by Kevin Smith back in 2000, Renovate has established itself as one of the greatest and prestigious<br>providers of construction focused interior renovation services and building.</p>
						<div class="row page-margin-top">
							<div class="column column-1-3">
								<ul class="features-list big">
									<li class="sl-large-house-1">
										<div class="ornament"></div>
										<h4 class="box-header page-margin-top">OVER 15 YEARS EXPERIENCE</h4>
										<p>Morbi nulla tortor, dignissim est node cursus euismod est arcu. Nomad at vehicula novum justo magna.</p>
									</li>
								</ul>
							</div>
							<div class="column column-1-3">
								<ul class="features-list big">
									<li class="sl-large-eco">
										<div class="ornament"></div>
										<h4 class="box-header page-margin-top">BEST MATERIALS</h4>
										<p>Morbi nulla tortor, dignissim est node cursus euismod est arcu. Nomad at vehicula novum justo magna.</p>
									</li>
								</ul>
							</div>
							<div class="column column-1-3">
								<ul class="features-list big">
									<li class="sl-large-garage">
										<div class="ornament"></div>
										<h4 class="box-header page-margin-top">PROFESSIONAL STANDARDS</h4>
										<p>Morbi nulla tortor, dignissim est node cursus euismod est arcu. Nomad at vehicula novum justo magna.</p>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row full-width padding-top-70 padding-bottom-66 parallax parallax-1">	
						<div class="row testimonials-container">
							<a href="#" class="slider-control left template-arrow-left-1"></a>
							<ul class="testimonials-list">
								<li class="sl-small-conversation">
									<div class="ornament"></div>
									<p>"We would like to thank Renovate Company for an outstanding effort on this
									recently completed project located in the Moscow. The project involved a very
									aggressive schedule and it was completed on time. We would certainly like to
									use their professional services again."</p>
									<div class="author">MITCHEL SMITH</div>
									<div class="author-details">CEO OF NEW PORT COMPANY</div>
								</li>
								<li class="sl-small-conversation">
									<div class="ornament"></div>
									<p>"We would like to thank Renovate Company for an outstanding effort on this
									recently completed project located in the Moscow. The project involved a very
									aggressive schedule and it was completed on time. We would certainly like to
									use their professional services again."</p>
									<div class="author">MITCHEL SMITH</div>
									<div class="author-details">CEO OF NEW PORT COMPANY</div>
								</li>
								<li class="sl-small-conversation">
									<div class="ornament"></div>
									<p>"We would like to thank Renovate Company for an outstanding effort on this
									recently completed project located in the Moscow. The project involved a very
									aggressive schedule and it was completed on time. We would certainly like to
									use their professional services again."</p>
									<div class="author">MITCHEL SMITH</div>
									<div class="author-details">CEO OF NEW PORT COMPANY</div>
								</li>
							</ul>
							<a href="#" class="slider-control right template-arrow-left-1"></a>
						</div>
					</div>
					<div class="row gray full-width page-padding-top-section padding-bottom-66">
						<div class="row">
							<h2 class="box-header">WE WORK WITH</h2>
							<div class="our-clients-list-container page-margin-top">
								<ul class="our-clients-list">
									<li>
										<img src="{{Request::root()}}/design/images/logos/logo_01.png" alt="">
									</li>
									<li>
										<img src="{{Request::root()}}/design/images/logos/logo_02.png" alt="">
									</li>
									<li>
										<img src="{{Request::root()}}/design/images/logos/logo_03.png" alt="">
									</li>
									<li>
										<img src="{{Request::root()}}/design/images/logos/logo_04.png" alt="">
									</li>
									<li>
										<img src="{{Request::root()}}/design/images/logos/logo_05.png" alt="">
									</li>
									<li>
										<img src="{{Request::root()}}/design/images/logos/logo_06.png" alt="">
									</li>
									<li>
										<img src="{{Request::root()}}/design/images/logos/logo_06.png" alt="">
									</li>
									<li>
										<img src="{{Request::root()}}/design/images/logos/logo_05.png" alt="">
									</li>
									<li>
										<img src="{{Request::root()}}/design/images/logos/logo_04.png" alt="">
									</li>
									<li>
										<img src="{{Request::root()}}/design/images/logos/logo_03.png" alt="">
									</li>
									<li>
										<img src="{{Request::root()}}/design/images/logos/logo_02.png" alt="">
									</li>
									<li>
										<img src="{{Request::root()}}/design/images/logos/logo_01.png" alt="">
									</li>
								</ul>
								<div class="our-clients-pagination"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
            	<div class="row yellow full-width padding-top-bottom-30">
				<div class="row">
					<div class="column column-1-3">
						<ul class="contact-details-list">
							<li class="sl-small-phone">
								<p>Phone:<br>
								+149 75 23 222 35</p>
							</li>
						</ul>
					</div>
					<div class="column column-1-3">
						<ul class="contact-details-list">
							<li class="sl-small-location">
								<p>272 Linden Avenue<br>
								Winter Park, FL 32789</p>
							</li>
						</ul>
					</div>
					<div class="column column-1-3">
						<ul class="contact-details-list">
							<li class="sl-small-mail">
								<p>E-mail:<br>
								<a href="mailto:kevin.smith@connect.com">renovate@mail.com</a></p>
							</li>
						</ul>
					</div>
				</div>
			</div>
@endsection