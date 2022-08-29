<?php
/*============================================================================
	* TABLE CONTENT *
	01. DECLARE SOME CONSTANT
	02. ADD CSS FILE
	03. ADD JQUERY FILE
	04. THEME SUPPORT
	05. CONTENT WIDTH
	06. REGISTER MENUS 
	07. SOCIAL
	08. DECLARE THE WIDGETS AREA
	09. REGISTER GOOGLE FONTS
	10. QUICK TRANSLATION
	11. MEDIA RESULT
	12. ADD FEATURED IMAGE COLUMN
	13. BREADCRUMBS
	14. SINGLE PAGINATION
	15. COMMENT DISPLAY
	16. REQUIRED PLUGINS
============================================================================*/


/*============================================================================
 * DECLARE SOME CONSTANT
============================================================================*/

define( 'ALITH_THEME_VERSION', '1.0' );

define('ALITH_THEME_DIR', get_template_directory());
define('ALITH_THEME_URL', get_template_directory_uri());

define('ALITH_THEME_INC_DIR', ALITH_THEME_DIR . '/inc');
define('ALITH_THEME_JS_URL', ALITH_THEME_URL . '/assets/js');
define('ALITH_THEME_CSS_URL', ALITH_THEME_URL . '/assets/css');
define('ALITH_THEME_IMG_URL', ALITH_THEME_URL . '/assets/images');
define('ALITH_THEME_WIDGET_DIR', ALITH_THEME_DIR . '/inc/widgets');
define('ALITH_THEME_WIDGET_URL', ALITH_THEME_URL . '/inc/widgets');
define('ALITH_THEME_TEMPLATE_DIR', ALITH_THEME_DIR . '/tmpls');

/*Include extra files*/
require_once ALITH_THEME_INC_DIR . '/helper/helper.php';
require_once ALITH_THEME_INC_DIR . '/theme_options.php';
require_once ALITH_THEME_INC_DIR . '/theme_options_default.php';
require_once ALITH_THEME_INC_DIR . '/metaboxes/metabox.php';
require_once ALITH_THEME_INC_DIR . '/helper/class-tgm-plugin-activation.php';

$language_folder = ALITH_THEME_URL . '/languages';
load_theme_textdomain( 'hewo', $language_folder );

/*============================================================================
 * ADD CSS FILE
============================================================================*/
if ( ! function_exists( 'alith_theme_register_style' ) ) :
	function alith_theme_register_style(){	
		 	
		wp_enqueue_style('bootstrap', ALITH_THEME_CSS_URL . '/bootstrap.css',array(), ALITH_THEME_VERSION);				 	
		wp_enqueue_style('font-awesome', ALITH_THEME_CSS_URL . '/font-awesome.min.css',array(), ALITH_THEME_VERSION);
		wp_enqueue_style('animate', ALITH_THEME_CSS_URL . '/animate.css',array(), ALITH_THEME_VERSION); 
		wp_enqueue_style('owl-carousel', ALITH_THEME_CSS_URL . '/owl.carousel.css',array(), ALITH_THEME_VERSION);		
		wp_enqueue_style('owl-theme', ALITH_THEME_CSS_URL . '/owl.theme.default.css',array(), ALITH_THEME_VERSION);
		wp_enqueue_style('normalize', ALITH_THEME_CSS_URL . '/normalize.css',array(), ALITH_THEME_VERSION);
		wp_enqueue_style('slicknav', ALITH_THEME_CSS_URL . '/slicknav.min.css',array(), ALITH_THEME_VERSION);
		wp_enqueue_style('alith-main-style', ALITH_THEME_CSS_URL . '/main.css',array(), ALITH_THEME_VERSION);
		wp_enqueue_style('alith-responsive', ALITH_THEME_CSS_URL . '/responsive.css',array(), ALITH_THEME_VERSION); 

		if (alith_get_option('rtl_switch')):
			wp_enqueue_style('alith-rtl', ALITH_THEME_CSS_URL . '/rtl.css',array(), ALITH_THEME_VERSION);
		endif;
	}
	add_action('wp_enqueue_scripts', 'alith_theme_register_style');
endif;

