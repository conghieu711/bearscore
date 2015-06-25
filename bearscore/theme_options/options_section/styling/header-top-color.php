<?php
Redux::setSection( $opt_name, array(
    'title'      => __( 'Header top color', THEMENAME ),
    'id'         => 'header-top-color',
    'icon'       => 'el el-minus',
    'desc'       => __( '', THEMENAME ),
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'opt-header-top-background-color',
            'type'     => 'color',
            'output'   => array( '.tb-header-top-background-color' ),
            'title'    => __( 'Background color', THEMENAME ),
            'subtitle' => __( 'set background header top color', THEMENAME ),
            'default'  => '#555555',
        ),
        array(
            'id'       => 'opt-header-top-font-color',
            'type'     => 'color',
            'output'   => array( '.tb-header-top-font-color' ),
            'title'    => __( 'Font color', THEMENAME ),
            'subtitle' => __( 'set header top font color', THEMENAME ),
            'default'  => '#F5F5F5',
        ),
    )
) );