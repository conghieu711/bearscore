<?php

class Bears_custom_menu_item {
    function __construct() {
        // add custom menu fields to menu
        add_filter( 'wp_setup_nav_menu_item', array( &$this, 'bears_custom_nav_fields' ) );
        // update custom menu fields to menu
        add_action( 'wp_update_nav_menu_item', array( &$this, 'bears_update_custom_nav_fields'), 10, 3 );
        // edit menu walker
        add_filter( 'wp_edit_nav_menu_walker', array( &$this, 'bears_edit_walker'), 10, 2 );
    }

    /*
    brears_custom_nav_fields
    */
    function bears_custom_nav_fields( $menu_item ) {
        $menu_item->subtitle = get_post_meta( $menu_item->ID, '_menu_item_subtitle', true );
        return $menu_item;
    }

    /*
    brears_update_custom_nav_fields
    */
    function bears_update_custom_nav_fields( $menu_id, $menu_item_db_id, $args ) {
        // Check if element is properly sent
        if ( is_array( $_REQUEST['menu-item-subtitle']) ) {
            $subtitle_value = $_REQUEST['menu-item-subtitle'][$menu_item_db_id];
            update_post_meta( $menu_item_db_id, '_menu_item_subtitle', $subtitle_value );
        }
    }

    /*
    brears_edit_walker
    */
    function bears_edit_walker( $walker, $menu_id ) {
        return 'Walker_Nav_Menu_Bears_Custom';
    }
}

$Bears_custom_menu_item = new Bears_custom_menu_item();