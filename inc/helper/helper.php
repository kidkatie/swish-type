<?php 
// Prevent direct file access
if ( ! defined ( 'ABSPATH' ) ) {
	exit;
}
/* 	Get theme option function */
if ( !function_exists( 'alith_get_option' ) ) {
	function alith_get_option( $option ) {
		global $alith_settings;

		if ( empty( $alith_settings ) ) {
			if (empty(get_option( 'alith_option' ))) {
				$alith_settings = hewo_option_default_config();
			} else {
				$alith_settings = get_option( 'alith_option' );
			}			
		}

		if ( isset( $alith_settings[$option] ) ) {
			return $alith_settings[$option];
		} else {
			return false;
		}
	}
}

/* 	Update theme option function */
if ( !function_exists( 'alith_update_option' ) ){
	function alith_update_option( $key = false, $value = false ) {
		global $Redux_Options;
		if ( !empty( $key ) ) {
			$Redux_Options->set( $key, $value );
		}
	}
}

/* Get homepage layout options */
if ( !function_exists( 'homepage_layout_options' ) ) {
	function homepage_layout_options() {
		$homepage_layout = array();
		$homepage_layout['list'] = array(
			'title' => __( 'List', 'hewo' ),
			'img' => ALITH_THEME_IMG_URL . '/admin/layout-list.png'
		);
		$homepage_layout['grid'] = array(
			'title' => __( 'Grid', 'hewo' ),
			'img' => ALITH_THEME_IMG_URL . '/admin/layout-grid.png'
		);
		$homepage_layout['masonry'] = array(
			'title' => __( 'Masonry', 'hewo' ),
			'img' => ALITH_THEME_IMG_URL . '/admin/layout-grid-3.png'
		);
		$homepage_layout['big_thumb'] = array(
			'title' => __( 'Big Thumbnail', 'hewo' ),
			'img' => ALITH_THEME_IMG_URL . '/admin/layout-big-thumb.png'
		);
		return $homepage_layout;
	}
}

/* Get Masonry layout column options */
if ( !function_exists( 'masonry_layout_column' ) ) {
	function masonry_layout_column() {
		$masonry_layout_column = array();
		$masonry_layout_column['two'] = array(
			'title' => __( 'Two columns', 'hewo' ),
			'img' => ALITH_THEME_IMG_URL . '/admin/column-2.png'
		);
		$masonry_layout_column['three'] = array(
			'title' => __( 'Three columns', 'hewo' ),
			'img' => ALITH_THEME_IMG_URL . '/admin/column-3.png'
		);
		$masonry_layout_column['four'] = array(
			'title' => __( 'Four columns', 'hewo' ),
			'img' => ALITH_THEME_IMG_URL . '/admin/column-4.png'
		);		
		return $masonry_layout_column;
	}
}

/* Get sidebar position options */
if ( !function_exists( 'sidebar_options' ) ) {
	function sidebar_options() {
		$homepage_sidebar = array();		
		$homepage_sidebar['sidebar_left'] = array(
			'title' => __( 'Left', 'hewo' ),
			'img' => ALITH_THEME_IMG_URL . '/admin/sidebar_left.png'
		);
		$homepage_sidebar['sidebar_right'] = array(
			'title' => __( 'Right', 'hewo' ),
			'img' => ALITH_THEME_IMG_URL . '/admin/sidebar_right.png'
		);
		$homepage_sidebar['sidebar_none'] = array(
			'title' => __( 'None', 'hewo' ),
			'img' => ALITH_THEME_IMG_URL . '/admin/sidebar_none.png'
		);				
		return $homepage_sidebar;
	}
}

/* Get featured position */
if ( !function_exists( 'featured_position_options' ) ) {
	function featured_position_options() {
		$featured_position = array();
		$featured_position['small'] = array(
			'title' => __( 'Small', 'hewo' ),
			'img' => ALITH_THEME_IMG_URL . '/admin/featured_position_small.png'
		);
		$featured_position['big'] = array(
			'title' => __( 'Big', 'hewo' ),
			'img' => ALITH_THEME_IMG_URL . '/admin/featured_position_big.png'
		);
				
		return $featured_position;
	}
}

