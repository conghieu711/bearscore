<?php
Redux::setSection( $opt_name, array(
    'title'      => __( 'Footer bottom', THEMENAME ),
    'id'         => 'footer-bottom',
    'icon'       => 'el el-minus',
    'desc'       => __( '', THEMENAME ),
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'otp-footer-bottom',
            'type'     => 'switch',
            'title'    => __( 'Footer bottom', THEMENAME ),
            'subtitle' => __( 'enable footer bottom', THEMENAME ),
            'default'  => true,
        ),
        array(
            'id'       => 'opt-footer-bottom-background',
            'type'     => 'background',
            'output'   => array( '' ),
            'title'    => __( 'Background', THEMENAME ),
            'subtitle' => __( 'footer background with image, color, etc.', THEMENAME ),
            'default'   => array(
                'background-color' => '#111111'
            ),
        ),
        array(
            'id'       => 'opt-footer-bottom-padding',
            'type'     => 'spacing',
            'output'   => array( '' ),
            'mode'     => 'padding',
            'all'      => false,
            'title'    => __( 'Footer padding', THEMENAME ),
            'subtitle' => __( 'top right bottom left.', THEMENAME ),
            'desc'     => __( '', 'tb' ),
            'default'  => array(
                'padding-top'    => '10px',
                'padding-right'  => '0px',
                'padding-bottom' => '10px',
                'padding-left'   => '0px'
            )
        ),
    )
) );