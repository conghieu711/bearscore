<?php
Redux::setSection( $opt_name, array(
    'title'      => __( 'Header', 'tb' ),
    'id'         => 'header',
    'icon'       => 'el el-credit-card',
    'desc'       => __( '', 'tb' ),
    'fields'     => array(
        array(
            'id'       => 'opt-header-layout',
            'type'     => 'image_select',
            'title'    => __( 'Layout', 'tb' ),
            'subtitle' => __( 'Select header layout.', 'tb' ),
            'desc'     => __( '', 'tb' ),
            //Must provide key => value(array:title|img) pairs for radio options
            'options'  => array(
                'default' => array(
                    'alt' => 'header default',
                    'img' => BEARSCORE_URI . '/assets/images/header-layout-default.jpg'
                ),
            ),
            'default'  => 'default'
        ),  
        array(
            'id'        => 'opt-header-height',
            'type'      => 'text',
            'title'     => __( 'Header height', 'tb' ),
            'subtitle'  => __( 'in pixels.', 'tb' ),
            'desc'      => __( '', 'tb' ),
            'default'   => '100px'
        ),
        array(
            'id'       => 'opt-header-padding',
            'type'     => 'spacing',
            'output'   => array( '' ),
            'mode'     => 'padding',
            'all'      => false,
            'title'    => __( 'Hader padding', 'tb' ),
            'subtitle' => __( 'in pixels, top right bottom left.', 'tb' ),
            'desc'     => __( '', 'tb' ),
            'default'  => array(
                'padding-top'    => '0px',
                'padding-right'  => '0px',
                'padding-bottom' => '0px',
                'padding-left'   => '0px'
            )
        ),
        array(
            'id'       => 'otp-header-sticky',
            'type'     => 'switch',
            'title'    => __( 'Sticky header', 'tb' ),
            'subtitle' => __( 'enable sticky mode for menu', 'tb' ),
            'default'  => true,
        ),
        array(
            'id'        => 'opt-sticky-header-height',
            'type'      => 'text',
            'title'     => __( 'Sticky header height', 'tb' ),
            'subtitle'  => __( 'in pixels.', 'tb' ),
            'desc'      => __( '', 'tb' ),
            'default'   => '80px'
        ),
    )
) );