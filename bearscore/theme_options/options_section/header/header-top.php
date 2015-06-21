<?php
Redux::setSection( $opt_name, array(
    'title'      => __( 'Header Top', 'tb' ),
    'id'         => 'header-top',
    'icon'       => 'el el-minus',
    'desc'       => __( '', 'tb' ),
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'otp-header-top',
            'type'     => 'switch',
            'title'    => __( 'Header top', 'tb' ),
            'subtitle' => __( 'enable header top.', 'tb' ),
            'default'  => true,
        ),
    )
) );