<?php 
    /*
    Plugin Name: Ninzio add-ons
    Plugin URI: http://www.ninzio.com
    Text Domain: ninzio-addons
    Domain Path: /languages/
    Description: Plugin comes with Ninzio Themes to extend theme functionality (shortcodes, portfolio, ninzio slider)
    Author: Ninzio Themes
    Version: 2.0
    Author URI: http://ninzio.com
    */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

function ninzio_addons_load_plugin_textdomain() {
    load_plugin_textdomain( 'ninzio-addons', false, dirname( plugin_basename(__FILE__) ) . '/languages/' );
}
add_action( 'plugins_loaded', 'ninzio_addons_load_plugin_textdomain' );

define( 'NINZIO_ADDONS', plugin_dir_path( __FILE__ ));

if ( !class_exists( 'ReduxFramework' ) && file_exists( NINZIO_ADDONS . '/optionpanel/framework.php' ) ) {
    require_once('optionpanel/framework.php' );
}

if ( !isset( $redux_demo ) && file_exists( NINZIO_ADDONS . '/optionpanel/config.php' ) ) {
    require_once('optionpanel/config.php' );
}

if (!class_exists('MultiPostThumbnails') && file_exists( NINZIO_ADDONS . '/includes/multi-post-thumbnails.php' ) ) {
    require_once(NINZIO_ADDONS . '/includes/multi-post-thumbnails.php');
}

require_once('projects/projects.php' );
require_once('shortcodes/shortcodes.php' );
require_once('widgets/custom-twitter.php' );
require_once('widgets/custom-instagram-widget.php' );
require_once('widgets/custom-schedule.php' );
require_once('widgets/custom-reglog.php' );
require_once('widgets/custom-mailchimp.php' );
require_once('widgets/custom-recent-entries.php' );
require_once('widgets/custom-flickr.php' );
require_once('widgets/custom-recent-projects.php' );
require_once('widgets/custom-facebook.php' );
require_once('widgets/custom-contact-form.php' );

add_action( 'pre_get_posts', 'ninzio_addons_pre_get_post' );
function ninzio_addons_pre_get_post( $query ) {

    if( (is_post_type_archive( 'projects' ) || is_tax( 'projects-category' ) || is_tax( 'projects-tag' )) && !is_admin() && $query->is_main_query() ) {
        $nz_nav                       = (isset($GLOBALS['montserrat_ninzio']['projects-pagination']) && !empty($GLOBALS['montserrat_ninzio']['projects-pagination'])) ? $GLOBALS['montserrat_ninzio']['projects-pagination'] : "none";
        $projects_per_page = (isset($GLOBALS['montserrat_ninzio']['projects-per-page']) && !empty($GLOBALS['montserrat_ninzio']['projects-per-page'])) ? $GLOBALS['montserrat_ninzio']['projects-per-page'] : get_option( 'posts_per_page' );
        
        if ($nz_nav == "none") {
           $query->set( 'posts_per_page', -1);
        } else {
           $query->set( 'posts_per_page', $projects_per_page );
        }
    }

}

function ninzio_addons_script(){
    if(!is_admin()){
        global $wp_query;

        $projects_per_page = (isset($GLOBALS['montserrat_ninzio']['projects-per-page']) && !empty($GLOBALS['montserrat_ninzio']['projects-per-page'])) ? $GLOBALS['montserrat_ninzio']['projects-per-page'] : get_option( 'posts_per_page' );
        $max               = (empty($projects_per_page)) ? $wp_query->max_num_pages : ceil($wp_query->found_posts/$projects_per_page);
        $paged             = (get_query_var('page')) ? get_query_var('page') : 1;

        wp_enqueue_script( 'ninzio-projects-ajax', plugins_url('/js/ninzio-projects-ajax.js', __FILE__ ), array('jquery'), '', true);
        wp_localize_script(
            'ninzio-projects-ajax',
            'ajax_var',
            array(
                'startPage'  => $paged,
                'maxPages'   => $max,
                'nextLink'   => next_posts($max, false),
                'noText'     => esc_html__("No more projects", 'ninzio-addons')
            )
        );
    }
}
add_action( 'wp_enqueue_scripts', 'ninzio_addons_script' );

function ninzio_addons_add_menu_icons_styles(){
?>
<style>
    #adminmenu .menu-icon-projects div.wp-menu-image:before {content: "\f322";}
</style>
<?php
}
add_action( 'admin_head', 'ninzio_addons_add_menu_icons_styles' );

function ninzio_addons_projects_single_template($single_template) {
    global $post;
    if ($post->post_type == 'projects') {
        if ( $theme_file = locate_template( array ( 'single-projects.php' ) ) ) {
            $single_template = $theme_file;
        } else {
            $single_template = NINZIO_ADDONS . 'projects/single-projects.php';
        }
    }
    return $single_template;
}
add_filter( "single_template", "ninzio_addons_projects_single_template", 20 );

function ninzio_addons_projects_archive_template($archive_template) {
    global $post;
    if ($post->post_type == 'projects') {
        if ( $theme_file = locate_template( array ( 'archive-projects.php' ) ) ) {
            $archive_template = $theme_file;
        } else {
            $archive_template = NINZIO_ADDONS . 'projects/archive-projects.php';
        }
    }
    return $archive_template;
}
add_filter( "archive_template", "ninzio_addons_projects_archive_template", 20 );

function ninzio_addons_projects_taxonomy_template($taxonomy_template) {
    if (is_tax('projects-category')) {

        if ( $theme_file = locate_template( array ( 'taxonomy-projects.php' ) ) ) {
            $taxonomy_template = $theme_file;
        } else {

            $taxonomy_template = NINZIO_ADDONS . 'projects/taxonomy-projects.php';
        }

    }
    return $taxonomy_template;
}
add_filter( "taxonomy_template", "ninzio_addons_projects_taxonomy_template", 20 );
?>