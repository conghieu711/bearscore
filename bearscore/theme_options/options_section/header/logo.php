<?php
Redux::setSection( $opt_name, array(
    'title'      => __( 'Logo', THEMENAME ),
    'id'         => 'logo',
    'icon'       => 'el el-star-alt',
    'desc'       => __( '', THEMENAME ),
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'opt-logo-image',
            'type'     => 'media',
            'url'      => true,
            'title'    => __( 'Logo', THEMENAME ),
            'compiler' => 'true',
            'desc'     => __( '', THEMENAME ),
            'subtitle' => __( 'seclect an image for your logo.', THEMENAME ),
            'default'  => array( 'url' => BEARSCORE_URI . '/assets/images/bears-theme-logo-default.png' ),
        ),
        array(
            'id'       => 'opt-logo-image-retina',
            'type'     => 'media',
            'url'      => true,
            'title'    => __( 'Logo retina', THEMENAME ),
            'compiler' => 'true',
            'desc'     => __( '', THEMENAME ),
            'subtitle' => __( 'seclect an image for your logo.', THEMENAME ),
            'default'  => array( 'url' => BEARSCORE_URI . '/assets/images/bears-theme-logo-retina-default.png' ),
        ),
        array(
            'id'       => 'opt-logo-height',
            'type'     => 'text',
            'title'    => __( 'Logo height' , THEMENAME),
            'subtitle' => __( 'in pixed.', THEMENAME ),
            'default'  => '100px'
        ),
        array(
            'id'       => 'opt-sticky-logo-height',
            'type'     => 'text',
            'title'    => __( 'Sticky logo height' , THEMENAME),
            'subtitle' => __( 'in pixed.', THEMENAME ),
            'default'  => '60px'
        )
    )
) );