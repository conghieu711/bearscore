<?php
Redux::setSection( $opt_name, array(
    'title'      => __( 'Body', 'tb' ),
    'id'         => 'body',
    'icon'       => 'el el-website',
    'desc'       => __( '', 'tb' ),
    'fields'     => array(
        array(
            'id'       => 'opt-boxed-layout',
            'type'     => 'switch',
            'title'    => __( 'Boxed layout', 'tb' ),
            'subtitle' => __( 'Set layout boxed default(Wide).', 'tb' ),
            'default'  => false,
        ),
        array(
            'id'       => 'opt-body-background',
            'type'     => 'background',
            'output'   => array( '' ),
            'title'    => __( 'Background', 'tb' ),
            'subtitle' => __( 'body background with image, color, etc.', 'tb' ),
            'default'   => array(
                'background-color' => '#FFFFFF'
            ),
        ),
    )
) );