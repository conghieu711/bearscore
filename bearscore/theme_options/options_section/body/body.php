<?php
Redux::setSection( $opt_name, array(
    'title'      => __( 'Body', THEMENAME ),
    'id'         => 'body',
    'icon'       => 'el el-website',
    'desc'       => __( '', THEMENAME ),
    'fields'     => array(
        array(
            'id'       => 'opt-boxed-layout',
            'type'     => 'switch',
            'title'    => __( 'Boxed layout', THEMENAME ),
            'subtitle' => __( 'Set layout boxed default(Wide).', THEMENAME ),
            'default'  => false,
        ),
        array(
            'id'       => 'opt-body-background',
            'type'     => 'background',
            'output'   => array( '' ),
            'title'    => __( 'Background', THEMENAME ),
            'subtitle' => __( 'body background with image, color, etc.', 'tb' ),
            'default'   => array(
                'background-color' => '#FFFFFF'
            ),
        ),
    )
) );