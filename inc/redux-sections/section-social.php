<?php
/* Header */
Redux::setSection( $opt_name , 
	array(
			'icon'     	 => 'el el-group',
			'title'    	 => esc_html__( 'Social network', 'hewo' ),						
			'fields'   	 => array(
				array(
					'id'       => 'social_newtab',
					'type'     => 'switch', 
					'title'    => __('Open in new tab', 'hewo'),				
					'default'  => true,
				),				
				array(
					'id'     => 'section_end_social_header',
					'type'   => 'section',
					'class'  => 'alith-section-end',
					'indent' => false
				),
				//Social Profile
				array(
					'id'       => 'social_facebook',
					'type'     => 'text',
					'validate' => 'url',
					'title'    => esc_html__( 'Facebook', 'hewo' ),
					'subtitle' => esc_html__( 'The URL to your account page', 'hewo' ),
					'default'  => 'https://facebook.com'
				),
				array(
					'id'       => 'social_twitter',
					'type'     => 'text',
					'validate' => 'url',
					'title'    => esc_html__( 'Twitter', 'hewo' ),
					'subtitle' => esc_html__( 'The URL to your account page', 'hewo' ),
					'default'  => 'https://twitter.com'
				),
				array(
					'id'       => 'social_googleplus',
					'type'     => 'text',
					'validate' => 'url',
					'title'    => esc_html__( 'Google+', 'hewo' ),
					'subtitle' => esc_html__( 'The URL to your account page', 'hewo' ),
					'default'  => 'https://google.com'
				),
				array(
					'id'       => 'social_pinterest',
					'type'     => 'text',
					'validate' => 'url',
					'title'    => esc_html__( 'Pinterest', 'hewo' ),
					'subtitle' => esc_html__( 'The URL to your account page', 'hewo' ),
					'default'  => 'https://pinterest.com'
				),
				array(
					'id'       => 'social_linkedin',
					'type'     => 'text',
					'validate' => 'url',
					'title'    => esc_html__( 'LinkedIn', 'hewo' ),
					'subtitle' => esc_html__( 'The URL to your account page', 'hewo' )
				),
				array(
					'id'       => 'social_tumblr',
					'type'     => 'text',
					'validate' => 'url',
					'title'    => esc_html__( 'Tumblr ', 'hewo' ),
					'subtitle' => esc_html__( 'The URL to your account page', 'hewo' )
				),
				array(
					'id'       => 'social_flickr',
					'type'     => 'text',
					'validate' => 'url',
					'title'    => esc_html__( 'Flickr', 'hewo' ),
					'subtitle' => esc_html__( 'The URL to your account page', 'hewo' )
				),
				array(
					'id'       => 'social_instagram',
					'type'     => 'text',
					'validate' => 'url',
					'title'    => esc_html__( 'Instagram', 'hewo' ),
					'subtitle' => esc_html__( 'The URL to your account page', 'hewo' )
				),
				array(
					'id'       => 'social_skype',
					'type'     => 'text',
					'validate' => 'url',
					'title'    => esc_html__( 'Skype', 'hewo' ),
					'subtitle' => esc_html__( 'The URL to your account page', 'hewo' )
				),
				array(
					'id'       => 'social_snapchat',
					'type'     => 'text',
					'validate' => 'url',
					'title'    => esc_html__( 'Snapchat', 'hewo' ),
					'subtitle' => esc_html__( 'The URL to your account page', 'hewo' )
				),				
				array(
					'id'       => 'social_youtube',
					'type'     => 'text',
					'validate' => 'url',
					'title'    => esc_html__( 'Youtube URL ', 'hewo' ),
					'subtitle' => esc_html__( 'The URL to your account page', 'hewo' )
				),				
				array(
					'id'       => 'social_digg',
					'type'     => 'text',
					'validate' => 'url',
					'title'    => esc_html__( 'Digg URL', 'hewo' ),
					'subtitle' => esc_html__( 'The URL to your account page', 'hewo' )
				),
				array(
					'id'       => 'social_dribbble',
					'type'     => 'text',
					'validate' => 'url',
					'title'    => esc_html__( 'Dribbble URL', 'hewo' ),
					'subtitle' => esc_html__( 'The URL to your account page', 'hewo' )
				),
				array(
					'id'       => 'social_soundcloud',
					'type'     => 'text',
					'validate' => 'url',
					'title'    => esc_html__( 'Soundcloud URL', 'hewo' ),
					'subtitle' => esc_html__( 'The URL to your account page', 'hewo' )
				),
				array(
					'id'       => 'social_vimeo',
					'type'     => 'text',
					'validate' => 'url',
					'title'    => esc_html__( 'Vimeo URL ', 'hewo' ),
					'subtitle' => esc_html__( 'The URL to your account page', 'hewo' )
				),
				array(
					'id'       => 'social_reddit',
					'type'     => 'text',
					'validate' => 'url',
					'title'    => esc_html__( 'Reddit URL ', 'hewo' ),
					'subtitle' => esc_html__( 'The URL to your account page', 'hewo' )
				),
				array(
					'id'       => 'social_whatsapp',
					'type'     => 'text',
					'validate' => 'url',
					'title'    => esc_html__( 'Whatsapp URL ', 'hewo' ),
					'subtitle' => esc_html__( 'The URL to your account page', 'hewo' )
				),
				array(
					'id'       => 'social_rss',
					'type'     => 'text',
					'validate' => 'url',
					'title'    => esc_html__( 'Rss URL ', 'hewo' ),
					'subtitle' => esc_html__( 'The URL to your account page', 'hewo' )
				),
				
		)
	)
);