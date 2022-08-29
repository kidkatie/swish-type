<?php
/* Layouts */
Redux::setSection( $opt_name, array(
		'id'               => 'layout_setting',
        'title'            => __( 'Layouts settting', 'hewo' ),        
        'desc'             => __( 'Layout setting for post, page, homepage...', 'hewo' ),
        'icon'             => 'el el-th'
    ) );
/* Homepage */
Redux::setSection( $opt_name, array(
		'id'               => 'layout_homepage',
        'title'            => __( 'Homepage layout', 'hewo' ),        
        'subsection'       => true,
        'fields'           => array(
			array(
				'id'       => 'display_latest_posts',
				'type'     => 'switch', 
				'title'    => __('Display latest posts on homepage?', 'hewo'),				
				'default'  => true,
			),
			array(
				'id'       	=> 'latest_posts-title',
				'type'     	=> 'text',
				'required'  => array('display_latest_posts', '=', '1'),
				'title'    	=> __('Latest post title', 'hewo'),
				'default'   => 'Recent Posts'
			),			
			array(
				'id'          => 'latest_posts-title-font',
				'type'        => 'typography', 
				'title'       => __('Latest post title font', 'hewo'),
				'required'  => array('display_latest_posts', '=', '1'),
				'google'         => true,
				'font-backup'    => true,
				'text-transform' => true,
				'letter-spacing' => true,
				'line-height'    => false,
				'units'          => 'px',
				'color'			=> false,
				'default'        => array(
					'font-family'    => 'Playfair Display',
					'font-size'      => '50px',
					'google'         => true,
					'font-weight'    => '400',
					'text-transform' => 'uppercase',
					'letter-spacing' => '0px'
				),
				'output'      => array('.alith_heading_patern_2')
			),

            array(
                'id'        => 'layout_homepage_opt',
                'type'      => 'image_select',
                'title'     => __( 'Homepage posts layouts', 'hewo' ),                
                'options'   => homepage_layout_options(),
                'default'   => 'list',
				'required'  	=> array('display_latest_posts', '=', '1'),
            ),
            array(
                'id'        => 'masonry_layout_column_opt',
                'type'      => 'image_select',
                'title'     => __( 'Masonry Columns', 'hewo' ),                
                'options'   => masonry_layout_column(),
                'default'   => 'two',
				'required'  	=> array('layout_homepage_opt', '=', 'masonry'),
            ),
			array(
                'id'        => 'homepage_sidebar_opt',
                'type'      => 'image_select',
                'title'     => __( 'Sidebar position', 'hewo' ),                
                'options'   => sidebar_options(),
                'default'   => 'sidebar_right',
            ),		
        )
    ) );
/* Archive */
Redux::setSection( $opt_name, array(                
        'id'               => 'layout_archive',
		'title'            => __( 'Archive layout', 'hewo' ),
        'subsection'       => true,
        'fields'           => array(
            array(
                'id'        => 'layout_archive_opt',
                'type'      => 'image_select',
                'title'     => __( 'Archive posts layout', 'hewo' ), 
				'subtitle'  => __( 'Select a layout for category posts.', 'hewo' ),
                'options'   => archive_layout_options(),
                'default'   => 'grid',
            ),
            array(
                'id'        => 'masonry_layout_column_opt',
                'type'      => 'image_select',
                'title'     => __( 'Masonry Columns', 'hewo' ),                
                'options'   => masonry_layout_column(),
                'default'   => 'two',
				'required'  	=> array('layout_archive_opt', '=', 'masonry'),
            ),
			array(
                'id'        => 'archive_sidebar_opt',
                'type'      => 'image_select',
                'title'     => __( 'Sidebar position', 'hewo' ), 
				'subtitle'  => __( 'Select the sidebar position', 'hewo' ),
                'options'   => sidebar_options(),
                'default'   => 'sidebar_right',
            ),
			array(
				'id'       => 'archive_header',
				'type'     => 'switch', 
				'title'    => __('Display archive header', 'hewo'),				
				'default'  => true,
			),
			array(
				'id'       => 'archive_breadcrumb',
				'type'     => 'switch', 
				'title'    => __('Display archive breadcrumb', 'hewo'),				
				'default'  => true,
				'required' => array('archive_header', '=', '1'), 
			),
			array(
				'id'       => 'archive_title',
				'type'     => 'switch', 
				'title'    => __('Display archive title', 'hewo'),				
				'default'  => true,
				'required' => array('archive_header', '=', '1'), 
			),
			
        )
    ) );