/*============================================================================
 * ADD JQUERY FILE
============================================================================*/
if ( ! function_exists( 'alithemes_thistheme_register_js' ) ) :
	function alithemes_thistheme_register_js(){
		wp_enqueue_script('modernizr', ALITH_THEME_JS_URL . '/modernizr-3.5.0.min.js',array('jquery'), ALITH_THEME_VERSION,true);		
		wp_enqueue_script('waypoints', ALITH_THEME_JS_URL . '/jquery.waypoints.min.js',array('jquery'), ALITH_THEME_VERSION,true);
		wp_enqueue_script('slicknav', ALITH_THEME_JS_URL . '/jquery.slicknav.min.js',array('jquery'), ALITH_THEME_VERSION,true);
		wp_enqueue_script('masonry', ALITH_THEME_JS_URL . '/masonry.pkgd.min.js',array('jquery'), ALITH_THEME_VERSION,true);
		wp_enqueue_script('hewo-main-js', ALITH_THEME_JS_URL . '/main.js',array('jquery'), ALITH_THEME_VERSION,true);
		wp_enqueue_script('smart-sticky', ALITH_THEME_JS_URL . '/smart-sticky.js',array('jquery'), ALITH_THEME_VERSION,true);
		wp_enqueue_script('theia-sticky-sidebar', ALITH_THEME_JS_URL . '/theia-sticky-sidebar.js',array('jquery'), ALITH_THEME_VERSION,true);
		wp_enqueue_script('carousel', ALITH_THEME_JS_URL . '/owl.carousel.min.js',array('jquery'), ALITH_THEME_VERSION,true);	

		if(is_singular() && comments_open() ){ 	wp_enqueue_script('comment-reply');	}		
		
	}
	add_action('wp_enqueue_scripts', 'alithemes_thistheme_register_js');
endif;

/*============================================================================
 * DASHBOARD CSS AND SCRIPT
============================================================================*/
if ( ! function_exists( 'alith_hewo_register_script_backend' ) ) {
	function alith_hewo_register_script_backend( $hook ) {
		if ( $hook == 'post.php' || $hook == 'post-new.php' ) {
			wp_enqueue_script('alith_hewo_script_admin', ALITH_THEME_JS_URL . '/admin-script.js',array('jquery'), ALITH_THEME_VERSION,true);
			wp_enqueue_style('alith_hewo_style_admin', ALITH_THEME_CSS_URL . '/admin-style.css',array(), ALITH_THEME_VERSION);
		}
		wp_enqueue_style('redux-style', ALITH_THEME_CSS_URL . '/redux-style.css',array(),ALITH_THEME_VERSION); //REDUX framework style
	}

	if ( is_admin() ) {
		add_action( 'admin_enqueue_scripts', 'alith_hewo_register_script_backend' );
	}
};

