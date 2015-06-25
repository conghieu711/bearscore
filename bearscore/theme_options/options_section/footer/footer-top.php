<?php
Redux::setSection( $opt_name, array(
    'title'      => __( 'Footer top', THEMENAME ),
    'id'         => 'footer-top',
    'icon'       => 'el el-bookmark',
    'desc'       => __( '', THEMENAME ),
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'otp-footer-top',
            'type'     => 'switch',
            'title'    => __( 'Footer top', THEMENAME ),
            'subtitle' => __( 'enable footer top', THEMENAME ),
            'default'  => true,
        ),
        array(
            'id'       => 'opt-footer-top-background',
            'type'     => 'background',
            'output'   => array( '' ),
            'title'    => __( 'Background', THEMENAME ),
            'subtitle' => __( 'footer background with image, color, etc.', THEMENAME ),
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
            'title'    => __( 'Footer margin', THEMENAME ),
            'subtitle' => __( 'top right bottom left.', THEMENAME ),
            'desc'     => __( '', THEMENAME ),
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
            'title'    => __( 'Footer padding', THEMENAME ),
            'subtitle' => __( 'top right bottom left.', THEMENAME ),
            'desc'     => __( '', THEMENAME ),
            'default'  => array(
                'padding-top'    => '100px',
                'padding-right'  => '0px',
                'padding-bottom' => '80px',
                'padding-left'   => '0px'
            )
        ),
    )
) );