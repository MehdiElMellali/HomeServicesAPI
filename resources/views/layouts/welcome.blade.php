<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<title>{{ config('app.name', 'Home service') }}</title>

<!-- Styles -->

@yield('header')

		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="design/rs-plugin/css/settings.css" media="screen" />
		<!--style-->
		<link href='//fonts.googleapis.com/css?family=Raleway:100,300,400,500,600,700,900' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="design/style/reset.css">
		<link rel="stylesheet" type="text/css" href="design/style/superfish.css">
		<link rel="stylesheet" type="text/css" href="design/style/prettyPhoto.css">
		<link rel="stylesheet" type="text/css" href="design/style/jquery.qtip.css">
		<link rel="stylesheet" type="text/css" href="design/style/style.css">
		<link rel="stylesheet" type="text/css" href="design/style/animations.css">
		<link rel="stylesheet" type="text/css" href="design/style/responsive.css">
		<link rel="stylesheet" type="text/css" href="design/style/odometer-theme-default.css">
		<!--fonts-->
		<link rel="stylesheet" type="text/css" href="design/fonts/streamline-small/styles.css">
		<link rel="stylesheet" type="text/css" href="design/fonts/streamline-large/styles.css">
		<link rel="stylesheet" type="text/css" href="design/fonts/template/styles.css">
		<link rel="stylesheet" type="text/css" href="design/fonts/social/styles.css">
		<link rel="shortcut icon" href="design/images/favicon.ico">

       
    </head>
    <body>
	<div id="app">
        <div class="site-container" >
