<?php
Redux::setSection( $opt_name, array(
    'title'      => __( 'Header Top', THEMENAME ),
    'id'         => 'header-top',
    'icon'       => 'el el-minus',
    'desc'       => __( '', THEMENAME ),
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'otp-header-top',
            'type'     => 'switch',
            'title'    => __( 'Header top', THEMENAME ),
            'subtitle' => __( 'enable header top.', THEMENAME ),
            'default'  => true,
        ),
    )
) );