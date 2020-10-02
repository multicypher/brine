<?php
/**
 *
 * Integrate theme assets
 *
 * @package brine
 *
 */

namespace BRINE_THEME\Inc;

use BRINE_THEME\Inc\Traits\Singleton;

class Assets {
    use Singleton;

    protected function __construct(){
        // load all the different classes

        $this->set_up_hooks();
    }

    protected function set_up_hooks() {
        // all our actions and filters goes here

        add_action ('wp_enqueue_scripts',[$this,'register_styles']);
        add_action ('wp_enqueue_scripts',[$this,'register_scripts']);

    }

    public function register_styles(){
        //register styles

        wp_register_style('style-css',get_stylesheet_uri(),[],filemtime(BRINE_DIR_PATH.'/style.css'),'all');
        wp_register_style('bootstrap-css',BRINE_DIR_URI.'/assets/src/library/css/bootstrap.min.css',[],false,'all');

        //enqueue styles

        wp_enqueue_style('style-css');
        wp_enqueue_style('bootstrap-css');

    }

    public function register_scripts(){

        // register scripts

        wp_register_script('main-js',BRINE_DIR_URI.'/assets/main.js',[],filemtime(BRINE_DIR_PATH.'/assets/main.js'),true);
        wp_register_script('bootstrap-js',BRINE_DIR_URI.'/assets/src/library/js/bootstrap.min.js',['jquery'],false,true);


        // enqueue scripts

        wp_enqueue_script('main-js');
        wp_enqueue_script('bootstrap-js');


    }
}