<div class="header-top-bar-container clearfix">
				<div class="header-top-bar">
					<ul class="contact-details clearfix">
						<li class="template-phone">
							<a href="tel:+149752322235">+149 75 23 222 35</a>
						</li>
						<li class="template-mail">
							<a href="mailto:renovate@mail.com">renovate@mail.com</a>
						</li>
						<li class="template-clock">
							Mon - Fri: 08.00 - 17.00
						</li>
					</ul>
					<div class="search-container">
						<a class="template-search" href="#" title="Search"></a>
						<form class="search" action="search.html">
							<input type="text" name="s" placeholder="Search..." value="Search..." class="search-input hint">
							<fieldset class="search-submit-container">
								<span class="template-search"></span>
								<input type="submit" class="search-submit" value="">
							</fieldset>
						</form>
					</div>
					<ul class="social-icons">
						<li>
							<a target="_blank" href="http://facebook.com/QuanticaLabs" class="social-facebook" title="facebook"></a>
						</li>
						<li>
							<a target="_blank" href="https://twitter.com/QuanticaLabs" class="social-twitter" title="twitter"></a>
						</li>
						<li>
							<a href="https://pinterest.com/quanticalabs/" class="social-pinterest" title="pinterest"></a>
						</li>
					
					</ul>
				</div>
               <a href="#" class="header-toggle template-arrow-up"></a>
			</div> 
         <div class="header-container">
			<!--<div class="header-container sticky">-->
				<div class="vertical-align-table column-1-1">
					<div class="header clearfix">
						<div class="logo vertical-align-cell">
							<h1><a href="index.html" title="Renovate">HOME SERVICES</a></h1>
						</div>
						<a href="#" class="mobile-menu-switch vertical-align-cell">
							<span class="line"></span>
							<span class="line"></span>
							<span class="line"></span>
						</a>
						<div class="menu-container clearfix vertical-align-cell">
							<nav>
								<ul class="sf-menu">
									<li class="selected">
										<a href="index.html" title="Home">
											HOME
										</a>
										<ul>
											<li class="selected">
												<a href="index.html" title="Home Style 1">
													Home Style 1
												</a>
											</li>
											<li>
												<a href="home2.html" title="Home Style 2">
													Home Style 2
												</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="{{ url('service') }}" title="Services">
											SERVICES
										</a>
										<ul>
											<li>
												<a href="{{ url('interior-renovation') }}" title="Interior Renovation">
													Interior Renovation
												</a>
											</li>
											<li>

												<a href="{{ url('design_build') }}" title="Design and Build">
													Design and Build
												</a>
											</li>
											<li>
												<a href="{{ url('tiling_painting') }}" title="Design and Build">
													Tiling and Painting
												</a>
											</li>
											<li>
												<a href="{{ url('paver_walkways') }}" title="Paver Walkways">
													Paver Walkways
												</a>
											</li>
											<li>
												<a href="{{ url('tiling-painting') }}" title="Household Repairs">
													Household Repairs
												</a>
											</li>
											<li>
												<a href="{{ url('solar_systems') }}" title="Solar Systems">
													Solar Systems
												</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="projects.html" title="Projects">
											PROJECTS
										</a>
										<ul>
											<li>
												<a href="project_interior_renovation.html" title="Interior Renovation">
													Interior Renovation
												</a>
											</li>
											<li>
												<a href="project_garden_renovation.html" title="Garden Renovation">
													Garden Renovation
												</a>
											</li>
											<li>
												<a href="project_painting.html" title="Painting">
													Painting
												</a>
											</li>
											<li>
												<a href="project_design_build.html" title="Design and Build">
													Design and Build
												</a>
											</li>
											<li>
												<a href="project_solar_systems.html" title="Solar Systems">
													Solar Systems
												</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="team.html" title="Our Team">
											OUR TEAM
										</a>
									</li>
									<li>
										<a href="about.html" title="Pages">
											PAGES
										</a>
										<ul>
											<li>
												<a href="about.html" title="About">
													About
												</a>
											</li>
											<li>
												<a href="404.html" title="404 Not Found">
													404 Not Found
												</a>
											</li>
											<li>
												<a href="services.html" title="Services Style 1">
													Services Style 1
												</a>
											</li>
											<li>
												<a href="services2.html" title="Services Style 2">
													Services Style 2
												</a>
											</li>
											<li>
												<a href="service_interior_renovation.html" title="Single Service">
													Single Service
												</a>
											</li>
											<li>
												<a href="projects.html" title="Projects">
													Projects
												</a>
											</li>
											<li>
												<a href="project_interior_renovation.html" title="Single Project">
													Single Project
												</a>
											</li>
											<li>
												<a href="team.html" title="Team">
													Team
												</a>
											</li>
											<li>
												<a href="team_mark_whilberg.html" title="Single Team">
													Single Team
												</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="blog.html" title="Blog">
											BLOG
										</a>
										<ul>
											<li>
												<a href="blog.html" title="Blog">
													Blog
												</a>
											</li>
											<li>
												<a href="blog_left_sidebar.html" title="Blog">
													Blog Left Sidebar
												</a>
											</li>
											<li>
												<a href="blog_2_columns.html" title="Blog 2 Columns">
													Blog 2 Columns
												</a>
											</li>
											<li>
												<a href="blog_3_columns.html" title="Blog 3 Columns">
													Blog 3 Columns
												</a>
											</li>
											<li>
												<a href="post.html" title="Single Post">
													Single Post
												</a>
											</li>
											<li>
												<a href="search.html?s=ipsum" title="Search Template">
													Search Template
												</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="cost_calculator.html" title="Authors">
											COST CALCULATOR
										</a>
									</li>
									<li class="left-flyout">
										<a href="{{ url('contact') }}" title="Contact">
											CONTACT
										</a>
										<ul>
											<li>
												<a href="contact.html" title="Contact Style 1">
													Contact Style 1
												</a>
											</li>
											<li>
												<a href="contact_2.html" title="Contact Style 2">
													Contact Style 2
												</a>
											</li>
										</ul>
									</li>
								</ul>
							</nav>
							<div class="mobile-menu-container">
								<div class="mobile-menu-divider"></div>
								<nav>
									<ul class="mobile-menu collapsible-mobile-submenus">
										<li class="selected">
											<a href="index.html" title="Home">
												HOME
											</a>
											<a href="#" class="template-arrow-menu"></a>
											<ul>
												<li class="selected">
													<a href="index.html" title="Home Style 1">
														Home Style 1
													</a>
												</li>
												<li>
													<a href="home2.html" title="Home Style 2">
														Home Style 2
													</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="services.html" title="Services">
												SERVICES
											</a>
											<a href="#" class="template-arrow-menu"></a>
											<ul>
												<li>
													<a href="service_interior_renovation.html" title="Interior Renovation">
														Interior Renovation
													</a>
												</li>
												<li>
													<a href="service_design_build.html" title="Design and Build">
														Design and Build
													</a>
												</li>
												<li>
													<a href="service_tiling_painting.html" title="Design and Build">
														Tiling and Painting
													</a>
												</li>
												<li>
													<a href="service_paver_walkways.html" title="Paver Walkways">
														Paver Walkways
													</a>
												</li>
												<li>
													<a href="service_household_repairs.html" title="Household Repairs">
														Household Repairs
													</a>
												</li>
												<li>
													<a href="service_solar_systems.html" title="Solar Systems">
														Solar Systems
													</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="projects.html" title="Projects">
												PROJECTS
											</a>
											<a href="#" class="template-arrow-menu"></a>
											<ul>
												<li>
													<a href="project_interior_renovation.html" title="Interior Renovation">
														Interior Renovation
													</a>
												</li>
												<li>
													<a href="project_garden_renovation.html" title="Garden Renovation">
														Garden Renovation
													</a>
												</li>
												<li>
													<a href="project_painting.html" title="Painting">
														Painting
													</a>
												</li>
												<li>
													<a href="project_design_build.html" title="Design and Build">
														Design and Build
													</a>
												</li>
												<li>
													<a href="project_solar_systems.html" title="Solar Systems">
														Solar Systems
													</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="team.html" title="Our Team">
												OUR TEAM
											</a>
										</li>
										<li>
											<a href="about.html" title="Pages">
												PAGES
											</a>
											<a href="#" class="template-arrow-menu"></a>
											<ul>
												<li>
													<a href="about.html" title="About">
														About
													</a>
												</li>
												<li>
													<a href="404.html" title="404 Not Found">
														404 Not Found
													</a>
												</li>
												<li>
													<a href="services.html" title="Services Style 1">
														Services Style 1
													</a>
												</li>
												<li>
													<a href="services2.html" title="Services Style 2">
														Services Style 2
													</a>
												</li>
												<li>
													<a href="service_interior_renovation.html" title="Single Service">
														Single Service
													</a>
												</li>
												<li>
													<a href="projects.html" title="Projects">
														Projects
													</a>
												</li>
												<li>
													<a href="project_interior_renovation.html" title="Single Project">
														Single Project
													</a>
												</li>
												<li>
													<a href="team.html" title="Team">
														Team
													</a>
												</li>
												<li>
													<a href="team_mark_whilberg.html" title="Single Team">
														Single Team
													</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="blog.html" title="Blog">
												BLOG
											</a>
											<a href="#" class="template-arrow-menu"></a>
											<ul>
												<li>
													<a href="blog.html" title="Blog">
														Blog
													</a>
												</li>
												<li>
													<a href="blog_left_sidebar.html" title="Blog">
														Blog Left Sidebar
													</a>
												</li>
												<li>
													<a href="blog_2_columns.html" title="Blog 2 Columns">
														Blog 2 Columns
													</a>
												</li>
												<li>
													<a href="blog_3_columns.html" title="Blog 3 Columns">
														Blog 3 Columns
													</a>
												</li>
												<li>
													<a href="post.html" title="Single Post">
														Single Post
													</a>
												</li>
												<li>
													<a href="search.html?s=ipsum" title="Search Template">
														Search Template
													</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="cost_calculator.html" title="Authors">
												COST CALCULATOR
											</a>
										</li>
										<li class="left-flyout">
											<a href="contact.html" title="Contact">
												CONTACT
											</a>
											<a href="#" class="template-arrow-menu"></a>
											<ul>
												<li>
													<a href="contact.html" title="Contact Style 1">
														Contact Style 1
													</a>
												</li>
												<li>
													<a href="contact_2.html" title="Contact Style 2">
														Contact Style 2
													</a>
												</li>
											</ul>
										</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			@yield('content')
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
			<div class="row gray full-width page-padding-top padding-bottom-50">
				<div class="row row-4-4">
					<div class="column column-1-4">
						<h6 class="box-header">About Us</h6>
						<p class="description t1">Founded by Kevin Smith back in 2000. Renovate has estabilished itself as one of the greatest and prestigious providers of construction focused interior renovation services and building.</p>
						<ul class="social-icons yellow margin-top-26">
							<li>
								<a target="_blank" href="http://facebook.com/QuanticaLabs" class="social-facebook" title="facebook"></a>
							</li>
							<li>
								<a target="_blank" href="https://twitter.com/QuanticaLabs" class="social-twitter" title="twitter"></a>
							</li>
							<li>
								<a target="_blank" href="http://themeforest.net/user/QuanticaLabs/portfolio?ref=QuanticaLabs" class="social-linkedin" title="linkedin"></a>
							</li>
							<li>
								<a href="https://pinterest.com/quanticalabs/" class="social-pinterest" title="pinterest"></a>
							</li>
						</ul>
					</div>
					<div class="column column-1-4">
						<h6 class="box-header">Our Services</h6>
						<ul class="list margin-top-20">
							<li class="template-bullet">Interior Renovation</li>
							<li class="template-bullet">Design and Build</li>
							<li class="template-bullet">Tiling and Painting</li>
							<li class="template-bullet">Paver Walkways</li>
							<li class="template-bullet">Household Repairs</li>
							<li class="template-bullet">Solar Systems</li>
						</ul>
					</div>
					<div class="column column-1-4">
						<h6 class="box-header">Categories</h6>
						<ul class="taxonomies margin-top-30">
							<li><a href="category.html" title="BUILD">BUILD</a></li>
							<li><a href="category.html" title="DESIGN">DESIGN</a></li>
							<li><a href="category.html" title="FLOORING">FLOORING</a></li>
							<li><a href="category.html" title="PAINTING">PAINTING</a></li>
							<li><a href="category.html" title="PAVERS">PAVERS</a></li>
							<li><a href="category.html" title="PLUMBING">PLUMBING</a></li>
							<li><a href="category.html" title="RENOVATION">RENOVATION</a></li>
							<li><a href="category.html" title="REPAIRS">REPAIRS</a></li>
							<li><a href="category.html" title="SOLAR SYSTEMS">SOLAR SYSTEMS</a></li>
							<li><a href="category.html" title="TILING">TILING</a></li>
						</ul>
					</div>
					<div class="column column-1-4">
						<h6 class="box-header">Latest Posts</h6>
						<ul class="blog small margin-top-30">
							<li>
								<a href="post.html" title="What a Difference a Few Months Make" class="post-image">
									<img src="{{Request::root()}}/design/images/samples/90x90/image_10.jpg" alt="">
								</a>
								<div class="post-content">
									<a href="post.html" title="What a Difference a Few Months Make">What a Difference a Few Months Make</a>
									<ul class="post-details">
										<li class="date">April 25, 2015</li>
									</ul>
								</div>
							</li>
							<li>
								<a href="post.html" title="Kitchen and Living Room Renovation" class="post-image">
									<img src="{{Request::root()}}/design/images/samples/90x90/image_07.jpg" alt="">
								</a>
								<div class="post-content">
									<a href="post.html" title="Kitchen and Living Room Renovation">Kitchen and Living Room Renovation</a>
									<ul class="post-details">
										<li class="date">April 17, 2015</li>
									</ul>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
        </div>
	
       
