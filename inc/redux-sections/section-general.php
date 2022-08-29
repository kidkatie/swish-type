<?php
/* Header */
Redux::setSection( $opt_name , array(
        'icon'      => 'el el-globe-alt',
        'title'     => __( 'General setting', 'hewo' ),
        'fields'    => array(
        	array(
				'id'       => 'boxed_switch',
				'type'     => 'switch', 
				'title'    => __('Boxed layout?', 'hewo'),				
				'default'  => false,
			),
	        array(         
					'id'       => 'boxed-background',
					'type'     => 'background',
					'title'    => __('Boxed Background', 'hewo'),
					'subtitle' => __('Boxed background with image, color, etc.', 'hewo'),	
					'required' => array( 'boxed_switch', '=', '1' ),		
					'default'  => array(
						'background-color' => '#ffffff',
						),
					'output'    => array('.boxed'),				
				),
	        array(
					'id'       => 'boxed_max_width',
					'type'     => 'slider',
					'title'    => __('Max width', 'hewo'),
					'subtitle' => __('Default is 1170px', 'hewo'),
					'required' => array( 'boxed_switch', '=', '1' ),
					'default'       => 1170,
					'min'           => 980,
					'max'           => 1366,
					'step'          => 10,
					'display_value' => 'text',
					'output'    	=> array('width' => '.boxed')
				),
	       	array(
				'id'       => 'page_loader',
				'type'     => 'switch', 
				'title'    => __('Display loadding page', 'hewo'),				
				'default'  => true,
			),
			array(
				'id'       => 'rtl_switch',
				'type'     => 'switch', 
				'title'    => __('RTL language', 'hewo'),				
				'default'  => false,
			),
	        array(
						'id'     => 'section_end_body_layout',
						'type'   => 'section',
						'class'  => 'alith-section-end',
						'indent' => false
					),

            array(         
					'id'       => 'body-background',
					'type'     => 'background',
					'title'    => __('Body Background', 'hewo'),
					'subtitle' => __('Body background with image, color, etc.', 'hewo'),					
					'default'  => array(
						'background-color' => '#ffffff',
						),
					'output'    => array('body'),				
				),
			array(
				'id'          => 'body-text-font',
				'type'        => 'typography', 
				'title'       => __('Body font', 'hewo'),
				'google'         => true,
				'font-backup'    => true,
				'text-align'     => true,
				'color'          => true,
				'text-transform' => true,
				'letter-spacing' => true,
				'line-height'    => true,
				'units'          => 'px',
				'default'        => array(
					'font-family'    => 'IBM Plex Serif',
					'font-size'      => '16px',
					'google'         => true,
					'font-weight'    => '400',
					'line-height'    => '28px',
					'color'			=> '#000000',
					'letter-spacing' => ''
				),
				'output'         => array(
					'body',
				)
			),
			array(
				'id'          => 'heading-text-font',
				'type'        => 'typography', 
				'title'       => __('Heading font', 'hewo'),
				'google'         => true,
				'font-backup'    => true,
				'text-align'     => false,
				'color'          => true,
				'text-transform' => true,
				'letter-spacing' => true,
				'line-height'    => false,
				'font-size'		 => false,
				'units'          => 'px',
				'default'        => array(
					'font-family'    => 'IBM Plex Serif',
					'google'         => true,
					'font-weight'    => '500',
					'color'			 => '#000000',
				),
				'output'         => array(
					'body h1, body h2, body h3, body h4, body h5, body h6',
				)
			),
			array(
				'id'          	 => 'heading2-text-font',
				'type'        	 => 'typography', 
				'title'       	 => __('Heading 2 font', 'hewo'),
				'subtitle' 		 => __('Font for Big title (ex: Related Posts, Comment, Leave a reply...)', 'hewo'),
				'google'         => true,
				'font-backup'    => true,
				'text-align'     => false,
				'color'          => true,
				'text-transform' => true,
				'letter-spacing' => true,
				'line-height'    => false,
				'font-size'		 => false,
				'units'          => 'px',
				'default'        => array(
					'font-family'    => 'IBM Plex Serif',
					'google'         => true,
					'font-weight'    => '500',
					'color'			=> '#000000',
					'letter-spacing' => '',
					'text-transform' => 'uppercase'
					
				),
				'output'         => array('#slideshow_big .alith_post_title, .archive-title, .dropcap p:first-child::first-letter, .single-comment-title, .comment-reply-title, .widget-title, .site-pagination, .latest_style_1_item span.item-count, .latest_style_3_item span.item-count, .single-header .alith_post_title', 
				)
			),
			array(
				'id'          => 'meta-text-font',
				'type'        => 'typography', 
				'title'       => __('Meta font', 'hewo'),
				'google'         => true,
				'font-backup'    => true,
				'text-align'     => true,
				'color'          => true,
				'text-transform' => true,
				'letter-spacing' => true,
				'line-height'    => true,
				'units'          => 'px',
				'default'        => array(
					'font-family'    => 'IBM Plex Serif',
					'font-size'      => '11px',
					'google'         => true,
					'font-weight'    => '600',
					'line-height'    => '14px',
					'color'			=> '#666666',
				),
				'output'         => array(
					'.post_meta',
				)
			),
			array(
					'id'     => 'section_end_body_background',
					'type'   => 'section',
					'class'  => 'alith-section-end',
					'indent' => false
				),
			array(
					'id'       => 'opt-link-color',
					'type'     => 'link_color',
					'title'    => __('Links Color Option', 'hewo'),
					'subtitle' => __('Set color for link: hover, active, visited, focus...', 'hewo'),
					'default'  => array(
						'regular'  	=> '#000000', 
						'hover'    	=> '#e5633f', 
						'active'   	=> '#e5633f', 
						'visited'  	=> '#e5633f', 
						'focus'  	=> '#e5633f', 
					),
					'output'    => array('a'),
				),
			
        ) )
);