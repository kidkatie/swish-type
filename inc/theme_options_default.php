<?php
/*Load the default config if ReduxFramwork not active*/

if ( ! function_exists( 'hewo_option_default_config' ) ) {
	function hewo_option_default_config() {
		return array(
			//General
			'page_loader' => 1,

			//Header & Logo
			'switch-display-topbar' 		=> 1,
			'switch-display-offcanvas' 		=> 1,
			'switch-display-date-time' 		=> 1,
			'switch-display-social-network' => 1,
			'switch-display-search-box' 	=> 1,
			'logo-type' 					=> 'logo-text',
			'logo-type-text' 				=> 'HEWO',
			'slogan-text' 					=> 'NEWSPAPER / MAGAZINE / PUBLISHER',

			//Navigation
			'switch-smart-navigation' 		=> 1,

			//Featured Posts
			'switch-featured' 				=> 1,
			'home_featured_position' 		=> 'small',
			'home_featured_layout' 			=> 'slider',

			//Bottom & Footer
			'switch_bottom_column' 			=> 1,
			'switch_footer-back-to-top' 	=> 1,
			'footer-logo-type' 				=> 'logo-text',
			'footer-logo-type-text' 		=> 'HEWO',
			'show_copyright_text' 			=> 1,

			//Layout Setting			
			'display_latest_posts' 			=> 1,
			'latest_posts-title' 			=> 'Recent Posts',
			'layout_homepage_opt' 			=> 'list',
			'homepage_sidebar_opt' 			=> 'sidebar_right',
			'layout_archive_opt' 			=> 'list',
			'archive_sidebar_opt' 			=> 'sidebar_right',
			'archive_header' 				=> 1,
			'archive_breadcrumb' 			=> 1,
			'archive_title' 				=> 1,
			'single_sidebar_opt' 			=> 'sidebar_right',
			'single_metabox' 				=> 1,
			'single_breadcrumb' 			=> 1,
			'single_navigation' 			=> 1,
			'single_author' 				=> 1,
			'single_related' 				=> 1,
			'single_comment' 				=> 1,
			'page_sidebar_opt' 				=> 'sidebar_right',
			'page_metabox' 					=> 1,
			'page_comment' 					=> 1,
		);
	}
}