/* Single */
Redux::setSection( $opt_name, array(                
        'id'               => 'layout_single',
		'title'            => __( 'Single Post layout', 'hewo' ),
        'subsection'       => true,
        'fields'           => array(
			array(
                'id'        => 'single_sidebar_opt',
                'type'      => 'image_select',
                'title'     => __( 'Sidebar position', 'hewo' ), 
				'subtitle'  => __( 'Select the default sidebar position', 'hewo' ),
                'options'   => sidebar_options(),
                'default'   => 'sidebar_right',
            ),
			array(
				'id'       	=> 'single_metabox',
				'type'     	=> 'switch', 
				'title'    	=> __('Display metabox', 'hewo'),				
				'subtitle'  => __('Date time, comment, author...', 'hewo'),				
				'default'  	=> true,
			),
			array(
				'id'       => 'single_breadcrumb',
				'type'     => 'switch', 
				'title'    => __('Display breadcrumb', 'hewo'),				
				'default'  => true,
			),
			array(
				'id'       => 'single_navigation',
				'type'     => 'switch', 
				'title'    => __('Display Navigation', 'hewo'),	
				'subtitle'  => __( 'Next / Preview post', 'hewo' ),				
				'default'  => true,
			),
			array(
				'id'       => 'single_share',
				'type'     => 'switch', 
				'title'    => __('Display Social Share button', 'hewo'),				
				'default'  => true,
			),
			array(
				'id'       => 'single_author',
				'type'     => 'switch', 
				'title'    => __('Display Author box', 'hewo'),	
				'subtitle'  => __( 'Author description', 'hewo' ),				
				'default'  => true,
			),			
			array(
				'id'       => 'single_related',
				'type'     => 'switch', 
				'title'    => __('Display Related posts', 'hewo'),			
				'default'  => true,
			),
			array(
				'id'       => 'single_comment',
				'type'     => 'switch', 
				'title'    => __('Display Comment box', 'hewo'),			
				'default'  => true,
			),
			array(
				'id'       => 'single_dropcap',
				'type'     => 'switch', 
				'title'    => __('Display Dropcap', 'hewo'),			
				'default'  => false,
			),
        )
    ) );
/* Single Page */
Redux::setSection( $opt_name, array(                
        'id'               => 'layout_page',
		'title'            => __( 'Single Page layout', 'hewo' ),
        'subsection'       => true,
        'fields'           => array(
			array(
                'id'        => 'page_sidebar_opt',
                'type'      => 'image_select',
                'title'     => __( 'Sidebar position', 'hewo' ), 
				'subtitle'  => __( 'Select the default sidebar position', 'hewo' ),
                'options'   => sidebar_options(),
                'default'   => 'sidebar_right',
            ),
			array(
				'id'       	=> 'page_metabox',
				'type'     	=> 'switch', 
				'title'    	=> __('Display metabox', 'hewo'),				
				'subtitle'  => __('Date time, comment, author...', 'hewo'),				
				'default'  	=> true,
			),
			array(
				'id'       	=> 'page_dropcap',
				'type'     	=> 'switch', 
				'title'    	=> __('Display dropcap', 'hewo'),			
				'default'  	=> false,
			),
			array(
				'id'       => 'page_breadcrumb',
				'type'     => 'switch', 
				'title'    => __('Display breadcrumb', 'hewo'),				
				'default'  => false,
			),
			array(
				'id'       => 'page_share',
				'type'     => 'switch', 
				'title'    => __('Display Social share button', 'hewo'),				
				'default'  => true,
			),
			array(
				'id'       => 'page_author',
				'type'     => 'switch', 
				'title'    => __('Display Author box', 'hewo'),	
				'subtitle'  => __( 'Author description', 'hewo' ),				
				'default'  => false,
			),
			array(
				'id'       => 'page_comment',
				'type'     => 'switch', 
				'title'    => __('Display Comment box', 'hewo'),				
				'default'  => true,
			),
        )
    ) );

