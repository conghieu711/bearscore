<?php
Redux::setSection( $opt_name, array(
    'title'      => __( 'Footer bottom color', 'tb' ),
    'id'         => 'footer-bottom-color',
    'icon'       => 'el el-chevron-down',
    'desc'       => __( '', 'tb' ),
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'opt-footer-bottom-font-color',
            'type'     => 'color',
            'title'    => __( 'Footer bottom - font color', 'tb' ),
            'subtitle' => __( 'set color for footer bottom.', 'tb' ),
            'default'  => '#FFFFFF',
        ),
    )
) );