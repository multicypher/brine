<?php
/**
 * startups the theme
 *
 * @package brine
 *
 *
 */

namespace BRINE_THEME\Inc;

use BRINE_THEME\Inc\Traits\Singleton;

class BRINE_THEME {
    use Singleton;

    protected function __construct(){
        // load all the different classes

        Assets::get_instance();
        Menus::get_instance();
        Sidebars::get_instance();

        $this->set_up_hooks();
    }

    protected function set_up_hooks(){

        // all our actions and filters goes here
        add_action('after_setup_theme', [$this, 'setup_brine_theme']);

    }
    public function setup_brine_theme() {

        add_theme_support( 'title_tag' );

        add_theme_support(
            'custom-logo',[
                'header-text' => ['site-title', 'site-description'],
                'height'      => 50,
                'width'       => 50,
                'flex-height' => true,
                'flex-width'  => true,
            ]
        );

        add_theme_support (
            'custom-background',[
                'default-color' =>'#fff',
                'default-image' => get_template_directory_uri().'/images/c-bg.jpg',
                'default-repeat'         => 'repeat',
                'default-position-x'     => 'left',
                'default-position-y'     => 'top',
                'default-size'           => 'cover',
                'default-preset'         => 'fill',
            ]
        );

        add_theme_support( 'post-thumbnails' );

        add_image_size ('featured-thumbnail',350,230,true);

        add_theme_support( 'customize-selective-refresh-widgets' );

        add_theme_support('automatic-feed-links');

        add_theme_support( 'html5',
                            [
                                'comment-list',
                                'comment-form',
                                'search-form',
                                'gallery',
                                'caption',
                                'style',
                                'script'
                            ]
                        );
        // link editor-style.css

        add_editor_style();

        add_theme_support('wp-block-styles');

        add_theme_support( 'align-wide');

    }
}
