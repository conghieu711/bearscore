<?php
Redux::setSection( $opt_name, array(
    'title'      => __( 'Button', THEMENAME ),
    'id'         => 'button',
    'icon'       => 'el el-bold',
    'desc'       => __( '', THEMENAME ),
    'fields'     => array(
        array(
            'id'       => 'opt-button-font-size',
            'type'     => 'text',
            'title'    => __('Button font size', THEMENAME),
            'subtitle' => __('in pixed.', THEMENAME),
            'default'  => '12px',
        ),
        array(
            'id'       => 'opt-button-text-uppercase',
            'type'     => 'switch',
            'title'    => __( 'Button text uppercase', THEMENAME ),
            'subtitle' => __( 'Enable button uppercase.', THEMENAME ),
            'default'  => true,
        ),
    )
) );