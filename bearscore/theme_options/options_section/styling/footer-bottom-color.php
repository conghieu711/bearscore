<?php
Redux::setSection( $opt_name, array(
    'title'      => __( 'Footer bottom color', THEMENAME ),
    'id'         => 'footer-bottom-color',
    'icon'       => 'el el-chevron-down',
    'desc'       => __( '', THEMENAME ),
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'opt-footer-bottom-font-color',
            'type'     => 'color',
            'title'    => __( 'Footer bottom - font color', THEMENAME ),
            'subtitle' => __( 'set color for footer bottom.', THEMENAME ),
            'default'  => '#FFFFFF',
        ),
    )
) );