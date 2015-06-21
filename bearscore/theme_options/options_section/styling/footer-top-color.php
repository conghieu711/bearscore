<?php
Redux::setSection( $opt_name, array(
    'title'      => __( 'Footer top color', 'tb' ),
    'id'         => 'footer-top-color',
    'icon'       => 'el el-chevron-up',
    'desc'       => __( '', 'tb' ),
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'opt-footer-top-font-color',
            'type'     => 'color',
            'title'    => __( 'Footer top - font color', 'tb' ),
            'subtitle' => __( 'set color for footer top.', 'tb' ),
            'default'  => '#FFFFFF',
        ),
        array(
            'id'       => 'opt-footer-top-headding-font-color',
            'type'     => 'color',
            'title'    => __( 'Footer top headding - font color', 'tb' ),
            'subtitle' => __( 'set color for footer top headding.', 'tb' ),
            'default'  => '#FFFFFF',
        ),
        array(
            'id'       => 'opt-footer-top-link-color',
            'type'     => 'color',
            'title'    => __( 'Footer top link - font color', 'tb' ),
            'subtitle' => __( 'set color for footer top link.', 'tb' ),
            'default'  => '#FFFFFF',
        ),
        array(
            'id'       => 'opt-footer-top-link-color-hover',
            'type'     => 'color',
            'title'    => __( 'Footer top link - font color hover', 'tb' ),
            'subtitle' => __( 'set color for footer top link.', 'tb' ),
            'default'  => '#AECA0B',
        ),
    )
) );