/*============================================================================
* THEME SUPPORT
============================================================================*/
if ( ! function_exists( 'alith_theme_support' ) ) :
	function alith_theme_support(){
		add_theme_support('post-formats', array('quote','image','gallery','video','audio'));
		add_theme_support('post-thumbnails');
		add_theme_support('html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));
		add_theme_support('title-tag');	
		add_theme_support('automatic-feed-links');
		add_theme_support('custom-background');
		add_theme_support('custom-header');
		add_editor_style();
		//Gutenberg
		add_theme_support( 'align-wide' );
		add_theme_support( 'wp-block-styles' );


	}
endif;
add_action('after_setup_theme', 'alith_theme_support');
/*============================================================================
	* CONTENT WIDTH 
============================================================================*/
global $content_width;
if ( ! isset( $content_width ) ) {
	$content_width = absint(alith_get_option('boxed_max_width')) ? absint(alith_get_option('boxed_max_width')) : 1170;
}
/*============================================================================
	* REGISTER MENUS
============================================================================*/
if ( ! function_exists( 'alith_theme_register_menus' ) ) :
	function alith_theme_register_menus(){
		register_nav_menus(
		array(
			'main-menu' 	=> esc_html__('Main menu', 'hewo'),
			)
		);
	}
endif;
add_action('after_setup_theme', 'alith_theme_register_menus');
/*============================================================================
	* SOCIAL NETWORK
============================================================================*/
if (!function_exists('alith_social_array')){
function alith_social_array() {
    return array(
		'facebook'      =>	esc_html__('Facebook','hewo'),
		'twitter'              =>	esc_html__('Twitter','hewo'),
		'google-plus'          =>	esc_html__('Google+','hewo'),
		'linkedin'             =>	esc_html__('LinkedIn','hewo'),
		'tumblr'               =>	esc_html__('Tumblr','hewo'),
		'pinterest'            =>	esc_html__('Pinterest','hewo'),
		'youtube'              =>	esc_html__('YouTube','hewo'),
		'skype'                =>	esc_html__('Skype','hewo'),
		'instagram'            =>	esc_html__('Instagram','hewo'),
		'delicious'            =>	esc_html__('Delicious','hewo'),
		'digg'                 =>	esc_html__('Digg','hewo'),
		'reddit'               =>	esc_html__('Reddit','hewo'),
		'stumbleupon'          =>	esc_html__('StumbleUpon','hewo'),
        'medium'               =>	esc_html__('Medium','hewo'),
		'vimeo-square'         =>	esc_html__('Vimeo','hewo'),
		'yahoo'                =>	esc_html__('Yahoo!','hewo'),
		'flickr'               =>	esc_html__('Flickr','hewo'),
		'deviantart'           =>	esc_html__('DeviantArt','hewo'),
		'github'               =>	esc_html__('GitHub','hewo'),
		'stack-overflow'       =>	esc_html__('StackOverFlow','hewo'),
        'stack-exchange'       =>	esc_html__('Stack Exchange','hewo'),
        'bitbucket'            =>	esc_html__('Bitbucket','hewo'),
		'xing'                 =>	esc_html__('Xing','hewo'),
		'foursquare'           =>	esc_html__('Foursquare','hewo'),
		'paypal'               =>	esc_html__('Paypal','hewo'),
		'yelp'                 =>	esc_html__('Yelp','hewo'),
		'soundcloud'           =>	esc_html__('SoundCloud','hewo'),
		'lastfm'               =>	esc_html__('Last.fm','hewo'),
        'spotify'              =>	esc_html__('Spotify','hewo'),
        'slideshare'           =>	esc_html__('Slideshare','hewo'),
		'dribbble'             =>	esc_html__('Dribbble','hewo'),
		'steam'                =>	esc_html__('Steam','hewo'),
		'behance'              =>	esc_html__('Behance','hewo'),
		'weibo'                =>	esc_html__('Weibo','hewo'),
		'trello'               =>	esc_html__('Trello','hewo'),
		'vk'                   =>	esc_html__('VKontakte','hewo'),
		'home'                 =>	esc_html__('Homepage','hewo'),
		'envelope'             =>	esc_html__('Email','hewo'),
		'rss'                  =>	esc_html__('Feed','hewo'),
	);
}
}

/*============================================================================
 * DECLARE THE WIDGETS AREA
============================================================================*/
if ( ! function_exists( 'alith_theme_widgets_init' ) ) :
	function alith_theme_widgets_init(){
	//Sidebar
		register_sidebar(array(
			'name'          => esc_html__( 'The Sidebar', 'hewo' ),
			'id'            => 'sidebar-area',
			'description'   => esc_html__( 'The sidebar area', 'hewo' ),
			'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s clr">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="widget-title-cover"><h6 class="widget-title"><span>',
			'after_title'   => '</span></h6></div>'
			));
	//Headline content (after main navigation)
		register_sidebar(array(
			'name'          => esc_html__( 'Headline content', 'hewo' ),
			'id'            => 'headline-content-area',
			'description'   => esc_html__( 'Headline area', 'hewo' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<div class="widget-title-cover"><h5 class="widget-title"><span>',
			'after_title'   => '</span></h5></div>'
			));

		register_sidebar(array(
			'name'          => esc_html__( 'Before content', 'hewo' ),
			'id'            => 'before-content-area',
			'description'   => esc_html__( 'Before content area', 'hewo' ),
			'before_widget' => '<div id="%1$s" class="%2$s before-content">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="widget-title-cover"><h5 class="widget-title"><span>',
			'after_title'   => '</span></h5></div>'
			));
		register_sidebar(array(
			'name'          => esc_html__( 'After content', 'hewo' ),
			'id'            => 'after-content-area',
			'description'   => esc_html__( 'After content area', 'hewo' ),
			'before_widget' => '<div id="%1$s" class="%2$s after-content">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="widget-title-cover"><h5 class="widget-title"><span>',
			'after_title'   => '</span></h5></div>'
			));
		
	
	//Off canvas
		if (alith_get_option ('switch-display-offcanvas')):
			register_sidebar(array(
			'name'          => esc_html__( 'Off canvas', 'hewo' ),
			'id'            => 'sidebar-offcanvas-area',
			'description'   => esc_html__( 'Right toggle area', 'hewo' ),
			'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s clr">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="widget-title-cover"><h5 class="widget-title"><span>',
			'after_title'   => '</span></h5></div>'
			));
		endif;
		if (alith_get_option('switch_bottom_column')):
	//Footer #1
		register_sidebar(array(
			'name'          => esc_html__( 'Footer #1', 'hewo' ),
			'id'            => 'footer1-area',
			'description'   => esc_html__( 'Footer 1 area', 'hewo' ),
			'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s clr">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="widget-title-cover"><h6 class="widget-title"><span>',
			'after_title'   => '</span></h6></div>'
			));
	//Footer #2
		register_sidebar(array(
			'name'          => esc_html__( 'Footer #2', 'hewo' ),
			'id'            => 'footer2-area',
			'description'   => esc_html__( 'Footer 2 area', 'hewo' ),
			'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s clr">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="widget-title-cover"><h6 class="widget-title"><span>',
			'after_title'   => '</span></h6></div>'
			));
	//Footer #3
		register_sidebar(array(
			'name'          => esc_html__( 'Footer #3', 'hewo' ),
			'id'            => 'footer3-area',
			'description'   => esc_html__( 'Footer 3 area', 'hewo' ),
			'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s clr">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="widget-title-cover"><h6 class="widget-title"><span>',
			'after_title'   => '</span></h6></div>'
			));
	//Footer #4
		register_sidebar(array(
			'name'          => esc_html__( 'Footer #4', 'hewo' ),
			'id'            => 'footer4-area',
			'description'   => esc_html__( 'Footer 4 area', 'hewo' ),
			'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s clr">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="widget-title-cover"><h6 class="widget-title"><span>',
			'after_title'   => '</span></h6></div>'
			));
		endif;
}
add_action('widgets_init', 'alith_theme_widgets_init');
endif;


/* -------------------------------------------------------------------- */
/* MEDIA RESULT
/* -------------------------------------------------------------------- */
if (!function_exists('alith_theme_get_media')) {
function alith_theme_get_media($size = 'full') {
    
	// get data
	$type = get_post_format();	
	if ($type=='audio') $media_code = trim( get_post_meta( get_the_ID(), '_format_audio_embed' , true ) );
	elseif ($type=='video') $media_code = trim( get_post_meta( get_the_ID(), '_format_video_embed' , true ) );
	else $media_code = '';
	
	// return none
	if (!$media_code) return;
	
	// case url	
	// detect if self-hosted
	$url = $media_code;
	$parse = parse_url(home_url());
	$host = preg_replace('#^www\.(.+\.)#i', '$1', $parse['host']);
	$media_result = '';
	
	// not self-hosted
	if (strpos($url,$host)===false) {
		global $wp_embed;
		return $wp_embed->run_shortcode('[embed]' . $media_code . '[/embed]');
	
	// self-hosted	
	} else {
		if ($type=='video') {
			$args = array('src' => esc_url($url), 'width' => '750' );
			if ( has_post_thumbnail() ) {
				$full_src = wp_get_attachment_image_src( get_post_thumbnail_id() , $size );
				$args['poster'] = $full_src[0];
			}
			$media_result = '<div class="hosted-sc">'.wp_video_shortcode($args).'</div>';
		} elseif ($type=='audio') {
            
            if ( has_post_thumbnail() ) {
				$full_src = wp_get_attachment_image_src( get_post_thumbnail_id() , $size );
			}
            
			$media_result = '<figure class="audio-poster"><img src="'.esc_url($full_src[0]).'" width="'.$full_src[1].'" height="'.$full_src[2].'" alt="'.esc_attr(get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true)) .'" /></figure>' . wp_audio_shortcode(array('src' => esc_url($url)));
		}
	}
	
	return $media_result;
	
}
}

/* -------------------------------------------------------------------- */
/* ADD FEATURED IMAGE COLUMN
/* -------------------------------------------------------------------- */
function posts_columns( $columns ) {
	$columns['alith_theme_post_thumbs'] = esc_html__( 'Featured Image', 'hewo' );
	return $columns;
}
add_filter('manage_posts_columns' , 'posts_columns');
function posts_custom_columns( $column_name, $post_id ) {
	if ( $column_name != 'alith_theme_post_thumbs' ) {
		return;
	}
	if ( has_post_thumbnail( $post_id ) ) {
		$img_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'thumbnail', false );
		if ( ! empty( $img_src[0] ) ) { ?>
				<img src="<?php echo esc_url( $img_src[0] ); ?>" alt="<?php echo esc_attr( the_title_attribute( 'echo=0' ) ); ?>" />
			<?php
		}
	} else {
		echo '<img src="'.ALITH_THEME_IMG_URL.'/no-image.jpg" alt="no image" />';
	}
}
add_filter( 'manage_posts_custom_column' , 'posts_custom_columns', 10, 2 ); 

