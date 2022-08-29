<?php
/* Header */
Redux::setSection( $opt_name , array(
        'icon'      => 'el el-list',
        'title'     => __( 'Navigation', 'hewo' ),
        'desc'      => __( 'These are options to modify and style the main navigation', 'hewo' ),
        'fields'    => array(			
			//naviragion			
			array(
					'id'        => 'switch-smart-navigation',
					'type'      => 'switch',
					'title'     => __('Smart navigation', 'hewo'),
					'subtitle'     => __('Fix navigation on top page', 'hewo'),
					'default'   =>  1,
					'on'        => 'Yes',
					'off'       => 'No',
			),
			
			//color
				array(
                    'id'     => 'section-start-navigation-color',
                    'type'   => 'section',
                    'class'  => 'alith-section-start',
                    'title'  => __( 'Main Navigation Color Options', 'hewo' ),
                    'indent' => true
                ),
				
                array(
                    'id'          => 'opt-navigation-background',
                    'title'       => __( 'Navigation - Background Color', 'hewo' ),
                    'subtitle'    => __( 'Select background color for navigation', 'hewo' ),
                    'type'        => 'color_rgba',
                    'default'   => array(
						'color'     => '#ffffff',
						'alpha'     => 1
					),
					'output' => array('background-color' => '#nav, #nav.affix')
                ),
				array(
                    'id'          => 'opt-navigation-border-color',
                    'title'       => __( 'Navigation - Border Color', 'hewo' ),
                    'subtitle'    => __( 'Select color for navigation border', 'hewo' ),
                    'type'        => 'color_rgba',
                    'default'   => array(
						'color'     => '#000000',
						'alpha'     => 1
					),
					'output' => array('border-color' => '.main_nav_cover, .header, .main_nav_cover #main-menu li ul.sub-menu li, .main_nav_cover ul.sub-menu')
                ),
				array(
					'id'       => 'opt-navigation-link-color',
					'type'     => 'link_color',
					'title'    => __('Link color', 'hewo'),
					'subtitle' => __('Set color for main navigation link: hover, active, visited...', 'hewo'),
					'default'  => array(
						'regular'  => '#000000',
						'hover'    => '#e5633f', 
						'active'   => '#e5633f', 
						'visited'  => '#e5633f', 
					),
					'output'    => array('#nav ul li a'),
				),
				//color
				array(
                    'id'     => 'section-start-submenu-color',
                    'type'   => 'section',
                    'class'  => 'alith-section-start',
                    'title'  => __( 'Submenu Options', 'hewo' ),
                    'indent' => true
                ),
				array(
                    'id'          => 'opt-navigation-submenu-background',
                    'title'       => __( 'Dropdown menu background', 'hewo' ),
                    'subtitle'    => __( 'Select background color for dropdown menu', 'hewo' ),
                    'type'        => 'color_rgba',
                    'default'   => array(
						'color'     => '#ffffff',
						'alpha'     => 1
					),
					'output' => array('background-color' => '#nav ul.sub-menu')
                ),
                array(
					'id'       => 'opt-dropdown-link-color',
					'type'     => 'link_color',
					'title'    => __('Dropdown links color option', 'hewo'),
					'subtitle' => __('Set color for dropdown menu: hover, active, visited...', 'hewo'),
					'default'  => array(
						'regular'  => '#000000',
						'hover'    => '#e5633f', 
						'active'   => '#e5633f', 
						'visited'  => '#e5633f', 
					),
					'output'    => array('#nav ul.sub-menu li a'),
				),
				
			//fonts
				array(
					'id'          => 'navigation-text-font',
					'type'        => 'typography', 
					'title'       => __('Navigation font', 'hewo'),
					'google'         => true,
					'font-backup'    => true,
					'text-align'     => true,
					'color'          => false,
					'text-transform' => true,
					'letter-spacing' => true,
					'line-height'    => true,
					'units'          => 'px',
					'default'        => array(
						'font-family'    => 'IBM Plex Serif',
						'font-size'      => '16px',
						'google'         => true,
						'font-weight'    => '400',
						'text-transform' => 'uppercase',
						'line-height'	=> '36px'
					),
					'output'         => array(
						'#nav ul li a',
					)
				),
			//fonts
				array(
					'id'          => 'navigation-submenu-text-font',
					'type'        => 'typography', 
					'title'       => __('Submenu font', 'hewo'),
					'google'         => true,
					'font-backup'    => true,
					'text-align'     => true,
					'color'          => false,
					'text-transform' => true,
					'letter-spacing' => true,
					'line-height'    => true,
					'units'          => 'px',
					'default'        => array(
						'font-family'    => 'IBM Plex Serif',
						'font-size'      => '14px',
						'google'         => true,
						'font-weight'    => '400',
						'line-height'	=> '16px'
					),
					'output'         => array(
						'#nav ul li ul.sub-menu a',
					)
				),
				
        ) )
);