<?php
Redux::setSection( $opt_name, array(
    'title'      => __( 'Header main color', 'tb' ),
    'id'         => 'header-main-color',
    'icon'       => 'el el-minus',
    'desc'       => __( '', 'tb' ),
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'opt-header-main-background-color',
            'type'     => 'color_rgba',
            'title'    => __( 'Header background color', 'tb' ),
            'subtitle' => __( 'set color for header background color.', 'tb' ),
            'default'  => array(
                'color' => '#292929',
                'alpha' => '1'
            ),
            //'output'   => array( 'body' ),
            'mode'     => 'background',
            'validate' => 'colorrgba',
        ),
    )
) );