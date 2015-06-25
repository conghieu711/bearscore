<?php
Redux::setSection( $opt_name, array(
    'title'      => __( 'Button color', THEMENAME ),
    'id'         => 'button-color',
    'icon'       => 'el el-bold',
    'desc'       => __( '', THEMENAME ),
    'subsection' => true,
    'fields'     => array(
        // button default
        array(
            'id'       => 'opt-button-default-font-color',
            'type'     => 'color',
            'title'    => __( 'Button default - font color', THEMENAME ),
            'subtitle' => __( 'controls the button text color.', THEMENAME ),
            'default'  => '#292929',
        ),
        array(
            'id'       => 'opt-button-default-background-color',
            'type'     => 'color',
            'title'    => __( 'Button default - background color', THEMENAME ),
            'subtitle' => __( 'controls the button background color.', THEMENAME ),
            'default'  => '#FFFFFF',
        ),
        array(
            'id'       => 'opt-button-default-border-color',
            'type'     => 'color',
            'title'    => __( 'Button default - border color', THEMENAME ),
            'subtitle' => __( 'controls the button border color.', THEMENAME ),
            'default'  => '#AECA0B',
        ),
        array(
            'id'       => 'opt-button-default-font-color-hover',
            'type'     => 'color',
            'title'    => __( 'Button default - font color hover', THEMENAME ),
            'subtitle' => __( 'controls the button text color hover.', THEMENAME ),
            'default'  => '#FFFFFF',
        ),
        array(
            'id'       => 'opt-button-default-background-color-hover',
            'type'     => 'color',
            'title'    => __( 'Button default - background color hover', THEMENAME ),
            'subtitle' => __( 'controls the button background color hover.', THEMENAME ),
            'default'  => '#AECA0B',
        ),
        array(
            'id'       => 'opt-button-default-border-color-hover',
            'type'     => 'color',
            'title'    => __( 'Button default - border color hover', THEMENAME ),
            'subtitle' => __( 'controls the button border color hover.', THEMENAME ),
            'default'  => '#AECA0B',
        ),
        
        // button primary
        array(
            'id'       => 'opt-button-primary-font-color',
            'type'     => 'color',
            'title'    => __( 'Button primary - font color', THEMENAME ),
            'subtitle' => __( 'controls the button text color.', THEMENAME ),
            'default'  => '#FFFFFF',
        ),
        array(
            'id'       => 'opt-button-primary-background-color',
            'type'     => 'color',
            'title'    => __( 'Button primary - background color', THEMENAME ),
            'subtitle' => __( 'controls the button background color.', THEMENAME ),
            'default'  => '#AECA0B',
        ),
        array(
            'id'       => 'opt-button-primary-border-color',
            'type'     => 'color',
            'title'    => __( 'Button primary - border color', THEMENAME ),
            'subtitle' => __( 'controls the button border color.', THEMENAME ),
            'default'  => '#AECA0B',
        ),
        array(
            'id'       => 'opt-button-primary-font-color-hover',
            'type'     => 'color',
            'title'    => __( 'Button primary - font color hover', THEMENAME ),
            'subtitle' => __( 'controls the button text color hover.', THEMENAME ),
            'default'  => '#292929',
        ),
        array(
            'id'       => 'opt-button-primary-background-color-hover',
            'type'     => 'color',
            'title'    => __( 'Button primary - background color hover', THEMENAME ),
            'subtitle' => __( 'controls the button background color hover.', THEMENAME ),
            'default'  => '#FFFFFF',
        ),
        array(
            'id'       => 'opt-button-primary-border-color-hover',
            'type'     => 'color',
            'title'    => __( 'Button primary - border color hover', THEMENAME ),
            'subtitle' => __( 'controls the button border color hover.', THEMENAME ),
            'default'  => '#AECA0B',
        ),
    )
) );