/* Get featured layout options */
if ( !function_exists( 'featured_layout_options' ) ) {
	function featured_layout_options() {
		$featured_layout = array();
		$featured_layout['slider'] = array(
			'title' => __( 'Slider', 'hewo' ),
			'img' => ALITH_THEME_IMG_URL . '/admin/featured_slider.png'
		);
		$featured_layout['slide_full'] = array(
			'title' => __( 'Full Slide', 'hewo' ),
			'img' => ALITH_THEME_IMG_URL . '/admin/featured_slide_full.png'
		);
		$featured_layout['grid'] = array(
			'title' => __( 'Grid', 'hewo' ),
			'img' => ALITH_THEME_IMG_URL . '/admin/featured_grid.png'
		);
		$featured_layout['carausel'] = array(
			'title' => __( 'Carausel', 'hewo' ),
			'img' => ALITH_THEME_IMG_URL . '/admin/featured_carausel.png'
		);		
		return $featured_layout;
	}
}

/* Get archive layout options */
if ( !function_exists( 'archive_layout_options' ) ) {
	function archive_layout_options() {
		$archive_layout = array();
		$archive_layout['list'] = array(
			'title' => __( 'List', 'hewo' ),
			'img' => ALITH_THEME_IMG_URL . '/admin/layout-list.png'
		);
		$archive_layout['grid'] = array(
			'title' => __( 'Grid', 'hewo' ),
			'img' => ALITH_THEME_IMG_URL . '/admin/layout-grid.png'
		);
		$archive_layout['masonry'] = array(
			'title' => __( 'Masonry', 'hewo' ),
			'img' => ALITH_THEME_IMG_URL . '/admin/layout-grid-3.png'
		);
		$archive_layout['big_thumb'] = array(
			'title' => __( 'Big Thumbnail', 'hewo' ),
			'img' => ALITH_THEME_IMG_URL . '/admin/layout-big-thumb.png'
		);
		return $archive_layout;
	}
}
/*column gap*/
if ( !function_exists( 'alith_get_column_gap_options' ) ) {
function alith_get_column_gap_options() {
	return apply_filters( 'alith_get_column_gap_options', array(
			'0px' => '0',
			'1'   => '1',
			'5'   => '5',
			'10'  => '10',
			'20'  => '20',
			'30'  => '30',
			'40'  => '40',
			'50'  => '50',
			'60'  => '60',
		) );
	}
}
if ( !function_exists( 'alith_get_column_options' ) ) {
function alith_get_column_options() {
	return apply_filters( 'alith_get_column_options', array( '1', '2', '3', '4', '5', '6', '8', '9', '10' ) );
}
}

