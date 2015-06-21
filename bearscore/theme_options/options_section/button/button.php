<?php
Redux::setSection( $opt_name, array(
    'title'      => __( 'Button', 'tb' ),
    'id'         => 'button',
    'icon'       => 'el el-bold',
    'desc'       => __( '', 'tb' ),
    'fields'     => array(
        array(
            'id'       => 'opt-button-font-size',
            'type'     => 'text',
            'title'    => 'Button font size',
            'subtitle' => 'in pixed.',
            'default'  => '12px',
        ),
        array(
            'id'       => 'opt-button-text-uppercase',
            'type'     => 'switch',
            'title'    => __( 'Button text uppercase', 'tb' ),
            'subtitle' => __( 'Enable button uppercase.', 'tb' ),
            'default'  => true,
        ),
    )
) );