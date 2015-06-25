<?php
Redux::setSection( $opt_name, array(
    'title'      => __( 'Button default', THEMENAME ),
    'id'         => 'button-default',
    'icon'       => 'el el-minus',
    'desc'       => __( '', THEMENAME ),
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'opt-button-default-padding',
            'type'     => 'spacing',
            'output'   => array( '' ),
            'mode'     => 'padding',
            'all'      => false,
            'title'    => __( 'Button padding', THEMENAME ),
            'subtitle' => __( 'top right bottom left.', THEMENAME ),
            'desc'     => __( '', THEMENAME ),
            'default'  => array(
                'padding-top'    => '15px',
                'padding-right'  => '25px',
                'padding-bottom' => '15px',
                'padding-left'   => '25px'
            )
        ),
        array(
            'id'       => 'opt-button-default-border-width',
            'type'     => 'text',
            'title'    => __( 'Border width', THEMENAME ),
            'subtitle' => __('in pixed: Ex 1px 1px 1px 1px.', THEMENAME),
            'default'  => '1px'
        ),
        array(
            'id'       => 'opt-button-border-radius',
            'type'     => 'text',
            'title'    => __('Border radius', THEMENAME),
            'subtitle' => __('in pixed: Ex 1px 1px 1px 1px.', THEMENAME),
            'default'  => '1px'
        ),
    )
) );