/*instagram*/
if ( !function_exists( 'alith_fetch_instagram_feed' ) ) {
function alith_fetch_instagram_feed( $username = '', $slice = 4 ) {

	$username           = strtolower( $username );
	$sanitized_username = sanitize_title_with_dashes( $username );
	$transient_name     = 'alith-instagram-feed-'. $sanitized_username;
	$instagram          = get_transient( $transient_name );

	if ( ! empty( $_GET['alith_clear_transients'] ) ) {
		$instagram = delete_transient( $transient_name );
	}

	if ( ! $instagram ) {

		$remote = wp_remote_get( 'http://instagram.com/'. trim( $username ) );

		if ( is_wp_error( $remote ) ) {
			return new WP_Error( 'site_down', esc_html__( 'Unable to communicate with Instagram.', 'hewo' ) );
		}

		if ( 200 != wp_remote_retrieve_response_code( $remote ) ) {
			return new WP_Error( 'invalid_response', esc_html__( 'Instagram did not return a 200.', 'hewo' ) );
		}

		$shards      = explode( 'window._sharedData = ', $remote['body'] );
		$insta_json  = explode( ';</script>', $shards[1] );
		$insta_array = json_decode( $insta_json[0], TRUE );

		if ( ! $insta_array ) {
			return new WP_Error( 'bad_json', esc_html__( 'Instagram has returned invalid data.', 'hewo' ) );
		}

		// Old style
		if ( isset( $insta_array['entry_data']['UserProfile'][0]['userMedia'] ) ) {
			$images = $insta_array['entry_data']['UserProfile'][0]['userMedia'];
			$type = 'old';

		}

		// New style
		elseif ( isset( $insta_array['entry_data']['ProfilePage'][0]['user']['media']['nodes'] ) ) {
			$images = $insta_array['entry_data']['ProfilePage'][0]['user']['media']['nodes'];
			$type = 'new';
		}

		// Invalid json data
		else {
			return new WP_Error( 'bad_json_2', esc_html__( 'Instagram has returned invalid data.', 'hewo' ) );
		}

		// Invalid data
		if ( ! is_array( $images ) ) {
			return new WP_Error( 'bad_array', esc_html__( 'Instagram has returned invalid data.', 'hewo' ) );
		}

		$instagram = array();

		switch ( $type ) {

			case 'old':

				foreach ( $images as $image ) {

					if ( $image['user']['username'] == $username ) {
						$image['link'] = preg_replace( "/^http:/i", "", $image['link'] );
						$image['images']['thumbnail'] = preg_replace( "/^http:/i", "", $image['images']['thumbnail'] );
						$image['images']['standard_resolution'] = preg_replace( "/^http:/i", "", $image['images']['standard_resolution'] );
						$image['images']['low_resolution'] = preg_replace( "/^http:/i", "", $image['images']['low_resolution'] );
						$instagram[] = array(
							'description' => $image['caption']['text'],
							'link'        => $image['link'],
							'time'        => $image['created_time'],
							'comments'    => $image['comments']['count'],
							'likes'       => $image['likes']['count'],
							'thumbnail'   => $image['images']['thumbnail'],
							'large'       => $image['images']['standard_resolution'],
							'small'       => $image['images']['low_resolution'],
							'type'        => $image['type'],
						);
					}
				}

			break;

			default:

				foreach ( $images as $image ) {

					$image['thumbnail_src'] = preg_replace( '/^https?\:/i', '', $image['thumbnail_src'] );
					$image['display_src'] = preg_replace( '/^https?\:/i', '', $image['display_src'] );

					$image['thumbnail_src'] = preg_replace( '/^https?\:/i', '', $image['thumbnail_src'] );
					$image['display_src'] = preg_replace( '/^https?\:/i', '', $image['display_src'] );

					// handle both types of CDN url
					if ( (strpos( $image['thumbnail_src'], 's640x640' ) !== false ) ) {
						$image['thumbnail'] = str_replace( 's640x640', 's160x160', $image['thumbnail_src'] );
						$image['small'] = str_replace( 's640x640', 's320x320', $image['thumbnail_src'] );
					} else {
						$urlparts = wp_parse_url( $image['thumbnail_src'] );
						$pathparts = explode( '/', $urlparts['path'] );
						array_splice( $pathparts, 3, 0, array( 's160x160' ) );
						$image['thumbnail'] = '//' . $urlparts['host'] . implode('/', $pathparts);
						$pathparts[3] = 's320x320';
						$image['small'] = '//' . $urlparts['host'] . implode('/', $pathparts);
					}

					$image['large'] = $image['thumbnail_src'];

					if ( $image['is_video'] == true ) {
						$type = 'video';
					} else {
						$type = 'image';
					}

					$instagram[] = array(
						'description'   => esc_html__( 'Instagram Image', 'hewo' ),
						'link'		    => '//instagram.com/p/' . $image['code'],
						'time'		    => $image['date'],
						'comments'	    => $image['comments']['count'],
						'likes'		    => $image['likes']['count'],
						'thumbnail_src' => isset( $image['thumbnail_src'] ) ? $image['thumbnail_src'] : '',
						'display_src'   => $image['display_src'],
						'thumbnail'	 	=> $image['thumbnail'],
						'small'         => $image['small'],
						'large'         => $image['large'],
						'original'      => $image['display_src'],
						'type'          => $type,
					);

				}

			break;

		}

		// Set transient if not empty
		if ( ! empty( $instagram ) ) {
			$instagram = serialize( $instagram );
			set_transient(
				$transient_name,
				$instagram,
				apply_filters( 'alith_instagram_widget_cache_time', HOUR_IN_SECONDS*2 )
			);
		}

	}

	// Return array
	if ( ! empty( $instagram )  ) {
		if ( ! is_array( $instagram ) ) {
			$instagram = unserialize( $instagram );
		}
		if ( is_array( $instagram ) ) {
			return array_slice( $instagram, 0, $slice );
		}
	}

	// No images returned
	else {

		return new WP_Error( 'no_images', esc_html__( 'Instagram did not return any images.', 'hewo' ) );

	}

}
}

