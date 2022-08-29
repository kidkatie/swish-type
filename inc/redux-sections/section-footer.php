<?php
/* Header */
Redux::setSection( $opt_name , array(
        'icon'      => 'el el-download-alt',
        'title'     => __( 'Bottom & Footer options', 'hewo' ),
        'desc'      => __( 'These are options to modify and style your footer', 'hewo' ),
        'fields'    => array(
			//bottom (four columns)
			array(
				'id'       => 'switch_bottom_column',
				'type'     => 'switch', 
				'title'    => __('Show bottom (Four columns before footer)', 'hewo'),				
				'default'  => true,
			),
			array(
				'id'       => 'switch_footer_social',
				'type'     => 'switch', 
				'title'    => __('Show Social Network', 'hewo'),				
				'default'  => true,
			),
			array(
				'id'       => 'switch_footer-back-to-top',
				'type'     => 'switch', 
				'title'    => __('Back To Top Button', 'hewo'),				
				'default'  => true,
			),
			array(
					'id'     => 'section_end_bottom',
					'type'   => 'section',
					'class'  => 'alith-section-end',
					'indent' => false
			),
			//footer logo
			array(
                'id'        => 'footer-logo-type',
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
				'id'       	=> 'footer-logo-type-text',
				'type'     	=> 'text',
				'required'  => array('footer-logo-type', '=', 'logo-text'),
				'title'    	=> __('Logo text', 'hewo'),
				'default'   => 'HELLO WORLD'
			),			
			array(
				'id'          => 'footer-logo-type-text-font',
				'type'        => 'typography', 
				'title'       => __('Logo font', 'hewo'),
				'required'  	=> array('footer-logo-type', '=', 'logo-text'),
				'google'         => true,
				'font-backup'    => true,
				'text-transform' => true,
				'letter-spacing' => true,
				'line-height'    => false,
				'units'          => 'px',
				'color'			=> false,
				'default'        => array(
					'font-family'    => 'Playfair Display',
					'font-size'      => '40px',
					'google'         => true,
					'font-weight'    => '400',
					'text-transform' => 'uppercase',
					'letter-spacing' => '0'
				),
				'output'      => array('.bottom-logo h1.logo')
			),

			array(
                    'id'         => 'footer-logo-type-text-color',
                    'title'      => __( 'Logo color', 'hewo' ),
                    'subtitle'   => __( 'Select color for logo text', 'hewo' ),
                    'required'  	=> array('footer-logo-type', '=', 'logo-text'),
                    'type'       => 'color',
                    'default'  	 => '#000',
					'transparent' => false,
					'output' 	 => array('color' => '.bottom-logo h1.logo a')
                ),
			array(
                'id' 		=> 'footer-logo-image',
                'type' 		=> 'media',
                'url' 		=> true,
                'title' 	=> __( 'Logo', 'hewo' ),
				'required'  => array('footer-logo-type', '=', 'logo-image'),
                'subtitle' 	=> __( 'Upload your logo here', 'hewo' ),
                'desc' 		=> __( 'Supported formats: .jpg .gif .png', 'hewo' ),
                'default'   => array( 'url' => ALITH_THEME_IMG_URL.'/logo.png' ),
            ),
            array(
					'id'     => 'section_end_footer_logo',
					'type'   => 'section',
					'class'  => 'alith-section-end',
					'indent' => false
			),
			//copyright
			array(
				'id'       => 'show_copyright_text',
				'type'     => 'switch', 
				'title'    => __('Show copyright text', 'hewo'),				
				'default'  => true,
			),
			array(
			    'id'               => 'copyright-text',
			    'required'  	=> array('show_copyright_text', '=', '1'),
			    'type'             => 'editor',
			    'title'            => __('Copyright Text', 'hewo'), 
			    'subtitle'         => __('Copyright in footer.', 'hewo'),
			    'default'          => 'Designed by Alithemes.com. Powerd by WordPress.',
			    'args'   => array(
			        'teeny'            => false,
			        'textarea_rows'    => 5
			    )
			),

					

        ) )
);