@yield('footer')
</div>
<script src="{{ asset('js/app.js') }}"></script>
 <!--js-->
 <script type="text/javascript" src="design/js/jquery-1.12.4.min.js"></script>
		<script type="text/javascript" src="design/js/jquery-migrate-1.4.1.min.js"></script>
		<!--slider revolution-->
		<script type="text/javascript" src="design/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="design/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
		<script type="text/javascript" src="design/js/jquery.ba-bbq.min.js"></script>
		<script type="text/javascript" src="design/js/jquery-ui-1.11.4.custom.min.js"></script>
		<script type="text/javascript" src="design/js/jquery.ui.touch-punch.min.js"></script>
		<script type="text/javascript" src="design/js/jquery.isotope.min.js"></script>
		<script type="text/javascript" src="design/js/jquery.easing.1.3.min.js"></script>
		<script type="text/javascript" src="design/js/jquery.carouFredSel-6.2.1-packed.js"></script>
		<script type="text/javascript" src="design/js/jquery.touchSwipe.min.js"></script>
		<script type="text/javascript" src="design/js/jquery.transit.min.js"></script>
		<script type="text/javascript" src="design/js/jquery.hint.min.js"></script>
		<script type="text/javascript" src="design/js/jquery.costCalculator.min.js"></script>
		<script type="text/javascript" src="design/js/jquery.parallax.min.js"></script>
		<script type="text/javascript" src="design/js/jquery.prettyPhoto.js"></script>
		<script type="text/javascript" src="design/js/jquery.qtip.min.js"></script>
		<script type="text/javascript" src="design/js/jquery.blockUI.min.js"></script>
		<script type="text/javascript" src="design/js/main.js"></script>
		<script type="text/javascript" src="design/js/odometer.min.js"></script>
		<script type="text/javascript" src="design/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>
<script type="text/javascript" src="design/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="design/rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="design/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="design/rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="design/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="design/rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="design/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>
    </body>
</html>
