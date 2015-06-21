<?php
Redux::setSection( $opt_name, array(
    'title'      => __( 'Logo', 'tb' ),
    'id'         => 'logo',
    'icon'       => 'el el-star-alt',
    'desc'       => __( '', 'tb' ),
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'opt-logo-image',
            'type'     => 'media',
            'url'      => true,
            'title'    => __( 'Logo', 'tb' ),
            'compiler' => 'true',
            'desc'     => __( '', 'tb' ),
            'subtitle' => __( 'seclect an image for your logo.', 'tb' ),
            'default'  => array( 'url' => BEARSCORE_URI . '/assets/images/bears-theme-logo-default.png' ),
        ),
        array(
            'id'       => 'opt-logo-image-retina',
            'type'     => 'media',
            'url'      => true,
            'title'    => __( 'Logo retina', 'tb' ),
            'compiler' => 'true',
            'desc'     => __( '', 'tb' ),
            'subtitle' => __( 'seclect an image for your logo.', 'tb' ),
            'default'  => array( 'url' => BEARSCORE_URI . '/assets/images/bears-theme-logo-retina-default.png' ),
        ),
        array(
            'id'       => 'opt-logo-height',
            'type'     => 'text',
            'title'    => __( 'Logo height' , 'tb'),
            'subtitle' => __( 'in pixed.', 'tb' ),
            'default'  => '100px'
        ),
        array(
            'id'       => 'opt-sticky-logo-height',
            'type'     => 'text',
            'title'    => __( 'Sticky logo height' , 'tb'),
            'subtitle' => __( 'in pixed.', 'tb' ),
            'default'  => '60px'
        )
    )
) );