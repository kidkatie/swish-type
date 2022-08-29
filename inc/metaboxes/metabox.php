<?php
require_once ALITH_THEME_INC_DIR . '/metaboxes/metabox-sections/gallery.php';
require_once ALITH_THEME_INC_DIR . '/metaboxes/metabox-sections/video.php';
require_once ALITH_THEME_INC_DIR . '/metaboxes/metabox-sections/audio.php';
require_once ALITH_THEME_INC_DIR . '/metaboxes/metabox-sections/quote.php';

if ( ! function_exists( 'alitheme_hewo_metaboxes_config' ) ) {
	
	function alitheme_hewo_metaboxes_config($meta_boxes) {
		if ( ! class_exists( 'RW_Meta_Box' ) ) {
			return false;
		}

		$alitheme_hewo_metaboxes = array();
		$alitheme_hewo_metaboxes[] = alitheme_hewo_metaboxes_single_video();
		$alitheme_hewo_metaboxes[] = alitheme_hewo_metaboxes_single_audio();
		$alitheme_hewo_metaboxes[] = alitheme_hewo_metaboxes_single_gallery();
		$alitheme_hewo_metaboxes[] = alitheme_hewo_metaboxes_single_quote();

		return $alitheme_hewo_metaboxes;
	}
	add_filter( 'rwmb_meta_boxes', 'alitheme_hewo_metaboxes_config' );
};


