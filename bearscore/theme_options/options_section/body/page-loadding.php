<?php
Redux::setSection( $opt_name, array(
    'title'      => __( 'Page loadding', THEMENAME ),
    'id'         => 'page_loadding',
    'icon'       => 'el el-compass',
    'desc'       => __( '', THEMENAME ),
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'opt-page-loadding',
            'type'     => 'switch',
            'title'    => __( 'Page loadding', THEMENAME ),
            'subtitle' => __( 'enable page loadding.', THEMENAME ),
            'default'  => false,
        ),
    )
) );