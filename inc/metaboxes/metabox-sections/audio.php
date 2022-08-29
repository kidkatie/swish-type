<?php
//metabox post audio
if ( ! function_exists( 'alitheme_hewo_metaboxes_single_audio' ) ) {
	function alitheme_hewo_metaboxes_single_audio() {
		return array(
			'id'         => 'alitheme_hewo_metaboxes_audio_options',
			'title'      => esc_html__( 'AUDIO OPTIONS', 'hewo' ),
            'post_types' => array('post' ),
            'priority'   => 'high',
            'context'    => 'normal',
			'fields'     => array(
				array(
					'id'   => 'alitheme_hewo_metaboxes_audio_url',
					'name' => esc_html__( 'audio URL', 'hewo' ),
					'desc' => esc_html__( 'Input link of audio, support: SoundCloud, MixCloud', 'hewo' ),
					'type' => 'text',
				),
				array(
					'id'   => 'alitheme_hewo_metaboxes_audio_self_hosted',
					'name' => esc_html__( 'Self-Hosted Audio', 'hewo' ),
					'desc' => esc_html__( 'Please upload the mp3, ogg, wma, m4a, wav audio file.', 'hewo' ),
					'type' => 'file_advanced',
				),
			)
		);
	}
}