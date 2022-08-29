<?php
/* Header */
Redux::setSection( $opt_name , 
	array(
			'icon'      => 'el el-magic',
			'title'     => __( 'Off canvas', 'hewo' ),
			'desc'      => __( 'Setting for off canvas(left slide sidebar)', 'hewo' ),
			'fields'    => array(				
			//offcanvas color
                array(
                    'id'          => 'opt-offcanvas-background',
                    'title'       => __( 'Offcanvas - Background Color', 'hewo' ),
                    'subtitle'    => __( 'Select background color for offcanvas', 'hewo' ),
                    'type'        => 'background',
                    'default'   => array(
						'color'     => '#ffffff'
					),
					'output' => array('background-color' => '#sidebar-wrapper')
                ),
				array(
					'id'       => 'opt-offcanvas-link-color',
					'type'     => 'link_color',
					'title'    => __('Offcanvas link color option', 'hewo'),
					'subtitle' => __('Set color for offcanvas link: hover, active, visited...', 'hewo'),
					'default'  => array(
						'regular'  => '#000000',
						'hover'    => '#0073aa', 
						'active'   => '#0073aa', 
						'visited'  => '#0073aa', 
					),
					'output'   => array('#sidebar-wrapper a'),
				),
				array(
                    'id'         => 'opt-offcanvas-text-color',
                    'title'      => __( 'Offcanvas - Text color', 'hewo' ),
                    'subtitle'   => __( 'Select color for offcanvas text', 'hewo' ),
                    'type'       => 'color',
                    'default'  	 => '#000000',
					'transparent' => false,
					'output' 	 => array('color' => '#sidebar-wrapper')
                ),
				
		)
	)
);