/***Custom comment fields****/
if ( ! function_exists( 'alith_theme_comment_fields' ) ) {
	function alith_theme_comment_fields( $fields ) {
		$commenter = wp_get_current_commenter();
		$req       = get_option( 'require_name_email' );
		$label     = $req ? '*' : ' ' . esc_html__( '(optional)', 'hewo' );
		$aria_req  = $req ? "aria-required='true'" : '';
		$fields['author'] =
			'<div class="row"><div class="comment-form-author col-sm-12 col-md-6"><p>
				<label for="author">' . esc_html__( 'Name', 'hewo' ) . $label . '</label>
				<input id="author" name="author" type="text" placeholder="' . esc_attr__( 'Your name *', 'hewo' ) . '" value="' . esc_attr( $commenter['comment_author'] ) .
			'" size="30" ' . $aria_req . ' />
			</p></div>';
		$fields['email'] =
			'<div class="comment-form-email col-sm-12 col-md-6"><p>
				<label for="email">' . esc_html__( 'Email', 'hewo' ) . $label . '</label>
				<input id="email" name="email" type="email" placeholder="' . esc_attr__( 'Email *', 'hewo' ) . '" value="' . esc_attr( $commenter['comment_author_email'] ) .
			'" size="30" ' . $aria_req . ' />
			</p></div></div>';		
			
		unset($fields['url']);		
		return $fields;
	}
}
add_filter( 'comment_form_default_fields', 'alith_theme_comment_fields' );

/**
 * Comment Form Placeholder Comment Field
 */
if ( ! function_exists( 'placeholder_comment_form_field' ) ) {
	 function placeholder_comment_form_field($fields) {
	    $replace_comment = esc_attr__('Your Comment', 'hewo');
	     
	    $fields['comment_field'] = '<p class="comment-form-comment"><label for="comment">' . esc_attr__( 'Comment', 'hewo' ) .
	    '</label><textarea id="comment" name="comment" cols="45" rows="8" placeholder="'.$replace_comment.'" aria-required="true"></textarea></p>';
	    
	    return $fields;
	 }
	add_filter( 'comment_form_defaults', 'placeholder_comment_form_field' );
}
/**
* Get image from content if no has thumbnail
**/
if ( ! function_exists( 'get_img_url' ) ) {
	function get_img_url($post_content) {
			
			$image  = '';
			if(!empty($post_content)){	
				preg_match_all( '|<img.*?src=[\'"](.*?)[\'"].*?>|i', $post_content, $matches );
			}
		
			if ( preg_match_all( '|<img.*?src=[\'"](.*?)[\'"].*?>|i', $post_content, $matches ) ) $image = $matches[1][0];
			
			return $image;
	}
}
if ( ! function_exists( 'get_new_img_url' ) ) {	
	function get_new_img_url($imgUrl, $width = 0, $heigt = 0 ,	$suffixes = '-alith-slider-'){
			$suffixes = $suffixes . $width . 'x'. $heigt;
		
			//get name of current image
			preg_match("/[^\/|\\\]+$/", $imgUrl, $currentName);
			$currentName = $currentName[0];
		
			//create new name for image basa on old name
			$tmpFileName = explode('.', $currentName);
			$newFileName = $tmpFileName[0] . $suffixes . '.' . $tmpFileName[1];
		
			//convert URL to PATH
			$tmp 	= explode('/wp-content/', $imgUrl);
			$imgDir = ABSPATH.'wp-content/' . $tmp[1];
		
		
			$newImgDir = str_replace($currentName, $newFileName, $imgDir);
			if(!file_exists($newImgDir)){			
				$wpImageEditor =  wp_get_image_editor( $imgDir);
				if ( ! is_wp_error( $wpImageEditor ) ) {
					$wpImageEditor->resize($width, $heigt, array('center','center'));
					$wpImageEditor->save( $newImgDir);
				}
			}
			$newImgUrl= str_replace($currentName, $newFileName, $imgUrl);
		
			return $newImgUrl;
	}
}

