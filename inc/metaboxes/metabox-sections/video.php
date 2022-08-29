<?php
//metabox post video
if ( ! function_exists( 'alitheme_hewo_metaboxes_single_video' ) ) {
	function alitheme_hewo_metaboxes_single_video() {
		return array(
			'id'         => 'alitheme_hewo_metaboxes_video_options',
			'title'      => esc_html__( 'VIDEO OPTIONS', 'hewo' ),
			'post_types' => array( 'post' ),
			'priority'   => 'high',
			'context'    => 'normal',
			'fields'     => array(
				array(
					'id'   => 'alitheme_hewo_metaboxes_video_url',
					'name' => esc_html__( 'Video URL', 'hewo' ),
					'desc' => esc_html__( 'Input link of video from: Youtube, Vimeo or DailyMotion', 'hewo' ),
					'type' => 'text',
				),
				array(
					'id'   => 'alitheme_hewo_metaboxes_video_self_hosted',
					'name' => esc_html__( 'Self-Hosted Video', 'hewo' ),
					'desc' => esc_html__( 'Please upload the video file. Format: mp4, m4v, webm, ogv, wmv, flv', 'hewo' ),
					'type' => 'file_advanced',
				),								
			)
		);
	}
}
