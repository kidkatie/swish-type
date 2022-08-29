<?php

/* Load the embedded Redux Framework */

if ( !class_exists( 'ReduxFramework' ) && file_exists( dirname( __FILE__ ) . '/redux/framework.php' ) ) {
    require_once dirname( __FILE__ ) . '/redux/framework.php';
}

if ( ! class_exists( 'Redux' ) ) {
    return;
}

/**
 * Redux params
 */

$opt_name = 'alith_option';
$theme = wp_get_theme();
$args = array(
		'opt_name' => 'alith_option',
        'use_cdn' => TRUE,
        'display_name' => 'Theme Options',
        'page_title' => 'Theme Options',
        'update_notice' => TRUE,
        'admin_bar' => TRUE,
        'menu_type' => 'menu',
        'menu_title' => 'Theme Options',
        'allow_sub_menu' => TRUE,
        'page_parent_post_type' => 'your_post_type',
        'customizer' => TRUE,
        'default_mark' => '*',
        'google_api_key' => 'AIzaSyA_BqoGSeKKcUB3wPSqXvCrZJtCUkprFiA',
        'hints' => array(
            'icon_position' => 'right',
            'icon_size' => 'normal',
            'tip_style' => array(
                'color' => 'light',
            ),
            'tip_position' => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect' => array(
                'show' => array(
                    'duration' => '500',
                    'event' => 'mouseover',
                ),
                'hide' => array(
                    'duration' => '500',
                    'event' => 'mouseleave unfocus',
                ),
            ),
        ),
        'output' => TRUE,
        'output_tag' => TRUE,
        'settings_api' => TRUE,
        'cdn_check_time' => '1440',
        'compiler' => TRUE,
        'page_permissions' => 'manage_options',
        'save_defaults' => TRUE,
        'show_import_export' => TRUE,
        'database' => 'options',
        'transient_time' => '3600',
        'network_sites' => TRUE,
		'dev_mode' => false,
);

$GLOBALS['redux_notice_check'] = 1;

/* Footer social icons */
$args['share_icons'][] = array(
    'url'   => 'http://alithemes.com',
    'title' => 'Our Official Site',
    'icon'  => 'el-icon-home-alt'
);
$args['share_icons'][] = array(
    'url'   => 'https://alithemes.ticksy.com/',
    'title' => 'Support Center',
    'icon'  => 'el-icon-headphones'
);
$args['share_icons'][] = array(
    'url'   => 'http://twitter.com/alithemes',
    'title' => 'Follow us on Twitter',
    'icon'  => 'el-icon-twitter'
);


$args['intro_text'] = '';
$args['footer_text'] = '';

Redux::setArgs( $opt_name, $args );

/* Initialize options/sections */

require_once ALITH_THEME_INC_DIR . '/redux-sections/section-general.php';
require_once ALITH_THEME_INC_DIR . '/redux-sections/section-header.php';
require_once ALITH_THEME_INC_DIR . '/redux-sections/section-navigation.php';
require_once ALITH_THEME_INC_DIR . '/redux-sections/section-featured.php';
require_once ALITH_THEME_INC_DIR . '/redux-sections/section-footer.php';
require_once ALITH_THEME_INC_DIR . '/redux-sections/section-layouts.php';
require_once ALITH_THEME_INC_DIR . '/redux-sections/section-offcanvas.php';
require_once ALITH_THEME_INC_DIR . '/redux-sections/section-social.php';

/* Remove redux framework admin page to avoid confusion of our users and unnecesarry support questions */
if ( !function_exists( 'alith_remove_redux_page' ) ):
    function alith_remove_redux_page() {
        remove_submenu_page( 'tools.php', 'redux-about' );
    }
endif;

add_action( 'admin_menu', 'alith_remove_redux_page', 99 );


?>