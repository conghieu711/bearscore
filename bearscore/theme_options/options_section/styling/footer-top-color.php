<?php
Redux::setSection( $opt_name, array(
    'title'      => __( 'Footer top color', THEMENAME ),
    'id'         => 'footer-top-color',
    'icon'       => 'el el-chevron-up',
    'desc'       => __( '', THEMENAME ),
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'opt-footer-top-font-color',
            'type'     => 'color',
            'title'    => __( 'Footer top - font color', THEMENAME ),
            'subtitle' => __( 'set color for footer top.', THEMENAME ),
            'default'  => '#FFFFFF',
        ),
        array(
            'id'       => 'opt-footer-top-headding-font-color',
            'type'     => 'color',
            'title'    => __( 'Footer top headding - font color', THEMENAME ),
            'subtitle' => __( 'set color for footer top headding.', THEMENAME ),
            'default'  => '#FFFFFF',
        ),
        array(
            'id'       => 'opt-footer-top-link-color',
            'type'     => 'color',
            'title'    => __( 'Footer top link - font color', THEMENAME ),
            'subtitle' => __( 'set color for footer top link.', THEMENAME ),
            'default'  => '#FFFFFF',
        ),
        array(
            'id'       => 'opt-footer-top-link-color-hover',
            'type'     => 'color',
            'title'    => __( 'Footer top link - font color hover', THEMENAME ),
            'subtitle' => __( 'set color for footer top link.', THEMENAME ),
            'default'  => '#AECA0B',
        ),
    )
) );