<?php
/**
 * Theme functions
 *
 * @package brine
 */



if ( ! defined( 'BRINE_DIR_PATH' ) ) {
    define( 'BRINE_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

if ( ! defined( 'BRINE_DIR_URI' ) ) {
    define( 'BRINE_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}

require_once BRINE_DIR_PATH.'/inc/helpers/autoloader.php';
require_once BRINE_DIR_PATH.'/inc/helpers/template-tags.php';



function brine_get_theme_instance(){
    \BRINE_THEME\Inc\BRINE_THEME::get_instance();
}


brine_get_theme_instance();

