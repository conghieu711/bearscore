<?php
Redux::setSection( $opt_name, array(
    'title'      => __( 'Header', THEMENAME ),
    'id'         => 'header',
    'icon'       => 'el el-credit-card',
    'desc'       => __( '', THEMENAME ),
    'fields'     => array(
        array(
            'id'       => 'opt-header-layout',
            'type'     => 'image_select',
            'title'    => __( 'Layout', THEMENAME ),
            'subtitle' => __( 'Select header layout.', THEMENAME ),
            'desc'     => __( '', THEMENAME ),
            //Must provide key => value(array:title|img) pairs for radio options
            'options'  => array(
                'default' => array(
                    'alt' => __('header default', THEMENAME),
                    'img' => BEARSCORE_URI . '/assets/images/header-layout-default.jpg'
                ),
            ),
            'default'  => 'default'
        ),  
        array(
            'id'        => 'opt-header-height',
            'type'      => 'text',
            'title'     => __( 'Header height', THEMENAME ),
            'subtitle'  => __( 'in pixels.', THEMENAME ),
            'desc'      => __( '', THEMENAME ),
            'default'   => '100px'
        ),
        array(
            'id'       => 'opt-header-padding',
            'type'     => 'spacing',
            'output'   => array( '' ),
            'mode'     => 'padding',
            'all'      => false,
            'title'    => __( 'Hader padding', THEMENAME ),
            'subtitle' => __( 'in pixels, top right bottom left.', THEMENAME ),
            'desc'     => __( '', THEMENAME ),
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
            'title'    => __( 'Sticky header', THEMENAME ),
            'subtitle' => __( 'enable sticky mode for menu', THEMENAME ),
            'default'  => true,
        ),
        array(
            'id'        => 'opt-sticky-header-height',
            'type'      => 'text',
            'title'     => __( 'Sticky header height', THEMENAME ),
            'subtitle'  => __( 'in pixels.', 'tb' ),
            'desc'      => __( '', 'tb' ),
            'default'   => '80px'
        ),
    )
) );