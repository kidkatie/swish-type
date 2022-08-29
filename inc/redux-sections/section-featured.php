<?php 
/* Home feature posts */
Redux::setSection( $opt_name , array(
        'icon'      => 'el el-star',
        'title'     => __( 'Home featured posts', 'hewo' ),
        'desc'     => __( 'These are options to modify and style home featured posts', 'hewo' ),
        'fields'    => array(
			array(
					'id'        => 'switch-featured',
					'type'      => 'switch',
					'title'     => __('Featured posts on homepage', 'hewo'),
					'default'   =>  1,
					'on'        => 'Enable',
					'off'       => 'Disable',
				),
			array(
                'id'        => 'home_featured_position',
                'type'      => 'image_select',
				'required'  	=> array('switch-featured', '=', '1'),
                'title'     => __( 'Home Featured Position', 'hewo' ),
                'subtitle'  => __( 'Choose Home Featured Position', 'hewo' ),
                'options'   => featured_position_options(),
                'default'   => 'small',				
            ),
            array(
                'id'        => 'home_featured_layout',
                'type'      => 'image_select',
				'required'  	=> array('switch-featured', '=', '1'),
                'title'     => __( 'Home Featured Layout', 'hewo' ),
                'subtitle'  => __( 'Choose Home Featured Layout', 'hewo' ),
                'options'   => featured_layout_options(),
                'default'   => 'slider',
				
            ),
			array(
				'id'       => 'home-featured-source',
				'type'     => 'radio',
				'title'    => __('Post source', 'hewo'), 
				'subtitle' => __('Get post from', 'hewo'),
				'required'  	=> array('switch-featured', '=', '1'),
				'options'  => array(
					'all' 			=> 'All posts', 
					'sticky' 		=> 'Sticky posts', 
					'categories' 	=> 'From categories'
				),
				'default' => 'categories'
			), 
			array(
				'id'       		=> 'home-featured-categories',
				'type'    		=> 'select',
				'required'  	=> array('home-featured-source', '=', 'categories'),
				'data'     		=> 'category',
				'placeholder' 	=> __( 'Select categories', 'hewo' ),
				'multi'    		=> true,
				'title'    		=> __( 'Filter posts by Category', 'hewo' ),				
				'subtitle'     	=> __( 'Selected categories in this field will show up their posts in the featured posts module', 'hewo' ),
			), 
			array(
				'id'       		=> 'home-featured-number',
				'type'     		=> 'text',				
				'title' 		=> __('Number of posts to show', 'hewo'),
				'required'  	=> array('switch-featured', '=', '1'),
				'validate' 		=> 'numeric',
				'msg'      		=> 'you have to enter a number',
				'default'  		=> '4'
			),
			
			array(
				'id'       		=> 'home-featured-dimensions',
				'type'     		=> 'dimensions',
				'required'  	=> array('switch-featured', '=', '1'),
				'units'    		=> array('px','em'),
				'title'    		=> __('Image size', 'hewo'),
				'subtitle' 		=> __('Default is 1170px * 500px', 'hewo'),
				'desc'     		=> __('Enter the number or leave it blank if you want show the original size.', 'hewo'),
				'default'  		=> array(
					'width'   	=> '1170', 
					'height'  	=> '870'
				),
				'min'			=> '100'
			),
        ) )
);