if ( ! function_exists( 'alith_get_social_profile' ) ) {
	function alith_get_social_profile() {
		$social_profile = array();
		$social_profile['facebook']   = alith_get_option( 'social_facebook' );
		$social_profile['twitter']    = alith_get_option( 'social_twitter' );
		$social_profile['googleplus'] = alith_get_option( 'social_googleplus' );
		$social_profile['pinterest']  = alith_get_option( 'social_pinterest' );
		$social_profile['linkedin']   = alith_get_option( 'social_linkedin' );
		$social_profile['tumblr']     = alith_get_option( 'social_tumblr' );
		$social_profile['flickr']     = alith_get_option( 'social_flickr' );
		$social_profile['instagram']  = alith_get_option( 'social_instagram' );
		$social_profile['skype']      = alith_get_option( 'social_skype' );
		$social_profile['snapchat']   = alith_get_option( 'social_snapchat' );		
		$social_profile['youtube']    = alith_get_option( 'social_youtube' );		
		$social_profile['digg']       = alith_get_option( 'social_digg' );
		$social_profile['dribbble']   = alith_get_option( 'social_dribbble' );
		$social_profile['soundcloud'] = alith_get_option( 'social_soundcloud' );
		$social_profile['vimeo']      = alith_get_option( 'social_vimeo' );
		$social_profile['reddit']     = alith_get_option( 'social_reddit' );
        $social_profile['whatsapp']   = alith_get_option( 'social_whatsapp' );		
		$social_profile['rss']        = alith_get_option( 'social_rss' );
		return $social_profile;
	}
}

