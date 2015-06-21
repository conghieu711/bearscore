<?php
Redux::setSection( $opt_name, array(
    'title'      => __( 'Sticky header color', 'tb' ),
    'id'         => 'sticky-header-color',
    'icon'       => 'el el-minus',
    'desc'       => __( '', 'tb' ),
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'opt-sticky-header-main-background-color',
            'type'     => 'color_rgba',
            'title'    => __( 'Sticky header background color', 'tb' ),
            'subtitle' => __( 'set color for sticky header background color.', 'tb' ),
            'default'  => array(
                'color' => '#FFFFFF',
                'alpha' => '.8'
            ),
            //'output'   => array( 'body' ),
            'mode'     => 'background',
            'validate' => 'colorrgba',
        ),
        array(
            'id'       => 'opt-sticky-header-menu-font-color-first-level',
            'type'     => 'color',
            //'output'   => array( '' ),
            'title'    => __( 'Menu font color - first level', 'tb' ),
            'subtitle' => __( 'Controls the text color of sticky header first level menu items.', 'tb' ),
            'default'  => '#292929',
        ),
        array(
            'id'       => 'opt-sticky-header-menu-font-color-hover-first-level',
            'type'     => 'color',
            //'output'   => array( '' ),
            'title'    => __( 'Menu font color hover - first level', 'tb' ),
            'subtitle' => __( 'Controls the text hover color of sticky header first level menu items.', 'tb' ),
            'default'  => '#AECA0B',
        ),
        array(
            'id'       => 'opt-sticky-header-menu-font-color-active-first-level',
            'type'     => 'color',
            //'output'   => array( '' ),
            'title'    => __( 'Menu font color active - first level', 'tb' ),
            'subtitle' => __( 'Controls the text active color of sticky header first level menu items.', 'tb' ),
            'default'  => '#AECA0B',
        ),
    )
) );