<?php
/**
 * Theme Sidebars.
 *
 * @package brine
 */
namespace BRINE_THEME\Inc;

use BRINE_THEME\Inc\Traits\Singleton;


/**
 * Class Assets
 */
class Sidebars {

    use Singleton;

    /**
     * Construct method.
     */
    protected function __construct() {
        $this->setup_hooks();
    }

    /**
     * To register action/filter.
     *
     * @return void
     */
    protected function setup_hooks() {

        /**
         * Actions
         */
        add_action( 'widgets_init', [ $this, 'register_sidebars' ] );


    }

    /**
     * Register widgets.
     *
     * @action widgets_init
     */
    public function register_sidebars() {

        register_sidebar(
            [
                'name'          => esc_html__( 'Sidebar', 'brine' ),
                'id'            => 'sidebar-1',
                'description'   => __('Main Sidebar','brine'),
                'before_widget' => '<div id="%1$s" class="widget widget-sidebar %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
            ]
        );

        register_sidebar(
            [
                'name'          => esc_html__( 'Footer', 'brine' ),
                'id'            => 'sidebar-2',
                'description'   => __('Footer Sidebar','brine'),
                'before_widget' => '<div class="footer_teaser %1$s %2$s col-sm-4 col-md-4">',
                'after_widget'  => '</div>',
                'before_title'  => '<h4 class="widget-title">',
                'after_title'   => '</h4>',
            ]
        );

    }
}