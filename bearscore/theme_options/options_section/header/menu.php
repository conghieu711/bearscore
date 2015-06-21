<?php
Redux::setSection( $opt_name, array(
    'title'      => __( 'Menu', 'tb' ),
    'id'         => 'menu',
    'icon'       => 'el el-tasks',
    'desc'       => __( '', 'tb' ),
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'opt-menu-position',
            'type'     => 'select',
            'title'    => __( 'Menu position', 'tb' ),
            'subtitle' => __( 'Select menu position.', 'tb' ),
            'desc'     => __( '', 'tb' ),
            'options'  => array(
                'left' => 'Menu left',
                'right' => 'Menu right',
            ),
            'default'  => 'left'
        ),
        array(
            'id'       => 'opt-menu-uppercase-first-level',
            'type'     => 'switch',
            'title'    => __( 'Menu uppercase - first level', 'tb' ),
            'subtitle' => __( '', 'tb' ),
            'default'  => true,
        ),
        array(
            'id'       => 'opt-menu-height-follow-header-first-level',
            'type'     => 'switch',
            'title'    => __( 'Menu height follow header- first level', 'tb' ),
            'subtitle' => __( '', 'tb' ),
            'default'  => true,
        ),
        array(
            'id'       => 'opt-menu-padding-first-level',
            'type'     => 'spacing',
            'output'   => array( '' ),
            'mode'     => 'padding',
            'all'      => false,
            'title'    => __( 'Menu padding - first level', 'tb' ),
            'subtitle' => __( 'in pixels, top right bottom left.', 'tb' ),
            'desc'     => __( '', 'tb' ),
            'default'  => array(
                'padding-top'    => '0px',
                'padding-right'  => '10px',
                'padding-bottom' => '0px',
                'padding-left'   => '10px'
            )
        ),
        array(
            'id'       => 'opt-menu-margin-first-level',
            'type'     => 'spacing',
            'output'   => array( '' ),
            'mode'     => 'margin',
            'all'      => false,
            'title'    => __( 'Menu margin - first level', 'tb' ),
            'subtitle' => __( 'in pixels, top right bottom left.', 'tb' ),
            'desc'     => __( '', 'tb' ),
            'default'  => array(
                'margin-top'    => '0px',
                'margin-right'  => '0px',
                'margin-bottom' => '0px',
                'margin-left'   => '0px'
            )
        ),
        array(
            'id'       => 'opt-menu-font-size-first-level',
            'type'     => 'text',
            'title'    => __( 'Menu font size - first level', 'tb' ),
            'subtitle' => __( 'in pixed', 'tb' ),
            'default'  => '12px',
        ),
        array(
            'id'       => 'opt-menu-font-size-sub-level',
            'type'     => 'text',
            'title'    => __( 'Menu font size - sub level', 'tb' ),
            'subtitle' => __( 'in pixed', 'tb' ),
            'default'  => '12px',
        ),
        array(
            'id'       => 'opt-menu-icon-font-size',
            'type'     => 'text',
            'title'    => __( 'Menu icon font size', 'tb' ),
            'subtitle' => __( 'in pixed', 'tb' ),
            'default'  => '12px',
        )
    )
) );