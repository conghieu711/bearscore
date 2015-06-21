<?php
Redux::setSection( $opt_name, array(
    'title'      => __( 'Footer top', 'tb' ),
    'id'         => 'footer-top',
    'icon'       => 'el el-bookmark',
    'desc'       => __( '', 'tb' ),
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'otp-footer-top',
            'type'     => 'switch',
            'title'    => __( 'Footer top', 'tb' ),
            'subtitle' => __( 'enable footer top', 'tb' ),
            'default'  => true,
        ),
        array(
            'id'       => 'opt-footer-top-background',
            'type'     => 'background',
            'output'   => array( '' ),
            'title'    => __( 'Background', 'tb' ),
            'subtitle' => __( 'footer background with image, color, etc.', 'tb' ),
            'default'   => array(
                'background-color' => '#292929'
            ),
        ),
        array(
            'id'       => 'opt-footer-top-margin',
            'type'     => 'spacing',
            'output'   => array( '' ),
            'mode'     => 'margin',
            'all'      => false,
            'title'    => __( 'Footer margin', 'tb' ),
            'subtitle' => __( 'top right bottom left.', 'tb' ),
            'desc'     => __( '', 'tb' ),
            'default'  => array(
                'margin-top'    => '0px',
                'margin-right'  => '0px',
                'margin-bottom' => '0px',
                'margin-left'   => '0px'
            )
        ),
        array(
            'id'       => 'opt-footer-top-padding',
            'type'     => 'spacing',
            'output'   => array( '' ),
            'mode'     => 'padding',
            'all'      => false,
            'title'    => __( 'Footer padding', 'tb' ),
            'subtitle' => __( 'top right bottom left.', 'tb' ),
            'desc'     => __( '', 'tb' ),
            'default'  => array(
                'padding-top'    => '100px',
                'padding-right'  => '0px',
                'padding-bottom' => '80px',
                'padding-left'   => '0px'
            )
        ),
    )
) );