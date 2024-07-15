<?php
/**
 * The header for our theme
 *
 * This is the template that displays the `head` element and everything up
 * until the `#content` element.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package moonrise-mv
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

	<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<div id="page">
	<a href="#content" class="sr-only"><?php esc_html_e( 'Skip to content', 'moonrise-mv' ); ?></a>

	<?php //get_template_part( 'template-parts/layout/header', 'content' ); ?>


	<nav class="bg-white border-gray-200 shadow-md font-head">
		<div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
			<a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center space-x-3 rtl:space-x-reverse">
			<img src="https://moonrisemaldives.com/wp-content/uploads/2024/04/Untitled-design-85-1.png" class="h-1/2 w-1/2" />
		</a>
			<button id="navbar-toggle" data-collapse-toggle="navbar-dropdown" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-dropdown" aria-expanded="false">
				<span class="sr-only">Open main menu</span>
				<svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
					<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
				</svg>
			</button>
			<div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
			<ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white">
				<li>
					<button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 pl-3 pr-4  text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto">Maldives <svg class="w-2.5 h-2.5 ml-2.5" id="arrow" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
			<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
		</svg></button>
<!-- 				<a href="<?php echo esc_url(home_url('/maldives/')); ?>" class="block py-2 pl-3 pr-4 text-black bg-blue-700 rounded md:bg-transparent md:p-0 " aria-current="page">Maldives</a> -->
					<!-- Dropdown menu -->
					<div id="dropdownNavbar" class="absolute z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
						<ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdownLargeButton">
							<li>
							<a href="<?php echo esc_url(home_url('/history/')); ?>" class="block px-4 py-2 hover:bg-gray-100 hover:text-black">History</a>
							</li>
							<li>
							<a href="<?php echo esc_url(home_url('/geography-climate/')); ?>" class="block px-4 py-2 hover:bg-gray-100 hover:text-black">Geography & Climate</a>
							</li>
						<li>
							<a href="<?php echo esc_url(home_url('/getting-to-the-maldives/')); ?>" class="block px-4 py-2 hover:bg-gray-100 hover:text-black">Getting to the Maldives</a>
						</li>
						<li>
							<a href="<?php echo esc_url(home_url('/airport/')); ?>" class="block px-4 py-2 hover:bg-gray-100 hover:text-black">Airport</a>
							</li>
							
							<li>
							<a href="<?php echo esc_url(home_url('/destination-overview/')); ?>" class="block px-4 py-2 hover:bg-gray-100 hover:text-black">Destination Overview</a>
							</li>
							<li>
							<a href="<?php echo esc_url(home_url('/local-lifestyle/')); ?>" class="block px-4 py-2 hover:bg-gray-100 hover:text-black">Local Lifestyle</a>
							</li>
							
						</ul>
					</div>
							
				</li>
				<li>
					<button id="dropdownNavbarLink2" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 pl-3 pr-4  text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto">Accommodations <svg class="w-2.5 h-2.5 ml-2.5" id="arrow" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
			<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
		</svg></button>
					<!-- Dropdown menu -->
					<div id="dropdownNavbar2" class="absolute z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
						<ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdownLargeButton">
						<li>
							<a href="<?php echo esc_url(home_url('/accommodation/resorts/')); ?>" class="block px-4 py-2 hover:bg-gray-100 hover:text-black">Resorts</a>
						</li>
						<li>
							<a href="<?php echo esc_url(home_url('/accommodation/transit-hotels/')); ?>" class="block px-4 py-2 hover:bg-gray-100 hover:text-black">Transit Hotels</a>
							<!-- <button id="doubleDropdownButton" data-dropdown-toggle="doubleDropdown" data-dropdown-placement="right-start" type="button" class="flex items-center justify-between w-full px-4 py-2 hover:bg-gray-100">JavaScript<svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
			<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
		</svg></button>
							<div id="doubleDropdown" class="z-10 absolute hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 transform translate-x-44">
								<ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="doubleDropdownButton">
								<li>
									<a href="#" class="block px-4 py-2 hover:bg-gray-100 text-black hover:text-white">React</a>
								</li>
								<li>
									<a href="#" class="block px-4 py-2 hover:bg-gray-100 text-black hover:text-white">Angular</a>
								</li>
								<li>
									<a href="#" class="block px-4 py-2 hover:bg-gray-100 text-black hover:text-white">Node.js</a>
								</li>
								<li>
									<a href="#" class="block px-4 py-2 hover:bg-gray-100 text-black hover:text-white">Vue.js</a>
								</li>
								</ul>
							</div> -->
						</li>
						<li>
							<a href="<?php echo esc_url(home_url('/accommodation/local-island-hotels/')); ?>" class="block px-4 py-2 hover:bg-gray-100 hover:text-black">Local Island Hotels</a>
						</li>
							<li>
							<a href="<?php echo esc_url(home_url('/accommodation/liveaboards-and-safaris/')); ?>" class="block px-4 py-2 hover:bg-gray-100 hover:text-black">Liveaboards</a>
						</li>
						</ul>
						<!-- <div class="py-1">
						<a href="#" class="block px-4 py-2 text-sm text-black hover:bg-gray-100   hover:text-white">Sign out</a>
						</div> -->
					</div>
				</li>
				<li>
				<a href="<?php echo esc_url(home_url('/cruise-liner-handling/')); ?>" class="block py-2 pl-3 pr-4 text-black rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0  hover:text-white">Cruise handling</a>
				</li>
				<li>
				<a href="<?php echo esc_url(home_url('services/')); ?>" class="block py-2 pl-3 pr-4 text-black rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0  hover:text-white">Services</a>
				</li>
				<!-- <li>
				<a href="#" class="block py-2 pl-3 pr-4 text-black rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0  hover:text-white">Contact</a>
				</li> -->
			</ul>
			</div>
		</div>
	</nav>




	<div id="content">

	<style>
		.list-disc ul{
			list-style-type: disc;
			list-style-position: inside;
		}
		.list-disc ul li{
			padding : 0.5rem;
		}

		.font-body{
			line-height: 1.6rem;
		}
		/* .font-title{
			color: #2E8BC0;
  			text-shadow: 2px 2px 2px #FFFFFF, 0 0 25px #FFFFFF, 0 0 5px #FFFFFF;
		} */

	</style>
