<?php
Redux::setSection( $opt_name, array(
    'title'      => __( 'Page title & Bc', THEMENAME ),
    'id'         => 'pagetitle_breadcumb',
    'icon'       => 'el el-credit-card',
    'desc'       => __( '', THEMENAME ),
    'fields'     => array(
        array(
            'id'       => 'opt-pagetitle-breadcumb-layout',
            'type'     => 'image_select',
            'title'    => __( 'Layout', THEMENAME ),
            'subtitle' => __( 'Select a layout for page title', THEMENAME ),
            'desc'     => __( '', THEMENAME ),
            'options'  => array(
                'default' => array(
                    'alt' => 'page title default',
                    'img' => BEARSCORE_URI . '/assets/images/page-title-default.jpg'
                ),
                'inline' => array(
                    'alt' => 'page title inline',
                    'img' => BEARSCORE_URI . '/assets/images/page-title-inline.jpg'
                ),
            ),
            'default'  => 'default'
        ),  
        array(
            'id'       => 'opt-pagetitle-breadcumd-background',
            'type'     => 'background',
            'output'   => array( '.tb-pagetitle-breadcumd-wrap' ),
            'title'    => __( 'Background', THEMENAME ),
            'subtitle' => __( 'Page title background with image, color, etc.', THEMENAME ),
            'default'   => array(
                'background-color' => '#292929'
            ),
        ),
        array(
            'id'       => 'opt-pagetitle-breadcumd-margin',
            'type'     => 'spacing',
            'output'   => array( '' ),
            'mode'     => 'margin',
            'all'      => false,
            'title'    => __( 'Margin', THEMENAME ),
            'subtitle' => __( 'top right bottom left.', THEMENAME ),
            'desc'     => __( '', THEMENAME ),
            'default'  => array(
                'margin-top'    => '0px',
                'margin-right'  => '0px',
                'margin-bottom' => '70px',
                'margin-left'   => '0px'
            )
        ),
        array(
            'id'       => 'opt-pagetitle-breadcumd-padding',
            'type'     => 'spacing',
            'output'   => array( '' ),
            'mode'     => 'padding',
            'all'      => false,
            'title'    => __( 'Padding', THEMENAME ),
            'subtitle' => __( 'top right bottom left.', THEMENAME ),
            'desc'     => __( '', THEMENAME ),
            'default'  => array(
                'padding-top'    => '100px',
                'padding-right'  => '0px',
                'padding-bottom' => '100px',
                'padding-left'   => '0px'
            )
        ),
    )
) );