/* -------------------------------------------------------------------- */
/* BREADCRUMBS
/* -------------------------------------------------------------------- */

if ( ! function_exists( 'alith_theme_breadcrumbs' ) ) {
function alith_theme_breadcrumbs() {       
    // Settings
    $separator          = ' / ';
    $pre          		= esc_html__('','hewo');
    $breadcrums_id      = 'breadcrumbs';
    $breadcrums_class   = 'breadcrumbs';
    $home_title         =  esc_html__('Home', 'hewo');
    // If you have any custom post types with custom taxonomies, put the taxonomy name below (e.g. product_cat)
    $custom_taxonomy    = 'product_cat';
    // Get the query & post information
    global $post,$wp_query;
    // Do not display on the homepage
    if ( !is_front_page() ) {
        // Build the breadcrums
        echo '<ul id="' . $breadcrums_id . '" class="' . $breadcrums_class . '">';
        // Home page
        if (alith_get_option('bread_pre')) {
        	echo '<li class="item-home">'. $pre .'</li>';
        }

        echo '<li class="item-home"><i class="fa fa-home" aria-hidden="true"></i><a class="bread-link bread-home" href="' . home_url() . '" title="' . $home_title . '">' . $home_title . '</a></li>';
        echo '<li class="separator separator-home"> ' . $separator . ' </li>';
        if ( is_archive() && !is_tax() && !is_category() && !is_tag() ) {
            echo '<li class="item-current item-archive"><span class="bread-current bread-archive">' . get_the_archive_title() . '</span></li>';
        } else if ( is_archive() && is_tax() && !is_category() && !is_tag() ) {
            // If post is a custom post type
            $post_type = get_post_type();
            // If it is a custom post type display name and link
            if($post_type != 'post') {
                $post_type_object = get_post_type_object($post_type);
                $post_type_archive = get_post_type_archive_link($post_type);
                echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
                echo '<li class="separator"> ' . $separator . ' </li>';
            }
            $custom_tax_name = get_queried_object()->name;
            echo '<li class="item-current item-archive"><span class="bread-current bread-archive">' . $custom_tax_name . '</span></li>';
        } else if ( is_single() ) {
            // If post is a custom post type
            $post_type = get_post_type();
            // If it is a custom post type display name and link
            if($post_type != 'post') {
                $post_type_object = get_post_type_object($post_type);
                $post_type_archive = get_post_type_archive_link($post_type);
                echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
                echo '<li class="separator"> ' . $separator . ' </li>';
            }
            // Get post category info
			$last_category = '';
            $category = get_the_category();
            if(!empty($category)) {
                // Get last category post is in
				$vals = array_values($category);
				$last_category = end($vals);
                // Get parent any categories and create array
                $get_cat_parents = rtrim(get_category_parents($last_category->term_id, true, ','),',');
                $cat_parents = explode(',',$get_cat_parents);
                // Loop through parent categories and store in variable $cat_display
                $cat_display = '';
                foreach($cat_parents as $parents) {
                    $cat_display .= '<li class="item-cat">'.$parents.'</li>';
                    $cat_display .= '<li class="separator"> ' . $separator . ' </li>';
                }
            }
            // If it's a custom post type within a custom taxonomy
            $taxonomy_exists = taxonomy_exists($custom_taxonomy);
            if(empty($last_category) && !empty($custom_taxonomy) && $taxonomy_exists) {
                $taxonomy_terms = get_the_terms( $post->ID, $custom_taxonomy );
                $cat_id         = $taxonomy_terms[0]->term_id;
                $cat_nicename   = $taxonomy_terms[0]->slug;
                $cat_link       = get_term_link($taxonomy_terms[0]->term_id, $custom_taxonomy);
                $cat_name       = $taxonomy_terms[0]->name;
            }
            // Check if the post is in a category
            if(!empty($last_category)) {
                echo wp_kses($cat_display,'','');
                echo '<li class="item-current item-' . $post->ID . '"><span class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</span></li>';
            // Else if post is in a custom taxonomy
            } else if(!empty($cat_id)) {
                echo '<li class="item-cat item-cat-' . $cat_id . ' item-cat-' . $cat_nicename . '"><a class="bread-cat bread-cat-' . $cat_id . ' bread-cat-' . $cat_nicename . '" href="' . $cat_link . '" title="' . $cat_name . '">' . $cat_name . '</a></li>';
                echo '<li class="separator"> ' . $separator . ' </li>';
                echo '<li class="item-current item-' . $post->ID . '"><span class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</span></li>';
            } else {
                echo '<li class="item-current item-' . $post->ID . '"><span class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</span></li>';
            }
        } else if ( is_category() ) {
            // Category page
            echo '<li class="item-current item-cat"><span class="bread-current bread-cat">' . single_cat_title('', false) . '</span></li>';
        } else if ( is_page() ) {
            // Standard page
            if( $post->post_parent ){
                // If child page, get parents 
                $anc = get_post_ancestors( $post->ID );
                // Get parents in the right order
                $anc = array_reverse($anc);
                // Parent page loop
                if ( !isset( $parents ) ) $parents = null;
                foreach ( $anc as $ancestor ) {
                    $parents .= '<li class="item-parent item-parent-' . $ancestor . '"><a class="bread-parent bread-parent-' . $ancestor . '" href="' . get_permalink($ancestor) . '" title="' . get_the_title($ancestor) . '">' . get_the_title($ancestor) . '</a></li>';
                    $parents .= '<li class="separator separator-' . $ancestor . '"> ' . $separator . ' </li>';
                }
                // Display parent pages
               
                echo wp_kses($parents,'','');
                // Current page
                echo '<li class="item-current item-' . $post->ID . '"><span title="' . get_the_title() . '"> ' . get_the_title() . '</span></li>';
            } else {
                // Just display current page if not parents
                echo '<li class="item-current item-' . $post->ID . '"><span class="bread-current bread-' . $post->ID . '"> ' . get_the_title() . '</span></li>';
            }
        } else if ( is_tag() ) {
            // Tag page
            // Get tag information
            $term_id        = get_query_var('tag_id');
            $taxonomy       = 'post_tag';
            $args           = 'include=' . $term_id;
            $terms          = get_terms( $taxonomy, $args );
            $get_term_id    = $terms[0]->term_id;
            $get_term_slug  = $terms[0]->slug;
            $get_term_name  = $terms[0]->name;
            // Display the tag name
            echo '<li class="item-current item-tag-' . $get_term_id . ' item-tag-' . $get_term_slug . '"><span class="bread-current bread-tag-' . $get_term_id . ' bread-tag-' . $get_term_slug . '">' . $get_term_name . '</span></li>';
        } elseif ( is_day() ) {
            // Day archive
            // Year link
            echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';
            // Month link
            echo '<li class="item-month item-month-' . get_the_time('m') . '"><a class="bread-month bread-month-' . get_the_time('m') . '" href="' . get_month_link( get_the_time('Y'), get_the_time('m') ) . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('m') . '"> ' . $separator . ' </li>';
            // Day display
            echo '<li class="item-current item-' . get_the_time('j') . '"><span class="bread-current bread-' . get_the_time('j') . '"> ' . get_the_time('jS') . ' ' . get_the_time('M') . ' Archives</span></li>';
        } else if ( is_month() ) {
            // Month Archive
            // Year link
            echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';
            // Month display
            echo '<li class="item-month item-month-' . get_the_time('m') . '"><span class="bread-month bread-month-' . get_the_time('m') . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</span></li>';
        } else if ( is_year() ) {
            // Display year archive
            echo '<li class="item-current item-current-' . get_the_time('Y') . '"><span class="bread-current bread-current-' . get_the_time('Y') . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</span></li>';
        } else if ( is_author() ) {
            // Auhor archive
            // Get the author information
            global $author;
            $userdata = get_userdata( $author );
            // Display author name
            echo '<li class="item-current item-current-' . $userdata->user_nicename . '"><span class="bread-current bread-current-' . $userdata->user_nicename . '" title="' . $userdata->display_name . '">' . 'Author: ' . $userdata->display_name . '</span></li>';
        } else if ( get_query_var('paged') ) {
            // Paginated archives
            echo '<li class="item-current item-current-' . get_query_var('paged') . '"><span class="bread-current bread-current-' . get_query_var('paged') . '" title="Page ' . get_query_var('paged') . '">'.esc_html__('Page','hewo') . ' ' . get_query_var('paged') . '</span></li>';
        } else if ( is_search() ) {
            // Search results page
            echo '<li class="item-current item-current-' . get_search_query() . '"><span class="bread-current bread-current-' . get_search_query() . '" title="Search results for: ' . get_search_query() . '">Search results for: ' . get_search_query() . '</span></li>';
        } elseif ( is_404() ) {
            // 404 page
            echo '<li>' . 'Error 404' . '</li>';
        }
        echo '</ul>';
    }       
}
}

