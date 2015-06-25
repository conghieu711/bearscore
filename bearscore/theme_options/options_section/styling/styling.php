<?php
Redux::setSection( $opt_name, array(
    'title'      => __( 'Styling', THEMENAME ),
    'id'         => 'styling',
    'icon'       => 'el el-tint',
    'desc'       => __( '', THEMENAME ),
    'fields'     => array(
        array(
            'id'       => 'opt-primary-color',
            'type'     => 'color',
            'output'   => array( '.tb-primary-color' ),
            'title'    => __( 'Primary color', THEMENAME ),
            'subtitle' => __( 'set primary color', THEMENAME ),
            'default'  => '#AECA0B',
        ),
        array(
            'id'       => 'opt-secondary-color',
            'type'     => 'color',
            'output'   => array( '.tb-secondary-color' ),
            'title'    => __( 'Secondary color', THEMENAME ),
            'subtitle' => __( 'set secondary color', THEMENAME ),
            'default'  => '#AECA0B',
        ),
        array(
            'id'       => 'opt-link-color',
            'type'     => 'color',
            'output'   => array( '.tb-link-color' ),
            'title'    => __( 'Link color', THEMENAME ),
            'subtitle' => __( 'set link color', THEMENAME ),
            'default'  => '#AECA0B',
        ),
        array(
            'id'       => 'opt-link-color-hover',
            'type'     => 'color',
            'output'   => array( '.tb-link-color-hover' ),
            'title'    => __( 'Link color hover', THEMENAME ),
            'subtitle' => __( 'set link color hover', THEMENAME ),
            'default'  => '#CFE062',
        ),
    )
) );