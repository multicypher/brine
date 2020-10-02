<?php
/**
 * register menus
 *
 * @package brine
 *
 *
 */

namespace BRINE_THEME\Inc;

use BRINE_THEME\Inc\Traits\Singleton;

class Menus
{
    use Singleton;

    protected function __construct()
    {
        // load all the different classes

        Assets::get_instance();

        $this->set_up_hooks();
    }

    protected function set_up_hooks()
    {

        // all our actions and filters goes here
        add_action('init', [$this, 'register_menus']);
    }

    public function register_menus(){
        register_nav_menus(
            [
                'brine-header-menu' =>esc_html__('Header Menu','brine'),
                'brine-footer-menu' =>esc_html__('Footer Menu','brine'),
            ]
        );
    }

    public function get_menu_id($location){
        $locations = get_nav_menu_locations();
        $menu_id = $locations[$location];
        return !empty($menu_id) ? $menu_id : '';
    }

    public function get_child_menu_items( $menu_array, $parent_id){
        $child_menus = [];
         if( !empty($menu_array) && is_array($menu_array)){
             foreach ( $menu_array as $menu){
                 if(intval($menu->menu_item_parent)=== $parent_id) {
                     array_push( $child_menus, $menu);
                 }
             }

         }

         return $child_menus;
    }

}
