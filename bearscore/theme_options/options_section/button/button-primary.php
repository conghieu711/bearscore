<?php
Redux::setSection( $opt_name, array(
    'title'      => __( 'Button primary', 'tb' ),
    'id'         => 'button-primary',
    'icon'       => 'el el-minus',
    'desc'       => __( '', 'tb' ),
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'opt-button-primary-padding',
            'type'     => 'spacing',
            'output'   => array( '' ),
            'mode'     => 'padding',
            'all'      => false,
            'title'    => __( 'Button padding', 'tb' ),
            'subtitle' => __( 'top right bottom left.', 'tb' ),
            'desc'     => __( '', 'tb' ),
            'default'  => array(
                'padding-top'    => '15px',
                'padding-right'  => '25px',
                'padding-bottom' => '15px',
                'padding-left'   => '25px'
            )
        ),
        array(
            'id'       => 'opt-button-primary-border-radius',
            'type'     => 'text',
            'title'    => 'Border radius',
            'subtitle' => 'in pixed: Ex 1px 1px 1px 1px.',
            'default'  => '1px'
        ),
    )
) );