<?php
Redux::setSection( $opt_name, array(
    'title'      => __( 'Footer bottom', 'tb' ),
    'id'         => 'footer-bottom',
    'icon'       => 'el el-minus',
    'desc'       => __( '', 'tb' ),
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'otp-footer-bottom',
            'type'     => 'switch',
            'title'    => __( 'Footer bottom', 'tb' ),
            'subtitle' => __( 'enable footer bottom', 'tb' ),
            'default'  => true,
        ),
        array(
            'id'       => 'opt-footer-bottom-background',
            'type'     => 'background',
            'output'   => array( '' ),
            'title'    => __( 'Background', 'tb' ),
            'subtitle' => __( 'footer background with image, color, etc.', 'tb' ),
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
            'title'    => __( 'Footer padding', 'tb' ),
            'subtitle' => __( 'top right bottom left.', 'tb' ),
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