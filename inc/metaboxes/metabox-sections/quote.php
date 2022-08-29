<?php
//metabox post video
if ( ! function_exists( 'alitheme_hewo_metaboxes_single_quote' ) ) {
	function alitheme_hewo_metaboxes_single_quote() {
		return array(
			'id'         => 'alitheme_hewo_metaboxes_quote_options',
			'title'      => esc_html__( 'QUOTE OPTIONS', 'hewo' ),
			'post_types' => array( 'post' ),
			'priority'   => 'high',
            'context'    => 'normal',
			'fields'     => array(
				array(
					'id'   => 'alitheme_hewo_metaboxes_quote_content',
					'name' => esc_html__( 'Quote', 'hewo' ),
					'type' => 'textarea',
				),	
				array(
					'id'   => 'alitheme_hewo_metaboxes_quote_author',
					'name' => esc_html__( 'Quote Author', 'hewo' ),
					'desc' => esc_html__( '', 'hewo' ),
					'type' => 'text',
				),
				array(
					'id'   => 'alitheme_hewo_metaboxes_quote_author_avatar',
					'name' => esc_html__( 'Author Avatar', 'hewo' ),
					'desc' => esc_html__( 'Please choose or upload the image', 'hewo' ),
					'type' => 'image_advanced',
				),	
				array(
					'id'   => 'alitheme_hewo_metaboxes_quote_author_url',
					'name' => esc_html__( 'Author URL', 'hewo' ),
					'desc' => esc_html__( 'Enter the author site link', 'hewo' ),
					'type' => 'text',
				),							
			)
		);
	}
}
