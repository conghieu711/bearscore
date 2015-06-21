<?php
Redux::setSection( $opt_name, array(
    'title'      => __( 'Content', 'tb' ),
    'id'         => 'content',
    'icon'       => 'el el-indent-left',
    'desc'       => __( '', 'tb' ),
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'opt-content-background',
            'type'     => 'background',
            'output'   => array( '' ),
            'title'    => __( 'Background', 'tb' ),
            'subtitle' => __( 'content background with image, color, etc.', 'tb' ),
            'default'   => array(
                'background-color' => '#FFFFFF'
            ),
        ),
        array(
            'id'       => 'opt-content-margin',
            'type'     => 'spacing',
            'output'   => array( '' ),
            'mode'     => 'margin',
            'all'      => false,
            'title'    => __( 'Content margin', 'tb' ),
            'subtitle' => __( 'in pixels, top lef bottom right.', 'tb' ),
            'desc'     => __( '', 'tb' ),
            'default'  => array(
                'margin-top'    => '0px',
                'margin-left'   => '0px',
                'margin-bottom' => '0px',
                'margin-right'  => '0px',
            )
        ),
    )
) );