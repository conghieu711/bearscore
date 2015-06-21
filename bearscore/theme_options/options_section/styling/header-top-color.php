<?php
Redux::setSection( $opt_name, array(
    'title'      => __( 'Header top color', 'tb' ),
    'id'         => 'header-top-color',
    'icon'       => 'el el-minus',
    'desc'       => __( '', 'tb' ),
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'opt-header-top-background-color',
            'type'     => 'color',
            'output'   => array( '.tb-header-top-background-color' ),
            'title'    => __( 'Background color', 'tb' ),
            'subtitle' => __( 'set background header top color', 'tb' ),
            'default'  => '#555555',
        ),
        array(
            'id'       => 'opt-header-top-font-color',
            'type'     => 'color',
            'output'   => array( '.tb-header-top-font-color' ),
            'title'    => __( 'Font color', 'tb' ),
            'subtitle' => __( 'set header top font color', 'tb' ),
            'default'  => '#F5F5F5',
        ),
    )
) );