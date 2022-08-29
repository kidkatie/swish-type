<?php
//Header section
Redux::setSection( $opt_name , array(
        'icon'      => 'el el-credit-card',
        'title'     => __( 'Header & Logo', 'hewo' ),
        'desc'      => __( 'These are options to modify and style your header and your branding', 'hewo' ),
        'fields'    => array(
			//topbar			
			array(
					'id'        => 'switch-display-topbar',
					'type'      => 'switch',
					'title'     => __('Display Topbar?', 'hewo'),
					'subtitle'     => __('Date time, social network', 'hewo'),
					'default'   =>  1,
					'on'        => 'Show',
					'off'       => 'Hide',
			),
			array(
					'id'        => 'switch-display-offcanvas',
					'type'      => 'switch',
					'title'     => __('Display Offcanvas?', 'hewo'),
					'default'   =>  1,
					'on'        => 'Show',
					'off'       => 'Hide',
					'required' => array('switch-display-topbar','=','1')
			),
			array(
					'id'        => 'switch-display-date-time',
					'type'      => 'switch',
					'title'     => __('Display Date Time?', 'hewo'),
					'default'   =>  1,
					'on'        => 'Show',
					'off'       => 'Hide',
					'required' => array('switch-display-topbar','=','1')
			),
			array(
					'id'        => 'switch-display-social-network',
					'type'      => 'switch',
					'title'     => __('Display Social Network Icons?', 'hewo'),
					'default'   =>  1,
					'on'        => 'Show',
					'off'       => 'Hide',
					'required' => array('switch-display-topbar','=','1')
			),
			array(
					'id'        => 'switch-display-search-box',
					'type'      => 'switch',
					'title'     => __('Display Search Box?', 'hewo'),
					'default'   =>  1,
					'on'        => 'Show',
					'off'       => 'Hide',
					'required' => array('switch-display-topbar','=','1')
			),
			array(
                'id'          => 'opt-topbar-border-color',
                'title'       => __( 'Topbar - Border Color', 'hewo' ),
                'subtitle'    => __( 'Select color for topbar border', 'hewo' ),
                'type'        => 'color_rgba',
                'required' => array('switch-display-topbar','=','1'),
                'default'   => array(
					'color'     => '#000000',
					'alpha'     => 1
				),
				'output' => array('border-color' => '.main_nav, .header, .top_bar, .top-search, #off-canvas-toggle, .time, .top-search-form form.search-form input.search-field')
            ),
			
			array(
					'id'     => 'section_end_topbar',
					'type'   => 'section',
					'class'  => 'alith-section-end',
					'indent' => false
				),
			//Header
			
			array(
                'id'        => 'logo-type',
                'type'      => 'image_select',
                'title'     => __( 'Logo type', 'hewo' ),
                'subtitle'  => __( 'Text or Image', 'hewo' ),
                'options'   => array(
                    'logo-image' => array( 'title' => __( 'Image', 'hewo' ),  'img' => ALITH_THEME_IMG_URL . '/admin/logo-image.png' ),
                    'logo-text' => array( 'title' => __( 'Text', 'hewo' ),   'img' => ALITH_THEME_IMG_URL . '/admin/logo-text.png' ),
                ),
                'default'   => 'logo-text'
            ),
			array(
				'id'       	=> 'logo-type-text',
				'type'     	=> 'text',
				'required'  => array('logo-type', '=', 'logo-text'),
				'title'    	=> __('Logo text', 'hewo'),
				'default'   => 'HELLO WORLD'
			),			
			array(
				'id'          => 'logo-type-text-font',
				'type'        => 'typography', 
				'title'       => __('Logo font', 'hewo'),
				'required'  	=> array('logo-type', '=', 'logo-text'),
				'google'         => true,
				'font-backup'    => true,
				'text-transform' => true,
				'letter-spacing' => true,
				'line-height'    => false,
				'units'          => 'px',
				'color'			=> true,
				'default'        => array(
					'font-family'    => 'Playfair Display',
					'font-size'      => '78px',
					'google'         => true,
					'font-weight'    => '400',
					'text-transform' => 'uppercase',
					'letter-spacing' => '3px'
				),
				'output'      => array('h1.logo-text a')
			),

			array(
                'id' 		=> 'logo-image',
                'type' 		=> 'media',
                'url' 		=> true,
                'title' 	=> __( 'Logo', 'hewo' ),
				'required'  => array('logo-type', '=', 'logo-image'),
                'subtitle' 	=> __( 'Upload your logo here', 'hewo' ),
                'desc' 		=> __( 'Supported formats: .jpg .gif .png', 'hewo' ),
                'default'   => array( 'url' => ALITH_THEME_IMG_URL.'/logo.png' ),
            ),
			
			array(
				'id'       => 'slogan-text',
				'type'     => 'text',
				'title'    => __('Slogan', 'hewo'),
				'subtitle' => __('This text will display below the logo.', 'hewo'),
				'default'  => 'NEWSPAPER / MAGAZINE / PUBLISHER'
			),

			array(
				'id'          => 'slogan-text-font',
				'type'        => 'typography',
				'title'       => __('Slogan font', 'hewo'),			
				'google'         => true,
				'font-backup'    => true,
				'text-transform' => true,
				'letter-spacing' => true,
				'line-height'    => false,
				'units'          => 'px',
				'default'        => array(
					'font-family'    => 'IBM Plex Serif',
					'font-size'      => '14px',
					'google'         => true,
					'font-weight'    => '400',
					'text-transform' => 'uppercase',
					'letter-spacing' => '',
					'color'			 => '#000000',
				),
				'output'      => array('.header p.tagline')
			),
	

        ) )
);