/**
 * Social network
 */
 if ( ! function_exists( 'alith_social_network_render' ) ) {
	
	function alith_social_network_render( $social_profiles, $new_tab = true) {

		//check empty
		if ( empty( $social_profiles ) ) {
			return false;
		}
		if ( $new_tab == true ) {
			$newtab = 'target="_blank"';
		} else {
			$newtab = '';
		}
		$class_name = array();
		$class_name[] = 'social-icon';
		$class_name = implode( ' ', $class_name );

		extract( shortcode_atts(
				array(
					'facebook'   => '',
					'twitter'    => '',
					'googleplus' => '',
					'pinterest'  => '',
					'linkedin'   => '',
					'tumblr'     => '',
					'flickr'     => '',
					'instagram'  => '',
					'skype'      => '',
					'snapchat'   => '',
					'youtube'    => '',
					'digg'       => '',
					'dribbble'   => '',
					'soundcloud' => '',
					'vimeo'      => '',
					'reddit'     => '',
					'whatsapp'   => '',
					'rss'        => '',
				), $social_profiles
			)
		);

		$str         = '';
		$str_content = '';

		if ( ! empty( $facebook ) ) {
			$str_content .= '<a class="facebook ' . $class_name . '" title="facebook" href="' . esc_url( $facebook ) . '" ' . $newtab . '><i class="fa fa-facebook" aria-hidden="true"></i></a>';
		}
		if ( ! empty( $twitter ) ) {
			$str_content .= '<a class="twitter ' . $class_name . '" title="twitter" href="' . esc_url( $twitter ) . '" ' . $newtab . '><i class="fa fa-twitter" aria-hidden="true"></i></a>';
		}
		if ( ! empty( $googleplus ) ) {
			$str_content .= '<a class="google-plus ' . $class_name . '" title="google+" href="' . esc_url( $googleplus ) . '" ' . $newtab . '><i class="fa fa-google" aria-hidden="true"></i></a>';
		}
		if ( ! empty( $pinterest ) ) {
			$str_content .= '<a class="pinterest ' . $class_name . '" title="pinterest" href="' . esc_url( $pinterest ) . '" ' . $newtab . '><i class="fa fa-pinterest" aria-hidden="true"></i></a>';
		}
		if ( ! empty( $linkedin ) ) {
			$str_content .= '<a class="linkedin ' . $class_name . '" title="linkedin" href="' . esc_url( $linkedin ) . '" ' . $newtab . '><i class="fa fa-linkedin" aria-hidden="true"></i></a>';
		}
		if ( ! empty( $tumblr ) ) {
			$str_content .= '<a class="tumblr ' . $class_name . '" title="tumblr" href="' . esc_url( $tumblr ) . '" ' . $newtab . '><i class="fa fa-tumblr" aria-hidden="true"></i></a>';
		}
		if ( ! empty( $flickr ) ) {
			$str_content .= '<a class="flickr ' . $class_name . '" title="flickr" href="' . esc_url( $flickr ) . '" ' . $newtab . '><i class="fa fa-flickr" aria-hidden="true"></i></a>';
		}
		if ( ! empty( $instagram ) ) {
			$str_content .= '<a class="instagram ' . $class_name . '" title="instagram" href="' . esc_url( $instagram ) . '" ' . $newtab . '><i class="fa fa-instagram" aria-hidden="true"></i></a>';
		}
		if ( ! empty( $skype ) ) {
			$str_content .= '<a class="skype ' . $class_name . '" title="skype" href="' . esc_url( $skype ) . '" ' . $newtab . '><i class="fa fa-skype" aria-hidden="true"></i></a>';
		}
		if ( ! empty( $snapchat ) ) {
			$str_content .= '<a class="snapchat ' . $class_name . '" title="snapchat" href="' . esc_url( $snapchat ) . '" ' . $newtab . '><i class="fa fa-snapchat-ghost" aria-hidden="true"></i></a>';
		}
		if ( ! empty( $youtube ) ) {
			$str_content .= '<a class="youtube ' . $class_name . '" title="youtube" href="' . esc_url( $youtube ) . '" ' . $newtab . '><i class="fa fa-youtube" aria-hidden="true"></i></a>';
		}
		if ( ! empty( $digg ) ) {
			$str_content .= '<a class="digg ' . $class_name . '" title="digg" href="' . esc_url( $digg ) . '" ' . $newtab . '><i class="fa fa-digg" aria-hidden="true"></i></a>';
		}
		if ( ! empty( $dribbble ) ) {
			$str_content .= '<a class="dribbble ' . $class_name . '" title="dribbble" href="' . esc_url( $dribbble ) . '" ' . $newtab . '><i class="fa fa-dribbble" aria-hidden="true"></i></a>';
		}
		if ( ! empty( $soundcloud ) ) {
			$str_content .= '<a class="soundcloud ' . $class_name . '" title="soundcloud" href="' . esc_url( $soundcloud ) . '" ' . $newtab . '><i class="fa fa-soundcloud" aria-hidden="true"></i></a>';
		}
		if ( ! empty( $vimeo ) ) {
			$str_content .= '<a class="vimeo ' . $class_name . '" title="vimeo" href="' . esc_url( $vimeo ) . '" ' . $newtab . '><i class="fa fa-vimeo-square" aria-hidden="true"></i></a>';
		}
		if ( ! empty( $reddit ) ) {
			$str_content .= '<a class="reddit ' . $class_name . '" title="reddit" href="' . esc_url( $reddit ) . '" ' . $newtab . '><i class="fa fa-reddit" aria-hidden="true"></i></a>';
		}
		if ( ! empty( $whatsapp ) ) {
			$str_content .= '<a class="whatsapp ' . $class_name . '" title="whatsapp" href="' . esc_url( $whatsapp ) . '" ' . $newtab . '><i class="fa fa-whatsapp" aria-hidden="true"></i></a>';
		}
		if ( ! empty( $rss ) ) {
			$str_content .= '<a class="rss ' . $class_name . '" title="rss" href="' . esc_url( $rss ) . '" ' . $newtab . '><i class="fa fa-rss" aria-hidden="true"></i></a>';
		} 
		$str .= $str_content;
		return $str;
	}

}

/*Limit Excerpt*/
function alith_excerpt_limit($limit=150) {
	$excerpt = get_the_content();
	$excerpt = preg_replace(" ([.*?])",'',$excerpt);
	$excerpt = strip_shortcodes($excerpt);
	$excerpt = strip_tags($excerpt);
	$excerpt = substr($excerpt, 0, $limit);
	$excerpt = $excerpt.'...';
	return $excerpt;
}
function alith_title_limit($limit=200) {
	$title 	 = get_the_title();
	$title = preg_replace(" ([.*?])",'',$title);
	$title = strip_shortcodes($title);
	$title = strip_tags($title);
	$title = substr($title, 0, $limit);
	$title = $title;
	return $title;
}