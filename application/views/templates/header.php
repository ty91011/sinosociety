<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Sino Society | More Exposure to Chinese Investors</title>

  <link rel="stylesheet" href="/css/foundation.css">
  
  <script src="/js/vendor/custom.modernizr.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>
<body>

	<!-- Navigation -->
	<div class="sticky">
		<nav class="top-bar">
			<ul class="title-area">
				<!-- Title Area -->
				<li class="name">
					<h1>
						<a href="#">
							<img src="/img/logo-46.png" />
						</a>
					</h1>
				</li>
				<li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
			</ul>
 
			<section class="top-bar-section">
				<!-- Right Nav Section -->
				<ul class="right">
					<li class="divider"></li>
					<li><a href="/#how-we-work">How We Work</a></li>
					<li class="divider"></li>
					<li class="has-dropdown">
						<a href="/#product-services">Products and Services</a>
						<ul class="dropdown">
							<li><label>Property Listings</label></li>
							<!--
							<li class="has-dropdown">
								<a href="#" class="">Search Current Listings</a>
								<ul class="dropdown">
									<li><a href="#">Dropdown Options</a></li>
									<li><a href="#">Dropdown Options</a></li>
									<li><a href="#">Level 2</a></li>
									<li><a href="#">Subdropdown Option</a></li>
									<li><a href="#">Subdropdown Option</a></li>
									<li><a href="#">Subdropdown Option</a></li>
								</ul>
							</li>
							-->
							<li class="has-dropdown"><a href="/account/listings">Search Listings</a></li>
							<li><a href="/account/add_property_for_sale">Add Listing</a></li>
							<li class="divider"></li>
							<!--
							<li><label>EB-5 Projects</label></li>
							<li><a href="#">Search Projects</a></li>
							<li><a href="/account/add_project">Add Project</a></li>
							-->
							<li class="divider"></li>
							<li><label>Marketing</label></li>
							<li><a href="#">Chinese Market</a></li>
							<li class="divider"></li>
							<li><a href="#">See all &rarr;</a></li>
						</ul>
					</li>
					<li class="divider"></li>
					<li class="has-dropdown">
						<a href="/partners">Partners</a>
						<ul class="dropdown">
							<li><a href="/#partners-list">Partners List</a></li>
							<li><a href="/partners/contact">Benefits of a partner</a></li>
							<li><a href="/partners/contact">Become a Partner</a></li>
							<li class="divider"></li>
						</ul>
					</li>
					<li class="divider"></li>
					<li><a href="/contact">Contact Us</a></li>
					<?
					if(isLoggedIn())
					{
					    ?>
						<li class="divider"></li>
						<li class="has-dropdown">
							<a href="/account">Account</a>
							<ul class="dropdown">
								<li><a href="/account">Dashboard</a></li>
								<li><a href="/account/edit">Edit Profile</a></li>
								<li><a href="/account/listings">View Current Listings</a></li>
								<li><a href="/account/payment">Payment</a></li>
								<li><a href='/account/logout'>Logout</a></li>
								<li class="divider"></li>
							</ul>
						</li>					
					    <?
					}
					?>
				</ul>
			</section>
		</nav>
	    <div>
			    <div style="float: right">
		<? if(isLoggedIn()) { ?>
		<!--Welcome <?=$this->session->userdata("name");?>! -->
		<? } else { ?>
		<form class="pure-form" action="/account/login" method='POST'>

			<input type="email" name='email' style="width: 150px" placeholder="Email">
			<input type="password" name='password' style="width: 150px" placeholder="Password">
			<button type="submit" class="pure-button pure-button-primary small">Login</button>
			<a href="#" class="button round small" data-reveal-id="freeAcct">Signup</a>
		</form>
		<? } ?>
		
	    </div>
	    </div>
	</div>
  <!-- End Top Bar -->