/*============================================================================
	* SINGLE PAGINATION
============================================================================*/
if ( ! function_exists( 'alith_theme_pagination' ) ) {
  function alith_theme_pagination() {
		$prev_post = get_adjacent_post(false, '', true);		
		if(!empty($prev_post)) {			
			?>			
			<div class="latest_style_2_item">
				<figure class="alith_news_img"><a href="<?php echo get_permalink($prev_post->ID); ?>"><?php  echo get_the_post_thumbnail( $prev_post->ID ) ;?></a></figure>
				<h6><a href="<?php echo get_permalink($prev_post->ID); ?>"><?php echo esc_js( $prev_post->post_title); ?></a></h6>				
			</div>
			<?php
		}

		$next_post = get_adjacent_post(false, '', false);		
		if(!empty($next_post)) {
			?>			
			<div class="latest_style_2_item">
				<figure class="alith_news_img"><a href="<?php echo get_permalink($next_post->ID); ?>"><?php echo get_the_post_thumbnail( $next_post->ID );?></a></figure>
				<h6><a href="<?php echo get_permalink($next_post->ID); ?>"><?php echo esc_js( $next_post->post_title ); ?></a></h6>				
			</div>
			<?php
		}
  }
}

/*============================================================================
 * COMMENT DISPLAY
============================================================================*/
if ( ! function_exists( 'alith_theme_comment' ) ) :
	function alith_theme_comment($comment, $args,$depth){
		global $post;
		$author_id = $post->post_author;
		switch ($comment->comment_type){
			//pingback - trackback
			case 'pingback':
			case 'trackback':
				?>
				<li id="comment-<?php comment_ID()?>"  <?php comment_class('clr');?>>
					<div class="pingback-entry">
						<span class="pingback-heading"><?php echo esc_html__('Pingback:','hewo')?></span>
						<?php comment_author_link();?>
					</div>
				<?php 
				break;
				case '':
				?>
			<li id="li-comment-<?php comment_ID()?>">
			<article id="comment-<?php comment_ID()?>" <?php comment_class('clr');?>	>
				<div class="comment-author vcard">
					<?php echo get_avatar($comment,60)?>
				</div>
				<div class="comment-details clr ">
					<header>
						<strong class="fn"> <?php comment_author(); ?> 
						<?php if($comment->user_id == $author_id):?>
						<span class="author-badge"><?php esc_html__('Author','hewo') ?></span>
						<?php endif;?>
						</strong> <span class="comment-date"><?php comment_date();?></time>
							 <?php esc_html__('at','hewo') ?><?php comment_time()?>
						</span>
					</header>
					<div class="comment-content entry clr">
						<?php comment_text();?>
					</div>
					<div class="reply comment-reply-link-div">
						<?php 
							$replyArr = array(
										'depth'=>$depth,
										'reply_text'=>esc_html__('Reply','hewo'),
										'max_depth' => $args['max_depth']
										);
							comment_reply_link($replyArr);
						?>
					</div>
				</div>
			</article> 
			<?php 
			break;
		}
	}
