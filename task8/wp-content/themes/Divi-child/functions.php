<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'ow_css', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css', array() );
        wp_enqueue_style( 'ow_css', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css', array() );
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
        wp_enqueue_style( 'font_google', "https://fonts.googleapis.com/css?family=Amatic+SC|Montserrat|Rochester|Cabin+Sketch|Shadows+Into+Light|Shadows+Into+Light|Thasadith");
        wp_enqueue_style( 'bxslider-css', 'https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.css',array(), 'v4.2.15');
        wp_enqueue_style( 'mystyle', get_theme_file_uri('/assets/css/mystyle.css'),array(), 'v1.0');
        wp_enqueue_style( 'media_Screen', get_theme_file_uri('/assets/css/media_screen.css'),array(), 'v1.0');
        
        //script
        wp_enqueue_script('main_js', get_theme_file_uri('/assets/js/jquery-1.11.1.min.js'), array(), 'v1.11.1',true);
        wp_enqueue_script('owl_js','https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array(), 'v1.11.1',true);
        wp_enqueue_script('bxslider-js', 'https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.js', array(), 'v4.2.15',true);
        wp_enqueue_script('my_script', get_theme_file_uri('/assets/js/myscript.js'), array('jquery'), 'v1.0',true);
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );


// short code for slider
add_shortcode( "slider_schedule", "slider_schedule_func" );
function slider_schedule_func()
{
	ob_start();
	require get_stylesheet_directory() .'/template-parts/homepage/slider_schedule.php';
	$data = ob_get_contents();
	ob_clean();
	ob_end_flush();
	return $data;
}


// short code for what are saying
add_shortcode( "shortcode_saying", "shortcode_saying_func" );
function shortcode_saying_func()
{
	ob_start();
	require get_stylesheet_directory() .'/template-parts/homepage/slider_saying.php';
	$data = ob_get_contents();
	ob_clean();
	ob_end_flush();
	return $data;
}
// END ENQUEUE PARENT ACTION

function register_my_menu() {
    register_nav_menus( array(
		'footer-menu-top'    => esc_html__( 'Footer Menu top', 'Divi' ),
		'footer-menu-privacy'    => esc_html__( 'Footer Menu Privacy', 'Divi' ),
		'footer-menu-bottom_follow'    => esc_html__( 'Footer menu bottom follow', 'Divi' ),
		'footer-menu-bottom'    => esc_html__( 'Footer Menu bottom', 'Divi' )
	) );
}
add_action( 'init', 'register_my_menu' );

// get footer top
function shortcode_getFooterTopMenu_func()
{
	ob_start();
		wp_nav_menu( 
					  array( 
					      'theme_location' => 'footer-menu-top', 
					      'container' => 'false', 
					      'menu_id' => 'header-menu', 
					      'menu_class' => 'menu'
					   ) 
					);
	$data = ob_get_contents();
	ob_get_clean();
	ob_flush();
	return $data;
}
// end get footer top
add_shortcode( 'shortcode_getFooterTopMenu', 'shortcode_getFooterTopMenu_func' );

// get footer bottom Privacy Policy
function shortcode_get_footer_menu_privacy_func()
{
	ob_start();
		wp_nav_menu( 
					  array( 
					      'theme_location' => 'footer-menu-privacy', 
					      'container' => 'false', 
					      'menu_id' => 'pricavy-menu', 
					      'menu_class' => 'menu'
					   ) 
					);
	$data = ob_get_contents();
	ob_get_clean();
	ob_flush();
	return $data;
}
add_shortcode( 'shortcode_getFooter_menu_privacy', 'shortcode_get_footer_menu_privacy_func' );
// end get footer bottom Privacy Policy

function shortcode_get_footer_menu_follow_func()
{
	ob_start();
		wp_nav_menu( 
					  array( 
					      'theme_location' => 'footer-menu-bottom_follow', 
					      'container' => 'false', 
					      'menu_id' => 'follow-menu', 
					      'menu_class' => 'menu'
					   ) 
					);
	$data = ob_get_contents();
	ob_get_clean();
	ob_flush();
	return $data;
}
add_shortcode( 'shortcode_getFooter_menu_follow', 'shortcode_get_footer_menu_follow_func' );