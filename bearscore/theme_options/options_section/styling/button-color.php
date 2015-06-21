<?php
Redux::setSection( $opt_name, array(
    'title'      => __( 'Button color', 'tb' ),
    'id'         => 'button-color',
    'icon'       => 'el el-bold',
    'desc'       => __( '', 'tb' ),
    'subsection' => true,
    'fields'     => array(
        // button default
        array(
            'id'       => 'opt-button-default-font-color',
            'type'     => 'color',
            'title'    => __( 'Button default - font color', 'tb' ),
            'subtitle' => __( 'controls the button text color.', 'tb' ),
            'default'  => '#292929',
        ),
        array(
            'id'       => 'opt-button-default-background-color',
            'type'     => 'color',
            'title'    => __( 'Button default - background color', 'tb' ),
            'subtitle' => __( 'controls the button background color.', 'tb' ),
            'default'  => '#FFFFFF',
        ),
        array(
            'id'       => 'opt-button-default-border-color',
            'type'     => 'color',
            'title'    => __( 'Button default - border color', 'tb' ),
            'subtitle' => __( 'controls the button border color.', 'tb' ),
            'default'  => '#AECA0B',
        ),
        array(
            'id'       => 'opt-button-default-font-color-hover',
            'type'     => 'color',
            'title'    => __( 'Button default - font color hover', 'tb' ),
            'subtitle' => __( 'controls the button text color hover.', 'tb' ),
            'default'  => '#FFFFFF',
        ),
        array(
            'id'       => 'opt-button-default-background-color-hover',
            'type'     => 'color',
            'title'    => __( 'Button default - background color hover', 'tb' ),
            'subtitle' => __( 'controls the button background color hover.', 'tb' ),
            'default'  => '#AECA0B',
        ),
        array(
            'id'       => 'opt-button-default-border-color-hover',
            'type'     => 'color',
            'title'    => __( 'Button default - border color hover', 'tb' ),
            'subtitle' => __( 'controls the button border color hover.', 'tb' ),
            'default'  => '#AECA0B',
        ),
        
        // button primary
        array(
            'id'       => 'opt-button-primary-font-color',
            'type'     => 'color',
            'title'    => __( 'Button primary - font color', 'tb' ),
            'subtitle' => __( 'controls the button text color.', 'tb' ),
            'default'  => '#FFFFFF',
        ),
        array(
            'id'       => 'opt-button-primary-background-color',
            'type'     => 'color',
            'title'    => __( 'Button primary - background color', 'tb' ),
            'subtitle' => __( 'controls the button background color.', 'tb' ),
            'default'  => '#AECA0B',
        ),
        array(
            'id'       => 'opt-button-primary-border-color',
            'type'     => 'color',
            'title'    => __( 'Button primary - border color', 'tb' ),
            'subtitle' => __( 'controls the button border color.', 'tb' ),
            'default'  => '#AECA0B',
        ),
        array(
            'id'       => 'opt-button-primary-font-color-hover',
            'type'     => 'color',
            'title'    => __( 'Button primary - font color hover', 'tb' ),
            'subtitle' => __( 'controls the button text color hover.', 'tb' ),
            'default'  => '#292929',
        ),
        array(
            'id'       => 'opt-button-primary-background-color-hover',
            'type'     => 'color',
            'title'    => __( 'Button primary - background color hover', 'tb' ),
            'subtitle' => __( 'controls the button background color hover.', 'tb' ),
            'default'  => '#FFFFFF',
        ),
        array(
            'id'       => 'opt-button-primary-border-color-hover',
            'type'     => 'color',
            'title'    => __( 'Button primary - border color hover', 'tb' ),
            'subtitle' => __( 'controls the button border color hover.', 'tb' ),
            'default'  => '#AECA0B',
        ),
    )
) );