endif;

/*============================================================================
 * REQUIRED PLUGINS
============================================================================*/
add_action( 'tgmpa_register', 'alith_theme_register_required_plugins' );
if ( !function_exists('alith_theme_register_required_plugins') ) {
    function alith_theme_register_required_plugins(){
        $plugins = array( 
			array(
                'name'     				=>  esc_html__('Hewo Core Plugin', 'hewo' ), // The plugin name
                'slug'     				=> 'hewo-alith-core', // The plugin slug (typically the folder name)
                'required' 				=> 	true, // If false, the plugin is only 'recommended' instead of required
				'source'   				=>  ALITH_THEME_INC_DIR.'/plugins/hewo-alith-core.zip'   // The plugin source          
            ),
			array(
				'name'      => 'Meta Box',
				'slug'      => 'meta-box',
				'required'  => true,
			)			
        );
        // Change this to your theme text domain, used for internationalising strings
        $theme_text_domain = 'hewo';

        $config = array(
            'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
            'default_path' => '',                      // Default absolute path to bundled plugins.
            'menu'         => 'tgmpa-install-plugins', // Menu slug.
            'parent_slug'  => 'themes.php',            // Parent menu slug.
            'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
            'has_notices'  => true,                    // Show admin notices or not.
            'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
            'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
            'is_automatic' => false,                   // Automatically activate plugins after installation or not.
            'message'      => '',                      // Message to output right before the plugins table.
        );
        tgmpa( $plugins, $config );
    }
}
/* Generate font links */
if ( !function_exists( 'vce_generate_font_links' ) ){
	function vce_generate_font_links() {

		$output = array();
		$fonts = array();
		$fonts[] = vce_get_option( 'main_font' );
		$fonts[] = vce_get_option( 'h_font' );
		$fonts[] = vce_get_option( 'nav_font' );
		$unique = array(); //do not add same font links
		$native = vce_get_native_fonts();
		$protocol = is_ssl() ? 'https://' : 'http://';

		foreach ( $fonts as $font ) {
			if ( !in_array( $font['font-family'], $native ) ) {
				$temp = array();
				if ( isset( $font['font-style'] ) ) {
					$temp['font-style'] = $font['font-style'];
				}
				if ( isset( $font['subsets'] ) ) {
					$temp['subsets'] = $font['subsets'];
				}
				if ( isset( $font['font-weight'] ) ) {
					$temp['font-weight'] = $font['font-weight'];
				}
				$unique[$font['font-family']][] = $temp;
			}
		}

		foreach ( $unique as $family => $items ) {

			$link = $protocol.'fonts.googleapis.com/css?family='.str_replace( ' ', '%20', $family ); //valid

			$weight = array( '400' );
			$subsets = array( 'latin' );

			foreach ( $items as $item ) {

				//Check weight and style
				if ( isset( $item['font-weight'] ) && !empty( $item['font-weight'] ) ) {
					$temp = $item['font-weight'];
					if ( isset( $item['font-style'] ) && empty( $item['font-style'] ) ) {
						$temp .= $item['font-style'];
					}

					if ( !in_array( $temp, $weight ) ) {
						$weight[] = $temp;
					}
				}

				//Check subsets
				if ( isset( $item['subsets'] ) && !empty( $item['subsets'] ) ) {
					if ( !in_array( $item['subsets'], $subsets ) ) {
						$subsets[] = $item['subsets'];
					}
				}
			}

			$link .= ':'.implode( ",", $weight );
			$link .= '&subset='.implode( ",", $subsets );

			$output[] = str_replace( '&', '&amp;', $link ); //valid
		}

		return $output;
	}
}