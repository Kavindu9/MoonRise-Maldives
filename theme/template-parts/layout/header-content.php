<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package moonrise-mv
 */

?>

<header id="masthead">

	<!-- <div>
		<?php
		if ( is_front_page() ) :
			?>
			<h1><?php bloginfo( 'name' ); ?></h1>
			<?php
		else :
			?>
			<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
		endif;

		$moonrise_mv_description = get_bloginfo( 'description', 'display' );
		if ( $moonrise_mv_description || is_customize_preview() ) :
			?>
			<p><?php echo $moonrise_mv_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
		<?php endif; ?>
	</div> -->

	<nav id="site-navigation" aria-label="<?php esc_attr_e( 'Main Navigation', 'moonrise-mv' ); ?>" class="">
		<!-- <button aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'moonrise-mv' ); ?></button> -->

		<div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
			<a href="http://localhost/mysite/wordpress/" class="flex items-center space-x-3 rtl:space-x-reverse">
				<img src="http://localhost/mysite/wordpress/wp-content/uploads/2024/04/moonrise_logo.png" class="h-1/2 w-1/2" />
			</a>

			<button data-collapse-toggle="navbar-default" type="button" id="menu-button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-400 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
				<span class="sr-only">Open main menu</span>
				<svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
					<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
				</svg>
			</button>

			<div class="hidden w-full md:block md:w-auto" id="navbar-solid-bg">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'fallback_cb' => false,
						'container' => 'false',
						'items_wrap'     => '<ul id="%1$s" class="%2$s p-5 font-medium flex flex-col font-head md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white" aria-label="submenu">%3$s</ul>',
					)
				);
				?>

			</div>
		</div>
	</nav><!-- #site-navigation -->

</header><!-- #masthead -->

<style>

#primary-menu li{
	display: inline-block;
	position: relative;
	color: rgb(15 23 42);
}

#primary-menu li::after {
  content: '';
  position: absolute;
  width: 100%;
  transform: scaleX(0);
  height: 2px;
  bottom: 0;
  left: 0;
  background-color: rgb(15 23 42);
  transform-origin: bottom right;
  transition: transform 0.25s ease-out;
}

#primary-menu li:hover::after {
  transform: scaleX(1);
  transform-origin: bottom left;
}

	.menu li {
  		display: block;
	}

	.menu li:not(.menu-item-has-children) a {
		display: block;
	}

	.menu .menu-item-has-children {
		position: relative;
	}

	@media (min-width: 1024px) {
	.menu .menu-item-has-children ul.sub-menu {
		@apply absolute pt-6 pb-3 px-3 shadow-2xl min-w-[200px] left-0 border-b 
			border-b-gray-200 z-10 transition-all duration-200 ease-in-out translate-y-5 
			opacity-0 pointer-events-none;
	}
	}

	.menu .menu-item-has-children ul.sub-menu li {
	@apply w-full;
	}

	@media (max-width: 1024px) {
	.menu .menu-item-has-children ul.sub-menu li {
		margin-top: 0.75rem;
	}
	}

	.menu .menu-item-has-children ul.sub-menu ul.sub-menu {
		left: unset;
		padding-top: 0.75rem;
		right: calc(100% + 0.1rem);
		top: -0.7rem;
		box-shadow: unset;
	}

	@media (max-width: 1024px) {
	.menu .menu-item-has-children ul.sub-menu ul.sub-menu {
		padding-top: 0;
		text-align: center;
	}
	}

	@media (max-width: 1024px) {
	.menu .menu-item-has-children ul.sub-menu {
		text-align: center;
	}
	}

	.menu .menu-item-has-children:hover &gt; ul.sub-menu {
	@apply flex translate-y-0 opacity-100 pointer-events-auto
	}

</style>