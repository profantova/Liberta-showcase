<?php
/**
 * Twenty Nineteen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Liberta
 * @since 1.0.0
 */

/* ========================================================================================================================

	Actions and Filters

======================================================================================================================== */

	add_action( 'wp_enqueue_scripts', 'ni_script_enqueuer' );


/* ========================================================================================================================

Scripts

======================================================================================================================== */

/**
 * Add scripts via wp_head()
 *
 * @return void
 * @author Keir Whitaker
 */

function ni_script_enqueuer() {

    // create array of all scripts for HTML head
    $head_scripts = "";

    // create array of all scripts for HTML footer
    $foot_scripts=array(
        'app'=>'/dist/assets/js/app.js'
    );

    if ( $head_scripts ) {
        foreach($head_scripts as $key=>$sc)
        {
           wp_register_script( $key, get_template_directory_uri() . $sc, array('jquery'), '1.0', false );
           wp_enqueue_script( $key );
        }
    }

    if ( $foot_scripts ) {
        foreach($foot_scripts as $key=>$sc)
        {
           wp_register_script( $key, get_template_directory_uri() . $sc, array('jquery'), '1.0', true );
           wp_enqueue_script( $key );
        }
    }

    wp_register_style( 'screen', get_template_directory_uri().'/style.css', '', '', 'screen' );
    wp_register_style( 'app', get_template_directory_uri().'/dist/assets/css/app.css?v='.time(), '', '', 'screen');

    wp_enqueue_style( 'screen' );
    wp_enqueue_style( 'app' );
}
?>

<?php
/*	Theme specific settings

	Register feature images options

	======================================================================================================================== */

	// Add theme support for Featured Images
	add_theme_support('post-thumbnails', array(
		'post',
		'page',
		'custom-post-type-name',
	));
?>

<?php require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php'; ?>

<?php
add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu() {
  register_nav_menu( 'primary', __( 'Primary Menu', 'Liberta' ) );
}
?>

<?php
function ni_nav_primary() {
    wp_nav_menu( array(
        'menu'            => '',
        'container'       => 'div',
        'container_class' => 'collapse navbar-collapse',
        'container_id'    => 'navbarSupportedContent',
        'menu_class'      => 'navbar-nav mr-auto w-100 justify-content-end',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'item_spacing'    => 'preserve',
        'depth'           => 0,
        'theme_location'  => 'primary',
		'walker'          => new WP_Bootstrap_Navwalker(),
    ) );
}
?>
