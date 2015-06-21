<?php
Redux::setSection( $opt_name, array(
    'title'      => __( 'Styling', 'tb' ),
    'id'         => 'styling',
    'icon'       => 'el el-tint',
    'desc'       => __( '', 'tb' ),
    'fields'     => array(
        array(
            'id'       => 'opt-primary-color',
            'type'     => 'color',
            'output'   => array( '.tb-primary-color' ),
            'title'    => __( 'Primary color', 'tb' ),
            'subtitle' => __( 'set primary color', 'tb' ),
            'default'  => '#AECA0B',
        ),
        array(
            'id'       => 'opt-secondary-color',
            'type'     => 'color',
            'output'   => array( '.tb-secondary-color' ),
            'title'    => __( 'Secondary color', 'tb' ),
            'subtitle' => __( 'set secondary color', 'tb' ),
            'default'  => '#AECA0B',
        ),
        array(
            'id'       => 'opt-link-color',
            'type'     => 'color',
            'output'   => array( '.tb-link-color' ),
            'title'    => __( 'Link color', 'tb' ),
            'subtitle' => __( 'set link color', 'tb' ),
            'default'  => '#AECA0B',
        ),
        array(
            'id'       => 'opt-link-color-hover',
            'type'     => 'color',
            'output'   => array( '.tb-link-color-hover' ),
            'title'    => __( 'Link color hover', 'tb' ),
            'subtitle' => __( 'set link color hover', 'tb' ),
            'default'  => '#CFE062',
        ),
    )
) );