<?php
//metabox post gallery
if ( ! function_exists( 'alitheme_hewo_metaboxes_single_gallery' ) ) {
	function alitheme_hewo_metaboxes_single_gallery() {
		return array(
			'id'         => 'alitheme_hewo_metaboxes_gallery_options',
			'title'      => esc_html__( 'GALLERY OPTIONS', 'hewo' ),
            'post_types' => array( 'post' ),
            'priority'   => 'high',
            'context'    => 'normal',
			'fields'     => array(
				array(
					'id'   => 'alitheme_hewo_metaboxes_gallery_data',
					'name' => esc_html__( 'select gallery', 'hewo' ),
					'desc' => esc_html__( 'Select images for gallery', 'hewo' ),
					'type' => 'image_advanced',
					'std'  => '',
				),
			)
		);
	}
}